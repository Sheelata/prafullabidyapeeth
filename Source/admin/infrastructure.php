<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Infrastructure</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update Infrastructure</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
        <?php  
                    include_once './admin_class.php';
                    $admin_object = new admin_class();  
                    
                    $school_building=filter_input(INPUT_POST,'school_building'); 
					$shahid_minar=filter_input(INPUT_POST,'shahid_minar');
					$knowledge_corner=filter_input(INPUT_POST,'knowledge_corner');
					$flag_stage=filter_input(INPUT_POST,'flag_stage');
                    
                    
                    
                    $admin=$_SESSION['adnin_name'];
                    if($school_building!=NULL && $shahid_minar!=NULL && $knowledge_corner!=NULL && $flag_stage!=NULL){
                    $admin_object->add_infrastructure($school_building,$shahid_minar,$knowledge_corner,$flag_stage);
        
        
        ?>
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Successfully Update the Infrastructure.....!</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                    <?php }
                    $res=$admin_object->get_infrastructure();
                    $row = mysqli_fetch_array($res);
                    
                    ?>
        <div class="box-content">
            <h3>          
  
            </h3>  
            <form class="form-horizontal" action="index.php?id=infrastructure"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">School Building</label>
                        <div class="controls">
                             
                            <textarea name="school_building" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['school_building']; ?></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Shahid Minar</label>
                        <div class="controls">
                             
                            <textarea name="shahid_minar" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['shahid_minar']; ?></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="textarea2">Knowledge Corner</label>
                        <div class="controls">
                             
                            <textarea name="knowledge_corner" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['knowledge_corner']; ?></textarea>
                        </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="textarea2">Flag Stage</label>
                        <div class="controls">
                             
                            <textarea name="flag_stage" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['flag_stage']; ?></textarea>
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