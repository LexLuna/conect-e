@extends('admin.layout.main')

@section('page')
	Crear Principal
@endsection

@section('content')
<div class="formulario">
	{!! Form::open(['route' => 'principal.store' ,'method' =>'POST','files' => true])!!}
	<div class="form-group">
		{!! Form::label('title','Titulo') !!}
		{!! Form::text('title',null,['class' => 'form-control','placeholder' => 'Soy el titulo','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('descripcion','Descripción') !!}
		{!! Form::text('descripcion',null,['class' => 'form-control','placeholder' => 'Soy la descripcion','required']) !!}
	</div>
        <div class="form-group">
		{!! Form::label('contenido','Contenido') !!}
		{!! Form::textarea('contenido',null,['class' => 'form-control','required']) !!}
	</div>
        
        <div class="form-group">
        {!! Form::label('imagen','Imagen') !!}
        <div class="input-group image-preview">
            
            <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
            <span class="input-group-btn">
                <!-- image-preview-clear button -->
                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                    <span class="glyphicon glyphicon-remove"></span> Limpiar
                </button>
                <!-- image-preview-input -->
                <div class="btn btn-default image-preview-input">
                    <span class="glyphicon glyphicon-folder-open"></span>
                    <span class="image-preview-input-title">Buscar</span>
                    <input type="file" id="imagen" accept="image/png, image/jpeg, image/gif" name="imagen"/> <!-- rename it -->
                </div>
            </span>
        </div>
		
	</div>
        
        <div class="form-group">
		{!! Form::label('expiracion','Fecha de expiracion') !!}
		{!! Form::date('expiracion', \Carbon\Carbon::now()) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar',['class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close()!!}
</div>
@endsection

@section('scripts')
<script src="{{asset('assets/js/preview_file.js')}}"></script>
@endsection