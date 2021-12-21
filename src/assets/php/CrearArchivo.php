<?php
$direcion=$_POST["url"];
echo $direcion;
if($_POST["ext"]=="Carpeta"){
    $fichero= $_POST["nameFile"];
    mkdir($direcion."/".$fichero."/");
}
else{
    $fichero= $_POST["nameFile"].$_POST["ext"];
    fopen($direcion."/".$fichero,"w+");
}
header("location: .././index2.php?carpeta=".$direcion);