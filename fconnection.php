<?php
include 'form/config.php';
if(isset($_POST['submit'])){

$name=$_POST['name'];
$feedback=$_POST['feedback'];



   
$query = "INSERT INTO data_details1 VAlUES(0,'$name','$feedback')";



if (mysqli_query($con,$query)){

    header("location:index.html");
}
else
{
    echo"Error:",mysqi_error($con);
}
}


?>