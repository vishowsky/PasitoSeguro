@extends('/layouts/app')

@section('content')
<style>
.card {
    text-align: center;
    width: 21rem;
    margin:20px 30% 50px 35%;

}

.barra {

    margin: 3px;
    width: 17rem;

}
</style>


<div class="container card">
    <H3 class="card-title">Registro</H3>
    <div class="card-body">
       


            <form class="row g-3" action="register" method="POST">
                @csrf

                    <div class="col-auto">
                        <label for="rut" class="visually-hidden">rut</label>
                        <input type="text" name="rut" class="form-control barra" id="rut" placeholder="11111111-1">
                    </div>
                    <div class="col-auto">
                        <label for="nombre" class="visually-hidden">Nombre</label>
                        <input type="text" name="nombre" class="form-control barra" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-auto">
                        <label for="apellido" class="visually-hidden">Apellido</label>
                        <input type="text" name="apellido" class="form-control barra" id="nombre"
                            placeholder="apellido">
                    </div>

                    <div class="col-auto">
                        <label for="staticEmail2" class="visually-hidden">Email</label>
                        <input type="email" name="email" class="form-control barra" id="staticEmail2"
                            placeholder="email@example.com">
                    </div>

                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Contraseña</label>
                        <input type="password" name="password" class="form-control barra" id="inputPassword2"
                            placeholder="Password">
                    </div>

                    <div class="col-auto">
                        <br>
                        <button type="submit" class="btn btn-primary mb-3">Crear cuenta</button>
                        <a href="{{ url('/login/') }}" type="submit" class="btn btn-primary mb-3">Volver</a>

                    </div>
            </form>


        </div>

    </div>


</div>
@endsection