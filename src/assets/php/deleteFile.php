<!-- <a href="?delete=1"></a> -->

<?php
    if(isset($_GET['delete']))
    {
        unlink(__FILE__);
    }
?>