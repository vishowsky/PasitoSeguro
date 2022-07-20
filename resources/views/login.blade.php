@extends('/layouts/app')

@section('content')

<div class="container login-custom">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 ">

        
        <form class="row g-3" action="login" method="POST">
  <div class="col-auto">
    @csrf
    <label for="staticEmail2" class="visually-hidden">Email</label>
    <input type="text" name="email" class="form-control" id="staticEmail2" placeholder="email@example.com">
  </div>
  <div class="col-auto">
    <label for="inputPassword2" class="visually-hidden">Password</label>
    <input type="password" name="password" class="form-control" id="inputPassword2" placeholder="Password">
  </div>
  <div class="col-auto">
    <br>
    <button type="submit" class="btn btn-primary mb-3">Iniciar sesion</button>
  </div>
</form>
        

        </div>

    </div>


</div>
@endsection