<?php include_once 'top_header.php'; ?>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--  Roboto font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

<!-- Mega Menu -->
<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Flaticon -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css" />

<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="css/magnific-popup/magnific-popup.css">

<!-- Owl Carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!-- General style -->
<link href="css/general.css" rel="stylesheet" type="text/css" />

<!-- Main Style -->
<link href="css/style.css" rel="stylesheet" type="text/css" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles" />
<link rel="stylesheet" type="text/css" href="css/style-customizer.css" />

</head>

<body>

<!--=================================
 preloader -->
 

<!--=================================
header -->

<header id="header" class="clean">
<div class="topbar dark">
  <?php include_once 'main_header.php'; ?>
</div>
 
<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <?php include_once 'menu.php'; ?>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->


<!--=================================
 banner -->

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(images/bg/bg-2.jpg);">
  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
        <div class="section-title"><h1 class="title text-white">Photo Gallery</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="photogallery.php">Photo Gallery</a></li>
              <!--  <li><span>Portfolio 4 columns</span> </li>-->
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->

<!--=================================
 Page Section -->


<section class="portfolio-page page-section-ptb pb-50">
  <div class="container">
<div class="col-sm-12">
    <div class="section-title text-center">
      <h2 class="title">Experience Legend In Pictures</h2>
    </div>
  </div>
<?php $sql = "SELECT * FROM photo_gallery WHERE status = '0' GROUP BY gallery_id "; 
      $res = $conn->query($sql);
      while($row = $res->fetch_assoc()) {
?>

<div class="row no-gutter">

  
  
  <div class="col-sm-12">
    <div class="section-title text-left">
      <h4 class="title"><?php echo $row['title']; ?></h4>
   </div>
  </div>
<div class="col-sm-12"><div class="popup-gallery columns-4">

  <?php $gid=  $row['gallery_id']; $sql1 = "SELECT * FROM photo_gallery WHERE gallery_id = '$gid' AND status = '0' "; 
      $res1 = $conn->query($sql1);
      while($row1 = $res1->fetch_assoc()) {
  ?>

      <div class="project-info">
           <img class="img-responsive center-block" src="<?php echo $base_url . 'uploads/photo_gallery/'.$row1['gallery_images'] ?>" alt="">
          <div class="overlay">
              <div class="overlay-content text-center">
       
               <a href="<?php echo $base_url . 'uploads/photo_gallery/'.$row1['gallery_images'] ?>" class="button popup-img border small animated middle-fill"> <span> <i class="fa fa-arrows-alt"></i> </span></a>
              </div>
          </div>
      </div>
     <?php } ?>   
         
    </div>
  </div>

</div><br>
<?php } ?>
</div></section>

<!--=================================
 

<!--=================================
footer -->
 
 <footer class="footer dark-bg page-section-pt pb-0">
   <?php include_once 'footer.php'; ?>
 </footer>
 
 <!--=================================
footer -->

<!--=================================
Color Customizer --> 


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>

<!--=================================
 jquery -->


<!-- jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- mega-menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- isotope -->
<script type="text/javascript" src="js/isotope/isotope.pkgd.min.js"></script>

<!-- magnific -->
<script type="text/javascript" src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>