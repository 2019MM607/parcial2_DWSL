<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
        include('../partials/head.php');
   ?>
    <title>Home</title>
</head>
<body>
    <?php 
        include('../partials/header.php');
    ?>

    <div>
        <div class="flex justify-end items-center mt-10">
            <?php if ($_SESSION['rol'] = 'usuario'){ ?>
            <?php $id = $_SESSION['id']; ?>
            <a href="./update.user.php?id=<?php echo $id ?>" class="mr-10">
                <i class="bi bi-pencil-square text-purple-500 font-bold"></i>
                <span class="text-purple-500">Editar mi información</span>
            </a>
        </div>

        <?php }?>
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr class="border-b animate__animated animate__lightSpeedInRight">

                        <?php 
                            if ($usuario->nombre == $_SESSION['usuario']) {
                        ?>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->nombre ?></td>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->correo ?></td>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->contraseña ?></td>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->direccion ?></td>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->rol ?></td>
                            <td class="text-white m-5 px-5 text-center py-1 bg-purple-500"><?php echo $usuario->creadoen ?></td>
                        <?php } else { ?>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->nombre ?></td>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->correo ?></td>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->contraseña ?></td>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->direccion ?></td>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->rol ?></td>
                            <td class="text-gray-400 m-5 px-5 text-center py-1"><?php echo $usuario->creadoen ?></td>
                        <?php } ?>

                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
        </div>
</body>
</html>