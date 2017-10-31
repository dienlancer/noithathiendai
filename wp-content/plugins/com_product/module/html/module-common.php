<?php 
global $zController,$zendvn_sp_settings;
$vHtml=new HtmlControl();
$contacted_phone=$zendvn_sp_settings['contacted_phone'];
$email_to=$zendvn_sp_settings['email_to'];
$address=$zendvn_sp_settings['address'];
$to_name=$zendvn_sp_settings['to_name'];
$telephone=$zendvn_sp_settings['telephone'];
$website=$zendvn_sp_settings['website'];
$opened_time=$zendvn_sp_settings['opened_time'];
$opened_date=$zendvn_sp_settings['opened_date'];
$contaced_name=$zendvn_sp_settings['contacted_name'];
$facebook_url=$zendvn_sp_settings['facebook_url'];
$twitter_url=$zendvn_sp_settings['twitter_url'];
$google_plus=$zendvn_sp_settings['google_plus'];
$youtube_url=$zendvn_sp_settings['youtube_url'];
$slogan_about=$zendvn_sp_settings['slogan_about'];
if($instance["status"]=='active'){
	switch ($instance["position"]) {
		case 'tu-van-widget':			
		?>
		<div class="hotline-bg">
			<div class="container">
				<div class="re-ship-phone">
					<div class="col-lg-3 no-padding">
						<div class="item">
							<span class="icon icon1">
							</span>
							<p class="des">
								<span>Tư vấn 24/7</span> Miễn phí
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item">
							<span class="icon icon2">

							</span>
							<p class="des">
								Vận chuyển <span>miễn phí</span>
							</p>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="item">
							<span class="icon icon3">

							</span>
							<p class="des">
								Nhận hàng <span>Nhận tiền</span>
							</p>
						</div>
					</div>
					<div class="col-lg-3 no-padding">
						<div class="item">
							<span class="icon icon4">

							</span>
							<p class="des">
								Gọi ngay <span><?php echo $contacted_phone; ?></span>
							</p>
						</div>
					</div>
					<div class="clr"></div>
				</div>        
			</div>
			<div class="container">
				<div class="col-lg-8 no-padding"><img src="<?php echo site_url( '/wp-content/uploads/t5.jpg',null ); ?>" /></div>
				<div class="col-lg-4 no-padding-right"><img src="<?php echo site_url( '/wp-content/uploads/t6.jpg',null ); ?>" /></div>
			</div>
		</div>    
		<?php		
		break;
		case 'slideshow-widget':
		$bannerModel=$zController->getModel("/frontend","BannerModel"); 
		$lstbanner=$bannerModel->getListBanner();
		?>
		<div id="wrapper">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider"> 
					<?php 
					for($i=0 ; $i < count($lstbanner) ; $i++ ){
						$banner=site_url('/wp-content/uploads/'.$lstbanner[$i]['picture']);
						?>
						<img src="<?php echo $banner; ?>" data-thumb="<?php echo $banner; ?>" alt="" />     
						<?php
					} 
					?>

				</div>				
			</div>
		</div>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#slider').nivoSlider();
			});    
		</script>		
		<?php
		break;				
		case 'about-widget':
		?>		
		<div class="bottom-content">
			<div><?php echo $slogan_about; ?></div>
			<div class="margin-top-15"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $address; ?></div>
			<div class="margin-top-15"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<?php echo $email_to; ?></div>
			<div class="margin-top-15"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;<?php echo $contacted_phone; ?></div>
		</div>		
		<?php
		break;
		case 'category-article-widget':
		?>
		<div>
			<?php 
			$args = array( 
				'menu'              => '', 
				'container'         => '', 
				'container_class'   => '', 
				'container_id'      => '', 
				'menu_class'        => 'categoryarticlemenu', 
				'menu_id'           => 'category-article-menu', 
				'echo'              => true, 
				'fallback_cb'       => 'wp_page_menu', 
				'before'            => '', 
				'link_before'       => '<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;', 
				'after'             => '', 
				'link_after'        => '', 
				'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
				'depth'             => 3, 
				'walker'            => '', 
				'theme_location'    => 'category-article-menu' 
			);
			wp_nav_menu($args);
			?>
		</div>		
		<?php		
		break;
		case 'category-product-widget':
		?>
		<div>
			<?php 
			$args = array( 
				'menu'              => '', 
				'container'         => '', 
				'container_class'   => '', 
				'container_id'      => '', 
				'menu_class'        => 'categoryproductmenu', 
				'menu_id'           => 'category-product-menu', 
				'echo'              => true, 
				'fallback_cb'       => 'wp_page_menu', 
				'before'            => '', 
				'link_before'       => '<i class="fa fa-angle-right" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;', 
				'after'             => '', 
				'link_after'        => '', 
				'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',  
				'depth'             => 3, 
				'walker'            => '', 
				'theme_location'    => 'category-product-menu' 
			);
			wp_nav_menu($args);
			?>
		</div>		
		<?php		
		break;
	}
}		
?>
