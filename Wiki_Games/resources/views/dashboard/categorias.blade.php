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
      <form action="">
      <div class="modal-body">
         <!-- Caracteristicas del juego --> 
                    <!--Nombre del juego-->
                    <div class="form group">
                      <label for="">Nombre del Juego</label>
                      <input type="text" class="from-control" placeholder="Nombre Juego">
                  </div>
                        <!--Categoria-->
                  <div class="form group">
                    <label for="">Categoria</label>
                    <select name="" id="" class="from-control">
                      @foreach ($categorias as $cate)
                          <option> {{ $cate->categoria }} </option>
                      @endforeach
                    </select>
                </div>
                        <!--Imagen-->
                <div class="form group">
                    <label for="">Imagen</label>
                    <input type="file" class="from-control">
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
   
    <!--MODAL AGREGAR FIN-->
@endsection



<!--<h1>Estas en las categorias</h1>-->