@extends('/layouts/app')

@section('content')


<style>
.card{

    margin:10px;
}

</style>


<!-- <table class="table table-light table-hover">
    <tbody class="thead-light">






        <tr>
            <th>#</th>
      
            <th>Categoria</th>
            <th>Talla</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Información</th>
           


        </tr>
    </tbody> -->

<!-- <tbody> -->
<div style>
<h2>Productos disponibles</h2>
<br>
@foreach($productos as $producto)


<div class="card" style="width: 18rem; float: left;">
    <img class="card-img-top" src="{{$producto->producto_img}} " alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$producto->producto_nom}} </h5>
        <p class="card-text">{{$producto->producto_desc}} </p>
        <td> <a href="{{url('/productos/'.$producto->producto_id.'/verProducto')}}"
                class="btn btn-primary form-control">Ver</a> </td>
    </div>
</div>
<tr>
    <!--           
            <td>{{$producto->producto_id}}
            <td></td>
            <td>{{$producto->talla_nom}} </td>
            <td></td>
            <td>{{$producto->producto_prec}} </td>
            <td>{{$producto->producto_stock}} </td>
          
        </tr> -->
    @endforeach
    <!-- </tbody>
</table>


</div> -->
<div style="float: inline">

</div>

</div>
    @endsection