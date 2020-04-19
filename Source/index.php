<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <title>Prafulla Bidyapeeth </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Your page description here" />
        <meta name="author" content="" />
       
 <!--        for menu-->

         
        <script src="js/modernizr.custom.js"></script>

        <!-- CSS for Event Card -->
        <link href="css/css_for_event_card.css" rel="stylesheet" type="text/css"/>
        <!-- css -->
        <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="css/flexslider.css" rel="stylesheet" />
        <link href="css/prettyPhoto.css" rel="stylesheet" />
        <link href="css/camera.css" rel="stylesheet" />
        <link href="css/jquery.bxslider.css" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />

        <!-- Theme skin -->
        <link href="color/default.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
<!--        <link rel="shortcut icon" href="ico/favicon.png" />-->


<link rel="icon" href="admin/img/logo20.png">

   
        <!-- =======================================================
          Theme Name: Eterna
          Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
          Author: BootstrapMade.com
          Author URL: https://bootstrapmade.com
        ======================================================= -->
        <script>
            function showhide()
            {
                var div = document.getElementById("newpost");
                if (div.style.display == "none") {
                    div.style.display = "block";
                    div.style.WebkitTransition = 'opacity 1s';
                    div.style.MozTransition = 'opacity 1s';
                    document.getElementById("button").innerHTML = "Less";
                }
                else {
                    div.style.display = "none";
                    document.getElementById("button").innerHTML = "More";
                }
            }

            function showhide1()
            {
                var div = document.getElementById("newpost1");
                if (div.style.display == "none") {
                    div.style.display = "block";
                    div.style.WebkitTransition = 'opacity 1s';
                    div.style.MozTransition = 'opacity 1s';

                    document.getElementById("button1").innerHTML = "Less";
                }
                else {
                    div.style.display = "none";

                    document.getElementById("button1").innerHTML = "More";
                }
            }
        </script>
  
    </head>

    <body>
  
  <!-- Trigger the modal with a button -->
 
 
        
         <div id="wrapper">
 <!-- Modal -->
 <div class="modal fade" style="display: none;" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg"  style="z-index:2147483647;">
      <div class="modal-content">
        <div class="modal-header">
            <center>
          <h6 class="modal-title">
বঙ্গবন্ধুর স্বপ্নের সোনার বাংলাদেশ তথা ডিজিটাল বাংলাদেশ বিনির্মানে শিক্ষাব্যাবস্থাকে ডিজিটাল করার লক্ষে প্রফুল্ল বিদ্যাপিঠের ক্ষুদ্র প্রয়াস নবনির্মিত স্কুল ওয়েবসাইট 
 </h6>
 
                <h4 style="color: #d44413;"> শুভ উদ্বোধন   </h4>
 
       
        <h6>
করবেন গণপ্রজাতন্ত্রী বাংলাদেশ সরকারের ডাক,টেলিযোগাযোগ ও তথ্য প্রযুক্তি মন্ত্রনালয়ের মাননীয় মন্ত্রী 

                 </h6>
                <img style="padding: 0px;" height="90px" width="130px" src="admin/img/Mustafa Jabbar.jpg" alt=""/>
                <h5>জনাব মোস্তফা জব্বার</h5>
                
          </center>
        </div>
          <div class="modal-body" style="padding: 0;" >
            <center>
                <h3 id="countdownlabel">Start</h3>
                <button style="height: 100%; width: 100%;" type="button" id="launchButton" class="btn btn-default" >  <img src="img/unnamed.png" alt=""/></button>
            </center>

        </div>
       
      </div>
    </div>
  </div>
            <!-- start header -->
            <?php include 'header.php'; ?>
            <!-- end header -->


            <!-- section featured -->
            <section id="featured" style="margin-top: 15px;">

                <!-- slideshow start here -->

                <div class="camera_wrap" id="camera-slide">

                    <!-- slide 1 here -->
                     <?php
                    include_once './Class/Database_class.php';
                    $databaseClass = new Database_class();
                    $res = $databaseClass->get_all_slider_image();
                  while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div data-src="admin/<?php echo $row['image_link']; ?>">

                    </div>
                  <?php }?>
                    <!-- slide 2 here -->
                     

                </div>

                <!-- slideshow end here -->

            </section>
            <!-- /section featured -->

            <section id="content">
                <div class="container">


                    <div class="row">
                        <div class="mar">
                            <?php
                            include_once './Class/Database_class.php';
                            $databaseClass = new Database_class();
                            $res = $databaseClass->select_all_quick_notice();
                            $row = mysqli_fetch_array($res);
                            ?>
                            <marquee direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3" style="color: red;">: : <?php echo $row['notice_body']; ?> : :</marquee>
                        </div>
                    </div>

                    <div class="row">
                        <div class="span12">
                            <div class="solidline"></div>
                        </div>
                    </div>


                    <?php
                    include_once './Class/Database_class.php';
                    $databaseClass = new Database_class();
                    $res = $databaseClass->get_principal_info();
                    $row = mysqli_fetch_array($res);
                    ?>



                    <div class="row">
                        <div class="span12">
                            <div class="row">
                                <div class="span4">
                                    <div class="headmessage">
                                        <h6>Headmaster's Message</h6>
                                        <div class="solidline"></div>

                                        <p>
                                            <img src="admin/<?php echo $row['image_link']; ?> " style="float:left;width:100px;height:100px; padding: 3px; padding-right: 5px;border: 2px white;">

