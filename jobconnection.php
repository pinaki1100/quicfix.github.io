
<?php
include 'form/config.php';
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$workarea=$_POST['workarea'];
$dob=$_POST['dob'];
$date=date("Y/m/d",strtotime($dob));
$address=$_POST['address'];
$workarea=implode(",",$workarea);
   
$query = "INSERT INTO emp_details VAlUES(0,'$name','$email','$mobile','$gender','$workarea','$date','$address')";



if (mysqli_query($con,$query)){

    header("location:index.html");
}else{
    echo"Error:",mysqi_error($con);
}
}


?>