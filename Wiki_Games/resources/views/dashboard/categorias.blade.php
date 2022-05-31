@extends('dashboard.layouts.main', ['titulo' =>'Categorias'])
@section('contenido')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-blue-900">Categorias</h1>
            <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i 
                class="fas fa-upload fa-sm text-white-90">Agregar Juegos</i></a>
        </div>
    </div>
    <!--MODAL AGREGAR-->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!--Error-->
      @if ($message = Session::get('ErrorInsert'))
        <div class="row alert alert-danger alert-dismissable fade show">
          <h5>Error: {{$message}}</h5>
          <ul>
            @foreach($errors-all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <!-- Caracteristicas del juego --> 
      <form action="/admin/Categorias" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <!--Nombre del juego-->
          <div class="form group">
            <label for="">Nombre del Juego</label>
            <input type="text" class="from-control" placeholder="Nombre Juego" name="Nombre">
          </div>
          <!--Imagen-->
          <div class="form group">
            <label for="">Imagen</label>
            <input type="file" class="from-control" name="img">
          </div>
          <!--Categoria-->
          <div class="form group">
            <label for="">Categoria</label>
            <select name="" id="" class="from-control" name="Categoria">
              @foreach ($categorias as $cate)
                <option> "{{ $cate->id }}" {{ $cate->categoria }} </option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary"> <i><fa class="fa fa-save"></fa></i> Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
   
    <!--MODAL AGREGAR FIN-->
@endsection



<!--<h1>Estas en las categorias</h1>-->