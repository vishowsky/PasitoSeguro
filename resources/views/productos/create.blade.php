@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
{{ csrf_field()}}
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="producto_nom" id="producto_nom" 
value="">


<div class="form-group">
  <label for="Categoria" class="control-label">{{'Categoria'}}</label>
  <select name="cat_id" id="cat_id" class="form-control">
  <option value="">---Selecciona una Opcion---</option>
  @foreach($categorias as $categoria)
  <option value="{{$categoria['cat_id']}}">{{$categoria['cat_nom']}}</option>
  @endforeach
  </select>
  </div>

<div class="form-group">
<label for="Precio" class="control-label">{{'Precio'}}</label>
<br>
<input type="number" name="producto_prec" id="producto_prec">


</div>

<div class="form-group">
    <label for="Stock" class="control-label">{{'Stock'}}</label>
    <br>
    <input type="number" name="producto_stock" id="producto_stock">
    
    
    </div>
<div class="form-group">
  <label for="Talla" class="control-label">{{'Talla'}}</label>
  <select name="talla_id" id="talla_id" class="form-control">
  <option value="">---Selecciona una Opcion---</option>
  @foreach($tallas as $talla)
  <option value="{{$talla['talla_id']}}">{{$talla['talla_nom']}}</option>
  @endforeach
  </select>
  </div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
<input type="file" class="form-control" name="producto_img" id="card_img" value="">

</div>

<div class="form-group">
    <label for="Descripcion" class="control-label">{{'Descripcion'}}</label>
    <input type="text" class="form-control" name="producto_desc" id="producto_desc" 
    value="">
    

<input type="submit" class="btn btn-primary" value="crear">
<a href="{{url('productos')}}" class="btn btn-light">Regresar</a>
</form>
</div>
@endsection