
<?php 
    require_once("../model/connection.php");

    $id = $_GET['id'];

    $conn = Connection::Connection();

    try {
        $query = $conn->query("DELETE FROM usuario WHERE id_usuario = '$id'");
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if($result){
            header("Location: ../view/admin.php");
        }else{
            echo "error al borrar usuario";
            header("Location: ../view/admin.php");
        }
    } catch (\Throwable $th) {
        echo $th;
    }
?>