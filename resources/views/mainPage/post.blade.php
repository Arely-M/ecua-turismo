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
                    <a href="/" class="text-decoration-none">
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
                        <li><a href="/destinos" data-after="Projects">LUGARES</a></li>
                        <li><a href="/gastronomia" data-after="Contact">GASTRONOMÍA</a></li>
                        <li><a href="/nosotros" data-after="About">NOSOTROS</a></li>
                        <li><a href="/galeria" data-after="Contact">GALERÍA</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- End Hero Section  -->
    <!-- End Header -->
    <main class="d-flex flex-column bd-highlight mb-3 ml-auto mr-auto post-content" style="margin-top: 5rem">
        <img src="{{asset('storage').'/'.$publicaciones->imagen}}"  class="post-image" alt="imagen de la publicación" style=" margin: 1rem auto;">
        <div class="d-flex flex-column bd-highlight">
            <h1 class="post-title text-center mt-4">{{$publicaciones->titulo}}</h1>
            <p class="text-danger font-weight-bold">{{$publicaciones->ubicacion}}</p>
            <div><?php echo $publicaciones->descripcion ?></div>
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
                    <a href="https://www.tiktok.com/@ecuadorturisticoec?lang=es"><img src="https://img.icons8.com/bubbles/50/000000/tiktok.png"/></a>
                </div>
            </div>
            <p>Copyright © 2021 Ecuaturismo. Todos los derechos reservados</p>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="../js/index.js"></script>
</body>

</html>