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
                        <li><a href="#about" data-after="About">NOSOTROS</a></li>
                        <li><a href="/contacto" data-after="Contact">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container-page">
            <div>
                <h1>VISITA, <span></span></h1>
                <h1>LOS MEJORES<span></span></h1>
                <h1>LUGARES<span></span></h1>
                <a href="/destinos" type="button" class="cta text-decoration-none">Leer más</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Los mejores dest<span>i</span>nos</h1>
                <p>Visita los marivillosos lugares del Ecuador, encuentra nuevas aventuras, disfrutas de las mejores vistas y vive una experiencia inolvidable.</p>
            </div>
        </div>
    </section>
    <section class="w-100">
        <div class="content-card m-auto row">
            <div class="col-sm-3 mb-4 rounded">
                <div class="card card-target rounded">
                    <img class="card-img-top" src="img/lugar1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title h3">Vista el teliférico de Quito</h5>
                        <p class="card-text">
                            Observa la hermosa ciudad de Quito prácticamente desde el cielo
                        </p>
                        <a href="#" class="btn btn-primary" style="font-size:1.6rem; border-radius:0.5rem;">Ir al sitio</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-4 rounded">
                <div class="card card-target">
                    <img class="card-img-top" src="img/lugar2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title h3">Visita las Islas Galápagos</h5>
                        <p class="card-text">
                            Encuentra diversidad de especies marinas y disfruta los increíbles paísajes
                        </p>
                        <a href="#" class="btn btn-primary" style="font-size:1.6rem; border-radius:0.5rem;">Ir al sitio</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-4 rounded">
                <div class="card card-target">
                    <img class="card-img-top" src="img/lugar3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title h3">Malecón Simón Bolívar</h5>
                        <p class="card-text">
                            With supporting text below as a natural lead-in to additional
                            content.
                        </p>
                        <a href="#" class="btn btn-primary" style="font-size:1.6rem; border-radius:0.5rem;">Ir al sitio</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-4 rounded-3">
                <div class="card card-target rounded-3">
                    <img class="card-img-top rounded-3" src="img/lugar4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title h3">Laguna de Quilotoa</h5>
                        <p class="card-text">
                            La lagunas de origen volcánico más hermosas del planeta ubicada en Cotopaxi
                        </p>
                        <a href="#" class="btn btn-primary" style="font-size:1.6rem; border-radius:0.5rem;">Ir al sitio</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/basin-4067637_1280.jpg" class="d-block w-100" alt="...">
                <div class="card-img-overlay" style="padding: 70px 60px;">
                    <h5 class="card-title text-light slide-title">Visita las mejores<br>lugares de Cuenca</h5>
                    <p class="card-text text-light slide-text">Vive una experiencia única e inolvidable.</p>
                    <p class="card-text text-light slide-text">Last updated 3 mins ago</p>
                    <button class="slide-btn btn-danger">Más información</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ecuador-774623_1280.jpg" class="d-block w-100" alt="...">
                <div class="card-img-overlay" style="padding: 70px 60px;">
                    <h5 class="card-title text-light slide-title">Visita las mejores<br>lugares de Cuenca</h5>
                    <p class="card-text text-light slide-text">Vive una experiencia única e inolvidable.</p>
                    <p class="card-text text-light slide-text">Last updated 3 mins ago</p>
                    <button class="slide-btn btn-danger">Más información</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/mountains-6040906_1280.jpg" class="d-block w-100" alt="...">
                <div class="card-img-overlay" style="padding: 70px 60px;">
                    <h5 class="card-title text-light slide-title">Visita las mejores<br>lugares de Cuenca</h5>
                    <p class="card-text text-light slide-text">Vive una experiencia única e inolvidable.</p>
                    <p class="card-text text-light slide-text">Last updated 3 mins ago</p>
                    <button class="slide-btn btn-danger">Más información</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container-page">
            <div class="projects-header">
                <h1 class="section-title">OTROS <span>LUGARES</span></h1>
            </div>
            <div class="all-projects">
                <div class="project-item">
                    <div class="project-info">
                        <h1>Monumento mitad del mundo</h1>
                        <h2 class="text-danger">Pichinca, Quito</h2>
                        <p class="text-justify">Es uno de los destinos turísticos más visitados de la ciudad de Quito en el Ecuador continental. Algunos de ustedes se preguntarán, ¿vale la pena visitar la Mitad del Mundo? Nuestra respuesta es sí.</p>
                    </div>
                    <div class="project-img">
                        <img src="img/ecuador-4393531_1280.jpg" alt="Ecuador mitad del mundo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container-page">
            <div class="col-left">
                <div class="about-img">
                    <img src="img/viajero.jpg" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>me</span></h1>
                <h2>Front End Developer</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum
                    beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore
                    necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia,
                    accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum
                    ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!</p>
                <a href="#" class="cta text-decoration-none">Download Resume</a>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container-page">
            <div>
                <h1 class="section-title">CONTACT <span>INFO</span></h1>
            </div>
            <div class="contact-items ">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Teléfono</h1>
                        <h2>+1 234 123 1234</h2>
                        <h2>+1 234 123 1234</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>ecuaturimo@gmail.com</h2>
                        <h2>ecuaviaje@gmail.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                    <div class="contact-info">
                        <h1>Dirección</h1>
                        <h2>Fatikchhari, Chittagong, Bangladesh</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

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