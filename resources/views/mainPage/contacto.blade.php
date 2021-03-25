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
                        <li><a href="#about" data-after="About">NOSOTROS</a></li>
                        <li><a href="/contacto" data-after="Contact">CONTACTO</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- End Header -->

    <form class="form-contact p-3 bg-body">
        <h2 class="publication-title mb-4">Contacto</h2>
        <div class="form-group form-size">
            <label for="formGroupExampleInput" class="mt-4">Nombre (obligatorio)</label>
            <input type="text" class="form-control bg-light input-size" id="formGroupExampleInput" placeholder="Nombre">
        </div>
        <div class="form-group form-size">
            <label for="formGroupExampleInput2">Tu email (obligatorio)</label>
            <input type="text" class="form-control bg-light input-size" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group form-size">
            <label for="formGroupExampleInput2">Asunto</label>
            <input type="text" class="form-control bg-light input-size" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
        <div class="form-group form-size">
            <label for="formGroupExampleInput2">Tu mensaje</label>
            <textarea class="form-control bg-light input-size" id="exampleFormControlTextarea1" placeholder="" rows="10"></textarea>
        </div>
        <div>
            <button type="button" class="btn-primary form-size p-4 border-0 rounded">Enviar</button>
        </div>
    </form>
    <!--
            <label class="form-label">Ubicación</label>
            <div class="mb-3 row">
                <div class="col-md-4 mb-3">
                    <input type="text" class="form-control" placeholder="Ciudad">
                </div>
                <div class="col-md-4 mb-3">
                    <select class="form-select" id="provincia" required>
                        <option selected disabled value="">Provincia...</option>
                        <option>El Oro</option>
                        <option>Guayas</option>
                        <option>Azuay</option>
                        <option>Esmeraldas</option>
                        <option>Pichincha</option>
                        <option>Bolivar</option>
                        <option>Carchi</option>
                        <option>Loja</option>
                        <option>Napo</option>
                        <option>Pastaza</option>
                        <option>Francisco de Orellana</option>
                        <option>Sucumbio</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="email " class="form-control" id="exampleFormControlInput1" placeholder="Ecuador" disabled>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="..." rows="3"></textarea>
            </div>
            <div class="previewImagen" id="imagePreview">

            </div>
            <div class="mb-3 input-group">
                <input type="file" name="imagen" id="imagen" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
            </div>
            <div class="m-auto">
                <button type="submit" class="btn btn-primary mb-3">Confirmar</button>
            </div>-->
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