<?php include_once 'top_header.php'; ?>
<?php 

if (!isset($_POST['submit']))  {
            echo "";
    } else  { 
    //echo "<pre>";print_r($_POST);exit;
    $position_interest_in = $_POST['position_interest_in'];
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $marital_status = $_POST['marital_status'];
    $current_location = $_POST['current_location'];
    $land_line_no = $_POST['land_line_no'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $years_of_experience = $_POST['years_of_experience'];
    $current_designation = $_POST['current_designation'];
    $joining_date = $_POST['joining_date'];
    $current_organisation = $_POST['current_organisation'];
    $joing_date = $_POST['joing_date'];
    $area_of_specialization = $_POST['area_of_specialization'];
    $other_skills = $_POST['other_skills'];
    $qualification = $_POST['qualification'];
    $university = $_POST['university'];
    $year_of_passing = $_POST['year_of_passing'];
    $additional_info = $_POST['additional_info'];
    $fileToUpload = $_FILES["fileToUpload"]["name"];
    $created_at = date("Y-m-d h:i:s");

    if($fileToUpload!='') {

    $target_dir = "uploads/resumes/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO carrer_applcication (`position_interest_in`, `name`, `last_name`, `date_of_birth`, `gender`,`marital_status`,`current_location`,`land_line_no`,`mobile`,`email`,`years_of_experience`, `current_organisation`,`current_designation`,`joining_date`,`area_of_specialization`,`other_skills`,`qualification`,`university`,`year_of_passing`,`additional_info`,`upload_cv`,`created_at`) VALUES ('$position_interest_in', '$name', '$last_name', '$date_of_birth', '$gender','$marital_status','$current_location','$land_line_no','$mobile','$email', '$years_of_experience', '$current_organisation', '$current_designation','$joining_date','$area_of_specialization','$other_skills','$qualification','$university','$year_of_passing','$additional_info','$fileToUpload','$created_at')";
        if($conn->query($sql) === TRUE){
          echo "<script>alert('Data Updated Successfully');window.location.href='careers_application.php';</script>";
        }else {
          echo "<script>alert('Data Updation Failed');window.location.href='careers_application.php';</script>";
        }
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
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

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(images/bg/Careers-Banne.jpg);">
  <div class="container">
     <div class="row intro-title text-center">
           <!-- <div class="col-sm-12">
				<div class="section-title"><h1 class="title text-white">Online Application</h1></div>
           </div> -->
           <!-- <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="contact.php">Contact us</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>feedback</span> </li>
             </ul>
        </div> -->
     </div>
  </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->

<section class="contact-sec page-section-pt"><div class="container"><div class="row">
    <div class="col-sm-12"><div class="section-title text-center">
        <h2 style="color: #F3B315;" class="title">Online Application Form</h2>
		</div>
		</div>
	 <div class="col-md-4 col-sm-7">
	 </div>
      <div class="col-md-4 col-sm-7">
        <div class="defoult-form">
        <!-- <div id="formmessage" style="display:none">Success/Error Message Goes Here</div> -->
           <form method="post" enctype="multipart/form-data">
           		<div class="form-group">
                	<label>Position Interested In*</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="position_interest_in" required>
                    </div>
            	</div>
            	<h3 style="color: #F3B315;">Personal Details</h3>
            	<div class="form-group">
                	<label>Name*</label>
                    <div class="input-group">
            		      <input id="name" type="text" placeholder="" class="form-control"  name="name" required>
                    </div>
            	</div>
				 
				 <div class="form-group">
            		<label>Designation*</label>
                    <div class="input-group">
                      <input type="text" placeholder="" class="form-control" name="last_name" required>
                    </div>
            	</div>
              <div class="form-group">
                	<label>Date Of Birth*</label>
                    <div class="input-group">
            		      <input id="date_of_birth" type="text" placeholder="" class="form-control" required name="date_of_birth">
                    </div>
            	</div>
				<div class="form-group">
		   			<label>Gender</label>
					  <select name='gender'class="form-control" id="sel1">
						<option>Select Gender</option>
						<option value='1'>Male</option>
						<option value='0'>Female</option>
		        	</select>
				</div>
				<div class="form-group">
		   			<label>Marital Status</label>
					  <select name='marital_status'class="form-control" id="sel1">
						<option>Select Marital Status</option>
						<option value='0'>Married</option>
		        		<option value='1'>Un Married</option>
					  </select>
				</div>
			
				<div class="form-group">
            		<label>Current Location</label>
                    <div class="input-group">
            		      <input type ="text" class="form-control input-message" name="current_location">
                    </div>
               	</div>
               	<div class="form-group">
            		<label>Land Line No</label>
                    <div class="input-group">
            		      <input type="text" class="form-control input-message"  name="land_line_no">
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
            	<h3 style="color: #F3B315;">Work Experience</h3>
            	<div class="form-group">
            		<label>Years Of Experience*</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="years_of_experience" required>
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Current Organisation</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="current_organisation">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Current Designation</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="current_designation">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Joining Date*</label>
                    <div class="input-group">
            	     	<input type="text"  class="form-control" id="joining_date" name="joining_date" required>
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Area Of Sepcialization</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="area_of_specialization">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Other Skills</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="other_skills">
                    </div>
            	</div>
            	<h3 style="color: #F3B315;">Educational Qualifications</h3>
            	<div class="form-group">
            		<label>Qualification*</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="qualification" required>
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Univerity/Institute</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="university">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Year Of Passing</label>
                    <div class="input-group">
            	     	<input type="text" placeholder="" class="form-control" name="year_of_passing">
                    </div>
            	</div>
            	<div class="form-group">
            		<label>Additional Information</label>
                    <div class="input-group">
            		      <textarea class="form-control input-message" rows="7" name="additional_info"></textarea>
                    </div>
               	</div>
                <div class="form-group">
            		<label>Upload Cv</label>
                    <div class="input-group">
                      <input type="file"  accept=".doc, .docx" class="form-control" id='fileToUpload' name="fileToUpload">
                    </div>
            	</div>
                <div class="form-group">
                	<input type="hidden" name="action"/>
            		<button id="submit" name="submit" type="submit"  class="button border animated middle-fill"><span>Submit Now</span></button>
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
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
      $( function() {
        $( "#date_of_birth,#joining_date").datepicker();
      } );
</script>