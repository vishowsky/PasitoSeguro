@extends('/layouts/app')
@section("content")


<!-- <style>
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
                <td></td>
                <td>{{$item->producto_nom}}</td>
                <td>{{$item->producto_desc}}</td>
                <td>{{$item->producto_prec}}</td>
            </tr>
        </tbody>
        @endforeach
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>    total:
</td>
            </tr>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td> {{$total}}
</td>
            </tr>
    </table>
    <a class="btn btn-primary" href="iniciar_compra">comprar</a>
</div>
</div> -->
<div>
{{$total}}

<a class="btn btn-primary" href="iniciar_compra">comprar</a>



@endsection