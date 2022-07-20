@extends('/layouts/app')

<div class="container">
<form action="{{url('/tallas')}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="talla_nom" id="talla_nom" 
value="">
<br>
<input type="submit" class="btn btn-success" value="Crear">
<a href="{{url('tallas')}}" class="btn btn-primary">Regresar</a>
</form>
</div>