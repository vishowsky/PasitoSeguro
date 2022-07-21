@extends('/layouts/app')
@section('content')



<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Administrar Categorias</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar categorias</p>
      <a class=" btn"href="{{ url('/categorias/') }}">Ver Categorias</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <h5 class="card-title">Administrar Tallas</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar tallas</p>
      <a class=" btn"href="{{ url('/tallas/') }}">Ver Categorias</a>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
    <h5 class="card-title">Administrar Productos</h5>
      <p class="card-text">Seccion dedicada para modificar, eliminar y agregar Productos</p>
      <a class=" btn"href="{{ url('/categorias/') }}">Ver Categorias</a>
    </div>
  </div>
</div>








@endsection