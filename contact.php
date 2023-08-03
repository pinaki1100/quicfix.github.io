
<?php
include 'form/config.php';
if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
   
$query = "INSERT INTO contact VAlUES(0,'$name','$email','$phone','$message')";



if (mysqli_query($con,$query)){

    header("location:index.html");
}else{
    echo"Error:",mysqi_error($con);
}
}


?>