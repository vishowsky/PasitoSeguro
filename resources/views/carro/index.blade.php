@extends('/layouts/app')
@section("content")

<style>
.card{

    margin: 10px 2% 50px 2%;
}

</style>


<div class="card">
<h3 style="text-align:center;">Tu carro</h3>
    <div class="card-body">
 

    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Producto</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
            </tr>
        </thead>

        @foreach($productos as $item)
        <tbody>
            <tr>
                <td><img class=" img-fluid left" src="{{$item->producto_img}}" width="30"></td>
                <td>{{$item->producto_nom}}</td>
                <td>{{$item->producto_desc}}</td>
                <td>{{$item->producto_prec}}</td>
                <td><a href="/quitarproducto/{{$item->carroId}}" class="btn btn-danger"> Quitar producto</a></td>
            </tr>
        </tbody>

        @endforeach

    </table>
    <a style="text-align:center;" class="btn btn-primary" href="comprar">comprar</a>
</div>
</div>









@endsection