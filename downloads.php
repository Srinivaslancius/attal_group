<?php include_once 'top_header.php'; ?>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--  Roboto font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

<!-- mega menu -->
<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

<!-- font-awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Flaticon -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css" />

<!-- owl-carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!-- General style -->
<link href="css/general.css" rel="stylesheet" type="text/css" />

<!-- main style -->
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
        <div class="section-title"><h1 class="title text-white">Downloads</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="javascript:void(0)">Downloads</a> <i class="fa fa-angle-double-right"></i></li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->
<?php $getCategoriesData = "SELECT * FROM categories WHERE status='0' "; 
$getAllcategoriesData = $conn->query($getCategoriesData);

?>
<section class="content-box3 page-section-ptb pb-40"><div class="container">
<div class="row text-justify">
<div class="col-sm-12">
  <div class="section-title text-center">
    <h2 class="title">Downloads</h2>
  </div>
</div>
<?php while($getCategories = $getAllcategoriesData->fetch_assoc()) {?>
  <div class="col-sm-12"><div class="section-title text-left">
    <h4 class="title" style="margin-bottom:10"><?php echo $getCategories['category_name']; ?></h4>
  </div>
</div>
</div>
<?php $getDownloadsData = "SELECT * FROM downloads WHERE status='0' AND category_id='".$getCategories['id']."'  ";
$getAllDownloadsData = $conn->query($getDownloadsData);

?>
  <div class="row mrgb-btm">
    <?php while($getDownloads = $getAllDownloadsData->fetch_assoc()) {?>
  <div class="col-sm-4">
    <div class="item">
        <div class="post left_pos clearfix">
      <div class="post-image clearfix">
        <a href="<?php echo $base_url . 'uploads/downloads_pdf_images/'.$getDownloads['pdf_image'] ?>" target="_blank"><img class="img-responsive " src="uploads/pdf_file.jpg" alt=""></a>
      </div>
      <div class="post-details">
        <div class="post-title"><h5 class="title"><?php echo $getDownloads['user_name']; ?></h5></div>
                <div class="post-content"><p><?php echo substr(strip_tags($getDownloads['description']), 0,40);?></p></div>
      </div>                
         </div>
      </div>
  </div>
  <?php } ?>
  
  </div>
  <?php } ?>
<div class="row mrgb-btm">
  
  
  
  </div>
  <div class="row mrgb-btm">
  
  
  
  </div>
  <div class="row mrgb-btm">
  
  
  
  </div>
  <div class="row mrgb-btm">
  
  
  
  </div>
  <div class="row mrgb-btm">
  
  </div>
  
  


  
  
</div></div></section>

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

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>