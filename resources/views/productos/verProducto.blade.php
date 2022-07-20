@extends('/layouts/app')

@section("content")
<div class="row">
@foreach($productos as $producto)
<div class="col-xs-12 col-sm-12 col-md-6 " >

    <img class=" img-fluid left"  src="{{asset('storage').'/'.$producto->producto_img}}"  width="200">
    </div>
</div>
<div class="right">
    



    <div class="col-xs-12 col-sm-12 col-md-6">
    <div class=""><h5 class="card-title">{{$producto->producto_nom}}</h5> </div>


    <div class="form-group row">
    
    <div class="col-sm-10">
    <h6 class="form-control-plaintext">Precio: ${{$producto->producto_prec}}</h6>
    </div>
    </div>

    <div class="form-group row">
    <div class="col-sm-10">
    <h6 class="form-control-plaintext">Stock: {{$producto->producto_stock}}</h6>
    </div>
    </div>

    <div class="form-group row">
    
    <div class="col-sm-10">
    <h6 class="form-control-plaintext">Descripcion: {{$producto->producto_desc}}</h6>
    </div>
    </div>

    <div class="form-group row">
    
    <div class="col-sm-10">
    <h6 class="form-control-plaintext">Talla: {{$producto->talla_nom}}</h6>
    </div>
    </div>
    <div class="form-group row">
    
        <div class="col-sm-10">
        <h6 class="form-control-plaintext">Categoria: {{$producto->cat_nom}}</h6>
        </div>
        </div>
  
</div>
</div>
</div>
<form action="/agregar_Al_Carro" method="POST">
    @csrf
        <input type="hidden" name="producto_id" value="{{$producto->producto_id}}">
        
        <input type="hidden" name="producto_prec" value="{{$producto->producto_prec}}">
        <button class="btn btn-primary">Agregar al carro</button>
   </form>

@endforeach

@endsection

