<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add University</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Add University</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
        <?php  
        
                    include_once './admin_class.php';
                    $admin_object = new admin_class();  
                    
                    $university_name=$_POST['university_name'];
                    $location=$_POST['location'];
                    $scrip=$_POST['description'];
                     $logo=$_POST['logo'];
                    $publication_status=$_POST['publication_status'];
                    $admin=$_SESSION['adnin_name'];
                     if($university_name!=NULL){
                    $admin_object->add_university($university_name,$location,$scrip,$logo,$publication_status,$admin);
        
        
        ?>
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> successfully added the university informations!</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                    <?php } ?>
        <div class="box-content">
            <h3>          
  
            </h3>  
            <form class="form-horizontal" action="index.php?id=add_university"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">University Name</label>
                        <div class="controls">
                             
                        <textarea name="university_name" class="cleditor" id="textarea2" rows="7" cols="109"></textarea>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Location</label>
                        <div class="controls">
                             
                        <textarea name="location" class="cleditor" id="textarea2" rows="7" cols="109"></textarea>
                        </div>
                    </div>
                    
                     <div class="control-group">
                        <label class="control-label" for="textarea2">Description</label>
                        <div class="controls">
                             
                        <textarea name="description" class="cleditor" id="textarea2" rows="7" cols="109"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Logo Upload</label>
                        <div class="controls">
                             
                        <input data-no-uniform="true" type="file" name="logo" id="file_upload">
                        </div>
                    </div>
                     
                    
                    <div class="control-group">
                        <br><br>
                        <div class="controls">
                            <label class="control-label" for="textarea2"> Publication Status &nbsp;&nbsp;&nbsp;</label>
                            <select name="publication_status" err="Please Select Publication Status...." required exclude=" ">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <br> <br> <br> <br>
                        <button type="submit"  class="btn btn-primary">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->