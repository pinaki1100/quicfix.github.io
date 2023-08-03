<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <style>
        /* CSS Reset - Optional */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    height: 100%;
    width: 1400px;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-image:url("img/admin.jpeg"); 
}

form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: wheat;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  margin-top:250px;
}

.input_field {
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.btn {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: #ffffff;
  text-align: center;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-weight: bold;
}

.btn:hover {
  background-color: #45a049;
}


    </style>
</head>
<body>
    
    <form action="resetpassword.php"method="post">
        <div class="input_field">
          <label>Enter Your New Password</label>  
          <input type="password" class = "password" name="password" required>
    </div>
    <div class="input_field"></div>
    <input type="submit" name ="submit"class="btn">
    </form>
    <?php
    include "form/config.php";
    if(isset($_POST['submit'])){
        $password=$_POST['password'];
        $password=sha1($password);
        session_start();
        $email=$_SESSION['email'];
        $user_name=$_SESSION['user_name'];
        $qry1="UPDATE data_details set password='$password 'where user_name='$user_name'";
        if(mysqli_query($con,$qry1)){
            ?>
            <script>
                alert("password reset successfully");
                window.location="form/login.php";
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