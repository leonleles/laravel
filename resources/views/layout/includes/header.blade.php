<header>
    <nav>
        <div class="nav-wrapper deep-orange">
            <div class="container">
                <a href="#!" class="brand-logo">Curso de Laravel</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <ul class="sidenav" id="mobile">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
    </ul>

</header>
