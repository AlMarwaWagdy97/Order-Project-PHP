<?php 
    require_once '../../config.php';
    require_once BLA.'inc/header.php';
    require_once BL.'functions/validate.php';
?>


<!--------------------- Validate form ---------------------------------- -->
<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check empty and insert 
        if(Check_empty($name) and Check_empty($email) and Check_empty($password)){
            if(ValidEmail($email)){
                $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
                
                $sql = "INSERT INTO admins (`admin_name`,`admin_email`,`admin_password`)
                            VALUES ('$name','$email','$hashedpassword') ";
                $success_message = db_insert($sql);
            }
            else {
                $error_message = "Please insert Correct Email";
            }
        }
        else{
            $error_message = "Please Type All Filds";
        }
        require_once BL.'functions/messages.php';
        $_POST['name']="";
        $_POST['email']="";
        $_POST['password']="";
    }
?>
<!---------------------------------------------------------------------- -->



<!-- Form to login -->
<br><br>
<div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Add New Admin</h3>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label >Name </label>
                <input type="text" name="name" class="form-control" >
            </div>

            <div class="form-group">
                <label >Email </label>
                <input type="email" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label >Password </label>
                <input type="password" name="password" class="form-control" >
            </div>

            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>


<?php
    require_once BLA.'inc/footer.php';
?>