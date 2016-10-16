<nav id="barra-navegacion" class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=".hidden-xs"><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="?view=luckbox">LuckBox</a></li>
                <li><a href="?view=turismo">Turismo</a></li>
                <li><a href="?view=anuncios">Anuncios</a></li>
                <li><a href="?view=contacto">Contacto</a></li>
                @if(Auth::user())
                    <li id="admin"><a   href="{{ url('/admin') }}">Admin</a></li>
                @else
                    <li><a href="?view=registro">Registro</a></li>
                @endif
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control navbar-right" placeholder="Buscar">
                </div>
                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </form>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::user())
                    <li id="img-perfil" class="navbar-brand">
                        <img  class="img-responsive img-circle pull-right" alt="Brand" src="{{ Auth::user()->avatar }}">
                    </li>
                    <li class="dropdown" id="perfil-menu">
                        <a href="#" id="perfil" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        @include('users.submenu')
                    </li>

                @else
                <li class="login"><a href="{{ url('/login') }}" class="">Login</a></li>
                @endif
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div id="cabecera" class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <h1 > @yield('title','Conect-e')
                <br class="visible-xs">
                <small id="slogan">Tenemos <em>todo</em> lo que necesitas en un solo lugar...</small>
            </h1>

        </div>

    </div>
</div>

<div id="cabecera-espacio"></div>