@extends('/layouts/app')
@section('content')

<style>
    .card{
        width: 25rem;
        padding: 50px;
        margin:50px 25% 100px 35%;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);

    }

</style>

<div>

<div class="card">
<h3 class="card-title" href="">Agregar categoria</h3>
<div class="card-body container">
<form action="{{url('/categorias')}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="cat_nom" id="cat_nom" 
value="" placeholder="Ejemplo: juguetes">
<br>
<input type="submit" class="btn btn-success" value="Agregar">
<a href="{{url('categorias')}}" class="btn btn-primary">Regresar</a>
</form>
</div>
</div>
</div>
@endsection