<!-- Footer Widget Secton -->
   <!--start footer-->
	<?php 
		//Widegt Section
		$aneeq_widgets_section = get_theme_mod('aneeq_widgets_section', 'active');
		
		// Get Footer Layout Settings
		$aneeq_footer_column_layout = get_theme_mod('aneeq_footer_column_layout', 2);
		if($aneeq_footer_column_layout == 1) $aneeq_footer_class_name = "col-md-12 col-sm-12 col-xs-12";	// one column
		if($aneeq_footer_column_layout == 2) $aneeq_footer_class_name = "col-md-6 col-sm-6 col-xs-12";		// two column
		if($aneeq_footer_column_layout == 3) $aneeq_footer_class_name = "col-md-4 col-sm-6 col-xs-12";		// three column
		if($aneeq_footer_column_layout == 4) $aneeq_footer_class_name = "col-md-3 col-sm-6 col-xs-12";		// four column
	?>
	<?php if($aneeq_widgets_section == 'active') { ?>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<?php 
					// Fetch Aneeq Theme Footer Widget
					if ( is_active_sidebar( 'aneeq-footer-widget' ) ){
						dynamic_sidebar( 'aneeq-footer-widget' );
					} else { // Show default data is no widget activated into Footer Widget area of theme
					?>
					<div class="<?php echo esc_attr($aneeq_footer_class_name); ?>">
						<h4 class="widget-title"><?php esc_html_e('About Aneeq', 'aneeq'); ?></h4>
						<div class="widget row">
							<p><?php esc_html_e('Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley.', 'aneeq'); ?></p>						
							<address class="contact-details-alt ">
								<p><i class="fa fa-envelope"></i> <strong><?php esc_html_e('Email :', 'aneeq'); ?></strong><a class="title-t" href=""><?php esc_html_e('example@mymail.com', 'aneeq'); ?></a></p>
								<p><i class="fa fa-user"></i> &nbsp;<strong><?php esc_html_e('Phone :', 'aneeq'); ?></strong><?php esc_html_e('(+91) 900-900-900', 'aneeq'); ?></p>
								<p><i class="fa fa-map-marker"></i> &nbsp;&nbsp;<strong><?php esc_html_e('Address :', 'aneeq'); ?></strong> <?php esc_html_e('2021 Lorem Ipsum', 'aneeq'); ?> </p>
							</address>
						</div>
					</div>
					<div class="<?php echo esc_attr($aneeq_footer_class_name); ?>">
						<h4 class="widget-title"><?php esc_html_e('Recent Posts', 'aneeq'); ?></h4>
						<div class="widget">
							<ul class="links">
								<li><a href=""><?php esc_html_e('Design Website Using WordPress. ', 'aneeq'); ?><span><?php esc_html_e('November 07, 2017', 'aneeq'); ?></span></a></li>
								<li><a href=""><?php esc_html_e('Aneeq is best WordPress Theme. ', 'aneeq'); ?> <span><?php esc_html_e('December 05, 2017', 'aneeq'); ?></span></a></li>
								<li><a href=""><?php esc_html_e('Top 10 WordPress Themes. ', 'aneeq'); ?><span><?php esc_html_e('January 03, 2018', 'aneeq'); ?></span></a></li>
								<li><a href=""><?php esc_html_e('Event Monster is best WordPress Event Plugin. ', 'aneeq'); ?><span><?php esc_html_e('February 15, 2018', 'aneeq'); ?></span></a></li>
							</ul>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</footer>
		<!--end footer-->
	<?php } ?>

  <?php get_template_part('/include/widgets/footer-bottom'); ?> 
  <?php wp_footer(); ?> 
</body>
</html>