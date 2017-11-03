<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-left text-left">
				   <ul class="list-inline">
             <li><i class="fa fa-envelope-o"><a href="mailto:<?php echo $getSiteSettingsData['email'];?>"></i><?php echo $getSiteSettingsData['email'];?></a></li> 
             
             <li> <i class="fa fa-clock-o"></i><?php echo $getSiteSettingsData['open_timings'];?></li>
           </ul>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="topbar-right text-right">
					 <ul class="list-inline">
             <li> <i class="fa fa-phone"></i><a href="Tel:<?php echo $getSiteSettingsData['mobile']; ?>"><?php echo $getSiteSettingsData['mobile'];?></a></li> 
             <li><a target="_blank" href="<?php echo $getSiteSettingsData['fb_link'];?>"><i class="fa fa-facebook"></i></a></li>   
             <li><a target="_blank" href="<?php echo $getSiteSettingsData['twitter_link'];?>"><i class="fa fa-twitter"></i></a></li>   
             <li><a target="_blank" href="<?php echo $getSiteSettingsData['gplus_link'];?>"><i class="fa fa-youtube-play"></i></a></li>   
           </ul>
				</div>
			</div>
		</div>
	</div>