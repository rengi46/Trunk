<?php
$direcion=$_POST["url"];

echo 'a';

echo $direcion;

if($_POST["ext"]=="Carpeta"){
    $fichero= $_POST["newNameFile"];
    mkdir($direcion."/".$fichero."/");
}
else{
    $fichero= $_POST["newNameFile"].$_POST["ext"];
    fopen($direcion."/".$fichero,"w+");
}
/* header("location: .././index2.php?carpeta=".$direcion); */