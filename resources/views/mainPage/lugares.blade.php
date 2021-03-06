<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Ecuaturismo</title>
</head>

<body>
    <!-- Header -->
    <header id="header" class="bg-dark">
        <div class="header-page container-page">
            <nav class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span class="span-ecua">ECUA</span> <span class="span-turismo">TURIS</span>MO</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="/" data-after="Home">INICIO</a></li>
                        <li><a href="/blog" data-after="Service">BLOG</a></li>
                        <li><a href="/destinos" data-after="Projects">DESTINOS</a></li>
                        <li><a href="/gastronomia" data-after="Contact">GASTRONOMÍA</a></li>
                        <li><a href="/nosotros" data-after="About">NOSOTROS</a></li>
                        <li><a href="/galeria" data-after="Contact">GALERÍA</a></li>
                        <li><a href="/login" data-after="Contact" target="_blank">LOGIN</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <main class="min-vh-100 mr-auto ml-auto" style="margin-top: 14rem; width: 100%;">
        <div class="content-publication ml-auto mr-auto" style="margin-top: 14rem">
            <h2 class="publication-title text-center">{{$provincias->nombre}}</h2>
        </div>
        <div class="container">
            @foreach ($publicaciones as $publicacion)
            <div class="card">
                <img src="{{asset('storage').'/'.$publicacion->imagen}}">
                <h2>{{$publicacion->titulo}}</h2>
                <p class="publication-description">{{$publicacion->resumen}}</p>
                <a href="{{route('publicaciones.show', $publicacion)}}">Leer más</a>
            </div>
            @endforeach
        </div>
        <div class="content-publication ml-auto mr-auto" style="font-size: 1.6rem;">
            {{$publicaciones->links()}}
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer container-page">
            <div class="brand">
                <a href="/" class="text-decoration-none">
                    <h1><span class="span-ecua">ECUA</span> <span class="span-turismo">TURIS</span>MO</h1>
                </a>
            </div>
            <h2>Tu Guía de lugares turísticos</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="https://www.facebook.com/Ecua-Turismo-101221585389347" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.instagram.com/ecua_turismo_ec/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.tiktok.com/@ecuadorturisticoec?lang=es" target="_blank"><img src="https://img.icons8.com/bubbles/50/000000/tiktok.png"/></a>
                </div>
            </div>
            <p>Copyright © 2021 Ecuaturismo. Todos los derechos reservados</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="../js/index.js"></script>
</body>
<style>

.container{
    width: 100%;
    max-width: 1200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: auto;
}

.container .card{
    width: 330px;
    height: 430px;
    border-radius: 8px;
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    margin: 20px;
    text-align: center;
    transition: all 0.25s;
}

.container .card:hover{
    transform: translateY(-15px);
    box-shadow: 0 12px 16px rgba(0, 0, 0, 0.2);
}

.container .card img{
    width: 330px;
    height: 220px;
}


.container .card h4{
    font-weight: 600;
}

.container .card p{
    padding: 0 1rem;
    font-size: 16px;
    font-weight: 300;
}

.container .card a {
    font-weight: 500;
    font-size: 2rem;
    text-decoration: none;
    color: #3498db;
}
</style>
</html>