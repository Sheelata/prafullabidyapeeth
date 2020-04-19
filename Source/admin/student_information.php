<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Student Information</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update Student Information</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
        <?php  
                    include_once './admin_class.php';
                    $admin_object = new admin_class();  
                    
                    $student_information=filter_input(INPUT_POST,'student_information'); 
                    
                    
                    
                    $admin=$_SESSION['adnin_name'];
                    if($teritorial_description!=NULL){
                    $admin_object->add_student_information($student_information);
        
        
        ?>
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Successfully Update the Student Information.....!</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                    <?php }
                    $res=$admin_object->get_student_information();
                    $row = mysqli_fetch_array($res);
                    
                    ?>
        <div class="box-content">
            <h3>          
  
            </h3>  
            <form class="form-horizontal" action="index.php?id=student_information"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                             
                    <div class="control-group">
                        <label class="control-label" for="textarea2">Student Information</label>
                        <div class="controls">
                             
                            <textarea name="teritorial_description" class="cleditor"  style="min-width: 100%" id="textarea2" rows="7" cols="12"> <?php echo $row['student_information']; ?></textarea>
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