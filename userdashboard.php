<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title> User Area</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .header{
            background-color: black;
            color: black;
            line-height: 70px;
            padding-left: 30px;
            font-weight: bold;
            font-size: 20px;
        }
        a,a:hover{
            text-decoration: none;
        }
        /* Center the content within the page */
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Style the cards */
.card {
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-title {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-text {
  font-size: 16px;
}

.card-body {
  padding: 20px;
}

/* Style the primary button */
.btn-primary {
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 8px 16px;
  text-decoration: none;
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Override background color for the first card */
.card-body:nth-child(odd) {
  background-color: yellow;
  color: black;
}

        


</style>
</head>
<body>
    <header class="header">
        <a href="">User Dashboard</a>
        <a href=""style="margin-left:1170px;"> QUiCkFiX</a>
        <?php
          include "form/config.php";
          session_start();
          $user_name=$_SESSION['user_name'];
          $qry="SELECT * FROM data_details WHERE user_name='$user_name'";
          $result=mysqli_query($con,$qry);
          $data=mysqli_fetch_assoc($result);
          if(mysqli_num_rows($result)>0){
            $first_name=$data['firstname'];
            $last_name=$data['lastname'];
            $_SESSION['user_name']=$data['user_name'];
          }
          $str=" ";
          $name=$first_name.$str.$last_name;
        ?>
        <h1 style="color:white;"><?php echo $name;?></h1>

        <div class="logout">
        
            <a href="index.html" class="btn btn-success" style="margin-left:1300px;">Home</a>
            <a href="logout1.php" class="btn btn-primary">logout</a>

        </div>
        
        
    </header>
    <br>
    <br>
    <br>
    <br>
        <center>
        <div class="row" style="margin-top:5px;">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">QUiCkFiX</h5>
        <p class="card-text">Keep Touch With Quickfix and Feel Free.</p>
        <a href="history.php?user_name=<?php echo $user_name;?>" class="btn btn-primary">History</a>
        <?php
        $qry3 = "SELECT * from requester_info where user_name='$user_name' order by id desc limit 1";
        $res=mysqli_query($con,$qry3);
        $row=mysqli_fetch_assoc($res);
        ?>
        <a href="#" class="btn btn-success"><?php echo $row['request_status']?></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">QUiCkFiX</h5>
        <p class="card-text">Keep Touch With Quickfix and Feel Free.</p>
        <a href="mydetails.php" class="btn btn-primary">My Details</a>
      </div>
    </div>
  </div>
</div>
        </center>
        
    
</body>
</html>