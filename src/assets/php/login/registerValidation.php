<?php
// in_array
$file = "../../json/users.json";
$Allusers = file_get_contents($file);
$usersAll = json_decode($Allusers);


function validating($file, $Allusers, $usersAll)
{
    if (($_POST)) {

        $postEmail = $_POST["email"];
        echo $postEmail;
        $postPassword = $_POST["password"];
        $postPassword2 = $_POST["password2"];

        // header(("Location: ./login.php?InvalidPassword"));
        foreach ($usersAll as $user) {
            if ($postEmail !== $user->email && $postPassword == $postPassword2) {
                return $finalInfo = array($postEmail, $postPassword);

                exit();
            }
        }
    }
}
header("Location: ./register.php");
