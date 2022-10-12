<?php
    require_once("../model/connection.php");

    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $rol = $_POST['rol'];
    $creadoen = date('m-d-Y h:i:s a', time());  
    
    $conn = Connection::Connection();

    session_start();
    try {
        $query = $conn->prepare("INSERT INTO usuario (nombre, contraseña, correo, direccion, rol, creadoen) VALUES (?, ?, ?, ?, ?, ?)");
        $result = $query->execute( array($nombre, $contraseña, $correo, $direccion, $rol, $creadoen) );
        if($result){
            echo "Usuario creado";
            header("Location: ../view/admin.php");
        }else{
            echo "Error al crear usuario";
        }
    } catch (\Throwable $th) {
        echo $th;
    }

 ?>