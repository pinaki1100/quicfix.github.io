
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="fstyle.css">
</head>
<style>
    .container {
    width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color:wheat;
   
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 200px;
    
  }
  body{
    height: 100%;
    width: 1400px;
    background-attachment: fixed;
    background-size: 100% 100%;
    background-image:url("img/admin.jpeg"); 
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
    margin: 0;
    padding: 0;
   
  }
  
  
</style>
<body>
    <div class="container">
        <h2>Feedback Form</h2>
        <form action="fconnection.php" method="post">
            <div class="input-field">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-field">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" required></textarea>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
