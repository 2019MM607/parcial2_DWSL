<?php
    require_once("../model/connection.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
 

    $conn = Connection::Connection();
    session_start();

    try {
        $query = $conn->query("SELECT * FROM usuario WHERE correo = '$email' AND contraseña = '$password'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            $_SESSION['usuario'] = $result['nombre'];
            $_SESSION['rol'] = $result['rol'];
            $_SESSION['id'] = $result['id_usuario'];

            if($result['rol'] == 'administrador'){
                header("Location: ../view/admin.php");
            }else{
                header("Location: ../view/usuario.php");
            }
        }else{
            echo "Login incorrecto";
            header("Location: ../index.php");
        }
    } catch (\Throwable $th) {
        echo $th;
    }

 ?>