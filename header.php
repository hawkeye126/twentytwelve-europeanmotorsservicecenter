<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<?php if (wp_is_mobile()) : ?>
	<script>
		console.log('We are mobile.');
	</script>
<?php endif; ?>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">

		<div class='sticky-holder sticky-holder-one'>
			
			<nav id="site-navigation" class="main-navigation wrapper" role="navigation">
				<div class='show-1024'>
					
					<div class='mobile-column-left mobile-column mobile-left-menu'>
						<?php 
							if(!getMainMenu('mobile-menu-left', true, '')){
							  $backup = $wp_query;
							  $wp_query = NULL;
							  $wp_query = new WP_Query(array('post_type' => 'post'));
							  getMainMenu('mobile-menu-left', true, '');
							  $wp_query = $backup;
							} 
						?>
					</div>

					<div class='mobile-logo-wrap mobile-column-center mobile-column'>
						<?php if ( get_header_image() ) : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo get_bloginfo(); ?> Website Logo" />
							</a>
						<?php else : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="/wp-content/themes/twentytwelve-europeanmotorsservicecenter/img/european-motors-menu-logo.<?php if(wp_is_mobile()){echo"svg";}else{echo"png";} ?>" alt="<?php echo get_bloginfo(); ?> Website Logo" height='164' width='164'/>
							</a>
						<?php endif; ?>
					</div>

					<div class='mobile-column-right mobile-column mobile-left-menu'>
						<?php 
							if(!getMainMenu('mobile-menu-right', true, '')){
							  $backup = $wp_query;
							  $wp_query = NULL;
							  $wp_query = new WP_Query(array('post_type' => 'post'));
							  getMainMenu('mobile-menu-right', true, '');
							  $wp_query = $backup;
							} 
						?>
					</div>
				</div>

				<div class='hide-1024'>
					
					<button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
					<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
					<?php 
						if(!getMainMenu('primary')){
						  $backup = $wp_query;
						  $wp_query = NULL;
						  $wp_query = new WP_Query(array('post_type' => 'post'));
						  getMainMenu('primary');
						  $wp_query = $backup;
						}
					?>
				</div>

				<div class='mini-mobile-menu-column mobile-column'>
					<?php 
						if(!getMainMenu('mini-mobile-menu')){
						  $backup = $wp_query;
						  $wp_query = NULL;
						  $wp_query = new WP_Query(array('post_type' => 'post'));
						  getMainMenu('mini-mobile-menu');
						  $wp_query = $backup;
						}
					?>
				</div>
			</nav><!-- #site-navigation -->

			<?php 
				if(!is_archive()) {  ?>
					<div id='auto-brands' class='auto-brands'>
					<?php randMenu('auto-brands-menu', 7); ?>
					</li></div>
				<?php } else {
					  $backup = $wp_query;
					  $wp_query = NULL;
					  $wp_query = new WP_Query(array('post_type' => 'post'));
					  getMainMenu('auto-brands-menu',7);
					  $wp_query = $backup;
				}
			?>
		</div>
	</header><!-- #masthead -->
	<?php if (is_front_page()) : ?>
		<hgroup class='hgroup'>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	
	    <div id='background-slider-holder' class='background-slider-holder'>
	        <!-- Jssor Slider Begin -->
	        <!-- You can move inline styles to css file or css block. -->
	        <div id="slider1_container" style="position: relative; margin: 0 auto;
	        top: 0px; left: 0px; width: 1300px; height: 400px; overflow: hidden;">

	            <!-- Slides Container -->
	            <div data-u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
	            height: 400px; overflow: hidden;">
	                    <div>
	                    <img  
	                    	height='400'
	                    	width='1000'
	                    	data-u="image" 
	                    	alt="Front Page Image Slider Image 1"
	                    	src="/wp-content/themes/twentytwelve-europeanmotorsservicecenter/img/slider-img/bkimg1-bmw-jaguar-porsche-volkswagen-audi-motor-vehicle-repair-fix-my-land-rover-seattle-tacoma-lakewood-washington.jpg" 
	                    	/>
	                    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
	                    color: #FFFFFF;"><!-- Title Slide #1 -->
	                    </div>
	                    <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 36px; font-size: 30px;
	                    color: #FFFFFF;">
	                    <!-- Text Area Slide #1 -->
	                    </div>
	                </div>

	                <div>
	                    <img  
	                    	height='400'
	                    	width='1000'
	                    	data-u="image" 
	                    	alt="Front Page Image Slider Image 2"
	                    	src="/wp-content/themes/twentytwelve-europeanmotorsservicecenter/img/slider-img/bkimg2-bmw-jaguar-porsche-volkswagen-audi-motor-vehicle-repair-fix-my-land-rover-seattle-tacoma-lakewood-washington.jpg" 
	                    />
	                    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
	                    color: #FFFFFF;"><!-- Title Slide #3 -->
	                    </div>
	                    <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 36px; font-size: 30px;
	                    color: #FFFFFF;">
	                    <!-- Text Area Slide #3 -->
	                    </div>
	                </div>

	                <div>
	                    <img 
	                    	height='400'
	                    	width='1000'
	                    	data-u="image" 
	                    	alt="Front Page Image Slider Image 3"
	                    	src="/wp-content/themes/twentytwelve-europeanmotorsservicecenter/img/slider-img/bkimg3-bmw-jaguar-porsche-volkswagen-audi-motor-vehicle-repair-fix-my-land-rover-seattle-tacoma-lakewood-washington.jpg" 
	                    />
	                    <div style="position: absolute; width: 480px; height: 120px; top: 30px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 60px; text-transform: uppercase; font-size: 50px;
	                    color: #FFFFFF;"><!-- Title Slide #3 -->
	                    </div>
	                    <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
	                    text-align: left; line-height: 36px; font-size: 30px;
	                    color: #FFFFFF;">
	                    <!-- Text Area Slide #3 -->
	                    </div>
	                </div>
	            </div>

	            <!-- bullet navigator container -->
	            <div data-u="navigator" class="jssorb21" style="position: absolute; bottom: 26px; left: 6px;">
	                <!-- bullet navigator item prototype -->
	                <div data-u="prototype" style="POSITION: absolute; WIDTH: 19px; HEIGHT: 19px; text-align:center; line-height:19px; color:White; font-size:12px;"></div>
	            </div>
	            <!-- Bullet Navigator Skin End -->

	            <!-- Arrow Navigator Skin Begin -->
	            <!-- Arrow Left -->
	            <span data-u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
	            </span>
	            <!-- Arrow Right -->
	            <span data-u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
	            </span>
	            <!-- Arrow Navigator Skin End -->
	            <a style="display: none" href="http://www.jssor.com">javascript</a>
	        </div>
	        <!-- Jssor Slider End -->
	    </div>
	<?php endif; ?>

	<div id="main" class="main">
		<div id="main-inner" class="main-inner wrapper">
			
			<nav id="content-navigation" class="content-navigation wrapper main-navigation" role="navigation">
				<?php 
					if(!getMainMenu('content-nav-left')){
					  $backup = $wp_query;
					  $wp_query = NULL;
					  $wp_query = new WP_Query(array('post_type' => 'post'));
					  getMainMenu('content-nav-left');
					  $wp_query = $backup;
					}
 
					if(!getMainMenu('content-nav-right')){
					  $backup = $wp_query;
					  $wp_query = NULL;
					  $wp_query = new WP_Query(array('post_type' => 'post'));
					  getMainMenu('content-nav-right');
					  $wp_query = $backup;
					}
				?>
				<div class='column-left content-column'>
					<ul id='social-menu' class='social-menu menu'>
						<li class='menu-item facebook-li'><a target='_blank' class='genericon genericon-facebook' href='https://www.facebook.com/europeanmotors.wa'></a></li>
						<li class='menu-item instagram-li'><a target='_blank' class='genericon genericon-instagram'  href='https://www.instagram.com/europeanmotorsservicecenter'></a></li>
						<li class='menu-item google-plus-li'><a target='_blank' class='genericon genericon-googleplus'  href='https://plus.google.com/100002154887378139579/about'></a></li>
						<li class='menu-item twitter-li'><a target='_blank' class='genericon genericon-twitter'  href='https://twitter.com/euromotoservcen'></a></li>
						<li class='menu-item youtube-li'><a target='_blank' class='genericon genericon-youtube'  href='https://youtube.com/euromotoservcen'></a></li>
						<li class='menu-item yelp-li'><a target='_blank' class='genericon genericon-yelp'  href='http://www.yelp.com/biz/european-motors-service-center-lakewood-2'>Yelp</a></li>
					</ul>
				</div>
				<div class='column-right content-column'>
					<ul id='content-customer-menu' class='customer-menu'>
						<li class='menu-item'><a href='/testimonials/'>Testimonials</a></li>
						<li class='menu-item'><a target='_blank' href='http://european-motors.com'>Customer Login</a></li>
						<li class='menu-item'><a target='_blank' href='http://european-motors.com'>Schedule Today</a></li>
						<!-- <li class='menu-item'><a target='_blank' href='http://www.procarcarezone.com/topshop/web/web_template/temp5/carcare/default.asp?id=151886'>Customer Login</a></li> -->
						<!-- <li class='menu-item'><a target='_blank' href='http://www.procarcarezone.com/topshop/web/web_template/temp5/makeappointment/default.asp?id=151886'>Schedule Today</a></li> -->
					</ul>
				</div>
			</nav><!-- #content-navigation -->

			<!-- Move header above page content on front page -->
			<?php if (is_front_page()) : ?>
				<header class="entry-header">
					<?php if ( ! is_page_template( 'page-templates/front-page.php' ) ) : ?>
					<?php the_post_thumbnail(); ?>
					<?php endif; ?>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>
			<?php endif; ?>