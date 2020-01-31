@extends('layouts.admin')

@section('titulo', 'Administracion | editar noticia')
@section('titulo2', 'Administracion | Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<p>Hola mundo</p>

<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-header">Editar noticia: {{$noticia->id}}</h3>
        </div>
        <div class="card-body">

                    <form method="POST" action="#">

                        @csrf
                        <div class="form-grupo">
                            <label>Título</label>
                            <input type="text" name="txtTitulo" class="form-control" value="{{$noticia->titulo}}"/>
                        </div>

                        <div class="form-group">
                        <label>Cuerpo</label>
                        <textarea class="form-control" name="txtCuerpo" rows="7">{{$noticia->cuerpo}}</textarea>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('scripts')
@endsection

@section('estilos')
@endsection