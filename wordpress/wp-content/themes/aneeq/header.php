<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="<?php bloginfo('charset'); ?>"> 
	<?php wp_head(); ?>
	<?php 
	get_template_part('custom-color-css');
	$aneeq_theme_layout = get_theme_mod('aneeq_theme_layout', 'wide');
	$aneeq_boxed_layout_bgimg = get_theme_mod('aneeq_boxed_layout_bgimg', 'wood');
	?>
</head>

<body bgcolor="red" <?php body_class($aneeq_theme_layout); if($aneeq_theme_layout=='boxed'){ ?> style="background: rgba(0, 0, 0, 0) url(<?php echo esc_url(get_template_directory_uri() . '/css/icons/icons/'); ?><?php echo esc_attr($aneeq_boxed_layout_bgimg); ?>.jpg) repeat scroll 0 0;"<?php } ?>>
	<?php $aneeq_loading_icon_setting = get_theme_mod('aneeq_loading_icon_setting','active'); 
	if($aneeq_loading_icon_setting != 'inactive' ){
	?>
		<div class="loader-wrapper">
			<div id="loader">
				<div class="position-center-center">
					<div class="ldr"></div>
				</div>
			</div>   
		</div>   
		<?php 
	}
	//wordpress header customizer 
	$header_one_name = get_theme_mod('header_one_name','');
	$header_one_text = get_theme_mod('header_one_text','');
	if ( get_header_image() != '') { ?>
		<header class="custom-header">
			<div class="wp-custom-header">
				<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
			</div>
			<div class="container header-content">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="">
							<?php if($header_one_name != '') { ?>
							<h1><?php echo esc_html($header_one_name ,'aneeq'); ?></h1>
							<?php }  if($header_one_text != '') { ?>
							<h3><?php echo esc_html($header_one_text ,'aneeq'); ?></h3>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</header>
	<?php } ?>
   <section class="wrapper">
		<header id="header">
			<?php
				// logo settings
				$logo_type_aneeq = get_theme_mod('logo_type_aneeq', 'aneeq_logo_text');
				$aneeq_logo_text_name = get_theme_mod('aneeq_logo_text_name', '');
				//$aneeq_logo_image_url = get_theme_mod('aneeq_logo_image_url', '');
				$aneeq_logo_image_url = get_theme_mod('aneeq_logo_image_url', get_template_directory_uri() . '/images/aneeq-theme-logo.png');
			?>
			<div id="logo-bar">
				<div class="container">
					<div class="row">
						<!-- Logo / Mobile Menu -->
						<div class="col-lg-3 col-sm-3 ">
							<div id="logo">	
								<h2 class="<?php if($logo_type_aneeq == 'aneeq_logo_text') { ?>logo-text <?php } else { ?>logo-image <?php } ?>">
									<a href="<?php echo esc_url(home_url( '/' )); ?>">
										<?php if($logo_type_aneeq == 'aneeq_logo_text') { ?>
											<?php if($aneeq_logo_text_name != "") { echo esc_html($aneeq_logo_text_name); } else { echo esc_attr( get_bloginfo( 'name' ) ); } ?>
										<?php } elseif($logo_type_aneeq == 'aneeq_logo_image') { (has_custom_logo()) ?>
											<img alt="<?php echo esc_attr( get_bloginfo( 'name', 'aneeq' ) ); ?>" src="<?php if($aneeq_logo_image_url != "") { echo esc_url($aneeq_logo_image_url , ''); } else { echo esc_attr( get_bloginfo( 'name', 'aneeq' ) ); } ?>"/>
										<?php } ?>
									</a>
								</h2>
							</div>
						</div>
						<!-- Navigation -->
						<div class="site-header col-lg-9 col-sm-9">
							<div class="navbar navbar-default navbar-static-top" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only"> <?php esc_html_e('Toggle Navigation','aneeq') ?></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<?php 
								 $shop_button = '<ul class="%2$s">%3$s';
								 if ( class_exists( 'WooCommerce' ) ) {
									$shop_button .= '<div class="cart-header">';
									global $woocommerce; 
									$link = function_exists( 'wc_get_cart_url' ) ? wc_get_cart_url() : $woocommerce->cart->get_cart_url();
									$shop_button .= '<a class="cart-icon" href="'.$link.'" >';

									if ($woocommerce->cart->cart_contents_count == 0){
										$shop_button .= '<i class="fa fa-shopping-cart" aria-hidden="true"></i>';
									} else {
										$shop_button .= '<i class="fa fa-cart-plus" aria-hidden="true"></i>';
									}
									$shop_button .= '</a>';
									$shop_button .= '<a href="'.$link.'" ><span class="cart-total">
										'.sprintf(_n('%d item', '%d', $woocommerce->cart->cart_contents_count, 'aneeq'), $woocommerce->cart->cart_contents_count).'</span></a>';
								}
								$shop_button .= '</ul>';
								?>

									<div class="navbar-collapse collapse">
										<?php
										
										$args = array(
											'theme_location'  	 => 'primary-menu',
											//'container'		 => false,
											'depth'              => 5,
											'menu_class'	 	 => 'nav navbar-nav navbar-right',
											'items_wrap'  		=> $shop_button,
											'walker'		 	 => new Walker_Nav_Primary()
											
										);

										if (has_nav_menu('primary-menu')) {
											wp_nav_menu( $args ); 
										} 
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
<script>
	jQuery(document).ready(function() {
		// site preloader 
		jQuery(window).load(function(){
			jQuery('.loader-wrapper').fadeOut('slow',function(){jQuery(this).remove();});
		});
	});
</script>