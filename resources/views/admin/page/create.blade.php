@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1 class="text-uppercase">New ({{app()->getLocale()}})</h1>
                <div class="top-right-button-container">
                    <a href="{{route('page.index')}}" class="btn btn-primary btn-lg top-right-button mr-1">BACK</a>
                </div>
            </div>
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <form action="{{ route('page.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body" id="english-form">
                <div class="form-group">
                    <label class="required" for="title">{{ trans('forms.article.title') }} </label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', '') }}">
                </div>
                <div class="form-group">
                    <label for="meta_title">Meta title</label>
                    <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ old('meta_title', '') }}">
                </div>
                <div class="form-group">
                    <label for="meta_description">Meta description</label>
                    <textarea type="text" class="form-control" name="meta_description" id="meta_description">{{ old('meta_description') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="text">{{ trans('forms.article.text') }}</label>
                    <textarea  class="form-control" name="text" id="ckEditorClassic">{{ old('text') }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
