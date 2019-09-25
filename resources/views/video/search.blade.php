@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="col-md-4">
                    <h2>Busqueda: {{ $search }}</h2>
                    <br/>
                </div>

                <div class="col-md-8">
                    <form action="{{ url('/buscar/'.$search) }}" class="col-md-4 pull-right" method="get">
                        <label for="filter">Ordenar</label>
                        <select name="filter" id="" class="form-control">
                            <option value="new">Más nuevos primero</option>
                            <option value="old">Más antiguos primero</option>
                            <option value="alfa">De la A a la Z</option>
                        </select>
                        <input type="submit" value="Ordenar" class="btn-filter btn btn-sm btn-primary"/>
                    </form>
                </div>

                <div class="clearfix"></div>
                @include('video.videoList')
            </div>
        </div>
    </div>
@endsection