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
				<div class="section-title"><h1 class="title text-white">Contact Us</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="contact.php">Contact us</a> <i class="fa fa-angle-double-right"></i></li>
              <!--  <li><span>Contact 01</span> </li>-->
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
        <h2 class="title">Get in Touch With us</h2>
    </div></div>
    
   <div class="col-md-4 col-sm-5">
    	<div class="address-block fill">
        	<i class="glyph-icon flaticon-construction-5"></i>
            <h3 class="title">Location :</h3>
            <span>Head office Madhapur,<br>Hyderabad</span>
        </div>
        <div class="address-block fill">
        	<i class="glyph-icon flaticon-technology-2"></i>
            <h3 class="title">Phone :</h3>
            <span>+(000) 123 456 7890</span>
            <span>+(111) 000 123 456</span>
        </div>
        <div class="address-block fill">
        	<i class="glyph-icon flaticon-email"></i>
            <h3 class="title">Mail :</h3>
            <a href="#">mail@legendindia.com</a>
            <a href="#">info@legendindia.co.in</a>
        </div>
        <div class="address-block fill">
        	<i class="glyph-icon flaticon-fax"></i>
            <h3 class="title">Fax :</h3>
            <span>+(000) 123 456 7890</span>
            <span>+(111) 000 123 456</span>
        </div>
	</div>
      <div class="col-md-8 col-sm-7">
        <div class="defoult-form">
        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
           <form id="contactform" role="form" method="post" action="#">
            	<div class="form-group half-group">
                	<label>Name*</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="name">
                    </div>
            	</div>
            	<div class="form-group half-group">
            		<label>Email*</label>
                    <div class="input-group">
            	     	<input type="email" placeholder="" class="form-control" name="email">
                    </div>
            	</div>
            	<div class="form-group half-group">
            		<label>Phone*</label>
                    <div class="input-group">
            		      <input type="text" placeholder="" class="form-control" name="phone">
                    </div>
            	</div>
                <div class="form-group half-group">
            		<label>Website*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="website">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Message*</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                    </div>
               	</div>
                <div class="form-group">
                	<input type="hidden" name="action" value="sendEmail"/>
            		<button id="submit" name="submit" type="submit" value="Send" class="button border animated middle-fill"><span>Submit Now</span></button>
                </div>
            </form>
            <div id="ajaxloader" style="display:none"><img class="center-block" src="images/loading.gif" alt=""></div> 
            </div>
    </div>
    
</div></div>

<div class="container-fluid pt-60"><div class="row no-gutter"><div class="col-sm-12 ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30449.884437816916!2d78.37413604711732!3d17.44843628467614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9158f201b205%3A0x11bbe7be7792411b!2sMadhapur%2C+Hyderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1509428975565" width="1500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div></div></div>

</section>

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