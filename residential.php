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
<?php 
  $getProjects = getDataFromTables('categories',$status=NULL,'id',2,$activeStatus=NULL,$activeTop=NULL);
  $getCatgory = $getProjects->fetch_assoc();
?>
<section class="inner-intro bg bg-fixed bg-overlay-black-70" style="background-image:url(images/bg/bg-2.jpg);">
  <div class="container">
     <div class="row intro-title text-center">
           <div class="col-sm-12">
				<div class="section-title"><h1 class="title text-white"><?php echo $getCatgory['category_name']?></h1></div>
           </div>
           <div class="col-sm-12">
             <ul class="page-breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="javascript:void(0)">Projects</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Residential Projects</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 banner -->



<!--=================================
 Page Section -->

<section class="content-box3 page-section-ptb pb-40"><div class="container"><div class="row text-justify">
<div class="col-sm-12"><div class="section-title text-center">
		<h2 class="title">Ongoing Projects</h2>
	</div></div>
	<div class="col-sm-12"><div class="section-title text-left">
		<h4 class="title">Gated Communities</h4>
	</div></div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Galaxy, <small>Kothapet</small></a></h5>
          	<div class="about-des">Legend Galaxy at Kothapet aims to be the best residential gated community.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Chimes, <small>Kokapet</small></a></h5>
          	<div class="about-des">249 Luxurious Villas on 45 acres within a 15 minute drive from Hitec city.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Harmony, <small>Gachibowli</small></a></h5>
          	<div class="about-des">625 world-class apartments in 33 Towers of 19 floors each for a luxurious lifestyle.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Marigold, <small>Gachibowli</small></a></h5>
          	<div class="about-des">Symbolising luxury living in the cosmopolitan heart of Hyderabad.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	
	<div class="col-sm-12">
	<div class="section-title text-left">
		<h4 class="title">Premium Projects</h4>
	</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Galaxy, <small>Kothapet</small></a></h5>
          	<div class="about-des">egend Galaxy at Kothapet aims to be the best residential gated community.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Suraj, <small>Banjara Hills</small></a></h5>
          	<div class="about-des">Legend Suraj, a fresh and inspiring apartment enclave in Banjara Hills.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Signature, <small>Banjara Hills</small></a></h5>
          	<div class="about-des">If Banjara Hills has a million reasons to live in, we offer you the very best..</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Harizon, <small>Attapur</small></a></h5>
          	<div class="about-des">Rising in the heart of Attapur, Hyderabad is a gated community.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Flora, <small>Tilak Nagar</small></a></h5>
          	<div class="about-des">Premium apartments coming up at Tilak nagar, Nallakunta comprising 3BHK.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Cyrus, <small>Umanagar</small></a></h5>
          	<div class="about-des">Legend Cyrus is located at the most elite of location Umanagar, Begumpet.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Venkatesha, <small>Narayanaguda</small></a></h5>
          	<div class="about-des">An integrated project comprising of an exclusive 5-storeyed residential block.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Crystal, <small>Adarshnagar</small></a></h5>
          	<div class="about-des">Legend Crystal is a premium residential project coming up at Hillfort.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Pranav, <small>Banjara Hills</small></a></h5>
          	<div class="about-des">A limited stately apartment enclave for only 8 elegant families.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Gulati, <small>Domalguda</small></a></h5>
          	<div class="about-des">Spread over an area of 887 square yards, Legend Gulati features stilt + 5 floors.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Chawla, <small>Banjara Hills</small></a></h5>
          	<div class="about-des">These 8 ultra-premium apartments are coming up on Road no. 5, Banjara Hills.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Tulips, <small>Somajiguda</small></a></h5>
          	<div class="about-des">These premium apartments coming up at Raj Bhavan Road comprise of 15.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	
	<div class="col-sm-12"><div class="section-title text-left">
		<h4 class="title">Vizag</h4>
	</div></div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Serene Bay, <small>Vizag</small></a></h5>
          	<div class="about-des">A residential - cum - commercial complex offering the comforts of a luxury home.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Crest2, <small>Plots</small></a></h5>
          	<div class="about-des">Located at Tallavalasa village in Bheemli Mandal on the 4-lane NH 5, it is a mere 22.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Elite, <small>Visakhapatnam</small></a></h5>
          	<div class="about-des">Legend Elite is coming up at Peddipalem,near Visakhapatnam.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Admiral, <small>Vizag</small></a></h5>
          	<div class="about-des">Legend Admiral is another landmark project from Legend Estates.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Summit, <small>Vizag</small></a></h5>
          	<div class="about-des">Legend Summit is the latest smart realty offering Legend Estates.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Prime, <small>Vizag</small></a></h5>
          	<div class="about-des">Vizag's realty world is witnessing hectic activity thanks to the ongoing.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Kanak, <small>Vizag</small></a></h5>
          	<div class="about-des">Backed by the highly reputed Legend Group, Legend Kanak comes.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Kanak, <small>Vizag</small></a></h5>
          	<div class="about-des">Backed by the highly reputed Legend Group, Legend Kanak comes.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-12">
	<div class="section-title text-left">
		<h4 class="title">Projects in Pipeline</h4>
	</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/04.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Chimes, <small>Kokapet</small></a></h5>
          	<div class="about-des">An extension of the ongoing Chimes project, premium villas are being planned on 40 acres in Kokapet.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/03.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Crest, <small>Vizag</small></a></h5>
          	<div class="about-des">An extension of the ongoing Crest project, Legend plans to develop plots spanning 20 acres in Visakhapatnam.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/02.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Residential, <small>Musheerabad</small></a></h5>
          	<div class="about-des">A Residential gated community of 2, 3; 4 BHK apartments across 4 acres is being planned in Musheerabad.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-3">
		<div class="about mb-40">
          <div class="about-image clearfix"><img class="img-responsive" src="images/about/01.jpg" alt=""></div>
          <div class="about-details">
          	<h5 class="title"><a href="">Legend Hills, <small>Vizag</small></a></h5>
          	<div class="about-des">Premium residential apartments across 6000 sq. yds. are being planned in Simhachalam road, Visakhapatnam.</div>
            <a class="button link" href="#"><span>Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
          </div>                
		</div>
	</div>
	<div class="col-sm-12">
	<div class="section-title text-left">
		<h4 class="title">Completed Projects</h4>
	</div>
	<div class="col-sm-12"><div class="popup-gallery columns-4">
    	<div class="project-info">
           <img class="img-responsive center-block" src="images/project/20.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/21.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/20.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/23.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/24.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/28.jpg" alt="">
           
         </div>
		  <div class="project-info">
           <img class="img-responsive center-block" src="images/project/20.jpg" alt="">
          
         </div>
         <div class="project-info">
           <img class="img-responsive center-block" src="images/project/23.jpg" alt="">
          
         </div>
		 </div>
		 </div>
	</div>
</div></div></section>

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

<!-- mega-menu -->
<script type="text/javascript" src="js/mega-menu/mega_menu.js"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- style customizer  -->
<script type="text/javascript" src="js/style-customizer.js"></script>

<!-- custom -->
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>