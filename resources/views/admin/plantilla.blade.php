@extends('layouts.admin')

@section('titulo', 'Administracion | Título')
@section('titulo2', 'Administracion | Texto del título')

@section('breadcrumbs')
@endsection

@section('contenido')
@if (Session::has('exito'))
    <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Completado</h5>
                  {{ Session::get('exito')}}
                </div>
                @endif

                @if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> ERROR!</h5>
                  {{ Session::get('error')}}
                </div>
                @endif
@endsection 

@section('scripts')
@endsection

@section('estilos')
@endsection