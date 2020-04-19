<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Add Photo</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Photo</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
        include_once './admin_class.php';
        $admin_object = new admin_class();

        $description = filter_input(INPUT_POST, 'description');
        $imageId = filter_input(INPUT_GET, 'imageId');
    
        if ($imageId != "") {
        $link = filter_input(INPUT_GET, 'link');
        unlink($link);
            $admin_object->delete_image($imageId);
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
            else if (file_exists($target_file)) {
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
            $admin_object->add_image($fileNameUrl, $description);
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Added the Photo.....!</h2>
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

            <form class="form-horizontal" action="index.php?id=add_photo"  method="post"  enctype="multipart/form-data" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>


                    <div class="control-group">
                        <label class="control-label" for="textarea2">Select Photo</label>
                        <div class="controls">

                            <input type="file" name="fileToUpload" id="fileToUpload" >
                            <p>Drag your files here or click in this area.</p>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="description"> Description</label>
                        <div class="controls">

                            <input name="description" class="cleditor"  />
                        </div>
                    </div>
                    


                    <div class="form-actions col-sm-12" style="text-align: center;">
                        <br>

                        <button type="submit" name="submit"   class="btn btn-primary">Upload</button>
                    </div>
                </fieldset>
            </form>   

            <!--DElete /  manage Image-->
            <div id="photodiv">
                <ul>


                    <?php
                    include_once './admin_class.php';
                    $admin_object = new admin_class();
                    $res = $admin_object->get_all_image();
                    while ($row = mysqli_fetch_assoc($res)) {
                        ?> 

                        <li style="background-image: url('<?php echo $row['image_link']; ?>');" class="aimg"><a class="ajax-link" onclick="return confirm('Are you sure you want to delete this item?')" href="index.php?id=add_photo&imageId=<?php echo $row['id']; ?> &link=<?php echo $row['image_link']; ?> "> <span>DELETE</span> </a></li>

                    <?php } ?>
                </ul>
            </div>      
        </div>
    </div><!--/span-->

</div><!--/row-->