
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="regupdate.css">
</head>
<style>
    body{
        
        background-image: url('img/admin.jpeg');
        background-attachment: fixed;
        background-size: 100% 100%;
    }
</style>
<body>
<?php
    include 'form/config.php';
    $id = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
        echo $id;
    }
    $qry = "SELECT * FROM data_details WHERE id=$id";
    $result = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($result);
    ?>
    <div class="container">
        <div class="title">Regestration Form</div>
        <form action="regupdate.php" method="post">
            <div class="form">
                <div class="input_field">
                <input type="hidden" name="id" value=<?php echo $data['id']; ?>> 
                    <label>First Name :</label>
                    <input type="text" value="<?php echo $data['firstname']?>" class = "name" name="firstname" required>
                </div>
                <div class="input_field">
                    <label>Last Name :</label>
                    <input type="text" value="<?php echo $data['lastname']?>" class = "name" name="lastname" required>
                </div>
                <div class="input_field">
                    <label>Email :</label>
                    <input type="text"value="<?php echo $data ['email']?>" class = "email"name="email" required>
                </div>
                <div class="input_field">
                    <label>Mobile :</label>
                    <input type="text" value="<?php echo $data['mobile']?>" class = "mobile"name="mobile"required>
                </div>
                <div class="input_field">
                    
                    <label>Gender :</label>
                    <select class="selector" name="gender">
                        <option <?php if ($data['gender'] == 'select') echo 'selected' ?>>select</option>
                        <option <?php if ($data['gender'] == 'male') echo 'selected' ?>>male</option>
                        <option <?php if ($data['gender'] == 'female') echo 'selected' ?>>female</option>
                    </select>
                </div>
                <div class="input_field">
                    <label>DOB :</label>
                    <input type="date" value="<?php echo $data['dob']; ?>" class="dob" name="dob">
                </div>

                <div class="input_field">
                    <label>Address :</label>
                    <textarea class="textarea" name="address"><?php echo $data['address'] ?></textarea>
                </div>
                    
                </div>
                <div class="infut_field"></div>
                <input  class="reg" type="submit" name="update" value="update" class="btn">
            </div>
            
        </form>
    </div>

<?php
if(isset($_POST['update']))
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    
    $query = "UPDATE data_details SET firstname='$firstname', lastname='$lastname',email='$email',mobile='$mobile',gender='$gender',dob='$dob',address='$address' WHERE id=$id";
    if (mysqli_query($con, $query))
     {
        ?>
        <script>alert("One record updated");window.location="mydetails.php";
    </script>
        
        <?php
       
    } else 
    {
        echo '<script>alert("Error updating record: ' . mysqli_error($con) . '");</script>';
    }
}
?>
</body>
</html>

