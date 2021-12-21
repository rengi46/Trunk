<?php
$direcion=$_POST["url"];
if($_POST["ext"]=="Carpeta"){
    $fichero= $_POST["nameFile"];
    echo $fichero;
    mkdir($direcion."/".$fichero);
}
else{
    $fichero= $_POST["nameFile"].$_POST["ext"];
    echo $fichero;
    fopen($direcion."/".$fichero,"w+");
}
header("location: .././index2.php?carpeta=".$direcion);