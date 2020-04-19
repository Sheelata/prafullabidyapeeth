<?php
session_start();

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');


$logout = filter_input(INPUT_GET, 'lid');
if ($logout == 'logout')
    unset($_SESSION['adnin_name']);


if ($username != NULL) {
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $admin_object->check_admin_login($username, $password);
}

$update_news = filter_input(INPUT_GET, 'update');
if ($update_news == 1) {
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $row_id = $_GET['row_id'];
    $news_title = $_POST['news_title'];
    $publication_status = $_POST['publication_status'];

    if ($news_title != NULL)
        $admin_object->update_edit_news($news_title, $publication_status, $row_id);
}

$delete_row = filter_input(INPUT_GET, 'delete_row');
if ($delete_row != NULL) {
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $admin_object->delete_news($delete_row);
}

$delete_university_row = filter_input(INPUT_GET, 'delete_university_row');
if ($delete_university_row != NULL) {
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $admin_object->delete_university($delete_university_row);
}

$university_update = filter_input(INPUT_GET, 'university_update');
if ($university_update == 1) {
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $row_id = filter_input(INPUT_GET, 'row_id');
    $university_name = filter_input(INPUT_POST, 'university_name');
    $location = filter_input(INPUT_POST, 'location');
    $description = filter_input(INPUT_POST, 'description');

    $logo = filter_input(INPUT_POST, 'logo');

    if ($logo != NULL)
        $admin_object->update_edit_university_logo($university_name, $location, $description, $logo, $row_id);

    else {
        $admin_object->update_edit_university($university_name, $location, $description, $row_id);
    }
}
?>
<meta charset="utf-8">
<title>Prafullo BidyaPith Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Charisma, a fully featured, responsive, HTML5, Bootstrap admin template.">
<meta name="author" content="Muhammad Usman">
<meta name="robots" content="noindex">

<link  href="css/bootstrap-cerulean.css" rel="stylesheet">
<style type="text/css">
    body {
        padding-bottom: 40px;
    }
    .sidebar-nav {
        padding: 9px 0;
    }
    .ta-editor {
        min-height: 300px;
        height: auto;
        overflow: auto;
        font-family: inherit;
        font-size: 100%;
    }
* { 
    font-family: arial; box-sizing: border-box; 
    -moz-box-sizing: border-box; 
}
#photodiv ul { list-style-type: none; margin: 0px; padding: 0px; }
#photodiv ul li { 
    padding-top: 35px;
    float: left; width: 110px; height: 110px;
    background-position: center center;
    background-repeat: no-repeat; border: 1px solid #ccc;
    background-color: #f0f0f0;
    margin: 0 10px 10px 0;
}
#photodiv ul li span { 
    display: none; background-color: rgba(0,0,0,0.5); 
    color: #555; text-align: center; 
    margin: 0px 15px 10px 15px; color: #fff; 
    border-radius: 5px;
    padding: 3px; cursor: pointer;
}
#photodiv ul li:hover span { display: block; }
#photodiv ul li:hover span:hover { background-color: rgba(0,0,0,1); }

#photodiv ul li.selected { border: 2px solid #000; }
</style>
<!--  <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>-->
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href=" css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href=' css/fullcalendar.css' rel='stylesheet'>
<link href='  css/fullcalendar.print.css' rel='stylesheet'  media='print'>
<link href=' css/chosen.css' rel='stylesheet'>
<link href=' css/uniform.default.css' rel='stylesheet'>
<link href=' css/colorbox.css' rel='stylesheet'>
<link href=' css/jquery.cleditor.css' rel='stylesheet'>
<link href=' css/opa-icons.css' rel='stylesheet'>
<link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">
<link href="css/charisma-app.css" rel="stylesheet">
<link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
<link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
<link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
<link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
<link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
<link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
<link href='css/jquery.noty.css' rel='stylesheet'>
<link href='css/noty_theme_default.css' rel='stylesheet'>
<link href='css/elfinder.min.css' rel='stylesheet'>
<link href='css/elfinder.theme.css' rel='stylesheet'>
<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
<link href='css/uploadify.css' rel='stylesheet'>
<link href='css/animate.min.css' rel='stylesheet'>
<script src="bower_components/jquery/jquery.min.js"></script>
<!--<link rel="shortcut icon" href="img/favicon.ico">-->

<link rel="icon" href="img/logo20.png">


<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>


