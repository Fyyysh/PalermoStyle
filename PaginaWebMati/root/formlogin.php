<?php
    $user= $_POST["email"];
    $password= $_POST["contraseña"];
    $servername = "127.0.0.1";
    $database = "PalermoStyle";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion

    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $query = "select ContraseñaC from usuario where MailC = '$user';";
        $resultado=mysqli_query($conexion, $query);
        $fila = mysqli_fetch_assoc($resultado);
                // Verificar si la contraseña y el usuario coinciden
        if (mysqli_num_rows($resultado) == 0){
            header("Location: login.html?error=MailDesconocido");
        }
        else {
            if ($password === $fila["ContraseñaC"]) {
                session_start();
                $_SESSION["iniciada"] = true;
                header("Location: Inicio.php");
            } 
            else {
                header("Location: login.html?error=ContraseñaIncorrecta");
            }
        }
    }
?>