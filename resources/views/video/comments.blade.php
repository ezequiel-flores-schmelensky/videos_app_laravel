<hr/>
    <h4>Comentarios</h4>
<hr/>

@if(session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<form action="{{url('/comment') }}" method="POST" class="col-md-4">
    {!! csrf_field() !!}
    <input type="hidden" name="video_id" value="{{ $video->id }}" required />
    <p>
        <textarea class="form-control" name="body" required></textarea>
    </p>
    <input type="submit" value="Comentar" class="btn btn-success"/>
</form>