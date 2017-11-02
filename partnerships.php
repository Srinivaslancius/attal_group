<?php include_once 'top_header.php'; ?>
<?php $getPartnerShipData = getDataFromTables('content_pages',$status=NULL,$clause=NULL,8,$activeStatus=NULL,$activeTop=NULL);
$getPartnerShipInfo = $getPartnerShipData->fetch_assoc();
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
				<div class="section-title"><h1 class="title text-white">PartnerShips</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="partnerships.php">PartnerShips</a> <i class="fa fa-angle-double-right"></i></li>
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
        <h2 class="title"><?php echo $getPartnerShipInfo['title']?></h2>
		</div>
		<div class="section-title text-justify">
        <?php echo $getPartnerShipInfo['description']?>
    </div></div>
	 <div class="col-md-4 col-sm-7">
	 </div>
      <div class="col-md-4 col-sm-7">
        <div class="defoult-form">
        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
           <form id="contactform" role="form" method="post" action="#">
		   <div class="form-group">
		   <label>Collaborate as*</label>
			  <select class="form-control" id="sel1">
				<option>Select One</option>
				<option>Land Owner</option>
				<option>Invester</option>
				<option>Vendar</option>
			  </select>
			</div>
            	<div class="form-group">
                	<label>Name*</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="name">
                    </div>
            	</div>
				 <div class="form-group">
            		<label>Company*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="company">
                    </div>
            	</div>
				 <div class="form-group">
            		<label>Designation*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="designation">
                    </div>
            	</div>
				<div class="form-group">
            		<label>Address*</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message" rows="7" name="address"></textarea>
                    </div>
               	</div>
				<div class="form-group">
            		<label>Phone No*</label>
                    <div class="input-group">
            		      <input type="text" placeholder="" class="form-control" name="phone">
                    </div>
            	</div>
				<div class="form-group">
            		<label>Mobile No*</label>
                    <div class="input-group">
            		      <input type="text" placeholder="" class="form-control" name="mobile">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Email Id*</label>
                    <div class="input-group">
            	     	<input type="email" placeholder="" class="form-control" name="email">
                    </div>
            	</div>
                <div class="form-group">
            		<label>Website URL</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="website URL">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Comments*</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message"  rows="7" name="comments"></textarea>
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
	<div class="col-md-4 col-sm-7">
	 </div>
    
</div></div>
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