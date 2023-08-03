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
        <div class="title">Admin Page</div>
        <form action="aconnection.php" method="post" class="form">
            <div class="input_field">
                <label class="label">Mobile:</label>
                <input type="int" name="mobile" class="input">
            </div>
            <div class="input_field">
                <label class="label">Password:</label>
                <input type="password" name="password" class="input">
            </div>
            <input type="submit" name="submit" class="btn">
        </form>
    </div>
</body>
</html>
