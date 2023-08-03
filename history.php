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
    
        


</style>
</head>
<body>
    <header class="header">
        <a href="">User Area</a>
        <a href=""style="margin-left:1250px;"> QUiCkFiX</a>
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
    <?php

        $qry1="SELECT * FROM requester_info WHERE user_name='$user_name'";
        $res1=mysqli_query($con,$qry1);
        if(mysqli_num_rows($res1)>0)
            ?>
    
    <table class="table table-success table-striped">
        <tr>
                        <th>Id</th>
                        <th>User Name</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Date</th>
                        <th>Alt Mobile</th>
                        <th>Proper Address</th>
                        <th>Problem</th>
                        <th>Book Id</th>
                        <th>Status</th>
                       
        </tr>
        <?php

while($row=mysqli_fetch_assoc($res1)){
    $id=$row['id'];
    ?>
    <tr>
        
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['date'];?></td>
        <td><?php echo $row['altmobile'];?></td>
        <td><?php echo $row['paddress'];?></td>
        <td><?php echo $row['problem'];?></td>
        <td><?php echo $row['customer_id'];?></td>
        <td><?php echo $row['request_status'];?></td>
     </tr>

      <?php                
        }
      ?>
        
    </table>

    
</body>
</html>