<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $qry="DELETE FROM contact WHERE id=$id";
        if(mysqli_query($con,$qry)){
            ?>
            <script>
                alert("Your data is successfully deleted");
            </script>
            <?php
            header("location:message.php");
        }else{
            echo mysqli_error($con);
        }
    }
?>