<?php
/**
 * Front Page Template Part: Blog Posts
 */
?>
<?php get_header();	?>
	<section class="blog-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<div class="dividerHeading">
					<h2><?php echo esc_html(stripslashes(get_theme_mod('aneeq_blog_section_title', 'Latest News'))); ?></h2> 
					<p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_blog_section_desc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'))); ?></p>
				</div>
			</div>	
		</div>
	
		<div class="row super_sub_content">
			<?php 
			// Get current page and append to custom query parameters array
			$custom_query_args = array( 'post_type' => 'post','posts_per_page' => 4);
			// Instantiate custom query
			$custom_query = new WP_Query( $custom_query_args );
			
			// Fetch All Post 
			if( $custom_query->have_posts()) {
				while ( $custom_query->have_posts()) : $custom_query->the_post();
				$aneeq_post_slide = get_post_meta( $post->ID, 'aneeq_all_post_slides_settings_'.$post->ID, true);
				//feature img url
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); 
				?>
				<div class="<?php echo esc_attr(get_theme_mod('aneeq_blog_column_layout', 'col-md-3')); ?> col-sm-6 col-xs-12">
					<div class="post-slide">
						<div class="post-img">
							<?php 
							if($url != NULL) { 
								the_post_thumbnail(); 
							}
							?>
						</div>
						<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
						<div class="post-date">
							<i class="fa fa-calendar"></i> <?php the_time('F j, Y'); ?>
						</div>
						<p><?php the_excerpt(); ?></p>
						<a class="readmore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read more','aneeq'); ?></a>
					</div>
				</div>
				<?php
				endwhile;
				// Reset Post Data
				wp_reset_postdata();
			} else { ?>
				<div class="col-md-4">
					<div class="post-slide">
						<div class="post-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/aneeq-blog-1.jpg">
						</div>
						<h5 class="post-title"><a href="#"><?php esc_html_e('Easy steps to make your espresso coffee taste great','aneeq'); ?></a></h5>
						<div class="post-date">
							<i class="fa fa-calendar"></i> <?php esc_html_e('April 23, 2018','aneeq'); ?>
						</div>
						<p><?php esc_html_e('A coffee break in the United States and elsewhere is a short mid-morning rest period granted to employees in business and industry. An afternoon coffee break, or afternoon tea, often occurs as well. The coffee break originated in the late 19th century in Stoughton, Wisconsin, with the wives of Norwegian immigrants. The city celebrates this every year with the Stoughton...','aneeq'); ?></p>
						<a class="readmore" href=""><?php esc_html_e('Read more','aneeq'); ?></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="post-slide">
						<div class="post-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/aneeq-blog-2.jpg">
						</div>
						<h5 class="post-title"><a href="#"><?php esc_html_e('The proper way to dress up for the business meeting','aneeq'); ?></a></h5>
						<div class="post-date">
							<i class="fa fa-calendar"></i> <?php esc_html_e('November 23, 2017','aneeq'); ?>
						</div>
						<p><?php esc_html_e('Quisque dictum eros nisl, a maximus massa accumsan non. Aliquam erat volutpat. Quisque at finibus dui. Praesent cursus, dui sed tempus mollis, turpis ex porta lacus, ut egestas justo nibh in nisi. Donec arcu enim, congue in nunc ut, cursus sollicitudin urna. Pellentesque magna purus, accumsan varius mi et, gravida consectetur purus. Etiam mattis molestie aliquet...','aneeq'); ?></p>
						<a class="readmore" href=""><?php esc_html_e('Read more','aneeq'); ?></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="post-slide">
						<div class="post-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/aneeq-blog-3.jpg">
						</div>
						<h5 class="post-title"><a href="#"><?php esc_html_e('First steps in the right direction','aneeq'); ?></a></h5>
						<div class="post-date">
							<i class="fa fa-calendar"></i> <?php esc_html_e('Dec 18, 2017','aneeq'); ?> 
						</div>
						<p><?php esc_html_e('Morbi eu ante mollis, elementum tortor in, hendrerit libero. Maecenas feugiat rhoncus magna, at consequat libero dictum eget. Donec gravida odio erat, vel ullamcorper lacus faucibus vitae. Mauris hendrerit at justo ac dapibus. Nulla venenatis malesuada nisi eget aliquam. Ut dignissim elit sed ipsum malesuada, et vestibulum sapien consectetur...','aneeq'); ?></p>
						<a class="readmore" href=""><?php esc_html_e('Read more','aneeq'); ?></a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>