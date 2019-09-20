@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"></div>
        <h2>Crear un nuevo video</h2>
        <form action="" method="post" enctype="multipart/form-data" class="col-lg-7">
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <textarea class="form-control" id="description" name="title"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Miniatura</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="video">Archivo de video</label>
                <input type="file" class="form-control" id="video" name="video">
            </div>
            <button type="submit" class="btn btn-success">Crear video</button>
        </form>
    </div>
@endsection