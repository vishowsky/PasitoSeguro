@extends('/layouts/app')


@section('content')



<style>
.card {
    width: 25rem;
    padding: 50px;
    margin: 50px 25% 100px 35%;
    box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);}
.boton{
    margin: 10px
}

</style>


<div class="card">
<h3 class="card-title" href="">Modificar categoria</h3>
    <div class="container card-body">
       

        <form action="{{url('/categorias/'.$categoria->cat_id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field()}}
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="Nombre" class="control-label">{{'Nombre'}}</label>
                <input type="text" class="form-control" name="cat_nom" id="cat_nom" value="{{$categoria->cat_nom}}">

                <input  type="submit" class="btn btn-success boton" value="Editar">
                <a  href="{{url('categorias')}}" class="btn btn-primary boton">Regresar</a>
        </form>
    </div>
</div>
</div>
@endsection