<?php 
    require_once("model/user.model.php");

    $user = new User();
    $users = $user->getAll();

    require_once("./view/user.view.php");

?>