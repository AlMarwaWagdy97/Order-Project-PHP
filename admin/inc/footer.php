



    <!-- <script src="<?php echo ASSETS ?>js/bootstrap.min.js" ></script> -->
    <script src="<?php echo ASSETS ?>js/jquery-3.4.1.min.js" ></script>
    <script src="<?php echo ASSETS ?>js/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  

<script>
        $(".delete").click(function(){
            var item_id = $(this).attr("data-id");
            var table = $(this).attr("data-table");
            var field = $(this).attr("data-field");
            $.ajax({
                type:"GET",
                url:"<?php echo BURLA.'inc/delete.php'; ?>",
                data:{item_id:item_id,table:table,field:field},
                dataType:"json",
                success:function(data){
                    if(data.message == "success"){
                        alert("Deleted Success");
                    }   
                }
            })

        });
    </script>

</body>
</html>