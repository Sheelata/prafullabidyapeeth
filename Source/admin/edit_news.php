<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Edit News</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i> Edit News</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>
        
                   <?php
                       include_once './admin_class.php';
                    $admin_object = new admin_class();
                    
                       $news_row = $_GET['news_row'];
                         $result = $admin_object->select_edit_news($news_row); 
                        $row = mysql_fetch_assoc($result);
                         ?> 
        <div class="box-content">
            <h3>           </h3>  
            <form class="form-horizontal" action="index.php?update=1&id=manage_news&row_id=<?php echo $row['id'];?>"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
                   
                     <div class="control-group">
                        <label class="control-label" for="textarea2">News Title</label>
                        <div class="controls">
                             
                        <textarea name="news_title" class="cleditor" id="textarea2" rows="7" cols="109"> <?php echo $row['news'] ?> </textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <br><br>
                        <div class="controls">
                            <label class="control-label" for="textarea2"> Publication Status &nbsp;&nbsp;&nbsp;</label>
                            <select name="publication_status"id="publication_status" err="Please Select Publication Status...." required exclude=" ">
                                <option value=" ">Select Publication Status</option>
                                <option value="1">Published</option>
                                <option value="0">Un Published</option>
                            </select>
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