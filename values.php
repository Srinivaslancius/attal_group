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
				<div class="section-title"><h1 class="title text-white">Values</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="javascript:void(0)">About us</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Values</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 service -->

<section class="service white-bg page-section-ptb">
   <div class="container"> 
     <div class="row">
       <div class="col-lg-3 col-md-3">
         <div class="sidebar">
           <div class="service-nav">
             <ul>
              
                <li><a href="profile.php">Profile</a></li>
               <li><a href="history.php">History</a></li>
               <li><a  href="philosophy.php">Philosophy</a></li>
               <li><a class="active" href="values.php">Values</a></li>
               <li><a href="promoters.php">Promoters</a></li>
			    <li><a href="ourarchitects.php">Our Architects</a></li>
				 <li><a href="ourjvpartners.php">Our JV partners</a></li>
           
             </ul>
           </div>
      
         </div>
       </div>
        <div class="col-lg-9 col-md-9">
         <div class="service-block">
           <div class="row">
             <div class="col-lg-12 col-md-12">
               <h4 class="mb-20">Rooted in Values</h4>
             </div>
           </div>
          <div class="row text-justify">  
             <div class="col-lg-6 col-md-6 mb-20">
			  <h5 class="mb-10">Vision</h5>
               <img class="img-responsive center-block" src="images/about/01.jpg" alt="">
             </div>
             <div class="col-lg-6 col-md-6"> 
			  <h5 class="mb-10">Values</h5>
                <ul class="list-mark">
                  <li>Striving for customer satisfaction</li>
                  <li>Demonstrating a passion for quality</li>
                  <li>Driving team members towards excellence and encouraging them</li>
                  <li>Caring about communities</li>
				  <li>Being a profitable venture for all stakeholders</li>
                </ul>
             </div>
            </div>
         </div>
       </div>
     </div>
   </div>
</section>

<!--=================================
footer -->
 
<footer class="footer page-section-pt dark-bg">
<?php include_once 'footer.php'; ?>
 </footer>

 <!--=================================
footer -->

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