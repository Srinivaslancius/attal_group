<?php include_once 'top_header.php'; ?>
<?php 
$id = $_GET['id'];
$cid = $_GET['cid'];
$getProjectsData = getDataFromTables('categories',$status=NULL,'id',$cid,$activeStatus=NULL,$activeTop=NULL);
$getProjects  = $getProjectsData->fetch_assoc();
$getQry = "SELECT * FROM projects WHERE id = '$id' AND category_id = '$cid' ";
$res = $conn->query($getQry);
$getPojects  = $res->fetch_assoc();
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

<!--=================================
 header -->


<!--=================================
 banner -->

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(<?php echo $base_url . 'uploads/category_images/'.$getProjects['category_image'] ?>);">

  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
				<div class="section-title"><h1 class="title text-white"><?php echo $getPojects['project_name'];?></h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="javascript:void(0)"><i class="fa fa-home"></i>Projects</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span><?php echo $getPojects['project_name'];?></span> </li>
             </ul>
        </div>
     </div>
  </div>
  <?php ?>
</section>

<!--=================================
 banner -->


<!--=================================
 service -->

<section class="service white-bg page-section-ptb">
   <div class="container">
   <?php ?> 
     <div class="row">
       
        <div class="col-lg-12 col-md-12">
         <div class="service-block">
           <div class="row">
             <div class="col-lg-12 col-md-12">
               <h4 class="mb-20"><?php echo $getPojects['project_name'];?></h4>
               <p class="mb-30"><?php echo $getPojects['description'];?></p>
             </div>
           </div>
          <div class="row text-justify">  
             <div class="col-lg-6 col-md-6 mb-20" style="float:left; margin-left:-47px;"> 
               <img class="img-responsive center-block" src="<?php echo $base_url . 'uploads/projects_images/'.$getPojects['images'] ?>" width = '450px' height='450px' alt="">
             </div>
             <?php if(!empty($getPojects['specification']) && $getPojects['specification'] !='') { ?>
             <div class="col-lg-6 col-md-6">
                <h2>Specifications</h2> 
               <p style="float:left;"><?php echo $getPojects['specification'];?></p>
             </div>
             <?php }?>
             <?php if(!empty($getPojects['upload_pdf']) && $getPojects['upload_pdf'] !='') { ?>
             <h3>Fllor Plan:<a href="<?php echo $base_url . 'uploads/downloads_pdf_images/'.$getPojects['upload_pdf'] ?>" target="_blank"><?php echo $getPojects['upload_pdf']; ?></a></h3>
             <?php }?>
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