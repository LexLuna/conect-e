@include('layouts.partials.header')
<div class="container-fluid">
    <div class="row">
        @include('admin.layout.partials.menu')
        <section id="centro" class="col-xs-12 col-md-8 central">
                <div class="encabezado">@yield('page')</div>
                @include('flash::message')
                        @include('admin.layout.partials.errors')
                        @yield('content')
        </section>
    </div>
</div>
@include('layouts.partials.footer')


