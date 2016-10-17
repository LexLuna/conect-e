@extends('admin.layout.main')
@section('page')
	Lista Principales
@endsection
@section('content')

    <div class="form-group col-md-offset-1">
        <a href="{{ route('principal.create')}}" class="btn btn-info pull-left">Agregar Nuevo</a>
    </div>
    <div class="clearfix"></div>
    <div class="tabla">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Expiracion</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($principales as $principal)
                <tr>
                    <td>{{ $principal->id }}</td>
                    <td>{{ $principal->title }}</td>
                     <td>{{ $principal->expiracion }}</td>
                     <td><img src="{{asset('images/principales/'.$principal->imagen->imagen)  }}" class="img-rounded img-responsive center-block"></td>
                   
                    <td>
                        <a href="{{ route('principal.edit',$principal->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-wrench"></span></a>
                        <a href="{{ route('principal.destroy',$principal->id)}}" onclick="return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
	{{ $principales->links() }}
@endsection
