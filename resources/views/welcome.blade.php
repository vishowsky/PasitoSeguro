@extends('/layouts/app')
@section('content')

<style>
    .card{

        margin:50px;
        text-align:center;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);

    }

    .iconos{
        font-size:40px;
    

    }
    .card-deck{
        margin: 30px;
    }
  


</style>

<div class="card-deck">
  <div class="card">
    <div class="card-body">
    <p><i class="fa-solid fa-c iconos fa-lg"></i></p>
      <h5 class="card-title">Administrar Categorias</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar categorias</p>
      <a class=" btn btn-danger"href="{{ url('/categorias/') }}">Ver Categorias</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <p><i class="fa-solid fa-t iconos fa-lg"></i></p>
    <h5 class="card-title">Administrar Tallas</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar tallas</p>
      <a class=" btn btn-danger"href="{{ url('/tallas/') }}">Ver Tallas</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <p><i class="fa-solid fa-p iconos fa-lg"></i></p>
    <h5 class="card-title">Administrar Productos</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar Productos</p>
      <a class=" btn btn-danger"href="{{ url('/productos/') }}">Ver Productos</a>
    </div>
  </div>
</div>








@endsection