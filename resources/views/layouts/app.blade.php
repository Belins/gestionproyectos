<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Gestion Proyectos
            </div>
            <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
                <a class="navbar-brand" href="{{route('Emp')}}">
                    <img src="{{asset('assets/img/logo.png')}}" alt="Logo" style="width:50px;">

                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('Emp')}}">Empleados</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('proyectos.index')}}">Proyectos</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="{{route('Dep')}}">Departamentos</a>
                    </li>
                </ul>
            </nav>
            <hr><br><br>
            <div style="width: 95%" class="op" >
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
