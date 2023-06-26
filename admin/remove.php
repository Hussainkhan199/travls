<?php
    require_once "../config/config.php";


    if(isset($_POST['remove']))
    {
        $user_id = $_POST['remove'];

        $sql = "DELETE FROM `other_admins` WHERE `id` = '$user_id'";
        $res = mysqli_query($conn,$sql);

        if($res)
        {
            echo "<script>alert('Admin is remove')</script>";
            header("location:display_user.php");
        }
        else
        {
            echo "Failed to remove admin";
        }

    }

 ?>