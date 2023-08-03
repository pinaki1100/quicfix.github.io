
<?php
include 'config.php';
if(isset($_POST['submit'])){

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$date=date("Y/m/d",strtotime($dob));
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$address=$_POST['address'];
if($password==$confirmpassword){
    $password=sha1($password);

$query = "INSERT INTO data_details VAlUES(0,'$firstname','$lastname','$user_name','$email','$mobile','$gender','$date','$password','$address')";

if (mysqli_query($con,$query)){
    ?>
    <script>
        alert("Congratulation Regestriation Success");
        window.location="login.php";
    </script>
    <?php
}
else
{
    echo"Error:",mysqi_error($con);
}
}
}
?>