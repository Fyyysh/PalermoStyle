<?php
session_start();

// Verificar si se ha proporcionado el ID del producto a través de GET
if (isset($_GET['codigop'])) {
    $producto_id = $_GET['codigop'];
    
    // Definir la consulta después de haber recibido el ID
    $servername = "127.0.0.1";
    $database = "PalermoStyle";
    $username = "alumno";
    $password = "alumnoipm";

    // Establecer la conexión a la base de datos
    $conexion = mysqli_connect($servername, $username, $password, $database);
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    else{
        $query = "select CodigoR, PrecioR, NombreR, NombreArchivoR, GeneroR, TipoR, SubtipoR from Ropa where CodigoR = $producto_id";
        $query2 = "select * from Ropa_has_Talle_has_Modelo_has_Color where Ropa_CodigoRTM = $producto_id";
        $resultado = mysqli_query($conexion, $query);
        $resultado2 = mysqli_query($conexion, $query2);

        if ($resultado) {
        // Obtener el primer resultado
            $fila = mysqli_fetch_assoc($resultado);
        } 
        else {
            echo "Error en la consulta1: " . mysqli_error($conexion);
        }
        if ($resultado2) {
            // Obtener el segundo resultado
                $fila2 = mysqli_fetch_assoc($resultado2);
            } 
            else {
                echo "Error en la consulta2: " . mysqli_error($conexion);
            }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./img/logoo" type="image/x-icon">
    <link rel="stylesheet" href="stylebase.css">
    <link rel="stylesheet" href="styleproducunico.css">
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
        <div id="center">
            <div id="left">
                <div id="img">
                    <img 
                        <?php
                            if($fila["NombreArchivoR"] == "CinturonNegroHebillaPersonalizada.png" || $fila["NombreArchivoR"] == "CamisaNiñoNegraBlanca.png" ){
                                echo 'class="imgproductos2"';
                            } 
                            else if($fila["GeneroR"] == "hombre" && $fila["TipoR"] == "trajes"){
                                echo 'class="imgproductos2"';
                            }
                            else{
                                echo 'class="imgproductos1"';
                            }
                        ?>
                            src="./img/productos/<?php echo $fila["NombreArchivoR"]?>"
                    >
                </div>
            </div>
            <div id="right">
                <form id="rightform">
                    <div>
                        <p class=producttext>
                            <?php
                            echo $fila["NombreR"];
                            ?>
                    </p>
                    </div>
                    <div>
                    <p class="pricetext">
                        $
                        <?php
                                echo $fila["PrecioR"];
                            ?>
                        </p>
                    </div>
                    <div id="tallespace">
                        <h4>Seleccione su Talla</h4>
                        <div id="talles">
                            <?php
                            while($fila2=mysqli_fetch_assoc($resultado2)){
                                ?>
                                <div class="talle-container">
                                    <div class="talle" onclick="seleccionarTalla(this)" name="talleselect">
                                        <?php echo $fila2["Talle_NombreRTM"];
                                        ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div>
                        <h4> Cantidad </h4>
                        <div>
                            <select id="cantidadbox" name="cantselect">
                                <option> 1 </option>
                                <option> 2 </option>
                                <option> 3 </option>
                                <option> 4 </option>
                                <option> 5 </option>
                                <option> 6 </option>
                                <option> 7 </option>
                                <option> 8 </option>
                                <option> 9 </option>
                                <option> 10 </option>
                                <option> 11 </option>
                                <option> 12 </option>
                            </select>
                        </div>
                    </div>
                    <a
                        href="./compra.php"
                        
                        target="_self"
                        rel="noopeer noreferrer"
                        >
                        <p id="butcomprar">
                            Comprar
                        </p>
                    </a>
                </form>
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
    <script src="desplegable.js"></script>
    <script src="filtros.js"></script>
    <script src="talle.js"></script>
</body>
</html>