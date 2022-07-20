
@extends('/layouts/app')



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
            <td> <a href="{{url('/productos/'.$producto->producto_id.'/verProducto')}}"class="btn btn-primary form-control" >Ver</a> </td>
          
        </tr>
        @endforeach
    </tbody>
</table>


</div>
