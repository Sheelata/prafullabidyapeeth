<div class="box-content">
 
    <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#"> Update Officer and Staff Information</a>
        </li>
    </ul>
</div>



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Image</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
        include_once './admin_class.php';
        $admin_object = new admin_class();

        $name = filter_input(INPUT_POST, 'name');
        $designation = filter_input(INPUT_POST, 'designation');
        $mobile=filter_input(INPUT_POST, 'mobile');
        $email=filter_input(INPUT_POST, 'email');
        $sequence=  filter_input(INPUT_POST,'sequence');
        $imageId = filter_input(INPUT_GET, 'imageId');
        if ($imageId != "") {
        $link = filter_input(INPUT_GET, 'link');
        
            ?>
            <div class="box-header well" data-original-title>
                 
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <?php
        }

        $currTime = microtime(true);
        $target_dir = "images/" . $currTime;
        $uploadOk = 1;
        $fileNameUrl = '';
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
             $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check === false) {
                echo "<p style='color:red;'>File is not an image.</p>";
                $uploadOk = 0;
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "<p style='color:red;'>Sorry, file already exists.</p>";
                $uploadOk = 0;
            }
            // Check file size
            else if ($_FILES["fileToUpload"]["size"] > 50000000) {
                echo "<p style='color:red;'>Sorry, your file is too large.</p>";
                $uploadOk = 0;
            }
            // Allow certain file formats
             else if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                echo "<p style='color:red;'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "<p style='color:red;'>Sorry, your file was not uploaded.</p>";
                // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $uploadOk = 1;
                    //        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    $fileNameUrl = $target_file;
                } else {
                    echo "<p style='color:red;'>Sorry, there was an error uploading your file.</p>";
                }
            }
        }

        if ($fileNameUrl != '') {
            $admin_object->add_officer_staff($fileNameUrl,$name,$designation,$mobile,$email,$sequence);
           
            
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Added the Image.....!</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>

            <?php
        }

//$res = $admin_object->get_brief_description();
//$row = mysqli_fetch_array($res);
        ?>
        <div class="box-content">

            <form class="form-horizontal" action="index.php?id=update_officer_staff_info"  method="post"  enctype="multipart/form-data" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Select Image</label>
                        <div class="controls">

                            <input type="file" name="fileToUpload" id="fileToUpload" >
                            <p>Drag your files here or click in this area.</p>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="textarea2"> Name</label>
                        <div class="controls">
                           <input type="text" name="name" style="width: 100%; height: 40px;">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Designation</label>
                        <div class="controls">
                           <input type="text" name="designation" style="width: 100%; height: 40px;">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Mobile</label>
                        <div class="controls">
                           <input type="number" name="mobile" style="width: 100%; height: 40px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Email</label>
                        <div class="controls">
                            <input type="email" name="email" style="width: 100%; height: 40px;">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> Sequence</label>
                        <div class="controls">
                            <input type="number" name="sequence" style="width: 100%; height: 40px;">
                        </div>
                    </div>
                      
                    
                    
                    

                    <div class="form-actions col-sm-12" style="text-align: center;">
                        <br>

                        <button type="submit" name="submit"   class="btn btn-primary">Upload</button>
                    </div>
                </fieldset>
            </form>   

            <!--DElete /  manage Image-->
               
        </div>
    </div><!--/span-->

</div><!--/row-->


    
    
    
    
    
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
       
        <thead>
    <tr>
        <th> Id</th>
        <th> Name</th>
        <th> Designation</th>
        <th> Mobile</th>
        <th> Email </th>
        <th> Sequence </th>
        <th>Action</th> 
    </tr>
    </thead>
    <tbody>
        
          <?php
          
          
          
           include_once './admin_class.php';
                    $admin_object = new admin_class();
                    $result = $admin_object->select_all_officer_staff();  
                    while($row = mysqli_fetch_assoc($result)){  
                         ?>
                         
         <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="center"><?php echo $row['name']; ?></td>
        <td class="center"><?php echo $row['designation']; ?></td>
        <td class="center"><?php echo $row['mobile']; ?></td>
        <td class="center"><?php echo $row['email']; ?></td>
        <td class="center"><?php echo $row['sequence']; ?></td>
         
         
         <td class="center">
             
             
           
             
             <a class="btn btn-danger" href="index.php?id=update_officer_staff_info&delect_officer_satff=<?php echo $row['id'];?> " title="Delete" onclick=" return confirm_delete('Are you sure you want to delete this item?');">
                <i class=" glyphicon glyphicon-trash icon-white"></i>
      
            </a>
        </td>
    </tr>
              
               <?php
          } 
           ?>
        
        
        
      
   </tbody>
    </table>
</div>