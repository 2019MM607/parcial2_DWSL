<!DOCTYPE html>
<html lang="en">
<head>
   <?php 
        include('partials/head.php');
   ?>
    <title>Home</title>
</head>
<body>
    <?php
        //require_once("./controller/user.controller.php")
    ?>

    <div class="w-full h-screen bg-purple-500 flex flex-col justify-start items-center">
        <h1 class="p-2 text-xl text-white font-bold mt-10">Login</h1>
        <form  action="controller/auth.controller.php" method="post" class="h-auto bg-white py-2 px-5 rounded-md shadow-lg flex flex-col justify-center items-center animate__animated animate__flipInY">
            <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                <label for="email" class="text-semibold text-purple-500">Email: </label>
                <input type="text" name="email" id="email" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
            </div>

            <div class="w-fit p-1 flex justify-center items-center flex-col mb-5">
                <label for="password" class="text-semibold text-purple-500">Password: </label>
                <input type="password" name="password" id="password" class="rounded-full  ml-2 p-1 shadow-sm focus:outline-none border" autocomplete="off" >
            </div>

            <input type="submit" value="Login" name="login" class="w-full bg-purple-500 text-white rounded-md p-1">
        </form>
    </div>
    
</body>
</html>