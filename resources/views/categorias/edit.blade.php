@extends('/layouts/app')

<div class="container">
    <form action="{{url('/categorias/'.$categoria->cat_id)}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    {{method_field('PATCH')}}
    <div class="form-group">
    <label for="Nombre" class="control-label">{{'Nombre'}}</label>
    <input type="text" class="form-control" name="cat_nom" id="cat_nom" 
    value="{{$categoria->cat_nom}}">
    
    
    <input type="submit" class="btn btn-success" value="Editar">
    <a href="{{url('categorias')}}" class="btn btn-primary">Regresar</a>
    </form>
    </div>