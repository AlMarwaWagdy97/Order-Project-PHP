<?php
    require_once '../../config.php';
    require_once '../../functions/validate.php';
    require_once '../inc/header.php';
?>



<div class="col-sm-12">
        <h3 class="text-center p-3 bg-primary text-white">View All Cities</h3>
        <table class="table table-dark table-bordered">
            <thead>
                <tr class="text-center">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
       
                </tr>
            </thead>
            <tbody>
                <?php $AllRows = getRows('cites');  $ind = 1; ?>
                <?php foreach($AllRows as $row){   ?>                
                
                <tr class="text-center">
                    <td  class="text-center"><?php echo $ind;  ?> </td>
                    <td class="text-center"> <?php echo $row['city_name'];?> </td>
                    <td class="text-center">
                        <a href="<?php echo BURLA.'cities/editCity.php?id='.$row['city_id']?> " class="btn btn-info"> Edit </a>
                        <a href="#" data-field="city_id" data-id="<?php echo $row['city_id'];?>" data-table="cites" class="btn btn-danger delete"> Delete </a>
                    </td>

                </tr>   
                <?php $ind++; } ?>
                
            </tbody>
        </table>
    </div>

<?php require_once '../inc/footer.php'; ?>