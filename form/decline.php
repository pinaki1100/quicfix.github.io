<?php
    include "config.php";
    $customer_id=$_GET['customer_id'];
   $query1="UPDATE requester_info SET request_status='DECLINE' WHERE customer_id=$customer_id";
    $result1=mysqli_query($con,$query1);
            if($result1){
                ?>
                <script>
                    alert("This request is cancelled");
                    window.location.href="editdata.php";
                </script>
                <?php
            }
        
        else{
        mysqli_error($con);
        }
    
?>