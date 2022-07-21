
@extends('/layouts/app')
@section('content')

<style>

.card{
    box-shadow: 1px 1px 2px 1px rgba(0, 0, 0, 0.2);

    margin-top:30px;
    margin-bottom:600px;
}


.boton{
    margin:10px

}

.card-title{

    margin:3px;
}
</style>

<div class="container card">
<h3 class="card-title" >Listado de productos</h3>
<div class="card-body">



<table class="table table-light table-hover">
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
    </tbody>

    <tbody>
        @foreach($productos as $producto)
    
        <tr>
            
          
            <td>{{$producto->producto_id}}
            <td>{{$producto->cat_nom}} </td>
            <td>{{$producto->talla_nom}} </td>
            <td>{{$producto->producto_nom}} </td>
            <td>{{$producto->producto_prec}} </td>
            <td>{{$producto->producto_stock}} </td>
            <!-- <td> <a href="{{url('/productos/'.$producto->producto_id.'/verProducto')}}"class="btn btn-primary form-control" >Ver</a> </td> -->
          
            <td> 
                <form method="post" action="{{url('/productos/'.$producto->producto_id)}} " style="display:inline" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn"onclick="return confirm('¿Borrar?');"><i class="fa-solid fa-delete-left"></i></button>
                <a href="{{url('/productos/'.$producto->producto_id.'/verProducto')}}"class="btn" ><i class="fa-solid fa-magnifying-glass"></i></a> </td>

        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{url('productos/create')}}" class="btn btn-success boton">Agregar producto</a>


</div>
</div>
</div>
@endsection