<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
          include('../partials/head.php');
    ?>
    <title>Update</title>
</head>
<body>
    <?php 
        include('../partials/header.php');
    ?>

    <?php 
        require_once("../model/connection.php");
        $conn = Connection::Connection();
        $id = $_GET["id"];

        try {
            $query = $conn->query("SELECT * FROM usuario WHERE id_usuario = '$id'");
            $result = $query->fetch(PDO::FETCH_ASSOC);
         } catch (\Throwable $th) {
            echo $th;
        }
    ?>

    <div class="w-full flex justify-start flex-col items-center  mt-10">
            <h1 class="p-2 text-xl text-purple-500 font-bold mt-10">Actualizar mi usuario</h1>
            <form  action="../controller/update.user.controller.php" method="post" class="h-auto bg-white  w-1/4 py-2 px-5 rounded-md shadow-lg flex flex-col justify-center items-center animate__animated animate__bounceIn">
                 <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="id" class="text-semibold text-purple-500">ID: </label>
                    <input type="text" name="id" id="id" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" value="<?php echo $result["id_usuario"]; ?>" >
                </div>

                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="nombre" class="text-semibold text-purple-500">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" value="<?php echo $result["nombre"]; ?>" >
                </div>

                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="correo" class="text-semibold text-purple-500">Email: </label>
                    <input type="text" name="correo" id="correo" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" value="<?php echo $result["correo"]; ?>" >
                </div>
    
                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="contraseña" class="text-semibold text-purple-500">Password: </label>
                    <input type="password" name="contraseña" id="contraseña" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" value="<?php echo $result["contraseña"]; ?>" >
                </div>

                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="direccion" class="text-semibold text-purple-500">Dirección: </label>
                    <input type="text" name="direccion" id="direccion" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" value="<?php echo $result["direccion"]; ?>" >
                </div>

    
                <input type="submit" value="Actualizar" name="actualizar" class="w-full bg-purple-500 text-white rounded-md p-1">
            </form>
        </div>
    
</body>
</html>