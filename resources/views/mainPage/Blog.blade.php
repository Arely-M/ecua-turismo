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
    <header id="header">
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
                        <li><a href="blog" data-after="Service">BLOG</a></li>
                        <li><a href="#projects" data-after="Projects">LUGARES</a></li>
                        <li><a href="#about" data-after="About">NOSOTROS</a></li>
                        <li><a href="#contact" data-after="Contact">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container-page">
            <div>
                <h1>VISITA, <span></span></h1>
                <h1>LOS MEJORES<span></span></h1>
                <h1>LUGARES<span></span></h1>
                <a href="#projects" type="button" class="cta">Leer más</a>
            </div>
        </div>
    </section>
    <!-- End Header -->
    <div class="content-publication ml-auto mr-auto mt-4">
        <h2 class="publication-title">últimos posts</h2>
    </div>
    <main class="container-page d-flex flex-column bd-highlight mb-3 mt-4">
        @foreach ($publicaciones as $publicacion)
        <div class="p-2 bd-highlight content-publication mt-4">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="{{$publicacion->imagen}}" class="publication-image" alt="Miniatura de la publicación">
                </div> 
                <div class="col-md-7">
                    <div class="card-body information-publication">
                        <p class="card-text text-danger"><small class="text-danger font-weight-bold">{{$publicacion->ubicacion}}</small></p>
                        <h2 class="card-title publication-title mb-3">{{$publicacion->titulo}}</h2>
                        <p class="publication-description">{{$publicacion->descripcion}}</p>
                        <a type="button" class="btn-publication" href="{{route('publicacion.show', $publicacion)}}">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </main>-->

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