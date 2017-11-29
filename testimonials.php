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
<style>
.review_strip {
    background: #fff;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    position: relative;
    padding: 30px 20px 20px 30px;
    margin-bottom: 30px;
    box-shadow: 0 0 5px 0 rgba(0,0,0,.1);
}

.review_strip, .transfer_container {
    -moz-box-shadow: 0 0 5px 0 rgba(0,0,0,.1);
}

.feature, .review_strip, .transfer_container {
    -webkit-box-shadow: 0 0 5px 0 rgba(0,0,0,.1);
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.review_strip img {
    top: -15px;
    left: 25px;
    border: 4px solid #fff;
}

.loader, .review_strip img, .tape {
    position: absolute;
}

.img-circle {
    border-radius: 50%;
}

img {
    vertical-align: middle;
}

img {
    border: 0;
}
.review_strip h4 {
    font-size: 18px;
    margin: -10px 0 35px 80px;
    padding: 0;
}

h1, h2, h3, h4, h5, h6 {
    color: #333;
}
</style>

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
            </li>
        </ul>
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
        <div class="section-title"><h1 class="title text-white">Testimonials</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="">Testimonials</a> <i class="fa fa-angle-double-right"></i></li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->

<section class="contact-sec page-section-pt"><div class="container"><div class="row">
    <div class="col-sm-12"><div class="section-title text-center">
        <h2 class="title">Testimonials</h2>
    </div>
    </div>
  
    
</div>

<?php $getAllTestimonialsData = "SELECT * FROM testimonials WHERE status=0"; 
$getTestimonialsData = $conn->query($getAllTestimonialsData); ?>
<div class="row">
        <?php  while($getTestimonials = $getTestimonialsData->fetch_assoc()) { ?>
        <div class="col-md-6">
          <div class="review_strip">
            <img src="<?php echo $base_url . 'uploads/testimonial_images/'.$getTestimonials['image'] ?>" style="width:75px; height:75px;" alt="Image" class="img-circle">
            <h4><?php echo $getTestimonials['title']; ?></h4>
            <p>
              <p><?php echo substr($getTestimonials['description'], 0, 150);?></p>
            </p>
            
          </div>
          <!-- End review strip -->
        </div>
        <?php } ?>    
        
  </div>
      
      
</section><br>

<!--=================================
 page-section -->


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

<!-- bootstrap -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>