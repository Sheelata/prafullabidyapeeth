<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Home</a> <span class="divider">/</span>
        </li>
        <li>
            <a href="#">Brief Description</a>
        </li>
    </ul>
</div>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-edit"></i>Update Brief Description</h2>
            <div class="box-icon">
                <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
            </div>
        </div>

        <?php
        include_once './admin_class.php';
        $admin_object = new admin_class();

        $history = filter_input(INPUT_POST, 'history');
        $overview = filter_input(INPUT_POST, 'overview');

        
        $admin = $_SESSION['adnin_name'];

        if ($history != NULL && $overview != null) {
            $admin_object->update_brief_description($history,$overview);
            ?>
            <div class="box-header well" data-original-title>
                <h2><i class="icon-edit"></i> Successfully Update the Brief Description.....!</h2>
                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
                </div>
            </div>

<?php }

$res = $admin_object->get_brief_description();
        $row = mysqli_fetch_array($res);
?>
        <div class="box-content">
            <h3>          

            </h3>  
            <form class="form-horizontal" action="index.php?id=brief_description"  method="post" onsubmit="return validateStandard(this)">
                <fieldset>
                    <legend></legend>
       
              

                    <div class="control-group">
                        <label class="control-label" for="textarea2">History</label>
                        <div class="controls">
                          <textarea name="history" style="width: 100%;">
                                        <?php echo $row['history'];  ?>
                          </textarea>
                        </div>
                    </div> 
                           <div class="control-group">
                        <label class="control-label" for="textarea2">Overview</label>
                        <div class="controls">
                          <textarea name="overview" style="width: 100%;">
                                        <?php echo $row['overview'];  ?>
                          </textarea>
                        </div>
                    </div> 
                    
                    
                    
<!--                    <div class="control-group">
                        <label class="control-label" for="textarea2">Overview</label>
                        <div class="controls">
                            <div ng-app="textAngularTest" ng-controller="wysiwygeditor" class=" app">

                                <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'><?php //echo $row['overview']; ?></div>

                                <textarea ng-model="htmlcontent" style="width: 100%"></textarea>

                            </div>  
                        </div>
                    </div>-->

                    <!--                    <div class="control-group">
                                            <label class="control-label" for="textarea2">Overview</label>
                                            <div class="controls">
                                                 
                                            <textarea name="overview" class="cleditor"  style="min-width: 100%" id="textarea3" rows="7" cols="12"> <?php echo $row['vision']; ?></textarea>
                                            </div>
                                        </div>-->

                    <div class="form-actions col-sm-12" style="text-align: center;">
                        <br> <br>
                        <button type="submit"  class="btn btn-primary">Update</button>
                    </div>
                </fieldset>
            </form>   

        </div>
    </div><!--/span-->

</div><!--/row-->
