<header>
    <nav>
        <div class="nav-wrapper deep-orange">
            <div class="container">
                <a href="#!" class="brand-logo">Curso de Laravel</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    @if(Auth::guest())
                        <li><a href="{{route('login')}}">Login</a></li>
                    @else
                        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                        <li><a href="#">{{Auth::user()->name}}</a></li>
                        <li><a href="{{route('site.login.sair')}}">Sair</a></li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        @if(Auth::guest())
            <li><a href="{{route('login')}}">Login</a></li>
        @else
            <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
            <li><a href="#">{{Auth::user()->name}}</a></li>
            <li><a href="{{route('site.login.sair')}}">Sair</a></li>
        @endif
    </ul>

</header>
