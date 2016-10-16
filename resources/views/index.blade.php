@extends('layouts.main')

@section('title')
    Conect-e
@endsection

@section('content')
    @include('public.galeria')
    <div class="container-fluid">
        <div class="row">
            <div id="panel_izquierda" class="col-xs-12 col-md-2 lateral-izquierda">
                <div class="encabezado"></div>
                @include('public.buscar')
                @include('public.categorias')
            </div>
            <div id="centro" class="col-xs-12 col-md-8 central">
                <div class="encabezado">Lo mas reciente..</div>
                @include('public.ultimas_entradas')
            </div>
            <div id="panel_derecha"  class="col-xs-12 col-md-2 lateral-derecha">
                <div class="encabezado"></div>
                @include("public.top_ten")
            </div>
        </div>
    </div>
@endsection