<nav id="menu-footer" class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="col-md-6">
        </div>
        <div class="col-md-5">
            <ul class="nav  navbar-nav navbar-right" >
                <li><a href="?view=luckbox">LuckBox</a></li>
                <li><a href="?view=turismo">Turismo</a></li>
                <li><a href="?view=anuncios">Anuncios</a></li>
                <li><a href="?view=contacto">Contacto</a></li>
                <li><a href="?view=registro">Registro</a></li>
            </ul>
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div id="footer" class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="col-xs-4 col-md-4">
                <a  href="http://www.facebook.com" target="_blank">
                    <img class="center-block" src="{{asset('assets/image/sociales/Facebook.png')}}" alt="" />
                </a>
            </div>
            <div class="col-xs-4 col-md-4">
                <a href="http://www.twitter.com" target="_blank">
                    <img class="center-block" src="{{asset('assets/image/sociales/Twitter.png')}}" alt="" />
                </a>
            </div>
            <div class="col-xs-4 col-md-4">
                <a href="http://www.youtube.com" target="_blank">
                    <img class="center-block" src="{{asset('assets/image/sociales/Youtube.png')}}" alt="" />
                </a>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-2 ">
            <br>
            <p class="text-right">
                Copyright @yield('title','Conect-e') &copy; Todos los derechos reservados  2016.
            </p>
        </div>
        <br>
    </div>
</div>
<script  src="{{asset('assets/jquery/js/jquery-2.2.4.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.js')}}" type="text/javascript" ></script>
@yield('scripts')
</body>

</html>
