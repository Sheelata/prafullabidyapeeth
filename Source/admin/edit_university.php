<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit University</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit University</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                   <?php
                       include_once './admin_class.php';
                    $admin_object = new admin_class();
                    
                       $university_row = $_GET['university_row'];
                         $result = $admin_object->select_all_university_info_by_id($university_row); 
                        $row = mysql_fetch_assoc($result);
                         ?> 
        <div class="box-content">
            <h3>           </h3>  
            <form class="form-horizontal" action="index.php?university_update=1&id=manage_university&row_id=<?php echo $row['id'];?>"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                     
                    
                              
                    <div class="control-group">
                        <label class="control-label" for="textarea2">University Name</label>
                        <div class="controls">
                             
                        <textarea name="university_name" class="cleditor" id="textarea2" rows="7" cols="109"> <?php echo $row['u_name'] ?></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Location</label>
                        <div class="controls">
                             
                        <textarea name="location" class="cleditor" id="textarea2" rows="7" cols="109"><?php echo $row['location'] ?></textarea>
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                             
                        <textarea name="description" class="cleditor" id="textarea2" rows="7" cols="109"> <?php echo $row['script'] ?></textarea>
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="textarea2">Logo</label>
                        <div class="controls">
                         <img src="data:upload/jpeg;base64,<?php echo base64_encode($row['logo']); ?>" height="100px" width="100px"/>
                            
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Logo Upload</label>
                        <div class="controls">
                             
                            <input data-no-uniform="true" type="file" name="logo" id="file_upload"  >
                        </div>
                    </div>
                     
                    
                    
                     
                    
                    
                    <div class="form-actions">
                        <br> <br> <br> <br>
                        <button type="submit"  class="btn btn-primary" href>Save Change</button>
                        <button type="reset" class="btn"  >Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->

<script type="text/javascript">
 
 document.forms['edit_blog'].elements['publication_status'].value="<?php echo $row['publication_status'];?>";
 
</script>