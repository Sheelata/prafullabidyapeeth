<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Foundation</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update Foundation</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
        <?php  
                    include_once './admin_class.php';
                    $admin_object = new admin_class();  
                    
                    $foundation=filter_input(INPUT_POST,'foundation'); 
                    
                    
                    
                    $admin=$_SESSION['adnin_name'];
                    if($foundation!=NULL){
                    $admin_object->add_foundation($foundation);
        
        
        ?>
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Successfully Update the Foundation.....!</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                    <?php }
                    $res=$admin_object->get_foundation();
                    $row = mysqli_fetch_array($res);
                    
                    ?>
        <div class="box-content">
            <h3>          
  
            </h3>  
            <form class="form-horizontal" action="index.php?id=foundation"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Teritorial Description</label>
                        <div class="controls">
                             
                            <textarea name="foundation" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['foundation']; ?></textarea>
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