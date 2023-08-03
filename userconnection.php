<?php
include './form/config.php';
        session_start();
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=sha1($password);
           

                $qry = "select * from data_details where email='$email' and password='$password'";
                $res=mysqli_query($con,$qry);
                $data=mysqli_fetch_assoc($res);
                if(mysqli_num_rows($res)>0)
                {
                    session_start();
                    $_SESSION['user_name']=$data['user_name'];
                    header('location:userdashboard.php');
                }
                else
                {
                    echo"not correct";
                }
            }
        
        ?>