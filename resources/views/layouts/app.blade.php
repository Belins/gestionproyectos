<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<title>@yield('title')</title>
</head>
<body>

    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Relaciones
            </div>

            <div class="links">
                <a href="{{route('Proy')}}">Proyectos</a>
                <a href="{{route('Emp')}}">Empleados</a>
                <a href="{{route('Dep')}}">Departamentos</a>
            </div>
            <hr><br><br>
            <div class="op">
                @yield('content')
            </div>
        </div>
    </div>

	<footer class="footer">
		@include('layouts.footer')
	</footer>

</body>
</html>
