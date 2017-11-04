<?php include_once 'top_header.php'; ?>
<?php 
$id = $_GET['id'];
$getServicesData = getDataFromTables('services',$status=NULL,'id',$id,$activeStatus=NULL,$activeTop=NULL);
$getService  = $getServicesData->fetch_assoc();
?>
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

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getService['image'] ?>);">
  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
        <div class="section-title"><h1 class="title text-white"><?php echo $getService['name'];?></h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="javascript:void(0)">Services</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span><?php echo $getService['name'];?></span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->


<!--=================================
 service -->

<section class="service white-bg page-section-ptb">
   <div class="container"> 
     <div class="row">
       <div class="col-lg-3 col-md-3">
         <div class="sidebar">
           <div class="service-nav">
             <ul>
                <!--<li><a href="content_details.php?id=1" <?php if($_GET['id'] == 1) { echo "class = active"; } ?>>Profile</a></li>-->
                <li><a href="service_details.php?id=2" <?php if($_GET['id'] == 2) { echo "class = active"; } ?>>Property Management Services</a></li>
                <li><a href="service_details.php?id=3" <?php if($_GET['id'] == 3) { echo "class = active"; } ?>>Home Loans</a></li>
                <li><a href="service_details.php?id=4" <?php if($_GET['id'] == 4) { echo "class = active"; } ?>>Loan Guide</a></li>
                <li><a href="service_details.php?id=5" <?php if($_GET['id'] == 5) { echo "class = active"; } ?>>NRI Services</a></li>
                <!--<li><a href="content_details.php?id=6" <?php if($_GET['id'] == 6) { echo "class = active"; } ?>>Our Architects</a></li>-->
                <li><a href="service_details.php?id=7" <?php if($_GET['id'] == 7) { echo "class = active"; } ?>>Support Services</a></li>
             </ul>
           </div>
         </div>
       </div>
        <div class="col-lg-9 col-md-9">
         <div class="service-block">
           <div class="row">
             <div class="col-lg-12 col-md-12">
               <?php echo $getService['description'];?>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
</section>

<!--=================================
 service -->
 
<!--=================================
footer -->
 
<footer class="footer page-section-pt dark-bg">
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