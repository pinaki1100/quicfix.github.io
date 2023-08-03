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
        <a href=""style="margin-left:1250px;">QUiCkFiX</a>
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
        
            <a href="index.html" class="btn btn-success"style="margin-left:1300px;">Home</a>
            <a href="logout1.php" class="btn btn-primary">logout</a>

        </div>
       
    </header>
    <br>
    <br>
    <br>
    <?php
        include "form/config.php";
        $qry="SELECT * FROM data_details WHERE user_name='$user_name'";
        $res=mysqli_query($con,$qry);
        if(mysqli_num_rows($res)>0)
            ?>
    <table class="table table-success table-striped">
        <tr> 
                        <th>Id</th>           
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Address</th>
                        <th>Edit</th>
                       
        </tr>
        <?php

while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    ?>
    <tr>
        
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['firstname'];?></td>
        <td><?php echo $row['lastname'];?></td>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['address'];?></td>
        
        <td><a href="regupdate.php?id=<?php echo $id;?>" style="color: green;">Update</a>
        
    </tr>

<?php   
}             

?>
</table>
    
    
</body>
</html>