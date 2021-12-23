

<?php
    $currentDirectory =  $_POST['url'];

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ["doc","csv","jpg","png","txt","ppt","odt","pdf","zip","rar","exe","svg","mp3","mp4"]; // These will be the only file extensions allowed 

    $fileName = $_FILES['fileToUpload']['name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileTmpName  = $_FILES['fileToUpload']['tmp_name'];
    $fileType = $_FILES['fileToUpload']['type'];
    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

      if (! in_array($fileExtension,$fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
      }

      if ($fileSize > 4000000) {
        $errors[] = "File exceeds maximum size (4MB)";
      }

      if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

        if ($didUpload) {
          echo "The file " . basename($fileName) . " has been uploaded";
        } else {
          echo "An error occurred. Please contact the administrator.";
        }
      } else {
        foreach ($errors as $error) {
          echo $error . "These are the errors" . "\n";
        }
      }

    }
    header("location: ../index2.php?carpeta=$currentDirectory")
?>