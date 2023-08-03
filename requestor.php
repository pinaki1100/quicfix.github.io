
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="request.css">
</head>
<style>
body{
    background-image:url("img/admin.jpeg");
    height: 100%;
    width: 1400px;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  .container {
    width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color:wheat !important;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  </style>
<body>
    <div class="container">
        <h2>Request Form</h2>
        <form action="reconnection.php" method="post">
        <div class="input-field">
                <label for="name">User Name:</label>
                <input type="text" id="name" name="user_name" required>
            </div>
            <div class="input-field">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-field">
                <label for="mobile">mobile:</label>
                <input type="text"id="mobile" name="mobile" required>
            </div>
            <div class="input-field">
                <label for="date"> Date:</label>
                <input type="date"id="date" name="date" required>
            </div>
            <div class="input-field">
                <label for="alt mobile"> Alt mobile:</label>
                <input type="text"id=" alt mobile" name="altmobile" required>
            </div>
            <div class="input-field">
                <label for="paddress">Proper Address:</label>
               <textarea name="paddress" id="" cols="30" rows="10"></textarea>
            </div>
            
            <div class="input_field">
                   
                    <label>Problem Area :</label>
                    <select class="selector" name="problem">
                    <option>TV</option>
                    <option>Fridge</option>
                    <option>Ac</option>
                    <option>Washing Machine</option>
                    <option>Cooler</option>
                    <option>Guiger</option>
                    
                    </select>
                </div>
                <br>
            <div class="submit">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
