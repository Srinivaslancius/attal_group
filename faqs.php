<?php include_once 'top_header.php'; ?>
<?php $getChooseData = getAllDataCheckActive1('content_pages','0',9); ?>
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
<?php $getChoose = $getChooseData->fetch_assoc(); ?>
<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(<?php echo $base_url . 'uploads/content_images/'.$getChoose['image'] ?>);">
  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
        <div class="section-title"><h1 class="title text-white">Faqs</h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="faqs.php">Faqs</a> <i class="fa fa-angle-double-right"></i></li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->

<!--=================================
 Page Section -->


<section class="faq-page page-section-ptb"><div class="container"><div class="row">
     <div class="col-sm-12"><div class="section-title text-center">
    <h2 class="title"><?php echo $getChoose['title'];?></h2></div>
    <div class="section-title text-justify">
    <p><?php echo $getChoose['description'];?></p>
    
     </div></div>


<div class="col-sm-12">
      <div class="tab tab-light clearfix"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#faq1" data-toggle="tab" aria-expanded="false"><span>All</span></a></li>
          <li><a href="#faq2" data-toggle="tab" aria-expanded="true"><span>Legend</span></a></li>
          <li><a href="#faq3" data-toggle="tab"><span>General</span></a></li>
          <li><a href="#faq4" data-toggle="tab"><span>Residential</span></a></li>
          <li><a href="#faq5" data-toggle="tab"><span>Corporate</span></a></li>
          <li><a href="#faq6" data-toggle="tab"><span>NRI</span></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">

          <?php $getFaqs = getDataFromTables('faqs','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade active in" id="faq1">
            <div class="accordion arrow light-rounded">
               <?php while($faq1 = $getFaqs->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq1['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq1['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>
             </div>
          </div>
          
          <?php $getFaqs = getDataFromTables('faqs','0','faq_cat_id','2',$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade" id="faq2">

              <div class="accordion arrow light-rounded">

                <?php while($faq2 = $getFaqs->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq2['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq2['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>
   
             </div>
          </div>

          <?php $getFaqs3 = getDataFromTables('faqs','0','faq_cat_id','3',$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade" id="faq3">

              <div class="accordion arrow light-rounded">

                <?php while($faq3 = $getFaqs3->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq3['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq3['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>
                
             </div>
          </div>

          <?php $getFaqs4 = getDataFromTables('faqs','0','faq_cat_id','4',$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade" id="faq4">
              <div class="accordion arrow light-rounded">

                <?php while($faq4 = $getFaqs4->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq4['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq4['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>
                
              </div>
          </div>

          <?php $getFaqs5 = getDataFromTables('faqs','0','faq_cat_id','5',$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade" id="faq5">

              <div class="accordion arrow light-rounded">
                <?php while($faq5 = $getFaqs5->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq5['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq5['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>                
             </div>
          
          </div>

          <?php $getFaqs6 = getDataFromTables('faqs','0','faq_cat_id','6',$activeStatus=NULL,$activeTop=NULL); ?>
          <div role="tabpanel" class="tab-pane fade" id="faq6">

              <div class="accordion arrow light-rounded">
                <?php while($faq6 = $getFaqs6->fetch_assoc()) { ?>
                  <div class="acd-group"><a href="#" class="acd-heading"><?php echo $faq6['question']; ?></a>
                      <div class="acd-des">                      
                          <p><?php echo $faq6['answer']; ?></p>
                      </div>
                  </div>
                <?php } ?>                
             </div>
          
          </div>
        </div>
      </div>
</div>

</div></div></section>

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

<!-- appear -->
<script type="text/javascript" src="js/jquery.appear.js"></script>

<!-- Menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/counter/jquery.countTo.js"></script>

<!-- counter -->
<script type="text/javascript" src="js/jquery.vide.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>