<?php
if (isset($_SESSION['adnin_name']) == NULL) {
    ?>



    <div class="ch-container">
        <div class="row">

            <div class="row">
                <div class="col-md-12 center login-header">
                    <h2>Welcome to Prafullo BidyaPith Admin panel</h2>
                </div>
                <!--/span-->
            </div><!--/row-->

            <div class="row">
                <div class="well col-md-5 center login-box">
                    <div class="alert alert-info">
                        Please login with your Username and Password.
                    </div>
                    <form class="form-horizontal" action="index.php" method="post">
                        <fieldset>
                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                                <input type="text" class="form-control" name='username' placeholder="Username">
                            </div>
                            <div class="clearfix"></div><br>

                            <div class="input-group input-group-lg">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                                <input type="password" class="form-control"name='password' placeholder="Password">
                            </div>
                            <div class="clearfix"></div>

                            <div class="input-prepend">
                                <label class="remember" for="remember"><input type="checkbox" id="remember"> Remember me</label>
                            </div>
                            <div class="clearfix"></div>

                            <p class="center col-md-5">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </p>
                        </fieldset>
                    </form>
                </div>
                <!--/span-->
            </div><!--/row-->
        </div><!--/fluid-row-->

    </div>

<?php
} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>



        </head>

        <body>
            <!-- topbar starts -->
            <div class="navbar navbar-default" role="navigation">

                <div class="navbar-inner">
                    <button type="button" class="navbar-toggle pull-left animated flip">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"> <img alt=" Logo" src="img/logo20.png" class="hidden-xs"/>
                        PrafulloBidyaPith </span> </a>

                    <!-- user dropdown starts -->
                    <div class="btn-group pull-right">
                        
                        <a class="ajax-link" href="index.php?lid=logout"><span style="font-size: 14px; color: white;">Logout</span></a>  
                       

                    </div>
                    <!-- user dropdown ends -->

                    <ul class="collapse navbar-collapse nav navbar-nav top-menu">
                        <li><a href="../index.php" target="blank"><i class="glyphicon glyphicon-globe"></i> Visit Site</a></li>

                    </ul>

                </div>
            </div>
            <!-- topbar ends -->
            <div class="ch-container">
                <div class="row">

                    <!-- left menu starts -->
                    <div class="col-sm-3 col-lg-3">
                        <div class="sidebar-nav">
                            <div class="nav-canvas">
                                <div class="nav-sm nav nav-stacked">

                                </div>
                                <ul class="nav nav-pills nav-stacked main-menu">
                                    <li class="nav-header">Main</li>
                                    <li><a class="ajax-link" href="index.php?id=dashboard "><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_slider"><i class="glyphicon glyphicon-eye-open "></i><span> Edit Slider</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=add_mission_vision "><i class="glyphicon glyphicon-plus"></i><span> Add Mission vision</span></a>
                                    </li>
									<li><a class="ajax-link" href="index.php?id=teritorial_description "><i class="glyphicon glyphicon-plus"></i><span> Add Teritorial Description</span></a>
                                    </li>
									<li><a class="ajax-link" href="index.php?id=infrastructure "><i class="glyphicon glyphicon-plus"></i><span> Infrastructure</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=foundation "><i class="glyphicon glyphicon-eye-open "></i><span> Edit Foundation</span></a>
                                    </li>
									<li><a class="ajax-link" href="index.php?id=brief_description "><i class="glyphicon glyphicon-eye-open "></i><span> Edit Brief Description</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=principal_info"><i class="glyphicon glyphicon-plus"></i><span> Principal Information</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=chairman_info"><i class="glyphicon glyphicon-plus"></i><span> Chairman Information</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_notice "><i class="glyphicon glyphicon-eye-open "></i><span> Update Notice</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=quick_notice "><i class="glyphicon glyphicon-eye-open "></i><span> Quick Notice</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=event_management"><i class="glyphicon glyphicon-plus"></i><span> Event Management</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_governingbody"><i class="glyphicon glyphicon-plus"></i><span> Update Govering Body</span></a>
                                    </li>
								    <li><a class="ajax-link" href="index.php?id=update_trustyboard"><i class="glyphicon glyphicon-plus"></i><span> Update Trusty Body</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=student_info "><i class="glyphicon glyphicon-eye-open "></i><span> Update All Class Information</span></a>
                                    </li>
									 <li><a class="ajax-link" href="index.php?id=student_information "><i class="glyphicon glyphicon-eye-open "></i><span> Update Student Information</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_officer_staff_info "><i class="glyphicon glyphicon-eye-open "></i><span> Update Officer Staff Info</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=academic_programs"><i class="glyphicon glyphicon-plus"></i><span> Update Academic Programs</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_tution_fee"><i class="glyphicon glyphicon-plus"></i><span> Update Tution Fee</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=update_holidays "><i class="glyphicon glyphicon-eye-open "></i><span> Update Holidays </span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=admission_circular "><i class="glyphicon glyphicon-eye-open "></i><span> Update admission Circular</span></a>
                                    </li>
                                     <li><a class="ajax-link" href="index.php?id=update_carrier"><i class="glyphicon glyphicon-plus"></i><span> Update Carrier </span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=library_info"><i class="glyphicon glyphicon-plus"></i><span> Update Library Information</span></a>
                                    </li>
									<li><a class="ajax-link" href="index.php?id=psc "><i class="glyphicon glyphicon-eye-open "></i><span> Update Result PSC</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=jsc "><i class="glyphicon glyphicon-eye-open "></i><span> Update Result JSC</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=ssc "><i class="glyphicon glyphicon-eye-open "></i><span> Update Result SSC</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=question"><i class="glyphicon glyphicon-plus"></i><span> Update Question Paper </span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=exam_routine"><i class="glyphicon glyphicon-plus"></i><span> Update Exam Routine</span></a>
                                    </li>
                                    <li><a class="ajax-link" href="index.php?id=add_photo"><i class="glyphicon glyphicon-eye-open "></i><span> Edit Photo</span></a>
                                    </li>
									<li><a class="ajax-link" href="index.php?id=update_video"><i class="glyphicon glyphicon-eye-open "></i><span> Edit Video</span></a>
                                    </li>
                                 
                                    
                                    
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--/span-->
                    <!-- left menu ends -->

                    <noscript>
                    <div class="alert alert-block col-md-12">
                        <h4 class="alert-heading">Warning!</h4>

                        <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                            enabled to use this site.</p>
                    </div>
                    </noscript>

    <?php
    include_once './admin_class.php';
    $admin_object = new admin_class();
    $publish_row = filter_input(INPUT_GET, 'publish_row');
    $unpublish_row = filter_input(INPUT_GET, 'unpublish_row');



    $university_publish_row = filter_input(INPUT_GET, 'university_publish_row');
    $university_unpublish_row = filter_input(INPUT_GET, 'university_unpublish_row');
    $delete_pdf=filter_input(INPUT_GET, 'delete_pdf');
    
    $event_unpublish = filter_input(INPUT_GET, 'event_unpublish');
    $event_publish = filter_input(INPUT_GET, 'event_publish');
    $event_delect=filter_input(INPUT_GET, 'event_delect');
     $delect_member=filter_input(INPUT_GET, 'delect_member');
	 $delect_video=filter_input(INPUT_GET, 'delect_video');
    $delect_student_pdf=filter_input(INPUT_GET, 'delete_student_pdf');
    $delect_officer_satff=filter_input(INPUT_GET, 'delect_officer_satff');
    $delete_question_pdf=filter_input(INPUT_GET, 'delete_question_pdf');
     $delete_exam_pdf=filter_input(INPUT_GET, 'delete_exam_pdf');
    $delete_exam_pdf=filter_input(INPUT_GET, 'delete_exam_pdf');
    
    
    if ($university_publish_row != NULL) {
        $admin_object->publish_notice($university_publish_row);
    } 
    else if ($university_unpublish_row != NULL) {
        $admin_object->unpublish_notice($university_unpublish_row);
    }
    else if ($delete_pdf != NULL) {
        $admin_object->delete_pdf($delete_pdf);
    }
    
    
     if ($event_publish != NULL) {
        $admin_object->publish_event($event_publish);
    } 
    else if ($event_unpublish != NULL) {
        $admin_object->unpublish_event($event_unpublish);
    }
    else if ($event_delect != NULL) {
        $admin_object->delete_event($event_delect);
    }
    
    
   if ($delect_member != NULL) {
        $admin_object->delete_goveringbody($delect_member);
    }
	if ($delect_member != NULL) {
        $admin_object->delete_trustyboard($delect_member);
    }
	if ($delect_video != NULL) {
        $admin_object->delete_video($delect_member);
    }
    
     if ($delect_student_pdf != NULL) {
        $admin_object->delete_student_pdf($delect_student_pdf);
    }
    if ($delect_officer_satff != NULL) {
        $admin_object->delete_officer_staff($delect_officer_satff);
    }
