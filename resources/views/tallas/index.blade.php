@extends('/layouts/app')

<div class="container">



<a href="{{url('tallas/create')}}" class="btn btn-success">Agregar Talla</a>
<table class="table table-light table-hover">
    <tbody class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Acciones</th>


        </tr>
    </tbody>

    <tbody>
        @foreach($tallas as $talla)
        <tr>
            <td>{{$loop->iteration}}</td>

          
            <td>{{$talla->talla_nom}} </td>
            <td>
                <a href="{{url('/tallas/'.$talla->talla_id.'/edit')}}" class="btn btn-info">Editar</a>
                <form method="post" action="{{url('/tallas/'.$talla->talla_id)}}" style="display:inline" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button type="submit" class="btn btn-danger"onclick="return confirm('¿Borrar?');">Borrar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$tallas->links()}}
</div>
