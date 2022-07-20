<?php
use App\Http\Controllers\ProductoController;
$total=0;
if(Session::has('user'))
{
$total= ProductoController::productosCarro();
}
?>
<style>
.navbar-principal{
  background-color: #fed2e5;
}
a{
  text-decoration: none;
  
}
.searchbar{
  searchbar{
    backgroud-co;
  } 
}
.titulo:{
  text-color:white;
}
</style>


<nav class="navbar navbar-principal" >
  <div class="container-fluid">
    <a class="navbar-brand titulo">Pasito Seguro</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2 searchbar" type="search" placeholder="Search" aria-label="Search">
      <button class="btn" type="submit">Buscar</button>
    </form>

    <div class="d-flez">
   
    @if(session::has('user'))
      <a>{{Session::get('user')['nombre']}}</a>
      <a class="btn" href="/logout">Cerrar sesion</a>
      @else
      <a class="btn" href="/login">Iniciar sesion</a>
      @endif
      <a class="btn" href="/listar_Carro">Carro({{$total}})</a>
      </div>

  </div>
</nav>



<!-- 
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pasito seguro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pedidos</a>
        </li>

        <li>

        <form class="d-flex" role="search" action="/productos/buscar">
        <input  name="query" class="form-control search-box" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">buscar</button>
      </form>
        </li>

       <li>
       
        <a href="/listar_Carro">Carro({{$total}})</a>
       </li>

      <li>
      @if(session::has('user'))
      <a>{{Session::get('user')['nombre']}}</a>
      <a href="/logout">Cerrar sesion</a>
      @else
      <a href="/login">Iniciar sesion</a>
      @endif

      </li>
       
      </ul>

        
     

    </div>
  </div>
</nav> -->