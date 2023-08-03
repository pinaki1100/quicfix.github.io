
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="rstyle.css">
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
  
</style>

<body>

    <div class="container">
        <div class="title">Regestration Form</div>
        <form action="connection.php" method="post">
            <div class="form">
                <div class="input_field">
                    <label>First Name :</label>
                    <input type="text" class = "name" name="firstname" required>
                </div>
                <div class="input_field">
                    <label>Last Name :</label>
                    <input type="text" class = "name" name="lastname" required>
                </div>
                <div class="input_field">
                    <label>User Name :</label>
                    <input type="text" class = "name" name="user_name" required>
                </div>
                <div class="input_field">
                    <label>Email :</label>
                    <input type="text" class = "email"name="email" required>
                </div>
                <div class="input_field">
                    <label>Mobile :</label>
                    <input type="text" class = "mobile"name="mobile"required>
                </div>
                <div class="input_field">
                    
                    <label>Gender :</label>
                    <select class="selector" name="gender">
                    <option>select</option>
                    <option>male</option>
                    <option>female</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>DOB :</label>
                    <input type="date" class = "dob" name="dob">
                </div>

                <div class="input_field">
                    <label>password :</label>
                    <input type="password" class = "password" name="password">
                </div>
                <div class="input_field">
                    <label>confirm password :</label>
                    <input type="password" class = "confirmpassword" name="confirmpassword">
                </div>
                <div class="input_field">
                    <label>Address :</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
                <div class="field">
                     <span class="checkmark"></span>
                     <input type="checkbox" class="check" name="check">
                    <p class="pg">Tearms And Conditions</p>
                    
                    
                </div>
                <div class="infut_field"></div>
                <input  class="reg" type="submit" name="submit" value="Register" class="btn">
            </div>
            <div class="pinaki">
            Already Have An Account ? <a href="Login.php">Login</a>
            </div>
        </form>
    </div>
   
 





</body>
</html>
