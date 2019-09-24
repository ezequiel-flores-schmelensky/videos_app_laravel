<hr/>
    <h4>Comentarios</h4>
<hr/>

@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

@if(Auth::check())
<form action="{{url('/comment') }}" method="POST" class="col-md-4">
    {!! csrf_field() !!}
    <input type="hidden" name="video_id" value="{{ $video->id }}" required />
    <p>
        <textarea class="form-control" name="body" required></textarea>
    </p>
    <input type="submit" value="Comentar" class="btn btn-success"/>
</form>
<div class="clearfix"></div>
<hr/>
@endif

@if(isset($video->comments))
    <div id="comments-list">
        @foreach($video->comments as $comment)
            <div class="comment-item col-md-12 pull-left">
                <div class="panel panel-default comment-data">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>{{ $comment->user->name.' '.$comment->user->surname}}</strong> {{ \FormatTime::LongTimeFilter($comment->created_at) }}
                        </div>
                    </div>
                    <div class="panel-body">
                        {{ $comment->body }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif