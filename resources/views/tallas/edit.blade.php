@extends('/layouts/app')

<div class="container">
    <form action="{{url('/tallas/'.$talla->talla_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="talla_nom" id="talla_nom" 
    value="{{$talla->talla_nom}}">
    
    
    <input type="submit" class="btn btn-success" value="Editar">
    <a href="{{url('tallas')}}" class="btn btn-primary">Regresar</a>
    </form>
    </div>