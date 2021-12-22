<?php

<<<<<<< HEAD
require_once("./registerValidation.php");
$finalInfo = validating($file, $Allusers, $usersAll);
global $postEmail;
global $postPassword;
$arr_clients = array("email" => $finalInfo[1], "password" => $finalInfo[2]);
// $json_string = json_encode($arr_clients);
echo $finalInfo;
$file = "../../json/users.json";
$Allusers = file_get_contents($file);
$usersAll = json_decode($Allusers);
// print_r($Allusers);
print_r($usersAll);
array_push($usersAll, $arr_clients);
$jsonUsers = json_encode($usersAll);
file_put_contents($file, $jsonUsers);
// header(("Location:./login.php"));
=======
if(isset($_POST)){
    $arr_clients= array("name" =>$_POST["name"],"email"=> $_POST["email"], "password" => $_POST["password"] );
    // $json_string = json_encode($arr_clients);
    $file="../../json/users.json";
    $Allusers= file_get_contents($file);
    $usersAll= json_decode($Allusers);
    // print_r($Allusers);
    print_r($usersAll);
    array_push($usersAll , $arr_clients);
    $jsonUsers= json_encode($usersAll);
    file_put_contents($file, $jsonUsers);
    $nombreUser=$arr_clients["email"];
    mkdir("../../root/$nombreUser",0777);
    header(("Location:../../index.php"));
}
>>>>>>> 28ced58c46ddd57ca4119bb3a82afec2583e8727
