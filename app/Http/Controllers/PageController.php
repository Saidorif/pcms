<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Validator;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->has('limit') ? $request->input('limit') : 20;
        $result = Page::orderBy('id','DESC')->paginate($limit);
        return view('admin.page.index')->with('result',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:pages|max:255',
            'title' => 'required|string',
            'text' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,svg',
        ]);

        if ($validator->fails()) {
            return redirect('page/create')->withErrors($validator)->withInput();
        }
        $locale = app()->getLocale();
        $inputs[$locale] = $request->all();
        $page = Page::create($inputs[$locale]);
        return redirect()->route('page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Page::findOrFail($id);
        return view('admin.page.edit')->with('result',$result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = Page::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'slug' => 'required|max:255|unique:pages,slug,'.$id,
            'title' => 'required|string',
            'text' => 'required|string',
            'meta_title' => 'nullable|string',
            'meta_description' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,svg',
        ]);

        if ($validator->fails()) {
            return redirect('page/'.$id.'/edit')->withErrors($validator)->withInput();
        }
        $locale = app()->getLocale();
        $inputs[$locale] = $request->all();
        $result->update($inputs[$locale]);
        return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
