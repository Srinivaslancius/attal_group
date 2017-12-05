<?php include_once 'top_header.php'; ?>
<!-- Favicon -->
<?php $sqlData="SELECT * FROM our_history WHERE  status=0 ";
$getAllHistoryData = $conn->query($sqlData);
?>
<?php $getBannersData = getAllDataCheckActive('banners',0);  ?>
<?php $getProjectBanners = "SELECT * FROM projects WHERE status=0 AND banner_status=0 ";
      $getProjectBannersData = $conn->query($getProjectBanners);
?>
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--  Roboto font -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" />

<!-- mega menu -->
<link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />

<!-- font awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- Flaticon -->
<link href="css/flaticon.css" rel="stylesheet" type="text/css" />

<!-- owl-carousel -->
<link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!-- revolution -->
<link href="revolution/css/settings.css" rel="stylesheet" type="text/css">

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
 
<div id="rev_slider_13_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="construction-slider9" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER 5.3.0.2.1 fullwidth mode -->
  <div id="rev_slider_13_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2.1">
<ul>  <!-- SLIDE  -->
    <?php while ($row = $getBannersData->fetch_assoc()) { ?>
    <li data-index="rs-42" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-title="Slide"   data-description="">
    <!-- MAIN IMAGE -->
        <img src="<?php echo $base_url . 'uploads/banner_images/'.$row['banner'] ?>" style='background-color:#ffd200' alt=""  >
  
    
  </li>
    <?php } ?>
    <?php while ($getProjectBanners = $getProjectBannersData->fetch_assoc()) { ?>

    <?php if($getProjectBanners['banner']!='') { ?>
      <li data-index="rs-42" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-title="Slide"   data-description="">
      <!-- MAIN IMAGE -->
          <a href="display_project_view.php?id=<?php echo $getProjectBanners['id'];?>&cid=<?php echo $getProjectBanners['category_id'];?>"><img src="<?php echo $base_url . 'uploads/projects_banner_images/'.$getProjectBanners['banner'] ?>" style='background-color:#ffd200' alt=""  ></a><br><br>
          
         
      
      </li>
      <?php } ?>
    <?php } ?>
  <!-- SLIDE  -->






   
  
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div> </div>
</div>

<!--=================================
 banner -->

<section class="dark-bg page-section-ptb pb-40 dark-bg bg fixed text-white gradient-overlay" style="background-image:url(images/bg/bg-8.jpg);">
<div class="container"><div class="row">
    <div class="col-md-12">
     <div class="section-title"><h2 class="title title2">Completed <label> Projects</label></h2></div>
     <div class="row mt-50">
     <?php $getCompletedData ="SELECT * FROM projects WHERE category_id=1 AND sub_category_id=1 AND status=0 ORDER BY id DESC LIMIT 0, 4";
    $getCompleted = $conn->query($getCompletedData); ?>      
          <?php if($getCompleted->num_rows > 0) { ?>
          <?php while($getCompleted1 = $getCompleted->fetch_assoc()){ ?>
          <div class="col-sm-3">
            <a href="display_project_view.php?id=<?php echo $getCompleted1['id']; ?>&cid=1"><img src="<?php echo $base_url . 'uploads/projects_images/'.$getCompleted1['images'] ?>" class="img-responsive" style="width:263px; height:185px"></a><br>
            <div class="about-details">
            <h5 class="title"><a href="display_project_view.php?id=<?php echo $getCompleted1['id']; ?>&cid=1"><?php echo $getCompleted1['project_name'];?></a></h5>
            </div>
            </div>
            <?php } ?>
            <?php } else { ?>
       <h3 style="text-align:center">No Projects Found</h3>
       <?php } ?>
       </div><br><br>
    </div>
    <div class="col-md-12">
     <div class="section-title"><h2 class="title title2">Ongoing <label> Projects</label></h2></div>
     <div class="row mt-50">
             <?php $getProjectsData ="SELECT * FROM projects WHERE category_id=1 AND sub_category_id=2 AND status=0 ORDER BY id DESC LIMIT 0, 4";
              $getProjects = $conn->query($getProjectsData); ?>
              <?php if($getProjects->num_rows > 0) { ?>
              <?php while($getProjects1 = $getProjects->fetch_assoc()){ ?>
             <div class="col-sm-3">
            <a href="display_project_view.php?id=<?php echo $getProjects1['id']; ?>&cid=1"><img src="<?php echo $base_url . 'uploads/projects_images/'.$getProjects1['images'] ?>" class="img-responsive" style="width:263px; height:185px"></a><br>
            <div class="about-details">
            <h5 class="title"><a href="display_project_view.php?id=<?php echo $getProjects1['id']; ?>&cid=1"><?php echo $getProjects1['project_name'];?></a></h5>
            </div>
            </div>
            <?php } ?>
            <?php } else { ?>
       <h3 style="text-align:center">No Projects Found</h3>
       <?php } ?>
       </div>
    </div>
    
