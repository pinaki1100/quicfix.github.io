<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Admin Area</title>
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
        .logout{
            float: right;
            padding-right: 10px;
        }
        table {
            margin-left:200px!important;
            /* width: 80%; */
            margin: 20px auto;
            border: 1px solid black;
            border-collapse: collapse;
            margin-top:50px
            /* table-layout: auto;*/
        }   
        td,
        th {
            text-align:center;
            border: 1px solid black;
            padding:5px;
            width:10%;
            height:100%;
            column-span: 3px;

        }

        th {
            background-color: white;
        }
        td{
            background-color: white;
        }

        .container {
            background-color: white;
        }
        ul{
            background-color: #424a5b;
            width: 16%;
            height: 100%;
            position: fixed;
            padding-top: 5%;
            
        }
        ul li{
            list-style: none;
            padding-bottom: 30px;
            font-size: 15px;
        }
        ul li a{
            color: white;
            font-weight: bold;
        }
        ul li a:hover{
            color: skyblue;
            text-decoration: none;
        }
        /* Styling for the ACCEPT button */
.btn1 {
  background-color: green;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}
/* On hover, change the background color and add a subtle shadow effect */
.btn1:hover {
  background-color: #2ecc71;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
/* Styling for the DECLINE button */
.btn2 {
  background-color: red;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}
/* On hover, change the background color and add a subtle shadow effect */
.btn2:hover {
  background-color: #e74c3c;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.btn{
    background-color: wheat;
  color: black;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
}
</style>
</head>
<body>
    <header class="header">
        <a href="">Admin Area</a>

        <div class="logout">
        
            <a href="../index.html" class="btn btn-success">Home</a>
            <a href="../logout.php" class="btn btn-primary">logout</a>

        </div>
    </header>

    <aside>
        <ul>
            <li>
                <a href="showdata.php">Show Request</a>
            </li>
            <li>
                <a href="editdata.php?id=<?php echo $id?>">Edit Request</a>
            </li>
            <li>
                <a href="employee.php">Job Request</a>
            </li>
            <li>
                <a href="showfeedback.php">Feedback</a>
            </li>
            <li>
                <a href="message.php">User Message</a>

            </li>
            
            </ul>
    </aside>
    <div class="container">
                <table style="padding:5px 10px" >
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
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include "config.php";
                    
                            $qry="SELECT * FROM requester_info";
                            $result=mysqli_query($con,$qry);
                            if(mysqli_num_rows($result)>0){
                                while($row=mysqli_fetch_assoc($result)){
                                    $customer_id=$row['customer_id'];
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
                                    <td>
                                        <button class="btn"style="background-color:wheat;">
                                        <?php echo $row['request_status'];?>
                                        </button>
                                    </td>
                                    <td>
                                        <a href="accept.php?customer_id=<?php echo $customer_id?>">

                                                    <button class="btn1" style="background-color:green;">ACCEPT</button></td>
                                    </a>
                                    <td>
                                        <a href="decline.php?customer_id=<?php echo $customer_id?>">
                                                <button class="btn2" style="background-color:red;">DECLINE</button></td>
                                            
                                    
                           
                                    </a>
                                
                                </tr>
                                <?php

                            }
                            }
                    ?>                         
    </table>   
</body>
</html>

