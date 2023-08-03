
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="job.css">
</head>
<style>
    body{
        
        background-image: url('img/admin.jpeg');
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body>
    <div class="container">
        <div class="title">Job Form</div>
        <form action="jobconnection.php" method="post">
            <div class="form">
                <div class="input_field">
                    <label> Name :</label>
                    <input type="text" class = "name" name="name" required>
                </div>
                <div class="input_field">
                    <label>Email :</label>
                    <input type="text" class = "email"name="email">
                </div>
                <div class="input_field">
                    <label>Mobile :</label>
                    <input type="text" class = "mobile"name="mobile">
                </div>
                <div class="input_field">
                    
                    <label>Gender :</label>
                    <select class="selector" name="gender">
                    <option>select</option>
                    <option>male</option>
                    <option>female</option>
                    </select>
                </div> 
                <div class="workarea">
                WORKAREA: <br> <br>
                <input type="checkbox"name="workarea[]"value="tv">TV
                <br>
                <input type="checkbox"name="workarea[]"value="fridge">FRIDGE
                <br>
                <input type="checkbox"name="workarea[]"value="cooler">COOLER
                <br>
                <input type="checkbox"name="workarea[]"value="ac">AC
                <br>
                <input type="checkbox"name="workarea[]"value="washingmachine">WASHINGMACHINE
                <br>
                <input type="checkbox"name="workarea[]"value="guiger">GUIGER
                <br><br>
                </div>
                <div class="input_field">
                    <label>DOB :</label>
                    <input type="date" class = "dob" name="dob">
                </div>
                <div class="input_field">
                    <label>Address :</label>
                    <textarea class="textarea" name="address"></textarea>
                </div>
                <div class="infut_field"></div>
                <input  class="reg" type="submit" name="submit" value="submit" class="btn">
            </div>
        </form>
    </div>
</body>
</html>
