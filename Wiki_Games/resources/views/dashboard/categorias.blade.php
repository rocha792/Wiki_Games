@extends('dashboard.layouts.main', ['titulo' =>'Categorias'])
@section('contenido')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-blue-900">Categorias</h1>
            <a href="#" data-toggle="modal" data-target="#modalAdd" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i 
                class="fas fa-upload fa-sm text-white-90">Agregar Juegos</i></a>
        </div>
    </div>
    <!--MODAL AGREGAR-->

    <form action="">

    <div class="modal" tabindex="-1" role="dialog" id="modalAdd">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Agregar Juegos</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
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
                      <option> {{ $cate->categorias }} </option>
                  @endforeach
                </select>
            </div>
                    <!--Imagen-->
            <div class="form group">
                <label for="">Imagen</label>
                <input type="file" class="from-control">
            </div>
            <!-- Fin de Las Caracteristicas del juego -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Guardar Juegos</button>
            </div>
    </form>
          </div>
        </div>
      </div>
    <!--MODAL AGREGAR FIN-->
@endsection



<!--<h1>Estas en las categorias</h1>-->