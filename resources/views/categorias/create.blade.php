@extends('/layouts/app')

<div class="container">
<form action="{{url('/categorias')}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="cat_nom" id="cat_nom" 
value="">
<br>
<input type="submit" class="btn btn-success" value="Crear">
<a href="{{url('categorias')}}" class="btn btn-primary">Regresar</a>
</form>
</div>