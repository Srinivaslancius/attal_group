<?php include_once 'top_header.php';
$getContentsData = getDataFromTables('content_pages','0','id',22,$activeStatus=NULL,$activeTop=NULL);
$getAddress  = $getContentsData->fetch_assoc();
$getContentsData = getDataFromTables('content_pages','0','id',23,$activeStatus=NULL,$activeTop=NULL);
$getPhone  = $getContentsData->fetch_assoc();
$getContentsData = getDataFromTables('content_pages','0','id',24,$activeStatus=NULL,$activeTop=NULL);
$getEmail  = $getContentsData->fetch_assoc();
?>
<?php
//ob_start();
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message']) && !empty($_POST['website']) && !empty($_POST['phone']))  {
$dataem = 'gunavardhan@lanciussolutions.com';
//$to = "srinivas@lanciussolutions.com";
$to = "$dataem";
$subject = "Attal Group - Contact Us ";

$message = "<html><head><title>Attal Group </title></head>
<body>
<p>User Feed Back Information!</p>
<h4>Name: </h4><p>".$_POST['name']."</p>
<h4>Email: </h4><p>".$_POST['email']."</p>
<h4>Email: </h4><p>".$_POST['phone']."</p>
<h4>Message: </h4><p>".$_POST['message']."</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info@attalgroup.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

}
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
                <li><a href="contact.php">Contact us</a> </li>
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
            <h3 class="title"><?php echo $getAddress['title']; ?></h3>
            <span><?php echo $getAddress['description']; ?></span>
        </div>
        <div class="address-block fill">
          <i class="glyph-icon flaticon-technology-2"></i>
            <h3 class="title"><?php echo $getPhone['title']; ?></h3>
            <span><?php echo $getPhone['description']; ?></span>
        </div>
        <div class="address-block fill">
          <i class="glyph-icon flaticon-email"></i>
            <h3 class="title"><?php echo $getEmail['title']; ?></h3>
            <a href="#"><?php echo $getEmail['description']; ?></a>
        </div>
  </div>
      <div class="col-md-8 col-sm-7">
        <div class="defoult-form">
        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
           <form method="post">
              <div class="form-group half-group">
                  <label>Name*</label>
                    <div class="input-group">
                      <input id="name" type="text" placeholder="" class="form-control"  name="name" required>
                    </div>
              </div>
              <div class="form-group half-group">
                <label>Email*</label>
                    <div class="input-group">
                    <input type="email" placeholder="" class="form-control" name="email" required>
                    </div>
              </div>
              <div class="form-group half-group">
                <label>Phone*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="phone" required>
                    </div>
              </div>
                <div class="form-group half-group">
                <label>Website*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="website" required>
                    </div>
              </div>
              <div class="form-group">
                <label>Message*</label>
                    <div class="input-group">
                      <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message" required></textarea>
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