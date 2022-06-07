@extends('dashboard.layouts.main', ['titulo' =>'Categorias'])
@section('contenido')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-blue-900">Categorias</h1>
            <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal" class="d-none d-sm-inline-block btn-sm btn-primary shadow-sm"><i 
                class="fas fa-upload fa-sm text-white-90">Agregar Juegos</i></a>
        </div>
    </div>
    <!-- SUCCESO -->
    @if($message = Session::get('Listo'))
      <div class="row alert alert-success fade show">
        <h5 class="col-12"><i class="fa fa-check"></i></h5>
        <br>
        <br>
        <p>{{ $mensaje }}</p>
      </div>
      @endif
      <!-- IMPRIMIR JUEGOS -->
      <div class="row col-12">
        @foreach($categorias as $Wiki)
        <div class="card col-2">
          <img class="card-img-top" src="{{ asset('/img'.$categorias->img)}}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$categorias->$wiki}}</h5>
            <p class="card-text">{{$categorias->$nombre}}</p>
            <a href="#" class="btn btn-primay"> Go somewhere</a>
          </div>
        </div>
        @endforeach
      </div>
      <!--Error-->
      @if ($message = Session::get('ErrorInsert'))
        <div class="row alert alert-danger alert-dismissable fade show">
          <h5>Error: {{$message}}</h5>
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

    <!--MODAL AGREGAR-->
    <div class="row">
      @foreach($categorias as $Wiki)
        <div class="card col-3">
          <img src="{{ asset('/img/'. $Wiki->img) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $Wiki->categoria }}</h5>
            <p class="card-text">{{ $Wiki->categoria }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      @endforeach
    </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="row">
      <!-- Caracteristicas del juego --> 
      <form action="/admin/categorias" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
          <!--Nombre del juego-->
          <div class="form group">
            <label for="">Nombre del Juego</label>
            <input type="text" class="from-control col-12" placeholder="Nombre Juego" name="nombre" value="{{ old('name') }}">
          </div>
          <!--Imagen-->
          <div class="form group">
            <label for="">Imagen</label>
            <input type="file" class="from-control col-12" name="img" value="{{ old('img') }}>
          </div>
          <!--Categoria-->
          <div class="form group">
            <label for="">Categoria</label>
            <select  id="" class="from-control col-12" name="categorias" value="{{ old('categorias') }}>
              @foreach ($categorias as $cate)
                <option value="{{ $cate->id }}">  {{ $cate->categoria }} </option>
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