<?php echo $row['principal_message_1stPart']; ?> 

                                        <div id="newpost" style="display: none">

<?php echo $row['principal_message_2ndPart']; ?> 

                                        </div>
											<div class="text-center">
												<button class="button " id="button" onclick="showhide()">More</button>
											</div>
                                        </p> 
                                    </div>
                                </div> 
<?php
$res1 = $databaseClass->get_chairman_info();
$row1 = mysqli_fetch_array($res1);
?>


                                <div class="span4">
                                    <div class="headmessage">
                                        <h6> Chairman's Message</h6>

                                        <div class="solidline"></div>

                                        <p>
                                            <img src="admin/<?php echo $row1['image_link']; ?>" style="float:left;width:100px;height:100px; padding: 3px; padding-right: 5px;border: 2px white;">

<?php echo $row1['chairman_message_1stPart']; ?> 

                                        <div id="newpost1" style="display: none">
                                            <?php echo $row1['chairman_message_2ndPart']; ?> 
                                        </div>
                                        <div class="text-center">
												<button class="button " id="button1" onclick="showhide1()">More</button>
											</div>


                                        </p>			 
                                    </div>
                                </div>







                                <div class="span4">
                                    <div class="notice_show">  
                                        <h6>Notice Board</h6>
                                        <div class="solidline"></div>
                                        <marquee Height=270px  direction="up" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3">
<?php
$res1 = $databaseClass->select_all_publish_notice();
while ($row1 = mysqli_fetch_array($res1)) {
    ?>
                                                <div class="noti">
                                                    <div class="under_noti">
                                                <?php echo $row1['date']; ?> <br> <?php echo $row1['month']; ?> 
                                                    </div>
                                                    <div class="under_noti_2" style="padding-left: 5px;">
                                                        <a href="show_pdf.php?id=<?php echo $row1['id']; ?>">  <?php echo $row1['notice_title']; ?> </a>
                                                    </div>
                                                </div>
                                                <div class="solidline"></div>

<?php } ?>
                                        </marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cols_card">
<?php
$res1 = $databaseClass->select_all_event();
while ($row = mysqli_fetch_array($res1)) {
    ?>
                                <div class="col_card" ontouchstart="this.classList.toggle('hover');">
                                    <div class="container_card">
                                        <div class="front" style="background-image: url('admin/<?php echo $row['event_image_link']; ?>');">
                                            <div class="inner">
                                                <p><?php echo $row['event_title']; ?></p>
                                                <span><?php echo $row['date']; ?> - <?php echo $row['month']; ?> - <?php echo $row['year']; ?></span>
                                            </div>
                                        </div>
                                        <div class="back">
                                            <div class="inner">
                                                <p><?php echo $row['event_body']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<?php } ?>

 

                        </div>


                    </div>

                </div>
            </section>




<?php include 'footer.php'; 
 
?>
        </div>
        <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

        <!-- javascript
          ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="js/bootstrap.js"></script>

        <script src="js/modernizr.custom.js"></script>
        <script src="js/toucheffects.js"></script>
        <script src="js/google-code-prettify/prettify.js"></script>
        <script src="js/jquery.bxslider.min.js"></script>
        <script src="js/camera/camera.js"></script>
        <script src="js/camera/setting.js"></script>

        <script src="js/jquery.prettyPhoto.js"></script>
        <script src="js/portfolio/jquery.quicksand.js"></script>
        <script src="js/portfolio/setting.js"></script>

        <script src="js/jquery.flexslider.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/inview.js"></script>

        <!-- Template Custom JavaScript File -->
        <script src="js/custom.js"></script>
        <script>
           
           
$("#launchButton").click(function(){
    
    
    var counter = 0;
var interval = setInterval(function() {
    counter++;
     document.getElementById("countdownlabel").innerHTML=counter;
   
    if (counter == 4) {
        document.getElementById("countdownlabel").innerHTML="Welcome";
            clearInterval(interval);
                 $('#myModal').modal('hide');

    }
    
}, 1000);
     
});
        </script>
        <button type="button" style="display: none;" id="myBtn" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" data-backdrop="static" data-keyboard="false">T</button>

 
 <?php
 $id = filter_input(INPUT_GET, 'id');
if($id==1){
 echo '<script type="text/javascript">',
     'document.getElementById("myBtn").click();',
     '</script>'
; 
}
 ?>

    </body>
</html>
