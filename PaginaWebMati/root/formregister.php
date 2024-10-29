<?php
	$dni= $_POST["dni"];
    $nombre= $_POST["nombre"];
	$apellido= $_POST["apellido"];
    $telefono= $_POST["telefono"];
    $email= $_POST["mail"];
    $contraseña= $_POST["contraseña"];
    $contraseña2= $_POST["contraseña2"];
    $servername = "127.0.0.1";
    $database = "PalermoStyle";
    $username = "alumno";
    $password = "alumnoipm";
    
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        if($contraseña==$contraseña2){
            $query = "insert into Cliente values('$dni', '$nombre', '$apellido', '$telefono', '$email', '$contraseña', '$contraseña');";
            $resultado=mysqli_query($conexion, $query);
            session_start();
            $_SESSION["iniciada"] = true;
            header("location:Inicio.html");
            // Aquí puedes proceder a guardar la contraseña, preferiblemente cifrada con password_hash()
            // Ejemplo: $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }
        else{
            header("Location:register.html?error=claves");
            echo "Las contraseñas no coinciden.";
        }
    }
?>