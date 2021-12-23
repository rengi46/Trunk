<?php

if(isset($_POST)){
    $arr_clients= array("name" =>$_POST["name"],"email"=> $_POST["email"], "password" => $_POST["password"] );
    // $json_string = json_encode($arr_clients);
    $file="../../json/users.json";
    $Allusers= file_get_contents($file);
    $usersAll= json_decode($Allusers);
    print_r($arr_clients);
    // print_r($usersAll);
    array_push($usersAll , $arr_clients);
    $jsonUsers= json_encode($usersAll);
    file_put_contents($file, $jsonUsers);
    $nombreUser=$arr_clients["email"];
    mkdir("../../root/$nombreUser",0777);
    header(("Location:../../index.php"));
}
