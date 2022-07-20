@extends('/layouts/app')

@section('content')

<div class="container login-custom">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 ">

        
        <form class="row g-3" action="register" method="POST">
    @csrf            

    <div class="col-auto">
   
    <label for="rut" class="visually-hidden">rut</label>
    <input type="text" name="rut" class="form-control" id="rut" placeholder="11111111-1">
    </div>

    <label for="nombre" class="visually-hidden">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    
    <label for="apellido" class="visually-hidden">Apellido</label>
    <input type="text" name="apellido" class="form-control" id="nombre" placeholder="apellido">
    </div>

    <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="email" name="email" class="form-control" id="staticEmail2" placeholder="email@example.com">
    </div>

  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Contraseña</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>

  <div class="col-auto">
    <br>
    <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
  </div>
</form>
        

        </div>

    </div>


</div>
@endsection