<!-- service section start -->
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="dividerHeading">
						<h2><?php echo esc_html(stripslashes(get_theme_mod('aneeq_service_section_title', 'Services We Offer'))); ?></h2> 
						<p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_service_section_desc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'))); ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php 
			$aneeq_service_column_layout = get_theme_mod('aneeq_service_column_layout', 'col-md-3');
			$aneeq_service_layout = get_theme_mod('aneeq_service_layout', 2);
			
			$aneeq_service_title_1 = get_theme_mod('aneeq_service_title_1', 'Responsive Design');
			$aneeq_service_desc_1 = get_theme_mod('aneeq_service_desc_1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');
			$aneeq_service_icon_1 = get_theme_mod('aneeq_service_icon_1', 'fa-user-md');
			
			$aneeq_service_title_2 = get_theme_mod('aneeq_service_title_2', 'Fast & Effective Solutions');
			$aneeq_service_desc_2 = get_theme_mod('aneeq_service_desc_2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');
			$aneeq_service_icon_2 = get_theme_mod('aneeq_service_icon_2', 'fa-calculator');
			
			$aneeq_service_title_3 = get_theme_mod('aneeq_service_title_3', 'Flexible Pricing System');
			$aneeq_service_desc_3 = get_theme_mod('aneeq_service_desc_3', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');
			$aneeq_service_icon_3 = get_theme_mod('aneeq_service_icon_3', 'fa-calendar');
			
			$aneeq_service_title_4 = get_theme_mod('aneeq_service_title_4', 'Clean & Clear Design');
			$aneeq_service_desc_4 = get_theme_mod('aneeq_service_desc_4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');
			$aneeq_service_icon_4 = get_theme_mod('aneeq_service_icon_4', 'fa-sort-amount-desc');
		?>
		<div class="container">
			<?php if($aneeq_service_icon_1 || $aneeq_service_title_1 || $aneeq_service_desc_1 ) { ?>
			<div class="<?php echo esc_attr($aneeq_service_column_layout); ?> col-sm-6 col-xs-12">
				<div class="serviceBox_<?php echo esc_attr($aneeq_service_layout); ?>">
					<?php if($aneeq_service_icon_1 != "") { ?>
						<div class="service-icon">
							<i class="fa <?php echo esc_attr($aneeq_service_icon_1); ?>"></i>
						</div>
					<?php } ?>	
					<div class="service-content">
						<h3><?php echo esc_html(stripslashes($aneeq_service_title_1)); ?></h3>
						<p><?php echo esc_html(stripslashes($aneeq_service_desc_1)); ?></p>
					</div>
				</div>
			</div>
			<?php } ?>
			<?php if($aneeq_service_icon_2 || $aneeq_service_title_2 || $aneeq_service_desc_2 ) { ?>
				<div class="<?php echo esc_attr($aneeq_service_column_layout); ?> col-sm-6 col-xs-12">
					<div class="serviceBox_<?php echo esc_attr($aneeq_service_layout); ?>">
						<?php if($aneeq_service_icon_2 != "") { ?>
							<div class="service-icon">
								<i class="fa <?php echo esc_attr($aneeq_service_icon_2); ?>"></i>
								
							</div>
							
						<?php } ?>
						<div class="service-content">
							<h3><?php echo esc_html(stripslashes($aneeq_service_title_2)); ?></h3>
							<p><?php echo esc_html(stripslashes($aneeq_service_desc_2)); ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if($aneeq_service_icon_3 || $aneeq_service_title_3 || $aneeq_service_desc_3 ) { ?>
				<div class="<?php echo esc_attr($aneeq_service_column_layout); ?> col-sm-6 col-xs-12">
					<div class="serviceBox_<?php echo esc_attr($aneeq_service_layout); ?>">
						<?php if($aneeq_service_icon_3 != "") { ?>
							<div class="service-icon">
								<i class="fa <?php echo esc_attr($aneeq_service_icon_3); ?>"></i>
							</div>
						<?php } ?>	
						<div class="service-content">
							<h3><?php echo esc_html(stripslashes($aneeq_service_title_3)); ?></h3>
							<p><?php echo esc_html(stripslashes($aneeq_service_desc_3)); ?></p>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if($aneeq_service_icon_4 || $aneeq_service_title_4 || $aneeq_service_desc_4 ) { ?>
				<div class="<?php echo esc_attr($aneeq_service_column_layout); ?> col-sm-6 col-xs-12">
					<div class="serviceBox_<?php echo esc_attr($aneeq_service_layout); ?>">
						<?php if($aneeq_service_icon_4 != "") { ?>
							<div class="service-icon">
								<i class="fa <?php echo esc_attr($aneeq_service_icon_4); ?>"></i>
							</div>
						<?php } ?>	
						<div class="service-content">
							<h3><?php echo esc_html(stripslashes($aneeq_service_title_4)); ?></h3>
							<p><?php echo esc_html(stripslashes($aneeq_service_desc_4)); ?></p>
						</div>
					</div>
				</div>	
			<?php } ?>
		</div>
	</section>	
<!-- service section end -->