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
		{!! Form::textarea('contenido',null,['class' => 'form-control textarea-content','required']) !!}
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
  selector: "textarea",
  height: 500,
  plugins: [
    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
  ],

  toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
  toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
  toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

  menubar: false,
  toolbar_items_size: 'small',

  style_formats: [{
    title: 'Bold text',
    inline: 'b'
  }, {
    title: 'Red text',
    inline: 'span',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Red header',
    block: 'h1',
    styles: {
      color: '#ff0000'
    }
  }, {
    title: 'Example 1',
    inline: 'span',
    classes: 'example1'
  }, {
    title: 'Example 2',
    inline: 'span',
    classes: 'example2'
  }, {
    title: 'Table styles'
  }, {
    title: 'Table row 1',
    selector: 'tr',
    classes: 'tablerow1'
  }],

  templates: [{
    title: 'Test template 1',
    content: 'Test 1'
  }, {
    title: 'Test template 2',
    content: 'Test 2'
  }],
  content_css: [
    '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
    '//www.tinymce.com/css/codepen.min.css'
  ]
});
</script>
@endsection