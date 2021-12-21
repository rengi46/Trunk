<?php
// in_array
$fil="C:/xampp/htdocs/php/proyectos/Trunk/src/assets/json/users.json";
$Allusers= file_get_contents($fil);
$usersAll= json_decode($Allusers);

if (($_POST)){
    $postEmail= $_POST["email"];
    $postPassword= $_POST["password"];
    header(("Location: ./login.php?InvalidPassword"));
    foreach ($usersAll as $user ) {
        print_r($user->name);
        if($postEmail == $user->email){
            if($postPassword == $user->password){
                session_start();
                $_SESSION["email"]= $postEmail;
                $_SESSION["user"]= $user->name;
                $_SESSION["password"]=$postPassword;
                header("Location: ../../index.php");
                exit();
            }
        }
    }
}

