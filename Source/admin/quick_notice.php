<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#"> Quick Notice </a>
        </li>
    </ul>
</div>




<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update Quick Notice  </h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
    include_once './admin_class.php';
        $admin_object = new admin_class();

        $notice_body = filter_input(INPUT_POST, 'notice_body');
         
        

        
      

        if ($notice_body != NULL ) {
            $admin_object->update_quick_notice($notice_body);
       
           
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Update the Quick Notice.....!</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>

<?php }

$res = $admin_object->select_all_quick_notice();
        $row = mysqli_fetch_array($res);
?>
        <div class="box-content">
            <h3>          

            </h3>  
            <form class="form-horizontal" action="index.php?id=quick_notice"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
       
              

                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Quick Notice</label>
                        <div class="controls">
                          <textarea name="notice_body" style="width: 100%;">
                                        <?php echo $row['notice_body'];;  ?>
                          </textarea>
                        </div>
                    </div> 
                          
                    
                    
                    
  
                    <div class="form-actions col-sm-12" style="text-align: center;">
                        <br> <br>
                        <button type="submit"  class="btn btn-primary">Update</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
