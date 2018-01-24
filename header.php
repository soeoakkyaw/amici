<?php
srand();
$random_number = rand();
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=<?php echo $random_number;?>">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/swiper.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/hover.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/colorbox.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/js/swiper.css">
		
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/AMICI_Lu_RGB2.png" type="image/x-icon"/>
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
		<script src="<?php bloginfo('template_directory'); ?>/js/nicescroll.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/swiper.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.waypoints.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox-min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/custom.js?v=<?php echo $random_number;?>"></script>
		<!-- Google Tag Manager -->
		<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-TJKTFJ');</script> -->
		<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=326544210853831";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		
		<!-- Google Tag Manager (noscript) -->
		<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJKTFJ"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
		<!-- End Google Tag Manager (noscript) -->
		<div id="main-wrapper">
			<!--================================== Logo ================================== -->
			<div id="nav-section" class="section">
				<div class="row">
					<div class="container">
						<div class="col-md-5 hidden-xs hidden-sm">
							<?php
						
							
							wp_nav_menu( array( 'theme_location' => 'left' ) );
							
							?>
						</div>
						<div class="col-md-2">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive main-logo" src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
						</div>
						<div class="col-md-5 hidden-xs hidden-sm">
							<?php
							
							wp_nav_menu( array( 'theme_location' => 'right' ) );
							
							?>
						</div>
					</div>
				</div>
			</div>