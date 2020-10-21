<?php
    require_once '../../config.php';
    require_once '../../functions/validate.php';
    require_once '../inc/header.php';
?>

<!-- ------------------ Validate City id ----------------------------------------------->
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $city_id = $_POST['city_id'];
        if(Check_empty($name)){
            if(check_less($name, 3)){
                $sql1 = "SELECT `city_name` FROM cites WHERE `city_name`='$name'";
                $if_exist = db_if_exist($sql1);
                if(!$if_exist){
                    $sql = "UPDATE cites SET `city_name`='$name' WHERE `city_id`='$city_id'";
                    $success_message = db_update($sql);
                    $_POST['name']="";
                    ?>
                    <meta http-equiv="Refresh" content="2; url=../cities/ViewCities.php">
                    <?php
                    //  header("refresh:2; url=".BURLA."cities/ViewCities");
                }
                else {
                    $error_message = "This is name is already exist";   
                    // header("location:".BURLA."cities/editCity.php");
                    ?>
                    <meta http-equiv="Refresh" content="2; url=../cities/ViewCities.php">
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