
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
    <style>
        body{
            background-image:url("img/admin.jpeg");
            background-attachment: fixed;
             background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">User Page</div>
        <form action="userconnection.php" method="post" class="form">
            <div class="input_field">
                <label class="label">Email:</label>
                <input type="text" name="email" class="input">
            </div>
            <div class="input_field">
                <label class="label">Password:</label>
                <input type="password" name="password" class="input">
            </div>
            <input type="submit" name="submit" class="btn">
            <br>
            <div class="pinaki">
                New User : <a href="form/rform.php"> Register Here</a>
                <br>
                <br>
                 <a href="forgot.php">Forgot Password</a>    
            </div>
        </form>
    </div>
</body>
</html>
