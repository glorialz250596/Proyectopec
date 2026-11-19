<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reforestacion</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
</head>
<body style="background-color:#F7D9C4;">
    <img src="{{asset('img/logo.png')}}"/>
    <h1>Esta es mi pagina web</h1>

<header>
   <div class="content">
     
     <div class="menu container">
        <a href="#" class="logo">logo </a>
        <input type="checkbox" id="menu" />
        <label for="menu">
            <img src="images/menu.png" alt="">
        </label>    
     </div>   
    
   </div>
</header>    
</body>
</html>-->      

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Cuidemos al planeta')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <!-- Enlace al CSS usando el helper asset() de Laravel -->
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <!-- Hojas decorativas del fondo -->
    <svg class="bg-leaf leaf-bottom-left" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <svg class="bg-leaf leaf-middle-center" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <svg class="bg-leaf leaf-bottom-right" viewBox="0 0 100 160">
        <path d="M50,155 Q50,80 50,10 M50,130 Q20,120 15,95 Q35,105 50,125 M50,130 Q80,120 85,95 Q65,105 50,125 M50,100 Q20,90 15,65 Q35,75 50,95 M50,100 Q80,90 85,65 Q65,75 50,95 M50,70 Q25,60 20,35 Q38,45 50,65 M50,70 Q75,60 80,35 Q62,45 50,65 M50,40 Q35,25 50,5 Q65,25 50,40" stroke="#f3d5c5" stroke-width="3" stroke-linecap="round"/>
    </svg>

    <div class="container">
        <!-- Menú superior con rutas de Laravel -->
        <header>
            <nav>
                <ul>
                    <li><a href="{{ route('inicio') }}" class="{{ request()->routeIs('inicio') ? 'active' : '' }}">Inicio</a></li>
                    <li><a href="{{ route('introduccion') }}" class="{{ request()->routeIs('introduccion') ? 'active' : '' }}">Introducción</a></li>
                    <li><a href="{{ route('beneficios') }}" class="{{ request()->routeIs('beneficios') ? 'active' : '' }}">Beneficios</a></li>
                    <li><a href="{{ route('especies') }}" class="{{ request()->routeIs('especies') ? 'active' : '' }}">Especies</a></li>
                    <li><a href="{{ route('plantar') }}" class="{{ request()->routeIs('plantar') ? 'active' : '' }}">Plantar</a></li>
                    <li><a href="{{ route('acerca') }}" class="{{ request()->routeIs('acerca') ? 'active' : '' }}">Acerca de</a></li>
                </ul>
            </nav>
        </header>

        <!-- Aquí se inyectará el contenido de cada página -->
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>