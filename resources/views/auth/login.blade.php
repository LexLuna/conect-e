@extends('layouts.main')

@section('title')
    Conect-e
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="panel panel-default col-md-4 col-md-offset-4">
            {!! Form::open(['route' => 'login' ,'method' =>'POST'])!!}
                <h3 class="text-center">Inicia Sesion</h3>
                <div class="col-md-4 col-md-offset-2">
                    <a  href="facebook/redirect">
                        <img class="center-block" src="{{asset('assets/image/sociales/Facebook.png')}}" alt="Iniciar Con facebook" />
                    </a>
                </div>
                <div class="col-md-4">
                    <a  href="facebook/redirect">
                        <img class="center-block" src="{{asset('assets/image/sociales/GooglePlus.png')}}" alt="Iniciar Con Google" />
                    </a>
                </div>

                <div class="col-md-12 form-group">
                    {!! Form::label('name','Usuario') !!}
                    {!! Form::text('name',null,['class' => 'form-control input-lg','placeholder' => 'Usuario o Correo','required']) !!}
                </div>
                <div class="col-md-12 form-group">
                    {!! Form::label('password','Contraseña') !!}
                    {!! Form::password('password',['class' => 'form-control input-lg','placeholder' => '*********','required']) !!}
                </div>
                <div class="col-md-12 form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Recordarme
                        </label>
                    </div>
                </div>

                <div class="col-md-12 form-group">
                    {!! Form::submit('Acceder',['class' => 'form-control btn btn-primary input-lg']) !!}
                </div>

                <p><a id="login_recovery" href="#" class="navbar-link text-center">¿Olvidaste tu contraseña?</a></p>

            {!! Form::close() !!}


            <br>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

