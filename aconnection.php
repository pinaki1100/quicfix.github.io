<?php
include './form/config.php';
        if(isset($_POST['submit']))
        {
            $mobile=$_POST['mobile'];
            $password=$_POST['password'];
            if($mobile==6370463226 && $password=='Pinaki@123')
            {
                header('location:apennal.php');
            }
else{
    echo"invalid login";
}
          
        }
        ?>