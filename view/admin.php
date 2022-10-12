<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
        include('../partials/head.php');
   ?>
    <title>Admin</title>
</head>
<body >
    <?php 
        include('../partials/header.php');
    ?>

    <div class="padre w-full flex">
         <div class="w-full flex justify-start flex-col items-center  mt-10 w-1/3 ml-2">
            <h1 class="p-2 text-xl text-purple-500 font-bold mt-10">Crear usuario</h1>
            <form  action="../controller/create.controller.php" method="post" class="h-auto bg-white w-full py-2 px-5 rounded-md shadow-lg flex flex-col justify-center items-center animate__animated animate__bounceIn">
                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="nombre" class="text-semibold text-purple-500">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
                </div>

                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="correo" class="text-semibold text-purple-500">Email: </label>
                    <input type="text" name="correo" id="correo" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
                </div>
    
                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="contraseña" class="text-semibold text-purple-500">Password: </label>
                    <input type="password" name="contraseña" id="contraseña" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
                </div>

                <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="direccion" class="text-semibold text-purple-500">Dirección: </label>
                    <input type="text" name="direccion" id="direccion" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
                </div>

                 <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                    <label for="rol" class="text-semibold text-purple-500">Rol: </label>
                    <select name="rol" id="rol" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border">
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuario</option>
                    </select>
                </div>
    
                <input type="submit" value="Crear" name="crear" class="w-full bg-purple-500 text-white rounded-md p-1">
            </form>
        </div>
        
        <div class="w-full flex justify-center items-center mt-10 mb-10 ">
            <?php 
                require_once("../model/connection.php");
                $conn = Connection::Connection();
                try {
                    $query = $conn->query("SELECT * FROM usuario");
                    $usuarios = $query->fetchAll(PDO::FETCH_OBJ);
                } catch (\Throwable $th) {
                    echo $th;
                }
            ?>
            <table>
                <thead>
                    <tr>
                        <th class="text-purple-500 " >Nombre</th>
                        <th class="text-purple-500 " >Correo</th>
                        <th class="text-purple-500 " >Contraseña</th>
                        <th class="text-purple-500 " >Dirección</th>
                        <th class="text-purple-500 " >Rol</th>
                        <th class="text-purple-500" >Inscripcion</th>
                        <th class="text-purple-500 " >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr class="border-b animate__animated animate__lightSpeedInRight">
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->nombre ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->correo ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->contraseña ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->direccion ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->rol ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->creadoen ?></td>
                        <td class="text-gray-400 m-5 px-5 text-center py-1">
                            <a class="hover:bg-purple-500 hover:rounded-full p-1" href="../controller/delete.controller.php?id=<?php echo $usuario->id_usuario ?>" class="text-red-500"><i class="bi bi-trash text-purple-500 hover:text-white hover:font-semibold"></i></a>
                            <a class="hover:bg-purple-500 hover:rounded-full p-1" href="update.view.php?id=<?php echo $usuario->id_usuario ?>" class="text-blue-500"><i class="bi bi-pencil text-purple-500 hover:text-white hover:font-semibold"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


</body>
</html>