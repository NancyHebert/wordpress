<!-- slider wrapper start -->
<div class="slider-wrapper">
	<!-- slider -->
	<div id="aneeq-slider" class="owl-carousel owl-theme">
	<?php 
	$aneeq_slider_image_1 = get_theme_mod('aneeq_slider_image_1', get_template_directory_uri() . '/images/slider/slide_1.jpg');
	$aneeq_slider_image_2 = get_theme_mod('aneeq_slider_image_2', get_template_directory_uri() . '/images/slider/slide_2.jpg');
	$aneeq_slider_image_3 = get_theme_mod('aneeq_slider_image_3', get_template_directory_uri() . '/images/slider/slide_3.jpg');
	//slider tilte & description settings
	$aneeq_slider_title_1 = get_theme_mod('aneeq_slider_title_1', get_template_directory_uri() . 'Aneeq is fully perfect for company & agency');
	$aneeq_slider_desc_1 = get_theme_mod('aneeq_slider_desc_1', get_template_directory_uri() . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.');
	$aneeq_slider_btn_text_1 = get_theme_mod('aneeq_slider_btn_text_1', get_template_directory_uri() . 'Read More');
	
	$aneeq_slider_title_2 = get_theme_mod('aneeq_slider_title_2', get_template_directory_uri() . 'Aneeq is fully perfect for company & agency');
	$aneeq_slider_desc_2 = get_theme_mod('aneeq_slider_desc_2', get_template_directory_uri() . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.');
	$aneeq_slider_btn_text_2 = get_theme_mod('aneeq_slider_btn_text_2', get_template_directory_uri() . 'Read More');
	
	$aneeq_slider_title_3 = get_theme_mod('aneeq_slider_title_3', get_template_directory_uri() . 'Aneeq is fully perfect for company & agency');
	$aneeq_slider_desc_3 = get_theme_mod('aneeq_slider_desc_3', get_template_directory_uri() . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.');
	$aneeq_slider_btn_text_3 = get_theme_mod('aneeq_slider_btn_text_3', get_template_directory_uri() . 'Read More');
	?>
		<?php if($aneeq_slider_image_1 != "") { ?>
			<div class="item">
				<img src="<?php if($aneeq_slider_image_1) { echo esc_url($aneeq_slider_image_1); } ?>" alt="slide1">
				<div class="container slide-caption text-left">
					<?php if($aneeq_slider_title_1 != "") { ?>
						<div><h1><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_title_1', 'Aneeq is fully perfect for company & agency'))); ?></h1></div>
					<?php } if($aneeq_slider_desc_1 != "") { ?>
						<div><p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_desc_1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.'))); ?></p></div>
					<?php } if($aneeq_slider_btn_text_1 != "") { ?>
						<div class="btn-area">
							<a href="<?php echo esc_url(get_theme_mod('aneeq_slider_btn_link_1', '')); ?>" target="_blank" class="slide-btn"><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_btn_text_1', 'Read More'))); ?></a>
						</div>
					<?php } ?>	
				</div>							
			</div>
		<?php } if($aneeq_slider_image_2 != "") { ?>
			<div class="item">
				<img src="<?php if($aneeq_slider_image_2) { echo esc_url($aneeq_slider_image_2); } ?>" alt="slide2">
				<div class="container slide-caption text-left">
					<?php if($aneeq_slider_title_2 != "") { ?>
						<div><h1><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_title_2', 'Aneeq is fully perfect for company & agency'))); ?></h1></div>
					<?php } if($aneeq_slider_desc_2 != "") { ?>
						<div><p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_desc_2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.'))); ?></p></div>
					<?php } if($aneeq_slider_btn_text_2 != "") { ?>
						<div class="btn-area">
							<a href="<?php echo esc_url(get_theme_mod('aneeq_slider_btn_link_2', '')); ?>" target="_blank" class="slide-btn"><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_btn_text_2', 'Read More'))); ?></a>
						</div>
					<?php } ?>
				</div>									
			</div>
		<?php } if($aneeq_slider_image_3 != "") { ?>
			<div class="item">
				<img src="<?php if($aneeq_slider_image_3) { echo esc_url($aneeq_slider_image_3); } ?>" alt="slide3">
				<div class="container slide-caption text-left">
				<?php if($aneeq_slider_title_3 != "") { ?>
					<div><h1><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_title_3', 'Aneeq is fully perfect for company & agency'))); ?></h1></div> 
				<?php } if($aneeq_slider_desc_3 != "") { ?>
					<div><p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_desc_3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.'))); ?></p></div>
				<?php } if($aneeq_slider_btn_text_3 != "") { ?>
					<div class="btn-area">
						<a href="<?php echo esc_url(get_theme_mod('aneeq_slider_btn_link_3', '')); ?>" target="_blank" class="slide-btn"><?php echo esc_html(stripslashes(get_theme_mod('aneeq_slider_btn_text_3', 'Read More'))); ?></a>
					</div>
				<?php } ?>	
				</div>							
			</div>	
		<?php } ?>		
	</div>	
</div>
<script>
// fraction slider settings
jQuery(window).load(function() {
	jQuery("#aneeq-slider").owlCarousel({	
			items: 1,
			singleItem: true,
			itemsScaleUp : true,
			autoplay: <?php echo esc_html(get_theme_mod('aneeq_slider_autoplay', 2500)); ?>,
			autoplayHoverPause:false,	
			autoplayTimeout:<?php echo esc_html(get_theme_mod('aneeq_slider_speed', 'true')); ?>,
			loop:true,	
			nav: true, // is true across all sizes
			navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
			dots: false,
			autoHeight:true,
	});				 
});
</script>
<!-- slider wrapper end -->