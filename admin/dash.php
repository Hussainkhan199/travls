<?php
    require_once "../config/config.php";
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header("location:admin_form.php");
    }
?>

<?php
include "header.php";

?>



                <h1 style="padding-top: 20px;">Welcome admin</h1>
        </div>
    </div>
    
    <?php

    include "footer.php";

    ?>