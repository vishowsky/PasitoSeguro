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
<h3 class="card-title" >Listado de categorias</h3>
<div class="card-body">


<div clas>
<table class="table table-light table-hover">
    <tbody class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Acciones</th>


        </tr>
    </tbody>

    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{$loop->iteration}}</td>

          
            <td>{{$categoria->cat_nom}} </td>
            <td>
                <a class="btn btn-confirm" href="{{url('/categorias/'.$categoria->cat_id.'/edit')}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <form method="post" action="{{url('/categorias/'.$categoria->cat_id)}} " style="display:inline" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn"onclick="return confirm('¿Borrar?');"><i class="fa-solid fa-delete-left"></i></button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$categorias->links()}}
<a href="{{url('categorias/create')}}" class="btn btn-success boton">Agregar Categoria</a>
<a href="{{url('admin')}}" class="btn btn-primary boton">Regresar</a>
</div>
</div>
</div>
@endsection