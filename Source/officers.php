<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Officers and Staff Information </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  
        <!-- Our Created CSS -->
        <link href="css/our_created_css.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <!--<link rel="shortcut icon" href="ico/favicon.png" />-->
<link rel="icon" href="admin/img/logo20.png">

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <div id="wrapper">

    <!-- start header -->
    <?php include 'header.php';?>
    <!-- end header -->

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
              <ul class="breadcrumb">
                <li><a href="index.php">Home</a> <i class="icon-angle-right"></i></li> 
                <li class="active">Officers and Staff Information</li>
              </ul>
              <h2>Officers and Staff Information</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
	
	<section id="content">
                <div class="container">
                    <div class="row">                      
						   <div class="middleiimage">                           
 <?php
                            include_once './Class/Database_class.php';
                            $databaseClass = new Database_class();
                            $res1 = $databaseClass->select_single_officer_staff();
                            while ($row = mysqli_fetch_array($res1)) {
        ?>
                           <div class="gallery">
                               <a class="a" target="_blank" href="img_fjords.jpg" >
                                    <img src="admin/<?php echo $row['image_link']; ?>" alt="Trolltunga Norway" style="width: 200px; height: 250px;">
                                </a>
                                <div class="desc"><?php echo $row['name']; ?><br>
                                    <?php echo $row['designation']; ?><br>
                                    <?php echo $row['mobile']; ?><br>
                                    <?php echo $row['email']; ?><br>
                                  

                                </div>
                            </div>
                            <?php } ?>
                           
                        </div> 
                    </div>
                </div>
            </section>
	
	
       <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="span12"> 
                            <div class="blankline30"></div>
                             
 <?php
                            include_once './Class/Database_class.php';
                            $databaseClass = new Database_class();
                            $res1 = $databaseClass->select_all_officer_staff();
                            while ($row = mysqli_fetch_array($res1)) {
        ?>
                           <div class="gallery">
                               <a class="a" target="_blank" href="img_fjords.jpg" >
                                    <img src="admin/<?php echo $row['image_link']; ?>" alt="Trolltunga Norway" style="width: 200px; height: 250px;">
                                </a>
                                <div class="desc"><?php echo $row['name']; ?><br>
                                    <?php echo $row['designation']; ?><br>
                                    <?php echo $row['mobile']; ?><br>
                                    <?php echo $row['email']; ?><br>
                                  

                                </div>
                            </div>
                            <?php } ?>
                            
                        </div> 
                    </div>
                </div>
            </section>

    <?php include 'footer.php';?>
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

</body>
</html>
