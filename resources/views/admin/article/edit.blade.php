@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1 class="text-uppercase">Update ({{app()->getLocale()}})</h1>
                <div class="top-right-button-container">
                    <a href="{{route('article.index')}}" class="btn btn-primary btn-lg top-right-button mr-1">BACK</a>
                </div>
            </div>
            <div class="separator mb-5"></div>
        </div>
    </div>
    <form action="{{ route('article.update',$result->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card">
            <div class="card-body" id="english-form">
                <div class="form-group">
                    <label class="required" for="title">{{ trans('forms.article.title') }} </label>
                    <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ $result->title }}" required>
                    @if($errors->has('en_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="full_text">{{ trans('forms.article.full_text') }}</label>
                    <textarea  class="form-control {{ $errors->has('full_text') ? 'is-invalid' : '' }}" name="full_text" id="ckEditorClassic">{{ $result->full_text }}</textarea>
                    @if($errors->has('full_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('full_text') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </form>
@endsection
