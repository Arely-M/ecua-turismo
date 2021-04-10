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
                        <li><a href="/destinos" data-after="Projects">DESTINOS</a></li>
                        <li><a href="/gastronomia" data-after="Contact">GASTRONOMÍA</a></li>
                        <li><a href="/nosotros" data-after="About">NOSOTROS</a></li>
                        <li><a href="/galeria" data-after="Contact">GALERÍA</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->
    @if($publicaciones->count())
    <div class="min-vh-100">
        <div class="content-publication ml-auto mr-auto" style="margin-top: 14rem">
            <h2 class="publication-title">últimos posts</h2>
        </div>
        <main class="d-flex align-items-start flex-column bd-highlight mb-3">

            @foreach ($publicaciones as $publicacion)
            <div class="p-2 bd-highlight container mr-auto ml-auto mb-4">
                <!--<div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{asset('storage').'/'.$publicacion->imagen}}"  class="publication-image" alt="Miniatura de la publicación">
                        </div> 
                        <div class="col-md-7">
                            <div class="card-body information-publication">
                                <p class="card-text text-danger"><small class="text-danger font-weight-bold">{{$publicacion->ubicacion}}</small></p>
                                <h2 class="card-title publication-title mb-3">{{$publicacion->titulo}}</h2>
                                <p class="publication-description">{{$publicacion->resumen}}</p>
                                <a type="button" class="btn-publication" href="{{route('publicaciones.show', $publicacion)}}">Ver más</a>
                            </div>
                        </div>
                    </div>-->
                <!--<div class="col mb-4">
                    <div class="card">
                        <img src="{{asset('storage').'/'.$publicacion->imagen}}"  class="publication-image" alt="Miniatura de la publicación" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$publicacion->titulo}}</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>-->
                <div class="property-card">
                    <a  href="{{route('publicaciones.show', $publicacion)}}">
                        <img class="property-image"  src="{{asset('storage').'/'.$publicacion->imagen}}">
                    </a>
                    <div class="property-description">
                        <h3> {{$publicacion->titulo}}</h3>
                        <p class="gastronomy-descripcion">{{$publicacion->resumen}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </main>
        <div class="content-publication ml-auto mr-auto" style="font-size: 1.5rem;">
            {{$publicaciones->links()}}
        </div>
    </div>
    @else
    <div class="content-publication ml-auto mr-auto text-center min-vh-100" style="margin-top: 14rem">
        <strong class="text-center publication-title">No hay publicaciones</strong>
    </div>
    @endif
    <!-- Footer -->
    <footer id="footer">
        <div class="footer container-page">
            <a href="#hero">
                <h1><span class="span-ecua">ECUA</span> <span class="span-turismo">TURIS</span>MO</h1>
            </a>
            <h2>Tu Guía de lugares turísticos</h2>
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

    .gastronomy-descripcion {
        display: block;
        display: -webkit-box;
        height: 1.6rem * 1.2 * 2;
        font-size: 1.6rem;
        line-height: 1.3;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        text-align: justify;
    }

    .property-card {
        height: 33rem;
        width: 43rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        position: relative;
        -webkit-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        border-radius: 16px;
        overflow: hidden;
        -webkit-box-shadow: 15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
        box-shadow: 15px 15px 27px #e1e1e3, -15px -15px 27px #ffffff;
    }

    .property-image {
        height: 22rem;
        width: 43rem;
        position: Absolute;
        top: 0px;
        -webkit-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        background-size: cover;
        background-repeat: no-repeat;
    }

    .property-description {
        background-color: #FAFAFC;
        height: 10rem;
        width: 43rem;
        position: absolute;
        bottom: 0em;
        -webkit-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        -o-transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
        padding: 0.5em 1em;
        text-align: center;
    }

    .property-card:hover .property-description {
        height: 0em;
        padding: 0px 1em;
    }

    .property-card:hover .property-image {
        height: 33rem;
    }

    .property-card:hover .property-social-icons {
        background-color: white;
    }

    .property-card:hover .property-social-icons:hover {
        background-color: blue;
        cursor: pointer;
    }
</style>
</html>