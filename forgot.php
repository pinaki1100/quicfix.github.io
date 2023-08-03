<?php include 'form/config.php';?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>
    <div class="container">
        <div class="title">Recovery Page</div>
        <form action="forgot.php" method= "post">
            <div class="form">
                <div class="input_field">
                    <label>Email :</label>
                    <input type="email" name="email">
                </div>
               
                <div class="input_field"></div>
                <input type="submit" name ="submit"class="btn">
            </div>
        </form>  
    </div>
    <?php
    session_start();
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $qry= "SELECT * FROM data_details where email='$email'";
        $res=mysqli_query($con,$qry);
        $data=mysqli_fetch_assoc($res);
        if(mysqli_num_rows($res)>0){
            $_SESSION['email']=$email;
            $_SESSION['user_name']=$data['user_name'];
            ?>
            <script>
            alert('valid user_name');
            window.location="resetpassword.php";
        </script>
        <?php
        }
        else{
            echo"Error:",mysqi_error($con);
        }
    }
    ?>
</body>
</html>