<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="dasboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="dasboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="dasboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dasboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dasboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="dasboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="dasboard/plugins/summernote/summernote-bs4.min.css">
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
        ul{
            background-color:green;
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
        .img{
            height: 500px;
            width: 1120px;
            margin-top: 70px;
            margin-left: 230px;
        }      
</style>
</head>
<body>
  <?php
      include 'form/config.php';
      $qry1= "SELECT COUNT(*)AS feedback_count FROM data_details1";
      $res1=mysqli_query($con,$qry1);
      $row1=mysqli_fetch_assoc($res1);
      $count1=$row1['feedback_count'];

      $qry2= "SELECT COUNT(*)AS message_count FROM contact";
      $res2=mysqli_query($con,$qry2);
      $row2=mysqli_fetch_assoc($res2);
      $count2=$row2['message_count'];

      $qry3= "SELECT COUNT(*)AS newrequest_count FROM requester_info";
      $res3=mysqli_query($con,$qry3);
      $row3=mysqli_fetch_assoc($res3);
      $count3=$row3['newrequest_count'];

      $qry4= "SELECT COUNT(*)AS emp_count FROM emp_details";
      $res4=mysqli_query($con,$qry4);
      $row4=mysqli_fetch_assoc($res4);
      $count4=$row4['emp_count'];
  ?>
    <header class="header">
        <a href="">Admin Area</a>

        <div class="logout">
            <a href="index.html" class="btn btn-success">Home</a>
            <a href="logout.php" class="btn btn-primary">logout</a>
        </div>
    </header>
    
    <aside>
    <div class="wrapper">
        <ul>
            <li>
                <a href="form/showdata.php">Show Request</a>
            </li>
            <li>
                <a href="form/editdata.php">Edit Request</a>
            </li>
            <li>
                <a href="form/employee.php">Job Request</a>
            </li>
            <li>
                <a href="form/showfeedback.php">Feedback</a>
            </li>
            <li>
                <a href="form/message.php">User Message</a>
            </li>
            
            </ul>
    </aside>
      </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">QuiCkFiX</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $count3?></h3>

                <p>New Request</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="form/editdata.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3> <?php echo $count1?> <sup style="font-size: 20px"></sup></h3>

                <p>Feedback</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="form/showfeedback.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $count4?></h3>

                <p>Emplyee Request </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="form/employee.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $count2?> </h3>

                <p>User Message</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="form/message.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section> 
</body>
</html>