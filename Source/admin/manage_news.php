<div class="box-content">
    <div class="alert alert-info">For help with such table please check <a href="http://datatables.net/" target="_blank">http://datatables.net/</a></div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
  
        
         
        <thead>
    <tr>
        <th>News Id</th>
        <th>News Title</th>
        <th>Publication Status</th>
        <th>Action</th> 
    </tr>
    </thead>
    <tbody>
        
          <?php
                      include_once './admin_class.php';
                      $admin_object = new admin_class();  
                      
                    $result = $admin_object->select_all_news_info();  

                    while ($row = mysql_fetch_assoc($result)) {
                        ?>
                         
         <tr>
        <td><?php echo $row['id']; ?></td>
        <td class="center"><?php echo $row['news']; ?></td>
        <td class="center"><?php
        if($row['publication_status']==1){
            echo "Published";
        }
        else       echo 'Unpublished';
          ?>
        </td>
         <td class="center">
             
             <?php 
             if($row['publication_status']==1){
               ?>  <a class="btn btn-danger" href="index.php?id=manage_news&unpublish_row=<?php echo $row['id'];?>" title="Unpublished">
                <i class="glyphicon glyphicon-arrow-down icon-white"></i> 
                  </a>
 <?php 
   }
          else {
              ?> <a class="btn btn-success" href="index.php?id=manage_news&publish_row=<?php echo $row['id'];?>"  title="Published"  >
                <i class="glyphicon glyphicon-arrow-up icon-white"></i> 
                 </a>
    <?php
   }?>
           
             <a class="btn btn-info" href="index.php?id=edit_news&news_row=<?php echo $row['id'];?>" title="Edit">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                
            </a>
             <a class="btn btn-danger" href="index.php?id=manage_news&delete_row=<?php echo $row['id'];?> " title="Delete" onclick=" return confirm_delete();">
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