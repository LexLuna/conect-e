@extends('admin.layout.main')

@section('page')
	Crear Principal
@endsection
@section('style')
<link rel="stylesheet" href="{{asset('assets/trumbowyg/ui/trumbowyg.css')}}">
<link rel="stylesheet" href="{{asset('assets/tinymce/skins/lightgray/skin.min.css')}}">
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
                <textarea id="contenido" name="contenido" class="form-control textarea-content" required="true">Soy un  texto de prueba</textarea>
                
<!--		{!! Form::textarea('contenido',null,['class' => 'form-control textarea-content','required']) !!}-->
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
<script src="{{asset('assets/trumbowyg/trumbowyg.js')}}"></script>
<script src="{{asset('assets/trumbowyg/plugins/pasteimage/trumbowyg.pasteimage.js')}}"></script>
<script src="{{asset('assets/tinymce/tinymce.js')}}"></script>
<script>
//$('.textarea-content').trumbowyg({
//    resetCss: true,
//    removeformatPasted: true,
//    
//    autogrow: true
//});
tinymce.init({
  selector: '.textarea-content',
   file_browser_callback_types: 'file image media',
   automatic_uploads: true,
  height: 500,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code'
  ],
  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  content_css: '//www.tinymce.com/css/codepen.min.css'
});
$(document).on('focusin', function(e) {
  if ($(e.target).closest(".mce-window").length) {
    e.stopImmediatePropagation();
  }
});
</script>
@endsection