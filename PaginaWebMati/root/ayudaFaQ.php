<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logoo" type="image/x-icon">
    <link rel="stylesheet" href="stylebase.css">
    <link rel="stylesheet" href="styleayuda.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <title>Palermo Style • Ayuda</title>
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
                        <p class="upizqtxt">
                            Inicio
                        </p>
                    </a>
                    <div id="menu"> 
                        <a  class="upizq"
                        href="./productos.php"
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            <p class="upizqtxt" id="upizqp">
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
                    href="./ayuda.html"
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
        <div id="midup">
            <a class="link"
            href="./ayuda.html"
            target="_self"
            rel="noopeer noreferrer"
            >
            Ayuda> 
            </a>
            <a class="link"
            href="./ayudaFaQ.html"
            target="_self"
            rel="noopeer noreferrer"
            >
            FaQ>
            </a>
        </div>
        <div id="mid2">
            <div>
                <div class="compras-panel">
                        <div class="compras-item">
                            <span class="icon">💳</span>
                            <div class="compras-text">
                                <h3>Metodos de Pago</h3>
                                <p>Debito y credito tanto como de mastercard como de visa</p>
                            </div>
                        </div>
                        <div class="compras-item">
                            <span class="icon">🚚</span>
                            <div class="compras-text">
                                <h3>Metodos de Envio</h3>
                                <p>Confiamos en correo argentino y oca para el traslado seguro de nuestros productos hasta tu casa</p>
                            </div>
                        </div>
                        <div class="compras-item">
                            <span class="icon">🚚</span>
                            <div class="compras-text">
                                <h3>Calculo de Envio</h3>
                                <p>Depende del metodo, ya que el calculo es bajo las politicas del metodo elegido</p>
                            </div>
                        </div>
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
                        href="./ayuda.html"
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
    <script src="desplegable.js"></script>
</body>
</html>