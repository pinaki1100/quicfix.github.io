<?php
session_start();
$user_name1=$_SESSION['user_name'];
include 'form/config.php';
if(isset($_POST['submit'])){
$user_name=$_POST['user_name'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$date=$_POST['date'];
$altmobile=$_POST['altmobile'];
$paddress=$_POST['paddress'];
$problem=$_POST['problem'];
$customer_id = rand();
if($user_name1!=$user_name){
    ?>
    <script>
    alert("You Have Put Wrong username");
    window.location="requestor.php";

  
    </script>
    <?php
}



   
$query = "INSERT INTO requester_info VAlUES(0,'$user_name','$name','$mobile', '$date','$altmobile','$paddress','$problem','$customer_id','pending')";
if (mysqli_query($con,$query))
{
?>
<script>
    alert("Your Request Submited Succesfully");
    window.location="userdashboard.php";

  
    </script>
    <?php
}

else
{
    ?>
<script>
    alert("You Have Put Wrong Username");
    window.location="requestor.php";

  
    </script>
    <?php
    // echo"Error:",mysqi_error($con);
}
}


?>