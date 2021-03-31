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
                        <li><a href="#about" data-after="About">NOSOTROS</a></li>
                        <li><a href="/galeria" data-after="Contact">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    <!--
    <div class="content-publication ml-auto mr-auto" style="margin-top: 14rem">
        <h2 class="publication-title text-center">{{$provincias->nombre}}</h2>
    </div>
    <main class="container-page d-flex flex-column bd-highlight mb-3 mt-4">
        @foreach ($publicaciones as $publicacion)
        
        <div class="p-2 bd-highlight content-publication mt-4">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{asset('storage').'/'.$publicacion->imagen}}"  class="publication-image" alt="Miniatura de la publicación">
                </div> 
                <div class="col-md-7">
                    <div class="card-body information-publication">
                        <p class="card-text text-danger"><small class="text-danger font-weight-bold">{{$publicacion->ubicacion}}</small></p>
                        <h2 class="card-title publication-title mb-3">{{$publicacion->titulo}}</h2>
                        <p class="publication-description">{{$publicacion->descripcion}}</p>
                        <a type="button" class="btn-publication" href="{{route('publicaciones.show', $publicacion)}}">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </main>-->
    <main class="min-vh-100 mr-auto ml-auto" style="margin-top: 14rem; width: 80%;">
        <div class="content-publication ml-auto mr-auto" style="margin-top: 14rem">
            <h2 class="publication-title text-center">{{$provincias->nombre}}</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            @foreach ($publicaciones as $publicacion)
            <div class="col mb-4">
                <div class="bg-dark text-white">
                    <img src="{{asset('storage').'/'.$publicacion->imagen}}" class="card-img img-fluid" alt="imagen de la publicacion" style="filter: brightness(60%);">
                    <div class="card-img-overlay p-5">
                        <h2 class="card-title">{{$publicacion->titulo}}</h1>
                        <p class="card-text publication-description text-light">{{$publicacion->descripcion}}</p>
                        <a type="button" class="btn btn-outline-light" href="{{route('publicaciones.show', $publicacion)}}" style="font-size: 1.5rem;">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <!-- Footer -->
    <footer id="footer">
        <div class="footer container-page">
            <div class="brand">
                <h1><span>S</span>haif <span>A</span>rfan</h1>
            </div>
            <h2>Your Complete Web Solution</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="https://www.facebook.com/Ecua-Turismo-101221585389347" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://www.instagram.com/ecua_turismo_ec/" target="_blank"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
                </div>
            </div>
            <p>Copyright © 2020 Arfan. All rights reserved</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="../js/index.js"></script>
</body>

</html>