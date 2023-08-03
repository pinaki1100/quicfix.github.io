<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="update.css">
</head>

 
<body>


    <?php
    include 'config.php';
    $id = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    } else if (isset($_POST['id'])) {
        $id = $_POST['id'];
    }
    $qry = "SELECT * FROM emp_details WHERE id=$id";
    $result = mysqli_query($con, $qry);
    $data = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="title">Job Form</div>
        <form action="update.php" method="post">
            <div class="form">
                <div class="input_field">
                    <input type="hidden" name="id" value=<?php echo $data['id']; ?>> 
                    <label>Name :</label>
                    <input type="text" value="<?php echo $data['name'] ?>" class="name" name="name" required>
                </div>
                <div class="input_field">
                    <label>Email :</label>
                    <input type="text" value="<?php echo $data['email'] ?>" class="email" name="email">
                </div>
                <div class="input_field">
                    <label>Mobile :</label>
                    <input type="text" value="<?php echo $data['mobile'] ?>" class="mobile" name="mobile">
                </div>
                <div class="input_field">
                    <label>Gender :</label>
                    <select class="selector" name="gender">
                        <option <?php if ($data['gender'] == 'select') echo 'selected' ?>>select</option>
                        <option <?php if ($data['gender'] == 'male') echo 'selected' ?>>male</option>
                        <option <?php if ($data['gender'] == 'female') echo 'selected' ?>>female</option>
                    </select>
                </div>
                <div class="workarea">
                    WORKAREA: <br> 
                    <input type="checkbox" value="tv" name="workarea[]" <?php if (in_array('tv', explode(',', $data['workarea']))) echo 'checked' ?>>TV
                    <br>
                    <input type="checkbox" value="fridge" name="workarea[]" <?php if (in_array('fridge', explode(',', $data['workarea']))) echo 'checked' ?>>FRIDGE
                    <br>
                    <input type="checkbox" value="cooler" name="workarea[]" <?php if (in_array('cooler', explode(',', $data['workarea']))) echo 'checked' ?>>COOLER
                    <br>
                    <input type="checkbox" value="ac" name="workarea[]" <?php if (in_array('ac', explode(',', $data['workarea']))) echo 'checked' ?>>AC
                    <br>
                    <input type="checkbox" value="washingmachine" name="workarea[]" <?php if (in_array('washingmachine', explode(',', $data['workarea']))) echo 'checked' ?>>WASHINGMACHINE
                    <br>
                    <input type="checkbox" value="guiger" name="workarea[]" <?php if (in_array('guiger', explode(',', $data['workarea']))) echo 'checked' ?>>GUIGER
                    <br>
                </div>
                <div class="input_field">
                    <label>DOB :</label>
                    <input type="date" value="<?php echo $data['dob'] ?>" class="dob" name="dob">
                </div>
                <div class="input_field">
                    <label>Address :</label>
                    <textarea class="textarea" name="address"><?php echo $data['address'] ?></textarea>
                </div>

                <div class="input_field">
                    <input class="reg" type="submit" name="update" value="update" class="btn">
                </div>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $workarea = $_POST['workarea'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    $workarea = implode(',', $workarea);
    $query = "UPDATE emp_details SET name='$name', email='$email', mobile='$mobile', gender='$gender', workarea='$workarea', dob='$dob', address='$address' WHERE id=$id";

    if (mysqli_query($con, $query)) {
        ?>
        echo '<script>alert("One record updated"); window.location="employee.php";</script>';
        <?php
    } else {
        echo '<script>alert("Error updating record: ' . mysqli_error($con) . '");</script>';
    }
}
?>
