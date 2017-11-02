<?php include_once 'top_header.php'; ?>
<?php 

if (!isset($_POST['submit']))  {
            echo "";
    } else  { 
    //echo "<pre>";print_r($_POST);
    $name = $_POST['name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $website_url = $_POST['website_url'];
    $comments = $_POST['comments'];
    $created_at = date("Y-m-d h:i:s");

    //Sending mail
  //$dataem = $getSiteSettingsData['email'];
  $to = "gunavardhan@lanciussolutions.com";
  //$to = "$dataem";
  $subject = "User Enquiry Info";

  $message = "<html><head><title>User Enquiry Information</title></head>
  <body>
    <table rules='all' style='border-color: #666;' cellpadding='10'>
      <tr style='background: #eee;'><td><strong>User Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>
      <tr><td><strong>Company Name:</strong> </td><td>" . strip_tags($_POST['company']) . "</td></tr>
      <tr><td><strong>Designation:</strong> </td><td>" . strip_tags($_POST['designation']) . "</td></tr>
      <tr><td><strong>Mobile:</strong> </td><td>" . strip_tags($_POST['mobile']) . "</td></tr>
      <tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>
      <tr><td><strong>Address:</strong> </td><td>" . strip_tags($_POST['address']) . "</td></tr>
      <tr><td><strong>Website Url:</strong> </td><td>" . strip_tags($_POST['website_url']) . "</td></tr>
      <tr><td><strong>Comments:</strong> </td><td>" . strip_tags($_POST['comments']) . "</td></tr>
    </table>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <info@fioten.com>' . "\r\n";
  // $headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($to,$subject,$message,$headers);

    $sql = "INSERT INTO user_enquiry (`name`, `company`, `designation`,`phone`,`mobile`,`email`,`website_url`,`comments`,`created_at`) VALUES ('$name', '$company', '$designation','$phone','$mobile','$email','$website_url','$comments','$created_at')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='enquiry.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='enquiry.php';</script>";
    }
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
				<div class="section-title"><h1 class="title text-white">Enquiry</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="contact.php">Contact Us</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Enquiry</span> </li>
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
        <h2 class="title">Enquiry Form</h2>
		</div>
		</div>
	 <div class="col-md-4 col-sm-7">
	 </div>
      <div class="col-md-4 col-sm-7">
        <div class="defoult-form">
        <div id="formmessage" style="display:none">Success/Error Message Goes Here</div>
           <form method="post">
            	<div class="form-group">
                	<label>Name*</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="name" required>
                    </div>
            	</div>
				 <div class="form-group">
            		<label>Company*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="company" required>
                    </div>
            	</div>
				 <div class="form-group">
            		<label>Designation*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="designation" required>
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
            		      <input type="text" placeholder="" class="form-control" name="phone" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)">
                    </div>
            	</div>
				<div class="form-group">
            		<label>Mobile No*</label>
                    <div class="input-group">
            		      <input type="text" placeholder="" class="form-control" name="mobile" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Email Id*</label>
                    <div class="input-group">
            	     	<input type="email" placeholder="" class="form-control" name="email" required>
                    </div>
            	</div>
                <div class="form-group">
            		<label>Website URL</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="website_url">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Comments*</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message" rows="7" name="comments" required></textarea>
                    </div>
               	</div>
                <div class="form-group">
                	<input type="hidden" name="action" value="sendEmail"/>
            		<button id="submit" name="submit" type="submit" value="send" class="button border animated middle-fill"><span>Submit Now</span></button>
                </div>
            </form>
           
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
<script type="text/javascript">
  function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
      return true;
    }
</script>