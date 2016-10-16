@extends('layouts.main')

@section('content')
<div class="col-md-6 col-md-offset-3 ">
	<div class="text-center  panel panel-warning">
	    <div class="panel-heading">
	        <div class="panel-title">
	            <h4>Oops!</h4>
	        </div>  
	    </div>
	    <div class="panel-body">
	    	<h3>
	            Parace que no tienes permiso para acceder a esta página
	        </h3>
            <img src="{{asset('assets/image/401.jpg')}}" class="img-responsive img-rounded center-block">
	    </div>
	</div>
</div>
@endsection