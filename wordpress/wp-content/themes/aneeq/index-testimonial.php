<section class="testimonial-content rollIn animated bg-color">
	<?php 
		$aneeq_testimonial_section_title = get_theme_mod('aneeq_testimonial_section_title', 'What People Say');
		$aneeq_testimonial_section_desc = get_theme_mod('aneeq_testimonial_section_desc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');		
	
		$aneeq_testimonial_image_1 = get_theme_mod('aneeq_testimonial_image_1', get_template_directory_uri() . '/images/img-small-4.jpg');
		$aneeq_testimonial_description = get_theme_mod('aneeq_testimonial_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.');
		$aneeq_testimonial_client_title = get_theme_mod('aneeq_testimonial_client_title', 'John Smith');
		$aneeq_testimonial_client_designation = get_theme_mod('aneeq_testimonial_client_designation', 'Marketing Department');
		$aneeq_testimonial_client_link = get_theme_mod('aneeq_testimonial_client_link', 'https://awplife.com');
	?>
	
	<div class="container">
		<?php if($aneeq_testimonial_section_title != "" ){ ?>
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<div class="dividerHeading">
					<?php if($aneeq_testimonial_section_title != '') { ?><h2><?php echo esc_html(stripslashes($aneeq_testimonial_section_title)); ?></h2><?php } ?>
					<?php if($aneeq_testimonial_section_desc != '') { ?><p><?php echo esc_html(stripslashes($aneeq_testimonial_section_desc)); ?></p><?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>		
		
		<div class="testimonial">
			<?php if($aneeq_testimonial_image_1 != "" ){ ?>
				<div class="tpic">
					<img src="<?php if($aneeq_testimonial_image_1) { echo esc_url($aneeq_testimonial_image_1); } ?>">
				</div>
			<?php } 
			if($aneeq_testimonial_description != "" ){	?>
				<p class="description">
					<?php echo esc_html(stripslashes($aneeq_testimonial_description)); ?>
				</p>
			<?php } ?>
			<cite class="testimonial-title">
				<?php if($aneeq_testimonial_client_title != "" ){ ?>
					<?php echo $aneeq_testimonial_client_title; ?>
				<?php } if($aneeq_testimonial_client_designation != "" ){ ?>
					<small class="designation"><?php echo esc_html(stripslashes($aneeq_testimonial_client_designation)); ?></small>
				<?php } ?>
			</cite>
			<span class="site-url"><a href ="<?php echo $aneeq_testimonial_client_link; ?>" class="website"><?php echo $aneeq_testimonial_client_link; ?></a></span></span>	
		</div>
	</div>
</section>