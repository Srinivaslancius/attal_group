<?php //$getMenus = getAllDataCheckActive('services',0); 
    $getAllMenus = "SELECT * FROM services WHERE status = 0 ORDER BY id ASC";
    $getMenus = $conn->query($getAllMenus);
    
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
  <ul class="menu-logo">
                <li><a href="index.php"><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" alt="logo"> </a></li>
            </ul>
            <!-- menu links -->
            <ul class="menu-links">
            <!-- active class -->
            <li <?php if($page_name == 'content_details.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">About Us<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="content_details.php?id=1">Profile</a></li>
                    <li><a href="content_details.php?id=2">History</a></li>
                    <li><a href="content_details.php?id=3">Philosophy</a></li>
                    <li><a href="content_details.php?id=4">Values</a></li>
                    <li><a href="content_details.php?id=5">Promoters</a></li>
                    <li><a href="content_details.php?id=6">Our Architects</a></li>
                    <li><a href="content_details.php?id=7">Our JV Partners</a></li>
                 </ul>
            </li>
            <li><a href="javascript:void(0)">Projects<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="residential.php">Residential</a></li>
                    <li><a href="commercial.php">Commercial</a></li>
                 </ul>
            </li>
            <li <?php if($page_name == 'service_details.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">Services<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="service_details.php?id=2">Property Management Services</a></li>
                    <li><a href="service_details.php?id=3">Home Loans</a></li>
                    <li><a href="service_details.php?id=4">Loan Guide</a></li>
                    <li><a href="service_details.php?id=5">NRI Services</a></li>
                    <!-- <li><a href="content_details.php?id=8">Promoters</a></li> -->
                    <li><a href="service_details.php?id=7">Support Services</a></li>
                 </ul>
            </li>
			<li <?php if($page_name == 'partnerships.php') {  ?> class="active" <?php } ?>><a href="partnerships.php" >Partnerships</a>
                 <!-- drop down multilevel  -->
            </li>
            <li <?php if($page_name == 'photogallery.php') {  ?> class="active" <?php } ?>><a href="photogallery.php">Photo Gallery</a>
                 <!-- drop down multilevel  -->
            </li>
			<li <?php if($page_name == 'news_details.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">News<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul  class="drop-down-multilevel left-menu">
                    <li><a href="news_details.php?id=1">About legend</a></li>
                    <li><a href="news_details.php?id=2">About Hyderabad</a></li>
                    <li><a href="news_details.php?id=3">About India</a></li>
                    <li><a href="news_details.php?id=4">About Real Estate</a></li>
                    <li><a href="news_details.php?id=5">Advertisements</a></li>
                 </ul>
            </li>
			<li <?php if($page_name == 'faqs.php') {  ?> class="active" <?php } ?>><a href="faqs.php">FAQs</a>
            </li>
           <li <?php if($page_name == 'feedback.php' || $page_name == 'enquiry.php') {  ?> class="active" <?php } ?>><a href="contact.php">Contact Us<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="enquiry.php">Enquiry</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                 </ul>
            </li>
        </ul>