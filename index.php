<?php
    $titulo = "Pagina de introduccion a materia DWSL";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWSL INTRO</title>

    <!-- Estilos externos para boostrap y carousel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Estilos internos para todo la pagina -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
     <header>
        <!-- Contenido del encabezado -->
        <h1><?php echo $titulo; ?></h1>
        <nav>
            <!-- Puedes agregar un menú de navegación aquí -->
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <!-- Contenido de la sección principal -->
        <h3>Bienvenido a mi sitio web de introduccion a DWSL</h3>
        <h4>Aqui veras los mejores tiktokers de el salvador</h4>
        <div class="carousel">
            <div><img src="img/tamalera.jpg"></div>
            <div><img src="img/yanira.jpg"></div>
            <div><img src="img/ricky.jpg"></div>
        </div>
    </section>

    <footer>
        <!-- Contenido del pie de página -->
        <p>Derechos de autor © 2023. Todos los derechos reservados.</p>
        <p>Contacto: retro@retro.com</p>
    </footer>

    <!-- Script externo para jquery y carousel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Script interno para carousel -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 1,
                slidesToScroll: 1,
                initialSlide: 1,
                centerMode: true,
                arrows: false,
                dots: true,
                adaptiveHeight: true //add this line
            });
        });
    </script>
</body>
</html>