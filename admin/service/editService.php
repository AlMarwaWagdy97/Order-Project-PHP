<?php
    require_once '../../config.php';
    require_once '../../functions/validate.php';
    require_once '../inc/header.php';
?>

<!-- ------------------ Edit City ----------------------------------------------->
<?php
    if(isset($_GET['id']) and is_numeric($_GET['id'])){
        $row = getRow("services", "serve_id", $_GET['id']);
        if ($row){
            $cityID =$row['serve_id'];
        }
        else header("location:".BURLA);
    }
    else header("location:".BURLA);
?>
<!-- ----------------------- Form ----------------------------------------------------------->
<br><br> 

<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
    <form method="post" action="<?php echo BURLA.'service/updateService.php';?>">
        <?php require_once BL.'functions/messages.php'; ?>
        <div class="form-group">
            <label >Name Of City</label>
            <input type="text" name="name" class="form-control" value="<?php echo $row['serve_name']; ?>">
            <input type="hidden" value="<?php echo $cityID?>" name="serve_id">
        </div>
        
        <button type="submit" name="submit" class="btn btn-success">Save</button>
    </form>
</div>
<!-- ------------------------------------------------------------------------------------- -->



<?php require_once '../inc/footer.php'; ?>