<?php
    require_once("../model/connection.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
 

    $conn = Connection::Connection();
    
    try {
        $query = $conn->prepare("UPDATE usuario SET nombre = ?, contraseña = ?, correo = ?, direccion = ? WHERE id_usuario = ?");
        $result = $query->execute( array($nombre, $contraseña, $correo, $direccion, $id) );
        if($result){
            header("Location: ../view/usuario.php");
              //$_SESSION['usuario'] = $result['nombre'];
        }else{
            echo "Error al actualizar usuario";
        }
    } catch (\Throwable $th) {
        echo $th;
    }


 ?>