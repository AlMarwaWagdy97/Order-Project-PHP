<?php
    require_once '../../config.php';
    require_once '../../functions/validate.php';
    require_once '../inc/header.php';
?>

<!-- ------------------ Validate City id ----------------------------------------------->
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $serve_id = $_POST['serve_id'];
        if(Check_empty($name)){
            if(check_less($name, 3)){
                $sql1 = "SELECT `serve_name` FROM services WHERE `serve_name`='$name'";
                $if_exist = db_if_exist($sql1);
                if(!$if_exist){
                    $sql = "UPDATE services SET `serve_name`='$name' WHERE `serve_id`='$serve_id'";
                    $success_message = db_update($sql);
                    $_POST['name']="";
                    ?>
                    <meta http-equiv="Refresh" content="2; url=../service/Viewservice.php">
                    <?php
                    //  header("refresh:2; url=".BURLA."cities/ViewCities");
                }
                else {
                    $error_message = "This is name is already exist";   
                    // header("location:".BURLA."cities/editCity.php");
                    ?>
                    <meta http-equiv="Refresh" content="2; url=../service/Viewservice.php">
                    <?php
                }         
            }
            else $error_message = "Name of city is too short";
            
        }
        else $error_message = "Please Fill Name";
         
    }

    require_once BL.'functions/messages.php';
?>
<!-- ------------------------------------------------------------------------------------- -->





<?php require_once '../inc/footer.php'; ?>