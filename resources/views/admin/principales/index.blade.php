@extends('admin.layout.main')

@section('content')

    <div class="form-group col-md-offset-1">
        <a href="create" class="btn btn-info pull-left">Agregar Nuevo</a>
    </div>
    <div class="clearfix"></div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Tipo</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($principales as $principal)
        <tr>
            <td>{{ $principal->id }}</td>
            <td>{{ $principal->title }}</td>
            <td>{{ $principal->expiracion }}</td>
            <td>
                <a href="{{ route('principal.edit',$principal->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench"></span></a>
                <a href="{{ route('principal.destroy',$principal->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
	{{ $principales->links() }}
@endsection
