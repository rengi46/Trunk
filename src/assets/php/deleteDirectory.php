<!-- <a href="?delete=1"></a> -->

<?php

        $Rpath=$_POST["url"];
        $pathFather=dirname($Rpath);
        Delete($Rpath);
        function Delete($path)
        {
            if (is_dir($path) === true)
            {
                $files = array_diff(scandir($path), array('.', '..'));
        
                foreach ($files as $file)
                {
                    Delete(realpath($path) . '/' . $file);
                }
        
                return rmdir($path);
            }
        
            else if (is_file($path) === true)
            {
                return unlink($path);
            }
        
            return false;
        }
        header("location: ../index2.php?carpeta=$pathFather");
    
?>