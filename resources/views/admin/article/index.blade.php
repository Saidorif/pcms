@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Articles</h1>
                <div class="top-right-button-container">
                    <a href="{{route('article.create')}}" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</a>
                </div>
            </div>
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 list" data-check-all="checkAll">
            @if(count($result) > 0)
                @foreach($result as $item)
            <div class="card d-flex flex-row mb-3">
                <div class="d-flex flex-grow-1 min-width-zero">
                    <div
                        class="card-body align-self-center d-flex flex-column flex-md-row justify-content-between min-width-zero align-items-md-center">
                        <a class="list-item-heading mb-0 truncate w-40 w-xs-100" href="{{route('article.edit',$item->id)}}">
                            {{$item->title}}
                        </a>
                        <p class="mb-0 text-muted text-small w-15 w-xs-100">{{$item->created_at}}</p>
                        <div class="w-15 w-xs-100">
                            <span class="badge badge-pill badge-secondary">ON HOLD</span>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            @endif

{{--            <nav class="mt-4 mb-3">--}}
{{--                <ul class="pagination justify-content-center mb-0">--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link first" href="#">--}}
{{--                            <i class="simple-icon-control-start"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link prev" href="#">--}}
{{--                            <i class="simple-icon-arrow-left"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item active">--}}
{{--                        <a class="page-link" href="#">1</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link" href="#">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#">3</a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link next" href="#" aria-label="Next">--}}
{{--                            <i class="simple-icon-arrow-right"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="page-item ">--}}
{{--                        <a class="page-link last" href="#">--}}
{{--                            <i class="simple-icon-control-end"></i>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
    </div>
@endsection
