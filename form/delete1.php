<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $qry="DELETE FROM emp_details WHERE id=$id";
        if(mysqli_query($con,$qry)){
            ?>
            <script>
                alert("Your data is successfully deleted");
            </script>
            <?php
            header("location:employee.php");
        }else{
            echo mysqli_error($con);
        }
    }
?>