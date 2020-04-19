<div class="box-content">
 
    <div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#"> Update Video</a>
        </li>
    </ul>
</div>



<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Add Video</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
        include_once './admin_class.php';
        $admin_object = new admin_class();

        $video_title = filter_input(INPUT_POST, 'video_title');
        $video_link = filter_input(INPUT_POST, 'video_link');
        $video_description=filter_input(INPUT_POST, 'video_description');
      
          if ($video_title != '' && $video_description != '' && $video_link != '') {
            $admin_object->add_video($video_title,$video_link,$video_description);
           
            
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
        ?>  
         
         

 
        <div class="box-content">

            <form class="form-horizontal" action="index.php?id=update_video"  method="post"  enctype="multipart/form-data" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>


                    

                     <div class="control-group">
                        <label class="control-label" for="textarea2"> video title</label>
                        <div class="controls">
                           <input type="text" name="video_title" style="width: 100%; height: 40px;">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> video description</label>
                        <div class="controls">
                           <input type="text" name="video_description" style="width: 100%; height: 40px;">
                        </div>
                    </div> 
                    <div class="control-group">
                        <label class="control-label" for="textarea2"> video link</label>
                        <div class="controls">
                           <input type="text" name="video_link" style="width: 100%; height: 40px;">
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
        <th> video title</th>
        <th> video description</th>
        <th> video link</th>
         
    </tr>
    </thead>
    <tbody>
        
          <?php
          
          
          
           include_once './admin_class.php';
                    $admin_object = new admin_class();
                    $result = $admin_object->select_all_video();  
                    while($row = mysqli_fetch_assoc($result)){  
                         ?>
                         
         <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="center"><?php echo $row['video_title']; ?></td>
        <td class="center"><?php echo $row['video_description']; ?></td>
        <td class="center"><?php echo $row['video_link']; ?></td>
        
         
         
         <td class="center">
             
             
           
             
             <a class="btn btn-danger" href="index.php?id=update_video&delect_video=<?php echo $row['id'];?> " title="Delete" onclick=" return confirm_delete('Are you sure you want to delete this item?');">
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