</div>
</div><br>
 <center><a class="button small border animated middle-fill" href="project_view.php?id=1" style="background-color:transparent; border-color:#ffd200 ; color:#ffd200 "><span>View All</span></a></center>
</section>

 <?php $getChooseData5 = getAllDataCheckActive1('content_pages','0',15);
$getChoose5 = $getChooseData5->fetch_assoc(); ?>
<?php $getChooseData6 = getAllDataCheckActive1('content_pages','0',16);
$getChoose6 = $getChooseData6->fetch_assoc(); ?>
<?php $getChooseData7 = getAllDataCheckActive1('content_pages','0',17);
$getChoose7 = $getChooseData7->fetch_assoc(); ?>
<?php $getChooseData8 = getAllDataCheckActive1('content_pages','0',18);
$getChoose8 = $getChooseData8->fetch_assoc(); ?>
<?php $getChooseData9 = getAllDataCheckActive1('content_pages','0',19);
$getChoose9 = $getChooseData9->fetch_assoc(); ?>
<?php $getChooseData10 = getAllDataCheckActive1('content_pages','0',20);
$getChoose10 = $getChooseData10->fetch_assoc(); ?>
<?php $getChooseData11 = getAllDataCheckActive1('content_pages','0',21);
$getChoose11 = $getChooseData11->fetch_assoc(); ?>
<section class="our-sercive1 page-section-pt"><div class="container">
  <div class="row">
      <div class="col-sm-12"><div class="section-title text-center">
          <h2 class="title"><?php echo $getChoose5['title'];?></h2>
            <p><?php echo $getChoose5['description'];?></p>
         </div></div>
         
         <div class="col-sm-12">
      <div class="feature-box line">
           <i class="glyph-icon flaticon-people-10"></i>
           <h3 class="title"><?php echo $getChoose6['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose6['description']), 0,200);?></p>
        </div>
        <div class="feature-box line">
           <i class="glyph-icon flaticon-trophy"></i>
           <h3 class="title"><?php echo $getChoose7['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose7['description']), 0,200);?></p>
        </div>
        <div class="feature-box line">
           <i class="glyph-icon flaticon-drawing-1"></i>
           <h3 class="title"><?php echo $getChoose8['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose8['description']), 0,200);?></p>
        </div>
        <div class="feature-box line">
           <i class="glyph-icon flaticon-people-10"></i>
           <h3 class="title"><?php echo $getChoose9['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose9['description']), 0,200);?></p>
        </div>
        <div class="feature-box line">
           <i class="glyph-icon flaticon-projection-screen-with-bar-chart"></i>
           <h3 class="title"><?php echo $getChoose10['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose10['description']), 0,200);?></p>
        </div>
        <div class="feature-box line">
           <i class="glyph-icon flaticon-interface-5"></i>
           <h3 class="title"><?php echo $getChoose11['title'];?></h3>
           <p><?php echo substr(strip_tags($getChoose11['description']), 0,200);?></p>
        </div>
          </div>
  </div>


    <div class="text-center mt-40"><img class="img-responsive" src="images/element/01.png" alt=""></div>
</div></section>

<section class="page-section-ptb5 yellow-bg counter-section">
<div class="container">
  <div class="row">
     <div class="col-lg-3 col-md-3 col-xs-6 col-xx-12">
    <div class="counter left_pos">
      <i class="glyph-icon flaticon-projection-screen-with-bar-chart"></i>
      <span class="timer" data-to="<?php echo $getSiteSettingsData['project_count'];?>" data-speed="10000"></span>
      <label>Projects</label>
    </div>
  </div>
   <div class="col-lg-3 col-md-3 col-xs-6 col-xx-12">
    <div class="counter left_pos">
      <i class="glyph-icon flaticon-trophy"></i>
      <span class="timer" data-to="<?php echo $getSiteSettingsData['features_count'];?>" data-speed="10000"></span>
      <label>Features</label>
    </div>
  </div>
   <div class="col-lg-3 col-md-3 col-xs-6 col-xx-12">
    <div class="counter left_pos">
      <i class="glyph-icon flaticon-like"></i>
      <span class="timer" data-to="<?php echo $getSiteSettingsData['likes_count'];?>" data-speed="10000"></span>
      <label>Likes</label>
    </div>
  </div>  
   <div class="col-lg-3 col-md-3 col-xs-6 col-xx-12">
    <div class="counter left_pos">
      <i class="glyph-icon flaticon-management"></i>
      <span class="timer" data-to="<?php echo $getSiteSettingsData['credit_count'];?>" data-speed="10000"></span>
      <label>Happy Residence</label>
    </div>
  </div> 
  </div>
</div>
</section>

<section class="history-sec dark-bg pattern-overlay fixed pattern-2 text-white"><div class="container-fluid"><div class="row row-eq-height">
  <div class="col-md-6 hidden-xs" style="background-image:url(images/bg/bg-14.jpg); background-repeat:no-repeat; background-size:cover;"></div>
    <div class="col-md-6 pall-80 text-white">
    <div class="section-title"><h2 class="title">Our History</h2></div>
        <div class="timeline mt-60 clearfix">
            <?php  while($getAllData16 = $getAllHistoryData->fetch_assoc()) { ?>
          <div class="timeline-panel">
              <div class="timeline-year"><span><?php echo $getAllData16['year']; ?></span></div>
                <div class="timeline-body">
              <h4 class="title"><?php echo $getAllData16['title']; ?></h4>
                <p><?php echo $getAllData16['description']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div></div></section>
<!-- <section class="page-section-ptb"><div class="container"><div class="row">
  <div class="col-sm-12"><div class="section-title text-center">
    <h2 class="title">Ongoing Lifestyle Projects</h2>
  </div></div>
  <div class="col-sm-12"><div class="owl-carousel" data-nav-arrow="true" data-items="2" data-md-items="2" data-sm-items="1" data-xs-items="1">
    <?php $getProImages = getDataFromTables('projects','0','sub_sub_category_id','1',$activeStatus=NULL,$activeTop=NULL);
    while($getProImages1 = $getProImages->fetch_assoc()) {?>
    <div class="item">
        <div class="post left_pos clearfix">
      <div class="post-image clearfix">
        <img class="img-responsive" style="width: 90%;" src="<?php echo $base_url . 'uploads/projects_images/'.$getProImages1['images'] ?>" alt="">
      </div>
      <div class="post-details">
        <div class="post-title"><h5 class="title"><a href="#"><?php echo $getProImages1['project_name'];?></a></h5></div>
        <div class="post-meta">
        </div>
          <div class="post-content"><p><?php echo $getProImages1['description'];?></p></div>
          <!-- <a class="button small border animated middle-fill" href="#"><span>Read More</span></a> 
      </div>                
         </div>
      </div>
      <?php } ?>
  </div></div>              
</div></div></section> -->




<section class="page-section-pt">
    
    
</section>

<!--=================================
 page-section -->

<!--=================================
footer -->

<footer class="footer dark-bg page-section-pt">
   <?php include_once 'footer.php'; ?>
</footer>
<!--=================================
footer -->

<!--=================================
Back to Top --> 
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-chevron-up"></i></a></div>

<!--=================================
 jquery -->


<!-- jquery  -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- Menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

<!-- END REVOLUTION SLIDER -->
<script type="text/javascript">
  (function($){
  "use strict";
    
    var tpj=jQuery;
      var revapi13;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_13_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_13_1");
        }else{
          revapi13 = tpj("#rev_slider_13_1").show().revolution({
            sliderType:"standard",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              arrows: {
                style:"gyges",
                enable:true,
                hide_onmobile:false,
                hide_onleave:false,
                tmp:'',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                }
              }
            },
            visibilityLevels:[1240,1024,778,480],
            gridwidth:1920,
            gridheight:900,
            lazyType:"none",
            parallax: {
              type:"mouse",
              origo:"enterpoint",
              speed:400,
              levels:[1,2,3,4,5,6,7,8,9,10,11,12,13,15,20,55],
              type:"mouse",
            },
            shadow:0,
            spinner:"spinner3",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }
      });
      })(jQuery);

    </script>
    

<!-- Below Script for popup open when page load -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<link rel="stylesheet" href="css/main.css">
<script src="js/main.js"></script>
<?php $gettermsData = getDataFromTables('content_pages',$status=NULL,'id',27,$activeStatus=NULL,$activeTop=NULL);
$gettermsData1  = $gettermsData->fetch_assoc();
?>
<div id="boxes">
  <div style="top: 199.5px; left: 551.5px; display: none;" id="dialog" class="window">
    <h3 ><?php echo $gettermsData1['title']; ?></h3>

    <div id="lorem" style="border-top:1px solid #DCDCDC;"><br>
     <?php echo $gettermsData1['description']; ?>
    </div>
    <div id="popupfoot"> <a href="#" class="close agree" style="opacity:1.1 !important"><button type="button" class="btn btn-default">I Agree</button></a> </div>
  </div>
  <div style="width: 1478px; font-size: 32pt; color:white; height: 602px; display: none; opacity: 0.8;" id="mask"></div>
</div>
<!-- End Script for popup open when page load -->


    

</body>


</html>