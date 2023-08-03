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
            /* width: 50%; */
            margin-left:200px!important;
            margin: 20px auto;
            border: 1px solid black;
            border-collapse: collapse;
    
            /* table-layout: auto;*/
        }


        td,
        th {
            text-align:center;
            width:10%;
            border: 1px solid black;
            padding: 8px;
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
        .home-page a{
            text-decoration:none;
            color:white;

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
                <a href="editdata.php">Edit Request</a>
            </li>
            <li>
                <a href="employee.php">Job Request</a>
            </li>

            <li>
                <a href="showfeedback.php">Feedback</a>

            </li>
            <li>
                <a href="form/message.php">Feedback</a>
            </li>
            
            </ul>
    </aside>
    
    <?php
        include "config.php";
        $qry="SELECT * FROM requester_info";
        $res=mysqli_query($con,$qry);
        if(mysqli_num_rows($res)>0)
            ?>
            <div class="container">
                <table>
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
                       
                    </tr>
                    <?php

            while($row=mysqli_fetch_assoc($res)){
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
                    
                </tr>

            <?php                
            }    
        ?>
        </table>
    
    
    
    
    
    
    
    

    
    
</body>
</html>