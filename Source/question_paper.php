<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Question Paper</title>
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
                <li class="active"> Previous Question Paper </li>
              </ul>
              <h4>Previous Question Paper</h4>
              <ul>
                  <li> <a href="question_paper.php?id='One'">One</a></li>
                  <li><a href="question_paper.php?id='Two'">Two</a></li>
                   <li><a href="question_paper.php?id='Three'">Three</a></li>
                  <li><a href="question_paper.php?id='Four'">Four</a></li>
                   <li><a href="question_paper.php?id='Five'">Five</a></li>
                   <li><a href="question_paper.php?id='Six'">Six</a></li>
                  <li><a href="question_paper.php?id='Seven'">Seven</a></li>
                   <li><a href="question_paper.php?id='Eight'">Eight</a></li>
                  
                  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
 <?php
                            include_once './Class/Database_class.php';
                            $databaseClass = new Database_class();
                            $id = filter_input(INPUT_GET, 'id');
                    if ($id != '') {
           $res= $databaseClass->select_all_question_pdf($id);
                    $row = mysqli_fetch_array($res);
        ?>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12"> 
            <div class="blankline30"></div>
            <h3 class="aligncenter"><?php echo $row['pdf_title']; ?></h3>
            <div class="con">
                <embed src="admin/<?php echo $row['pdf_link']; ?>" type="application/pdf" width="100%" height="1000px" />
            </div>
          </div> 
        </div>
    </div>
    </section>

    <?php 
                    }
    include 'footer.php';?>
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
