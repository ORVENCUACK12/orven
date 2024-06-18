<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "orvencuack";

    $enlace = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos);

    if(isset($_POST['registro'])){
        $nombre= $_POST ['nombre'];
        $telefono= $_POST ['telefono'];
        $correo= $_POST ['correo'];
        $mensaje= $_POST ['mensaje'];

        $insertarDatos = "INSERT INTO contacto VALUES('$nombre','$telefono','$correo','$mensaje','')";
        $ejecutarInsertar = mysqli_query ($enlace,$insertarDatos);

        if($ejecutarInsertar){
            
            header('Location: formulaRIO.html');
            exit(); 
        } else {
            echo "Error al enviar el formulario. Por favor, inténtalo de nuevo.";
        }
    }
    
?>