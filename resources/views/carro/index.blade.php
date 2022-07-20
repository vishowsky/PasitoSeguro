@extends('/layouts/app')
@section("content")

<div class="trending-weapper">
    <h3>Tu carro</h3>
@foreach($productos as $item)
    <a href="/detalle/{{$item->producto_id}}">
        <div class="col-xs-12 col-sm-12 col-md-6 " >

            <img class=" img-fluid left"  src="{{asset('storage').'/'.$item->producto_img}}"  width="200">
            </div>
        </div>
  
    </a>
    <h3>{{$item->producto_nom}}</h3>
    <h2>{{$item->producto_desc}}</h2>
    <h2>{{$item->producto_prec}}</h2>


    <a href="/quitarproducto/{{$item->carroId}}" class="btn btn-primary">Quitar del carro</a>
    
    
   </form> @endforeach


</div>
<a class="btn btn-primary" href="comprar">comprar</a>

@endsection