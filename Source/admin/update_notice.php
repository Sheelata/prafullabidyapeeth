<div class="box-content">
 
    <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#"> Update Notice</a>
        </li>
    </ul>
</div>



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add PDF</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
        include_once './admin_class.php';
        $admin_object = new admin_class();

        $notice_title = filter_input(INPUT_POST, 'notice_title');
        $date=filter_input(INPUT_POST, 'date');
        $month=filter_input(INPUT_POST, 'month');
        $year=filter_input(INPUT_POST, 'year');
        $imageId = filter_input(INPUT_GET, 'imageId');
        if ($imageId != "") {
        $link = filter_input(INPUT_GET, 'link');
        
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Photo Deleted.....!</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>
            <?php
        }

        $currTime = microtime(true);
        $target_dir = "pdf_files/" . $currTime;
        $uploadOk = 1;
        $fileNameUrl = '';
        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
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
            else if ($imageFileType != "pdf") {
                echo "<p style='color:red;'>Sorry, only pdf files are allowed.</p>";
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
            $admin_object->add_pdf($fileNameUrl,$notice_title,$date,$month,$year);
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Added the PDF.....!</h2>
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

            <form class="form-horizontal" action="index.php?id=update_notice"  method="post"  enctype="multipart/form-data" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Select PDF</label>
                        <div class="controls">

                            <input type="file" name="fileToUpload" id="fileToUpload" >
                            <p>Drag your files here or click in this area.</p>
                        </div>
                    </div>

                     <div class="control-group">
                        <label class="control-label" for="textarea2"> Notice Title</label>
                        <div class="controls">
                          <textarea name="notice_title" style="width: 100%;">
                                        
                          </textarea>
                        </div>
                    </div> 
                      
                    <div class="control-group">
                        <label class="control-label"> Assign Date: </label>
                        
                        <div class="controls">
                   
      <select name="date" style="width: 100%; height: 40px;" placeholder="Assign Business">
		<option> Select Date
                                    <option> 01
                                        <option> 02
                                            <option> 03
                                                <option> 04
                                                    <option> 05
                                                    <option> 06
                                                    <option> 07
                                                        <option> 08
                                                            <option> 09
                                                                <option> 10
                                                                    <option> 11
                                                                        <option> 12
                                                                            <option> 13
                                                                                <option> 14
                                                                                    <option> 15
                                                                                        <option> 16
                                                                                            <option> 17
                                                                                                <option> 18
                                                                                                    <option> 19
                                                                                                        <option> 20
                                                                                                            <option> 21
                                                                                                                <option> 22
                                                                                                                <option> 23
                                                                                                                    <option> 24
                                                                                                                        <option> 25
                                                                                                                            <option> 26
                                                                                                                                <option> 27
                                                                                                                                    <option> 28
                                                                                                                                        <option> 29
                                                                                                                                            <option> 30
                                                                                                                                                <option> 31
                                                                                                                    
                                          
		</select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label"> Assign Month: </label>
                        
                        <div class="controls">
                   
      <select name="month" style="width: 100%; height: 40px;" placeholder="Assign Business">
		<option> Select Month
                                    <option> JAN
                                        <option> FEB
                                            <option> MAR
                                                <option> APR
                                                    <option> MAY
                                                    <option> JUN
                                                    <option> JUL
                                                        <option> AUG
                                                            <option> SEP
                                                                <option> OCT
                                                                    <option> NOV
                                                                        <option> DEC
                                                                            
      </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"> Assign Month: </label>
                        
                        <div class="controls">
                   
      <select name="year" style="width: 100%; height: 40px;" placeholder="Assign Business">
		<option> Select Year
                                    <option> 2018
                                        <option> 2019
                                            <option> 2020
                                                <option> 2021
                                                    <option> 2022
                                                    <option> 2023
                                                    <option> 2024
                                                        <option> 2025
                                                            <option> 2026
                                                                <option> 2027
                                                                    <option> 2028
                                                                        <option> 2029
                                                                            
      </select>
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
        <th>Notice Id</th>
        <th>Notice Title</th>
        <th>Publication Status</th>
        <th>Action</th> 
    </tr>
    </thead>
    <tbody>
        
          <?php
          
          
          
           include_once './admin_class.php';
                    $admin_object = new admin_class();
                    $result = $admin_object->select_all_notice();  
                    while($row = mysqli_fetch_assoc($result)){  
                         ?>
                         
         <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="center"><?php echo $row['notice_title']; ?></td>
        <td class="center"><?php
        if($row['publish_status']==1){
            echo "Published";
        }
        else       echo 'Unpublished';
          ?>
        </td>
         <td class="center">
             
             <?php 
             if($row['publish_status']==1){
               ?>  <a class="btn btn-danger" href="index.php?id=update_notice&university_unpublish_row=<?php echo $row['id'];?>" title="Unpublished">
                <i class="glyphicon glyphicon-arrow-down icon-white"></i> 
                  </a>
 <?php 
   }
          else {
              ?> <a class="btn btn-success" href="index.php?id=update_notice&university_publish_row=<?php echo $row['id'];?>"  title="Published"  >
                <i class="glyphicon glyphicon-arrow-up icon-white"></i> 
                 </a>
    <?php
   }?>
           
             <a class="btn btn-info" href="index.php?id=edit_university&university_row=<?php echo $row['id'];?>" title="Edit">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                
            </a>
             <a class="btn btn-danger" href="index.php?id=update_notice&delete_pdf=<?php echo $row['id'];?> " title="Delete" onclick=" return confirm_delete('Are you sure you want to delete this item?');">
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