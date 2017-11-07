<?php //$getMenus = getAllDataCheckActive('services',0); 
    $getAllMenus = "SELECT * FROM services WHERE status = 0 ORDER BY id ASC";
    $getMenus = $conn->query($getAllMenus);
    
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<div class="col-md-3">
  <ul class="menu-logo">
                <li><a href="index.php"><img src="<?php echo $base_url . 'uploads/logo/'.$getSiteSettingsData['logo'] ?>" alt="logo"> </a></li>
            </ul>
</div>
<div class="col-md-9">
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

            <?php 
                $sql = "SELECT * FROM categories WHERE status = 0 ";
                $getRes = $conn->query($sql);
            ?>
            <li <?php if($page_name == 'project_view.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">Projects<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <?php while($getCat = $getRes->fetch_assoc()) {?>
                    <li><a href="project_view.php?id=<?php echo $getCat['id']?>"><?php echo $getCat['category_name'];?></a></li>
                     <?php } ?>
                </ul>
            </li>
           <?php 
                $getSerQry = "SELECT * FROM services WHERE status = 0 ";
                $getSer = $conn->query($getSerQry);
            ?>
            <li <?php if($page_name == 'service_details.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">Services<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <?php while($getSerData = $getSer->fetch_assoc()) {?>
                    <li><a href="service_details.php?id=<?php echo $getSerData['id']?>"><?php echo $getSerData['name'];?></a></li>
                    <?php }?>
                 </ul>
            </li>
      <li <?php if($page_name == 'partnerships.php') {  ?> class="active" <?php } ?>><a href="partnerships.php" >Partnerships</a>
                 <!-- drop down multilevel  -->
            </li>
            <li <?php if($page_name == 'photogallery.php') {  ?> class="active" <?php } ?>><a href="photogallery.php">Photo Gallery</a>
                 <!-- drop down multilevel  -->
            </li>
            <?php 
                $sql1 = "SELECT * FROM news WHERE status = 0 ";
                $getNews = $conn->query($sql1);
            ?>
      <li <?php if($page_name == 'news_details.php') {  ?> class="active" <?php } ?>><a href="javascript:void(0)">News<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul  class="drop-down-multilevel left-menu">
                    <?php while($getNewsdata = $getNews->fetch_assoc()) {?>
                    <li><a href="news_details.php?id=<?php echo $getNewsdata['id']?>"><?php echo $getNewsdata['title'];?></a></li>
                    <?php } ?>
                 </ul>
            </li>
      <li <?php if($page_name == 'faqs.php') {  ?> class="active" <?php } ?>><a href="faqs.php">FAQs</a>
            </li>
           <li <?php if($page_name == 'feedback.php' || $page_name == 'enquiry.php' || $page_name == 'contact.php') {  ?> class="active" <?php } ?>><a href="contact.php">Contact Us<i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel left-menu">
                    <li><a href="enquiry.php">Enquiry</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
                 </ul>
            </li>
        </ul>
</div>