@extends('admin')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="mb-2">
                <h1>Pages</h1>
                <div class="top-right-button-container">
                    <a href="{{route('page.create')}}" class="btn btn-primary btn-lg top-right-button mr-1">ADD NEW</a>
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
                                <a class="list-item-heading mb-0 truncate w-40 w-xs-100" href="{{route('page.edit',$item->id)}}">
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
            {{ $result->links() }}
        </div>
    </div>
@endsection