if ($delete_question_pdf != NULL) {
        $admin_object->delete_question_pdf($delete_question_pdf);
    }
    
    if ($delete_exam_pdf != NULL) {
        $admin_object->delete_exam_pdf($delete_exam_pdf);
    }

    if ($publish_row != NULL) {
        $admin_object->publish_news_info($publish_row);
    } else if ($unpublish_row != NULL) {
        $admin_object->unpublish_news_info($unpublish_row);
    }
    ?>

                    <div id="content" class="col-lg-9 col-sm-9">
                        <!-- content starts -->  






                    <?php
                    $id = filter_input(INPUT_GET, 'id');

                    if ($id == NULL) {
                        include './dashboard.php';
                    }

                    if ($id == 'dashboard') {
                        include './dashboard.php';
                    } else if ($id == 'add_mission_vision') {
                        include './add_mission_vision.php';
					} else if ($id == 'teritorial_description') {
                        include './teritorial_description.php';
					} else if ($id == 'infrastructure') {
                        include './infrastructure.php';
                    } else if ($id == 'brief_description') {
                        include './brief_description.php';
                    }else if ($id == 'foundation') {
                        include './foundation.php';
                    }else if ($id == 'update_trustyboard') {
                        include './update_trustyboard.php';
                    }else if ($id == 'update_video') {
                        include './update_video.php';
                    }else if ($id == 'student_information') {
                        include './student_information.php';
                    }else if ($id == 'psc') {
                        include './psc.php';
                    }

                    //Extras
                    else if ($id == 'add_photo')
                        include './add_photo.php';

                    else if ($id == 'edit_news')
                        include './edit_news.php';

                    else if ($id == 'principal_info')
                        include './principal_info.php';

                    else if ($id == 'chairman_info')
                        include './chairman_info.php';

                    else if ($id == 'update_notice')
                        include './update_notice.php';
                    
                    else if ($id == 'quick_notice')
                        include './quick_notice.php';
                    
                     else if ($id == 'event_management')
                        include './event_management.php';
                     
                      else if ($id == 'update_governingbody')
                        include './update_governingbody.php';
                      
                      else if ($id == 'student_info')
                        include './student_info.php';
                      
                       else if ($id == 'update_officer_staff_info')
                        include './update_officer_staff_info.php';
                       
                        else if ($id == 'update_tution_fee')
                        include './update_tution_fee.php';
                        
                        else if ($id == 'update_holidays')
                        include './update_holidays.php';
                        
                        else if ($id == 'admission_circular')
                        include './admission_circular.php';
                        
                        else if ($id == 'update_carrier')
                        include './update_carrier.php';
                        
                         else if ($id == 'library_info')
                        include './library_info.php';
                         
                          else if ($id == 'jsc')
                        include './jsc.php';
                          else if ($id == 'ssc')
                        include './ssc.php';
                          
                               else if ($id == 'question')
                        include './question.php';
                               
                          else if ($id == 'exam_routine')
                        include './exam_routine.php';
                         
                               else if ($id == 'update_slider')
                        include './update_slider.php';
                    ?>


                    </div><!--/#content.col-md-0-->
                </div><!--/fluid-row-->


                <hr>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h3>Settings</h3>
                            </div>
                            <div class="modal-body">
                                <p>Here settings can be configured...</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                                <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                            </div>
                        </div>
                    </div>
                </div>

                <footer class="row">
                    <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://www.timitbd.com" target="_blank">
                            TimiTBD</a> 2017 - 2019</p>

                    <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                            href="http://www.timitbd.com"  target="_blank">TimiTBD</a></p>
                </footer>

            </div><!--/.fluid-container-->

            <!-- external javascript -->

            

