<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="lstyle.css">
</head>
<style>
   body{
    height: 100%;
    width: 1400px;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-image:url("../img/admin.jpeg"); 
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
   
  }
  .container
{
    border: 2px solid black;
    max-width: 500px;
    width: 100%;
    background-color: wheat;
    margin-top: 100px !important;
    margin:auto;
    padding: 40px;
    box-shadow: 5px 5px 5px rgba(0,0,0,0.5);    
}
</style>
<body>
    <div class="container">
        <div class="title">Login Page</div>
        <form action="login.php" method= "post">
            <div class="form">
                <div class="input_field">
                    <label>Email :</label>
                    <input type="text" name="email">
                </div>
                <div class="input_field">
                    <label>Password :</label>
                    <input type="password" name="password">
                </div>
                <div class="input_field">
                   <label> Captcha :</label><br>
                    <img src="captcha.php" alt=""><br>
                    
                </div>
                <div class="input_field">
                   <label> Enter Captcha :</label><br>
                    <input type="text"name="captcha" required>
                </div>
                <div class="input_field"></div>
                <input type="submit" name ="submit"class="btn">
            </div>
            <div class="pinaki">
                New User : <a href="rform.php"> Register Here</a>
                <br>
                <br>
                 <a href="../forgot.php">Forgot Password</a>    
            </div>
        </form>
    </div>
        <?php
        session_start();
        if(isset($_POST['submit']))
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $password=sha1($password);
            $captcha=$_POST['captcha'];
            $captcha_code=$_SESSION['captcha_code'];
            if($captcha_code===$captcha){

                $qry = "select * from data_details where email='$email' and password='$password'";
                $res=mysqli_query($con,$qry);
                $data=mysqli_fetch_assoc($res);
                if(mysqli_num_rows($res)>0)
                {
                    session_start();
                    $_SESSION['email']=$email;
                    $_SESSION['user_name']=$data['user_name'];
                    header('location:../requestor.php');
                }
                else
                {
                    echo"not correct"; 
                }
            }
        }
        ?>
</body>
</html>