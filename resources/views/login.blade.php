@extends('/layouts/app')

@section('content')
<style>
.card-title{
  margin-top:3px;
}
.card{
  text-align:center;
  width:21rem;
  margin: 50px 30% 160px 35%;

}

.coso{
  margin:5px;
  width:17rem;
}


</style>
<div class="container">
    <div class="card">
      <h3 class="card-title" >Iniciar sesion</h3>
        <div class="card-body ">


            <form  action="login" method="POST">
                <div class="col-auto">
                    @csrf
                    <label for="staticEmail2" class="visually-hidden">Email</label>
                    <input type="text" name="email" class="form-control coso" id="staticEmail2"
                        placeholder="email@example.com">
                </div>
                <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" name="password" class="form-control coso" id="inputPassword2"
                        placeholder="Password">
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