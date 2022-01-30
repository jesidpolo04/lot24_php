<?php
    require_once('./config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="title" content="LOT24">
    <meta name="description" content="Busca, compra o arrienda tu hogar ideal con LOT24, la solución inmobiliaria a tu alcance, publica tu inmueble con nosotros">
    <meta name="keywords" content="inmobiliaria, vender, comprar, arrendar, temporales, inmuebles, alquilar, publicar, casas, departamentos, venta, montería">
    
    <link rel="stylesheet" href="./js/OwlCarousel/dist/assets/owl.carousel.css">
    <link rel="stylesheet" href="./js/OwlCarousel/dist/assets/owl.theme.default.css">
    <link rel="stylesheet" href="./estilos.css">

    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <title>LOT24</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="./assets/visuals/logo_150x87px.png" alt="">
        </div>
        <div class="navegacion">
            <ul>
                <li>Arrendar</li>
                <li>Comprar</li>
                <li>Vender</li>
                <li>Temporales</li>
                <li>Ir al portal</li>
            </ul>
        </div>
    </header>

    <section id="banner">
        <div class="banner-carrusel owl-carousel">
            <div><img src="assets/banner/banner1.png" alt=""></div>
            <div><img src="assets/banner/banner2.png" alt=""></div>
        </div>
    </section>

    <section id="vistazo">
        <h4 class="texto-centrado texto-primario">Echa un vistazo a nuestras propiedades</h4>
        <div class="propiedades-carrusel owl-carousel">
            <?php 
                for($i = 0 ; $i < 4 ; $i ++): 
                    include('./carta.php');
                endfor;
            ?>
        </div>
    </section>

    <section id="opciones">

    </section>

    <section id="contacto">

    </section>

    <section id="publicar">

    </section>

    <footer id="pie-de-pagina">

    </footer>
</body>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
    >
    </script>
    <script src="./js/OwlCarousel/dist/owl.carousel.min.js"></script>
    <script src="owl-carousel.js"></script>
</html>