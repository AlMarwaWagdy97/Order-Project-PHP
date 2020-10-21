<?php
    require_once '../../config.php';
    require_once '../../functions/validate.php';
    require_once '../inc/header.php';
?>

<!-- ------------------ Ckeck and Add City ----------------------------------------------->
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        if(Check_empty($name)){
            if(check_less($name, 3)){
                $sql1 = "SELECT `serve_name` FROM services WHERE `serve_name`='$name'";
                $if_exist = db_if_exist($sql1);  
                if(!$if_exist){
                    $sql = "INSERT INTO services (`serve_name`)VALUES ('$name')";
                    $success_message = db_insert($sql);
                }
                else { $error_message = "This is name is already exist"; }
            }          
            else $error_message = "Name of city is too short";
            
        }
        else $error_message = "Please Fill Name";
        
    }
    
    $_POST['name']="";
    require_once BL.'functions/messages.php';
?>

<!-- ----------------------- Form ----------------------------------------------------------->
<br><br> 
<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Add New Service</h3>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php require_once BL.'functions/messages.php'; ?>
        <div class="form-group">
            <label >Name Of Service</label>
            <input type="text" name="name" class="form-control" >
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">Save</button>
    </form>
</div>
<!-- ------------------------------------------------------------------------------------- -->





<?php require_once '../inc/footer.php'; ?>