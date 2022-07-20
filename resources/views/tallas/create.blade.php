@extends('/layouts/app')
@section('content')

<style>

.card{
    width: 25rem;
    padding: 50px;
    margin: 50px 25% 100px 35%;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);



.boton{
    margin:10px

}

.card-title{

    margin:3px;
}
</style>


<div class="container card">
<h3 class="card-name">Agregar talla</h3>
    <div class="card-body">
        <form action="{{url('/tallas')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            <div class="form-group">
                <label for="Nombre" class="control-label">{{'Nombre'}}</label>
                <input type="text" class="form-control" name="talla_nom" id="talla_nom" value="">
                <br>
                <input type="submit" class="btn btn-success" value="Crear">
                <a href="{{url('tallas')}}" class="btn btn-primary">Regresar</a>
        </form>
    </div>
</div>



@endsection