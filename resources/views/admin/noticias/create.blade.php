@extends('layouts.admin')

@section('titulo', 'Administracion | Crear noticia')
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
            <h3 class="card-header">Crear noticia</h3>
        </div>
        <div class="card-body">

                    <form method="POST" action="{{route('noticias.store')}}">

                        @csrf
                        <div class="form-grupo">
                            <label>Título</label>
                            <input type="text" name="txtTitulo" class="form-control"/>
                        </div>

                        <div class="form-group">
                        <label>Cuerpo</label>
                        <textarea class="form-control" name="txtCuerpo" rows="7"></textarea>
                        </div>

                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
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