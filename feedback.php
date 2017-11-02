<?php include_once 'top_header.php'; ?>
<?php 

if (!isset($_POST['submit']))  {
            echo "";
    } else  { 
    //echo "<pre>";print_r($_POST);
    $name = $_POST['name'];
    $company = $_POST['company'];
    $designation = $_POST['designation'];
    $association_name = $_POST['association_name'];
    $project = $_POST['project'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $website_url = $_POST['website_url'];
    $created_at = date("Y-m-d h:i:s");
    $sql = "INSERT INTO user_feedback (`name`, `company`, `designation`, `association_name`, `project`,`phone`,`mobile`,`email`,`website_url`,`created_at`) VALUES ('$name', '$company', '$designation', '$association_name', '$project','$phone','$mobile','$email','$website_url','$created_at')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='feedback.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='feedback.php';</script>";
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
				<div class="section-title"><h1 class="title text-white">Feedback</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="contact.php">Contact us</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>feedback</span> </li>
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
        <h2 class="title">Partnerships that enable</h2>
		</div>
		<div class="section-title text-justify">
        <p>Building quality spaces is a tedious job, the credit for which does not belong with a single entity. 
		Equal credit goes to our associates for their invaluable contribution to each of our landmark creations. 
		We are an open and transparent organization that values our associates and are always looking to collaborate 
		with like-minded investors, vendors or land owners to be able to give maximum value to our clients. 
		If you would like to get in touch with us to explore the various avenues available for collaboration, please use the form below.</p>
    </div></div>
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
         <?php $getAssocaition = getDataFromTables('association','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>     
				<div class="form-group">
		   <label>Association</label>
			  <select name='association_name'class="form-control" id="sel1">
				<option>Select One</option>
        <?php while($row = $getAssocaition->fetch_assoc()) {  ?>
				<option value="<?php echo $row['association_name']; ?>"><?php echo $row['association_name']; ?></option>
        <?php } ?>
			  </select>
			</div>
			<div class="form-group">
                	<label>Project</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="project">
                    </div>
            	</div>
				<div class="form-group">
            		<label>Address*</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message"  rows="7" name="address"></textarea>
                    </div>
               	</div>
				<div class="form-group">
            		<label>Phone No*</label>
                    <div class="input-group">
            		      <input type="text" placeholder="" class="form-control" name="phone" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
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
                	<input type="hidden" name="action" value="sendEmail"/>
            		<button id="submit" name="submit" type="submit" value="Send" class="button border animated middle-fill"><span>Submit Now</span></button>
                </div>
            </form>
--
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