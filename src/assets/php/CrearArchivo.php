<?php
// require_once("./leerCarpeta.php");
// echo $direcion;
session_start();
if(isset($_POST["url"])){
    $direcion=$_POST["url"];
    header("location: .././index2.php?carpeta=".$direcion);
}else{
    $direcion=("../root"."/".$_SESSION["email"]);
    header("location: .././index.php");
}
if($_POST["ext"]=="Carpeta"){
    $fichero= $_POST["nameFile"];
    mkdir($direcion."/".$fichero."/");
}
else{
    $fichero= $_POST["nameFile"].$_POST["ext"];
    fopen($direcion."/".$fichero,"w+");
}
