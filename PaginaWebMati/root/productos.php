<?php 
$query = "select PrecioR, NombreArchivoR, GeneroR, TipoR, SubtipoR from Ropa";

if(isset($_GET["genero"])){
    $query = $query . "where GeneroR = '".$_GET["genero"]."' ";
    if(isset($_GET["tipo"])){
        $query = $query . "and TipoR = '".$_GET["tipo"]."' ";
        if(isset($_GET["subtipo"])){
            $query = $query . "and SubtipoR = '".$_GET["subtipo"]."' ";
        }
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logoo" type="image/x-icon">
    <link rel="stylesheet" href="stylebase.css">
    <link rel="stylesheet" href="styleproduc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    
    <title>Palermo Style • Productos</title>
</head>
<body>
    <header>
        <div id="head">
            <div id="headpart1">
                <a class="link"
                href="./Inicio.html"
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
                    href="./Inicio.html"
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
                                        href="./productos.php?genero=hombre?tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre?tipo=camisas"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Camisas
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre?tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=hombre?tipo=calzado"
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
                                        href="./productos.php?genero=mujer?tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer?tipo=camisas"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Camisas
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer?tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=mujer?tipo=calzado"
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
                                        href="./productos.php?genero=ninios?tipo=trajes"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Trajes
                                        </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios?tipo=camisas"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Camisas
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios?tipo=pantalones"
                                        target="_self"
                                        rel="noopeer noreferrer">
                                        Pantalones
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=ninios?tipo=calzado"
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
                                        href="./productos.php?genero=accesorios?tipo=cinturon"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Cinturon
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios?tipo=corbata"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Corbata
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios?tipo=monio"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                        Moño
                                    </a>
                                    </li>
                                    <li>
                                        <a class="midtext"
                                        href="./productos.php?genero=accesorios?tipo=tirantes"
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
                    href="./login.html"
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
        <div class="df">
            <div id="left">
                <a
                href="./productos.php"
                target="_self"
                rel="noopeer noreferrer"
                >
                    Filtros
                </a>
                <ul>
                    <li>
                        <div class="imag">
                            <a 
                            href="./productos.php?genero=hombre"
                            target="_self"
                            rel="noopeer noreferrer"
                            >
                                Hombre
                            </a>
                            <img
                            src="./img/productos/boxicon/bx-chevron-down.svg"
                            id="pass-icon1a"
                            class="icon"
                            onclick="toggleFilter('filter1a', 'pass-icon1a')">            
                        </div>
                        <ul id="filter1a">
                            <li>
                                <a 
                                href="./productos.php?genero=hombre?tipo=trajes"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Trajes
                                </a>
                                <img
                                src="./img/productos/boxicon/bx-chevron-down.svg"
                                id="pass-icon1b"
                                class="icon"
                                onclick="toggleFilter('filter1b', 'pass-icon1b')"
                                > 
                                <ul id="filter1b">
                                    <li>
                                        <a 
                                        href="./productos.php?genero=hombre?tipo=trajes?subtipo=estilo"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Con Estilo
                                        </a>
                                    </li>
                                    <li>
                                        <a 
                                        href="./productos.php?genero=hombre?tipo=trajes?subtipo=clasicos"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Clasicos
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=hombre?tipo=camisas"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Camisas
                                </a>
                            </li>
                            <li>
                                <a
                                href="./productos.php?genero=hombre?tipo=pantalones"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Pantalones
                                </a>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=hombre?tipo=calzado"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Calzado
                                </a>
                                <img
                                src="./img/productos/boxicon/bx-chevron-down.svg"
                                id="pass-icon1c"
                                class="icon"
                                onclick="toggleFilter('filter1c', 'pass-icon1c')"> 
                                <ul id="filter1c">
                                    <li>
                                        <a 
                                        href="./productos.php?genero=hombre?tipo=calzado?subtipo=triangular"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Punta Triangular
                                        </a>
                                    </li>
                                    <li>
                                        <a 
                                        href="./productos.php?genero=hombre?tipo=calzado?subtipo=cuadrada"
                                        target="_self"
                                        ?genero=mujer?tipo=pantalones            rel="noopeer noreferrer"
                                        >
                                            Punta Cuadrada
                                        </a>
                                    </li>   
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a 
                        href="./productos.php?genero=mujer"
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            Mujer
                        </a>
                        <img
                        src="./img/productos/boxicon/bx-chevron-down.svg"
                        id="pass-icon2a"
                        class="icon"
                        onclick="toggleFilter('filter2a', 'pass-icon2a')"> 
                        <ul id="filter2a">
                            <li>
                                <a
                                href="./productos.php?genero=mujer?tipo=trajes"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Trajes
                                </a>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=mujer?tipo=camisas"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Camisas
                                </a>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=mujer?tipo=pantalones"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Pantalones
                                </a>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=mujer?tipo=calzado"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Calzado
                                </a>
                                <img
                                src="./img/productos/boxicon/bx-chevron-down.svg"
                                id="pass-icon2b"
                                class="icon"
                                onclick="toggleFilter('filter2b', 'pass-icon2b')"
                                > 
                                <ul id="filter2b">
                                    <li>
                                        <a 
                                        href="./productos.php?genero=mujer?tipo=calzado?subtipo=alto"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Alto
                                        </a>
                                    </li>
                                    <li>
                                        <a 
                                        href="./productos.php?genero=mujer?tipo=calzado?subtipo=bajo"
                                        target="_self"
                                        rel="noopeer noreferrer"
                                        >
                                            Bajo
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a 
                        href="./productos.php?genero=ninios"
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            Niños
                        </a>
                        <img
                        src="./img/productos/boxicon/bx-chevron-down.svg"
                        id="pass-icon3a"
                        class="icon"
                        onclick="toggleFilter('filter3a', 'pass-icon3a')"> 
                        <ul id="filter3a">
                            <li>
                                <a 
                                href="./productos.php?genero=ninios?tipo=trajes"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Trajes
                                </a>
                            </li>
                            <li>
                                <a 
                                href="./productos.php?genero=ninios?tipo=camisas"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Camisas
                                </a>
                            </li>
                            <li>
                            <a 
                                href="./productos.php?genero=ninios?tipo=pantalones"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Pantalones
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a 
                        href="./productos.php?genero=accesorios"
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                            Accesorios
                        </a>
                        <img
                        src="./img/productos/boxicon/bx-chevron-down.svg"
                        id="pass-icon4a"
                        class="icon"
                        onclick="toggleFilter('filter4a', 'pass-icon4a')"> 
                        <ul id="filter4a">
                            <li>
                                <a
                                href="./productos.php?genero=accesorios?tipo=cinturon"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Cinturon
                                </a>
                            </li>
                            <li>
                                <a
                                href="./productos.php?genero=accesorios?tipo=corbata"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Corbata
                                </a>
                            </li>
                            <li>
                                <a
                                href="./productos.php?genero=accesorios?tipo=monio"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Moño
                                </a>
                            </li>
                            <li>
                                <a
                                href="./productos.php?genero=accesorios?tipo=tirantes"
                                target="_self"
                                rel="noopeer noreferrer"
                                >
                                    Tirantes
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id="right">
                <?php
                    $servername = "127.0.0.1";
                    $database = "PalermoStyle";
                    $username = "alumno";
                    $password = "alumnoipm";

                    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

                    if (!$conexion) {
                        die("Conexion fallida: " . mysqli_connect_error());
                    }
                    else{
                        $resultado=mysqli_query($conexion, $query);
                        while($fila=mysqli_fetch_assoc($resultado)){
                        ?>
                <div class="box">
                    <img class="imgproductos"
                        src="./img/productos/<?php echo $fila["NombreArchivoR"]?>"
                    >
                    <p class="txtprecio">
                        Precio: <?php echo $fila["PrecioR"]?>
                    </p>
                </div>
                <?php
                        }
                    }
                ?>
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
                        href="./Inicio.html"
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
    <script src="filtros.js"></script>
</body>
</html>