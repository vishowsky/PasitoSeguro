@extends('/layouts/app')

<div class="container">



<a href="{{url('categorias/create')}}" class="btn btn-success">Agregar Categoria</a>
<table class="table table-light table-hover">
    <tbody class="thead-light">
        <tr>
            <th>#</th>
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
                <a href="{{url('/categorias/'.$categoria->cat_id.'/edit')}}" class="btn btn-info">Editar</a>
                <form method="post" action="{{url('/categorias/'.$categoria->cat_id)}}" style="display:inline" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger"onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$categorias->links()}}
</div>