<!--<script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>-->
<!--  <script src="js/myScript.js" type="text/javascript"></script>-->
            <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

            <!-- library for cookie management -->
            <script src="js/jquery.cookie.js"></script>
            <!-- calender plugin -->
            <script src='bower_components/moment/min/moment.min.js'></script>
            <script src='bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
            <!-- data table plugin -->
            <script src='js/jquery.dataTables.min.js'></script>

            <!-- select or dropdown enhancer -->
            <script src="bower_components/chosen/chosen.jquery.min.js"></script>
            <!-- plugin for gallery image view -->
            <script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
            <!-- notification plugin -->
            <script src="js/jquery.noty.js"></script>
            <!-- library for making tables responsive -->
            <script src="bower_components/responsive-tables/responsive-tables.js"></script>
            <!-- tour plugin -->
            <script src="bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
            <!-- star rating plugin -->
            <script src="js/jquery.raty.min.js"></script>
            <!-- for iOS style toggle switch -->
            <script src="js/jquery.iphone.toggle.js"></script>
            <!-- autogrowing textarea plugin -->
            <script src="js/jquery.autogrow-textarea.js"></script>
            <!-- multiple file upload plugin -->
            <script src="js/jquery.uploadify-3.1.min.js"></script>
            <!-- history.js for cross-browser state change on ajax -->
            <script src="js/jquery.history.js"></script>
            <!-- application script for Charisma demo -->
            <script src="js/charisma.js"></script>


        </body>
    </html>
<?php } ?>
