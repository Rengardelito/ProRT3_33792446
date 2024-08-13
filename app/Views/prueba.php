<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <style>

        p {
        color: green;
        font-weight: bold;
        font-style: oblique;
           }

    
    </style>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity=" " crossorigin=" ">
    <link rel="stylesheet" href="assets/css/miestilo.css">
</head>

<body>

<header>
    <h1 class="supertitulo">Vinoteca EL BODEGON</h1>
    
    <nav>
        <UL>
            <img alt="Logo" src="assets/img/servicios_elbodegon (1).jpg">
            <LI><a class="supertitulo" href="#">Inicio</a></LI>
            <LI><a class="supertitulo" href="QuienesSomos.html">Quienes Somos</a></LI>
            <LI><a class="supertitulo" href="registro.html">Registro</a></LI>
            <LI><a class="supertitulo" href="Login.html">Login</a></LI>
            <li><a class="supertitulo" href="https://espaciovino.com.ar/"> Comprar aquí</a></li>
            <form class="d-flex search-form" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                <button class="btn orange-button" type="submit">Buscar</button>
              </form>
        </UL>
        
</nav>
</header>
<section>
       <div class="centrado">
        <p class="texto2">Somos una empresa que se dedica a la venta de vinos.
           <br>Nuestros Vinos son unicos.<br>Cada producto se realiza con las mejores uvas seleccionadas. <span>Hacemos envíos a todo el país</span>
               no dude en contactarse.</p>
        <p class="supertitulo"> Los mejores vinos de la región, encontralos aquí </p>
           
        </div>
    
</section>


<div>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/img-20180831-191857_5_166990.jpg" alt="BODEGON">
          </div>
          <div class="carousel-item">
            <img src="assets/img/importacion-vinos-vino-bebidas-alcoholicas-articulos-de-lujo-botellas.jpg" alt="BODEGON">
          </div>
          <div class="carousel-item">
            <img src="assets/img/portada1.jpg"  alt="BODEGON">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>



<footer>
                <a  class="footer-content" href="https://www.facebook.com">
                    <img src="https://st.depositphotos.com/4083027/61472/v/450/depositphotos_614720314-stock-illustration-letter-icon-social-media-icon.jpg"
                class="miicono">
                    Facebook
                </a>

                <a  class="footer-content" href="https://mail.google.com/mail/?authuser=0">
                    <img src="https://w7.pngwing.com/pngs/712/520/png-transparent-google-mail-gmail-logo-icon-thumbnail.png"
                class="miicono">
                    elbodegon@gmail.com
                </a>

                <a class="footer-content" href="https://web.whatsapp.com/">
                    <img src="https://img.freepik.com/psd-gratis/icono-3d-aplicacion-redes-sociales_23-2150049563.jpg?w=740&t=st=1716410656~exp=1716411256~hmac=985aec15ab4354f420cac604ad963988c387513ed8fb6598b8fc48ac64ea1603"
                class="miicono">
                    +5493794735149 respuesta <span>inmediata!</span>
                </a>
    <div>
        <p class="texto2" id="copyright">Derechos de autor © 2024| Vinoteca EL BODEGON.</p>
    </div>
    <script src="assets/js/bootstrap.bundle.min.js" integrity=" " crossorigin=" "></script>
</footer>
</body>
</html>