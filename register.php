<?php

    include "config.php";

    if(isset($_GET['stud_id']))
    {
        $reg = mysqli_query($conn,"update tb_add set reg_member=reg_member+1 where id='".$_GET['stud_id']."'");

        if($reg)
        {
            echo "<script>;";
            echo "alert('Registration succesful');";
            echo 'window.location.href="index.php";';
            echo "</script>;";
        }

        else
        {
            echo "<script>;";
            echo "alert('Data error......');";
            echo 'window.location.href="index.php";';
            echo "</script>;";
        }
    }

?>
