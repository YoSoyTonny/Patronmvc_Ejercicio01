@extends('layouts.admin')

@section('titulo', 'Administracion | Título')
@section('titulo2', 'Administracion | Liasta de noticias')

@section('breadcrumbs')
@endsection

@section('contenido')


<div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
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
        <div class="card">
            <div class="card-header">
    
            <h3 class="card-header">Lista de noticias</h3>
    
            </div>
            <div class="card-body">
            <a href="{{route('noticias.create')}}" class="btn btn-primary"> <i class="fas fa-plus"></i>  Agregar noticia </a>
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
                
               
              
                <a href="{{route('noticias.show', $noticia->id)}}" class="btn btn-primary"><i class="fas fa-eye"></i> </a>
                <a href="{{route('noticias.edit', $noticia->id)}}" class="btn btn-primary"><i class="fas fa-edit"></i> </a>
                <a href="javascript:;" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" type="button" onclick="deleteData({{$noticia->id}})"> <i class="fas fa-times"></i> </a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form action="post" id="deleteForm" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar noticia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
                @csrf
                @method('DELETE')
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="formSubmit()">muy seguro</button>
      </div>
    </div>
    </form>
  </div>
</div>

@endsection 

@section('scripts')
<script>$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})</script>

<script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("noticias.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection

@section('estilos')
@endsection