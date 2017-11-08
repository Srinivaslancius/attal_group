<div class="container"><div class="row">
      <div class="col-sm-4 mb-30">
         <div class="section-title"><h4 class="title">About Us</h4></div>
        <?php  
          $getContentsData = getDataFromTables('content_pages',$status=NULL,'id',1,$activeStatus=NULL,$activeTop=NULL);
          $getAboutUsData  = $getContentsData->fetch_assoc();
        ?>  
       <div class="footer-about text-justify">
         <p><?php echo substr(strip_tags($getAboutUsData['description']), 0,276);?></p>
         <div class="social-icons social-white border color-hover mt-20">
            <ul>
        <li class="social-facebook"><a target="_blank" href="<?php echo $getSiteSettingsData['fb_link'];?>"><i class="fa fa-facebook"></i></a></li>
        <li class="social-twitter"><a target="_blank" href="<?php echo $getSiteSettingsData['twitter_link'];?>"><i class="fa fa-twitter"></i></a></li>
                <li class="social-linkedin"><a target="_blank" href="<?php echo $getSiteSettingsData['gplus_link'];?>"><i class="fa fa-youtube"></i></a></li>
                <!-- <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="social-behance"><a href="#"><i class="fa fa-behance"></i></a></li> -->
      </ul>
    </div>
       </div>
      </div>
      
        <div class="col-sm-4 mb-30">
         <div class="footer-usefull">
           <div class="section-title"><h4 class="title">Usefull Links</h4></div>
           <ul class="list-mark list-2">
             <li><a href="content_details.php?id=1">About Us</a></li>
             <li><a href="project_view.php?id=<?php echo 1;?>">Projects</a></li>
             <li><a href="service_details.php">Services</a></li>
       <li><a href="partnerships.php">Patnerships</a></li>
             <li><a href="photogallery.php">Photo Gallery</a></li>
        <li><a href="news_details.php?id=<?php echo 1;?>">News</a></li>
         <li><a href="contact.php">Contact Us</a></li>
           </ul>
       <ul class="list-mark list-2">
             <li><a href="index.php">Home</a></li>
             <li><a href="contact.php">Customer Care</a></li>
        <li><a href="emi_calculator.php">Emi Calculator</a></li>
         <li><a href="careers.php">Careers</a></li>
          <li><a href="downloads.php">Downloads</a></li>
         
           </ul>
        </div>
      </div>
      <div class="col-sm-4">
          <div class="footer-address">
           <div class="section-title"><h4 class="title">Get in Touch</h4></div>
           <ul class="list-inline">
             <li><i class="fa fa-map-marker"></i> <span><?php echo $getSiteSettingsData['address'];?></span></li>
             <li><i class="fa fa-phone"></i><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><span><?php echo $getSiteSettingsData['mobile'];?></span></a></li>
             <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $getSiteSettingsData['email'];?>"><span><?php echo $getSiteSettingsData['email'];?></span></a></li>
           </ul>
        </div>
      </div>
    </div>
   </div>
   
<div class="footer-widget mt-20">
      <div class="container"><div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6">
           <p class="text-white"> <a target="_blank" href="https://www.lanciussolutions.com/"><?php echo $getSiteSettingsData['footer_text'];?></a></p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6">
           <ul class="text-right">
             <li><a href="terms_of_us_privacy_policy.php">Terms of Use </a> <a href="privacy_policy.php">Privacy Policy</a></li>
             
             <li><a href="contact.php">Contact Us</a></li>
           </ul>
         </div>
       </div>
      </div></div>