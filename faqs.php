<?php include_once 'top_header.php'; ?>

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

<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(images/bg/bg-2.jpg);">
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
		<h2 class="title">One Question away from owning your dream space?</h2></div>
		<div class="section-title text-justify">
		<p>Over the last 12 years we have sold more than 1500 apartments and villas in Hyderabad to practically 
		every segment of our society. The interactions we have had with members of the Legend family have enriched 
		us with tremendous knowledge and we have been incorporating these learnings into all our current and future projects. 
		We have distilled the questions asked most frequently by property buyers and are now presenting them to you in a structured 
		format so that you get a complete overview of your new property, much before you buy it.<br>
		Should you have any additional queries or seek clarifications on some of these responses please do get in touch with us at 
		our Corporate Office. We will be happy to answer them and subsequently welcome you to the 5500+ growing Legend family.</p>
		
     </div></div>

<?php $getAllActiveFaqCategories = getAllDataCheckActive('faq_categories',0); ?> 
<div class="col-sm-12">
      <div class="tab tab-light clearfix"> 
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist" >
          <?php $i=1; while($getAllData=$getAllActiveFaqCategories->fetch_assoc()) { ?>
            <li class="<?php if($i==1) { ?> active <?php } ?>">
            <a href="#<?php echo $getAllData['id']?>" data-toggle="tab" aria-expanded="false"><i class="fa fa-heartbeat" aria-hidden="true"></i>
            <p><?php echo $getAllData['faq_category']; ?></p>
            </a>
            </li>
            <?php $i++; } ?>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade active in" id="faq1">
				  <div class="accordion arrow light-rounded">
                <div class="acd-group acd-active"><a href="#" class="acd-heading">What is Legend?</a>
                    <div class="acd-des">
                        
                        <p>Legend is one of the most experienced and well-known companies in the premium real estate marketplace.</p>
                        
                    </div>
                </div>
                
                <div class="acd-group"><a href="#" class="acd-heading">How many projects have been completed by Legend?</a>
                    <div class="acd-des">
                        <p>As of 2011, Legend has completed more than 80 residential and commercial projects across the city of Hyderabad in just 12 years.</p>
                        
                    </div>
                </div>
                <div class="acd-group"><a href="#" class="acd-heading">Why should I choose Legend?</a>
                    <div class="acd-des">
                       
                        <ol class="list-unstyled">
                           <li>Established reputation</li>
                           <li>Excellent construction</li>
                           <li>Modern facilities and features</li>
                           <li>Litigation-free property</li>
                         </ol>
                    </div>
                </div>
                <div class="acd-group"><a href="#" class="acd-heading">What are Legend’s future plans?</a>
                    <div class="acd-des">
                        <p>Legend is presently building more than 2000 apartments and 500 villas in the city of Hyderabad. In addition, malls, multiplexes, hotels, etc. are also on the anvil.</p>
                        
                    </div>
                </div>
               
                
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