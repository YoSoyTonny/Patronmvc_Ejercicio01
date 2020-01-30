@extends('layouts.admin')

@section('titulo', 'Administracion | Título')
@section('titulo2', 'Administracion | Liasta de noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
    
            <h3 class="card-header">Lista de noticias</h3>
    
            </div>
            <div class="card-body">
            <button class="btn btn-primary"> <i class="fas fa-plus"></i>  Agregar noticia </button>
            <table class="table">
                <thead>
                <tr>
                <th>Noticia</th>
                <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <!--Aqui van las noticias prro --> 
                @foreach($noticias as $noticia)
                <tr>
                <td>{{$noticia->titulo}}</td>
                <td>
                <button class="btn btn-primary"> <i class="fas fa-eye"></i> </button>
                <button class="btn btn-primary"> <i class="fas fa-edit"></i> </button>
                <button class="btn btn-danger"> <i class="fas fa-times"></i> </button>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
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