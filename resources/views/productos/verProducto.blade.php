@extends('/layouts/app')

@section("content")

<style>
.card {
    width: 35rem;
    margin: 50px 25% 30px 30%
}
</style>


@foreach($productos as $producto)
<div class="card">
    <div class="card-body">
        <div >
            <div style="float:left;" class=" ">

                <img class=" img-fluid left" src="{{$producto->producto_img}}" width="300">
            </div>
        </div>

        <div class="">
            <div>
                <div class="">
                    <h3 class="card-title">{{$producto->producto_nom}}</h5>
                </div>


                <div class="form-group row">

                    <div class="col-sm-10">
                        <h6 class="form-control-plaintext">Precio: ${{$producto->producto_prec}}</h6>
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

                <form action="/agregar_Al_Carro" method="POST">
                    @csrf
                    <input type="hidden" name="producto_id" value="{{$producto->producto_id}}">

                    <input type="hidden" name="producto_prec" value="{{$producto->producto_prec}}">
                    <button class="btn btn-primary">Agregar al carro</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endforeach

</div>

@endsection