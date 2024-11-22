<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/logoo" type="image/x-icon">
    <link rel="stylesheet" href="stylebase.css">
    <link rel="stylesheet" href="styleinicio.css">
    <link rel="stylesheet" href="stylec.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <title>Palermo Style • Inicio</title>
</head>
<body>
    <header>
        <div id="head">
            <div id="headpart1">
                <a class="link"
                href="./Inicio.php"
                target="_self"
                rel="noopeer noreferrer"
                >
                    <img id="logo"
                        src="./img/logoo"
                        alt="logo"
                    >
                </a>
            </div>
            <div id="headpart2">
                <div id="subheadpart2">
                    <a class="upizq"
                    href="./Inicio.php"
                    target="_self"
                    rel="noopeer noreferrer"
                    >
                        <p class="upizqtxt" id="upizqp">
                            Inicio
                        </p>
                    </a>
                    <div id="menu"> 
                        <a  class="upizq"
                        href="./productos.php"
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            <p class="upizqtxt">
                                Productos
                            </p>
                        </a>
                        <div id="desplegable">
                            <div>
                                <a class="bigtext"
                                    href="./productos.php?genero=hombre"
                                    target="_self"
                                    rel="noopeer noreferrer"
                                    >
                                        Hombre
                                    </a>
                                <ul>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre&tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre&tipo=camisa"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Camisas
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre&tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre&tipo=calzado"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Calzado
                                    </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="bigtext"
                                    href="./productos.php?genero=mujer"
                                    target="_self"
                                    rel="noopeer noreferrer"
                                    >
                                        Mujer
                                </a>
                                <ul>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer&tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer&tipo=camisa"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Camisas
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer&tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer&tipo=calzado"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Calzado
                                    </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="bigtext"
                                href="./productos.php?genero=ninios"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Niños
                                </a>
                                <ul>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios&tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios&tipo=camisa"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        camisa
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios&tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios&tipo=calzado"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Calzado
                                    </a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a class="bigtext"
                                href="./productos.php?genero=accesorios"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Accesorios
                                </a>
                                <ul>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios&tipo=cinturon"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Cinturon
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios&tipo=corbata"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Corbata
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios&tipo=monio"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Moño
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios&tipo=tirantes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Tirantes
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a class="upizq"
                    href="./ayuda.php"
                    target="_self"
                    rel="noopeer noreferrer"
                    >
                        <p class="upizqtxt">
                            Ayuda
                        </p>
                    </a>
                </div>
            </div>
            <div id="headpart3">
                <div id="searchbar">
                    <img id=""
                        src="./img/header/bx-search-alt-2.svg"
                        alt="search"
                    >
                    <input id="searchbarin" type="text" placeholder="Buscar">
                </div>
                <a
                <?php
                if(isset($_SESSION["iniciada"]) && $_SESSION["iniciada"] ){
                    echo 'href="./deslog.php"';
                }
                else{
                    echo 'href="./login.html"';

                }
                ?>
                    target="_self"
                    rel="noopeer noreferrer"
                >
                <img
                    src="./img/header/bx-user-pin.png"
                    alt="login"
                >
                </a>
                <a
                    href=""
                    target="_self"
                    rel="noopeer noreferrer"
                >
                <img
                    src="./img/header/bx-cart.svg"
                    alt="cart"
                >
                </a>
            </div>
        </div>
    </header>
    <main>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./img/a.webp" class="d-block" alt="banner1">
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="./img/a2.webp" class="d-block" alt="banner2">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div id="data">
            <div id="datainfo1">
                <img
                src="./img/bxs-truck.svg"
                alt="camion"
            >
                <div class="datatext">
                    <h3 class="tittledata">
                        ENVIAMOS TU COMPRA GRATIS
                    </h3>
                    <p class="txtdata">
                        A partir de $50.000
                    </p>
                </div>
            </div>
            <div class="datainfo2">
                <img
                src="./img/bx-credit-card.svg"
                alt="tarjeta"
            >
                <div class="datatext">
                    <h1 class="tittledata">
                        PAGÁ COMO QUIERAS
                    </h1>
                    <p class="txtdata">
                        3 y 6 cuotas sin interés
                    </p>
                </div>
            </div>
            <div class="datainfo2">
                <img
                src="./img/bx-lock-alt.svg"
                alt="candado"
            >
                <div class="datatext">
                    <h1 class="tittledata">
                        COMPRÁ CON SEGURIDAD
                    </h1>
                    <p class="txtdata">
                        Tus datos siempre protegidos
                    </p>
                </div>
            </div>
        </div>
        <div class="boxproduct">
            <div id="imgproduct1">
                <div class="imgproductdiv">
                    <p class="imgproductbigtxt">
                        CON ESTILO
                    </p>
                    <a class="imgproductlink"
                        href="./productos.php?genero=hombre&tipo=trajes&subtipo=estilo"
                        target="_self"
                        rel="noopeer noreferrer"
                    >
                        <p class="imgproductshorttxt">
                            VER MÁS
                        </p>
                    </a>
                </div>
            </div>
            <div id="imgproduct2">
                <div class="imgproductdiv">
                    <p class="imgproductbigtxt">
                        CLÁSICOS
                    </p>
                    <a class="imgproductlink"
                    href="./productos.php?genero=hombre&tipo=trajes&subtipo=clasicos"
                    target="_self"
                    rel="noopeer noreferrer"
                    >
                        <p class="imgproductshorttxt">
                            VER MÁS
                        </p>
                    </a>
                </div>
            </div>
            <div id="imgproduct3">
                <div class="imgproductdiv">
                    <p class="imgproductbigtxt">
                        ALTERNATIVO
                    </p>
                    <a class="imgproductlink"
                        href="./productos.php?"
                        target="_self"
                        rel="noopeer noreferrer"
                    >
                        <p class="imgproductshorttxt">
                            VER MÁS
                        </p>
                    </a>
                </div>
            </div>
        

        </div>
        <div class="row" id="row1">
            <div class="col-md-12">
                <h2>Productos  en <b>Oferta</b></h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>   
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/CinturonCueroNegro.png" class="img-responsive" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Cinturon Negro de Cuero</h4>									
                                        <p class="item-price"><strike>$65000.0</strike> <b>$60000.0</b></p>
                                        <a href="./producto.php?codigop=33" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/MoñoNegro.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Moño Negro</h4>
                                        <p class="item-price"><strike>$28000.0</strike> <b>$25000.0</b></p>
                                        <a href="./producto.php?codigop=46" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>		
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/TiranteAzul.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Tirante Azul</h4>									
                                        <p class="item-price"><strike>$35000.0</strike> <b>$30000.00</b></p>
                                        <a href="./producto.php?codigop=68" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>								
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/Corbatas.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Promo Corbatas</h4>									
                                        <p class="item-price"><strike>$35000.00</strike> <b>$30000.0</b></p>
                                        <a href="./producto.php?codigop=45" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/PantalonMarronHombre.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Pantalon Marron para Hombres</h4>
                                        <p class="item-price"><strike>$75000.00</strike> <span>$70000.0</span></p>
                                        <a href="./producto.php?codigop=52" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/PantalonAzulMujer.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Pantalon Azul para Mujeres</h4>
                                        <p class="item-price"><strike>$70000.0</strike> <span>$65000.0</span></p>
                                        <a href="./producto.php?codigop=55" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/CamisaCeleste.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Camisa Celeste</h4>
                                        <p class="item-price"><strike>$55000.0</strike> <span>$50000.0</span></p>
                                        <a href="./producto.php?codigop=17" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="thumb-wrapper">
                                    <div class="img-box">
                                        <img src="./img/productos/CamisaNiñoNegraBlanca.png" class="img-responsive" alt="">
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Promo Camisas Niño</h4>
                                        <p class="item-price"><strike>$55000.0</strike> <span>$50000.0</span></p>
                                        <a href="./producto.php?codigop=26" class="btn btn-primary">Agregar al Carrito</a>
                                    </div>						
                                </div>
                            </div>						
                        </div>
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            </div>
        </div>
    </main>
    <footer>
        <div id="foot">
            <div>
                <ul class="footul">
                    <li class="line">
                        Navegacion
                    </li>
                    <li>
                        <a class="footullia"
                        href="./Inicio.php"
                        target="_self"
                        rel="noopeer noreferrer"
                    >
                        <p>
                            Inicio
                        </p>
                    </a>
                    </li>
                    <li>
                        <a class="footullia"
                        href="./productos.php"
                        target="_self"
                        rel="noopeer noreferrer"
                    >
                        <p>
                            Productos
                        </p>
                    </a>
                    </li>
                    <li>
                        <a class="footullia"
                        href="./ayuda.php"
                        target="_self"
                        rel="noopeer noreferrer"
                    >
                        <p>
                            Ayuda
                        </p>
                    </a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="footul">
                    <li class="line">
                        Formas de Pago
                    </li>
                    <div class="footdf">
                        <li>
                            <img class="imgfoot"
                            src="./img/footer/mastercard.png"
                            alt="mastercard"
                            >
                        </li>
                        <li>
                            <img class="imgfoot"
                            src="./img/footer/visa.png"
                            alt="visa"
                            >
                        </li>
                    </div>
                </ul>
                <ul class="footul">
                    <li class="line">
                        Formas de Envio
                    </li>
                    <div class="footdf">
                        <li>
                            <img class="imgfootwd"
                            src="./img/footer/correoarg.jpg"
                            alt="correoarg"
                            >
                        </li>
                        <li>
                            <img class="imgfootwd"
                            src="./img/footer/oca.png"
                            alt="oca"
                            >
                        </li>
                    </div>
                </ul>
            </div>
            <div>
                <ul class="footul">
                    <li class="line">
                        Nuetras Politicas
                    </li>
                    <li>
                        <a class="footullia"
                        href=""
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            Politicas Privadas
                        </a>
                    </li>
                    <li>
                        <a class="footullia"
                        href=""
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            Terminos y Condiciones
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="footul">
                    <li class="line">
                        Contactanos
                    </li>
                    <li class="footdf">
                        <img
                        src="./img/footer/bxs-phone-outgoing.png"
                        alt="phone"
                        >
                        <p>
                            011 4572-2871
                        </p>
                    </li>
                    <li class="footdf">
                        <img
                        src="./img/footer/bx-home.png"
                        alt="house"
                        >
                        <p>
                            Av. Constituyentes 5880
                        </p>
                    </li>
                    <li class="footdf">
                        <img
                        src="./img/footer/bx-envelope.png"
                        alt="mail"
                        >
                        <p>
                            administracion@ipm.edu.ar
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="desplegable.js"></script>
</body>
</html>