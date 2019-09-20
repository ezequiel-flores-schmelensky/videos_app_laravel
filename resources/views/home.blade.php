@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <ul id="videos-list">
                @foreach($videos as $video)
                    <li class="video-item col-md-4 pull-left">
                        <!-- imagen del video -->
                        <div class="data">
                            <h4>{{$video->title}}</h4>
                        </div>
                        <!-- BOTONES DE ACCIÓN -->
                    </li>
                @endforeach
            </ul>
        </div>

        {{$videos->links()}}

    </div>
</div>
@endsection
