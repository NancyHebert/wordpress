<?php
if ( class_exists( 'WooCommerce' ) ) {

	// Item Scroll
	$args  = array(
		'post_type' => 'product',
	);
	/* Exclude hidden products from the loop */
	$args['tax_query'] = array(
		array(
			'taxonomy' => 'product_visibility',
			'field'    => 'name',
			'terms'    => 'exclude-from-catalog',
			'operator' => 'NOT IN',
		),
	);
?>
		<section class="section-woocommerce">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="dividerHeading">
							<h2><?php echo esc_html(stripslashes(get_theme_mod('aneeq_woocommerce_title', 'Featured Products'))); ?></h2> 
							<p><?php echo esc_html(stripslashes(get_theme_mod('aneeq_woocommerce_desc', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry'))); ?></p>
						</div>
					</div>
				</div>

				<div class="row super_sub_content">	
					<?php
						$args = array( 'post_type' => 'product','posts_per_page' => 4);
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post(); global $product;
					?>
					<div id="wooproduct-slider" class="col-md-3">
						<div class="products woocommerce-post-slide">
							<div class="item-img">
								<a href="<?php the_permalink(); ?>" title="" tabindex="-1">
									<?php the_post_thumbnail('woocommerce_thumbnail'); ?>
									<?php if ( $product->is_on_sale() ) : ?>

									<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'On Sale!', 'aneeq' ) . '</span>', $post, $product ); ?>
									<?php endif; ?>

									<div class="add-to-cart">
										<?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
									</div>
								</a>
							</div>
						
							<!-- hide ratting div if no rating added-->
							<?php if($product->get_average_rating()) { ?>
							<ul class="woocommerce rating">
								<li>
									<?php if ($average = $product->get_average_rating()) : ?>
									<?php echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'aneeq' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'aneeq' ).'</span></div>'; ?>
									<?php endif; ?>
								</li>
							</ul>
							<?php } ?>

							<h3><a href="<?php the_permalink(); ?>" title="" tabindex="-1"><?php the_title(); ?></a></h3>
							<span class="price"><?php echo $product->get_price_html(); ?></span>
						</div>
					</div>	
					<?php endwhile; ?>
					<?php  wp_reset_postdata(); ?>	
				</div>
			</div>
		</section>
		<!-- Woo commerce Section -->
	<div class="clearfix"></div>
<?php } ?>