<?php
    include "config.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $qry="DELETE FROM requester_info WHERE id=$id";
        if(mysqli_query($con,$qry)){
            ?>
            <script>
                alert("Your data is successfully deleted");
                window.location="editdata.php";
            </script>
            <?php
           
        }else{
            echo mysqli_error($con);
        }
    }
?> 