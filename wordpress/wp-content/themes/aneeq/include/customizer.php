<?php
//Customizer Controls
function aneeq_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   wp_enqueue_style('customizr', ANEEQ_THEME_URL .'/css/customizer.css');
	//Titles
    class Aneeq_info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() { 
        ?>
            <h3 style="margin-top:30px;border:1px solid #29B6F6;padding:5px;background-color:#29B6F6;color:#fff;text-transform:uppercase;text-align:center;"><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    } 

if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'More_aneeq_Control' ) ) :
class More_aneeq_Control extends WP_Customize_Control {


	/**
	* Render the content on the theme customizer page
	*/
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">
			<div class="col-md-4 col-sm-6">
				<img class="aneeq_img_responsive" src="<?php echo esc_url(ANEEQ_THEME_URL .'/images/aneeq-image.png'); ?>">
			</div>
			<div class="col-md-4 col-sm-6 aneeq-btn">
				<a style="" href="https://awplife.com/wordpress-themes/aneeq-premium/" target="blank" class="btn btn-success btn"><?php esc_html_e('Upgrade to aneeq Premium','aneeq'); ?> </a>
			</div>
			<div class="col-md-3 col-sm-6">
				<h3 class="features-btn"><?php echo esc_html_e( 'Aneeq Premium - Features','aneeq'); ?></h3>
				<ul>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design','aneeq'); ?> </li>					
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Translation Ready','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multi Purpose','aneeq'); ?>  </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('High Performance','aneeq'); ?>  </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Font Awesome Icons','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Blog Template','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multi Color Option','aneeq'); ?></li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Advanced Typography','aneeq'); ?>   </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Flickr Photo Stream Widget','aneeq'); ?>   </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible','aneeq'); ?>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Theme Layout','aneeq'); ?>  </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Ultimate Portfolio layout with Isotope effect','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Home Page Active/Inactive Sections','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Support Access','aneeq'); ?> </li>
					<li class="background-box"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Homepage Section Draggable','aneeq'); ?> </li>
				</ul>
			</div>
			<div class="col-md-2 col-sm-6 aneeq-btn2">
					<a style="margin-bottom:20px;margin-left:20px;" href="http://awplife.com/account/signup/aneeq-premium" target="blank" class="btn btn-success btn"><?php esc_html_e('Buy Now','aneeq'); ?> </a>
			</div>
			<hr>
			<span class="customize-control-title"><?php esc_html_e( 'Found Useful Aneeq?', 'aneeq' ); ?></span>
			<p>
				<?php
					printf( esc_html_e( 'If you Like our Theme , Please do Rate us on WordPress.org  We\'d really appreciate it!', 'aneeq' ), '<a target="_new" href="https://wordpress.org/support/theme/aneeq/reviews/?filter=5">', '</a>' );
				?>
			</p>
			<div class="col-md-2 col-sm-6 aneeq-btn2">
				<a style="margin-bottom:20px;margin-left:20px;" href="https://wordpress.org/support/theme/aneeq/reviews/?filter=5" target="blank" class="btn btn-success btn"><?php esc_html_e('Rate US','aneeq'); ?> </a>
			</div>
			<hr>
			<span class="customize-control-title"><?php esc_html_e( 'Our Top Featured Recommended Plugins', 'aneeq' ); ?></span>
			<div class="col-md-2 col-sm-6 aneeq-btn2">
				<a style="margin-bottom:20px;margin-left:20px;" href="https://wordpress.org/plugins/blog-filter/" target="blank" class="btn btn-success btn"><?php esc_html_e('Blog Filter Gallery','aneeq'); ?> </a>
			</div>
			<div class="col-md-2 col-sm-6 aneeq-btn2">
				<a style="margin-bottom:20px;margin-left:20px;" href="https://wordpress.org/plugins/portfolio-filter-gallery/" target="blank" class="btn btn-success btn"><?php esc_html_e('Portfolio Filter Gallery','aneeq'); ?> </a>
			</div>
		</label>
		<?php
	}
}
endif;	
	
	//Aneeq Theme Options
	$wp_customize->add_panel('aneeq_theme_options', array(
				'title' 	=> __( 'Theme Options', 'aneeq' ),
				'priority' 	=> 1,
            )
        );
		
		//1. Upgrade To aneeq Premium ======================================
		$wp_customize->add_section( 'upgrade_aneeq_premium' , array(
			'title'      	=> __( 'Upgrade to Premium', 'aneeq' ),
			'priority'   	=> 1,
			'panel'=>'aneeq_theme_options',
		) );

			$wp_customize->add_setting( 'upgrade_aneeq_premium', array(
				'default'    		=> null,
				'sanitize_callback' => 'sanitize_text_field',
			) );

			$wp_customize->add_control( new More_aneeq_Control( $wp_customize, 'upgrade_aneeq_premium', array(
				'label'    => __( 'Aneeq Premium', 'aneeq' ),
				'section'  => 'upgrade_aneeq_premium',
				'settings' => 'upgrade_aneeq_premium',
				'priority' => 1,
			) ) ); 
		//1. Upgrade To aneeq Premium ======================================
	
		//2. General Settings Start ======================================
		$wp_customize->add_section( 'aneeq_general_settings' , array(
				'title'      	=> __( 'General Settings', 'aneeq' ),
				'priority'      => 2,
				'panel'			=> 'aneeq_theme_options',
			) 
		);
			
			
			//loading icon show hide		
			$wp_customize->add_setting( 'aneeq_loading_icon_setting', array(
					'default'      		=> 'active',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_loading_icon_setting', array(
					'type'     		 => 'radio',
					'label'   	 	 => __('Loading Icon', 'aneeq'),
					'description'    => __('Hide/Show loading icon', 'aneeq'),
					'section'  		 => 'aneeq_general_settings',
					'priority' 		 => 1,
					'choices'  		 => array(
						'active'       => __( 'Show', 'aneeq' ),
						'inactive'     => __( 'Hide', 'aneeq' ),
					),
				)
			);
			
			//Theme Color
			$wp_customize->add_setting( 'aneeq_skin_theme_color' , array(
					'default'   		=> '#29B6F6',
					'sanitize_callback' => 'sanitize_hex_color',
				) 
			);
			
			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aneeq_skin_theme_color', array(
					'label'      => __( 'Theme Color', 'aneeq' ),
					'section'	 => 'aneeq_general_settings',
					'settings'   => 'aneeq_skin_theme_color',
					'priority'  => 1,
					) 
				) 
			);
			
			//Theme Layout
			$wp_customize->add_setting( 'aneeq_theme_layout', array(
					'default'     		=> 'wide',
					'sanitize_callback' => 'aneeq_sanitize_radio',
				)
			);
				$wp_customize->add_control('aneeq_theme_layout', array(
						'type'      => 'radio',
						'label'     => __('Theme Layout', 'aneeq'),
						'section'   => 'aneeq_general_settings',
						'settings'  => 'aneeq_theme_layout',
						'priority'  => 2,
						'choices'   => array(
							'wide'       => __( 'Wide Layout', 'aneeq' ),
							'boxed'      => __( 'Box Layout', 'aneeq' ),
						),
					)
				);
				
				//Boxed Layout Background Image
				$wp_customize->add_setting( 'aneeq_boxed_layout_bgimg', array(
						'default'      		=> esc_html( 'wood', 'aneeq' ),
						'sanitize_callback' => 'aneeq_sanitize_select',
					)
				);
				$wp_customize->add_control('aneeq_boxed_layout_bgimg', array(
						'type'      => 'select',
						'label'     => __('Boxed Layout Background Image', 'aneeq'),
						'section'   => 'aneeq_general_settings',
						'priority'  => 3,
						'choices'   => array(
							'crossed_stripes'       => __( 'Crossed Stripes', 'aneeq' ),
							'classy_fabric'         => __( 'Classy Fabric', 'aneeq' ),
							'low_contrast_linen'    => __( 'Low Contrast Linen', 'aneeq' ),
							'wood'    				=> __( 'Wood', 'aneeq' ),
							'diamonds'    			=> __( 'Diamonds', 'aneeq' ),
							'triangles'    			=> __( 'Triangles', 'aneeq' ),
							'black_mamba'    		=> __( 'Black Mamba', 'aneeq' ),
							'vichy'   			 	=> __( 'Vichy', 'aneeq' ),
							'back_pattern'    		=> __( 'Back Pattern', 'aneeq' ),
							'checkered_pattern'    	=> __( 'Checkered Pattern', 'aneeq' ),
							'diamond_upholstery'    => __( 'Diamond Upholstery', 'aneeq' ),
							'lyonnette'    			=> __( 'Lyonnette', 'aneeq' ),
							'graphy'    			=> __( 'Graphy', 'aneeq' ),
							'black_thread'    		=> __( 'Black Thread', 'aneeq' ),
							'subtlenet2'    		=> __( 'Subtlenet', 'aneeq' ),
						),
						'active_callback' => 'aneeq_boxed_layout_choice',
					)
				);
				
				//function aneeq_boxed_layout_choice
				function aneeq_boxed_layout_choice( $aneeq_boxed_layout_callback ) {
					if ( $aneeq_boxed_layout_callback->manager->get_setting('aneeq_theme_layout')->value() == 'boxed' ) {
						return true;
					} else {
						return false;
					}
				}
			
			//General Page Layout
			$wp_customize->add_setting( 'aneeq_general_page_layout', array(
					'default'      		=> 'fullwidth',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_general_page_layout', array(
					'type'     		 => 'radio',
					'label'    		 => __('Page Layout', 'aneeq'),
					'description'    => __('Sidebar setting for single Page', 'aneeq'),
					'section'  		 => 'aneeq_general_settings',
					'priority' 		 => 5,
					'choices'  		 => array(
						'leftsidebar'       => __( 'Left Sidebar', 'aneeq' ),
						'fullwidth'         => __( 'Full width (no sidebar)', 'aneeq' ),
						'rightsidebar'    	=> __( 'Right Sidebar', 'aneeq' )
					),
				)
			);
			
			//General Blog Single Page Layout
			$wp_customize->add_setting( 'aneeq_blog_single_page_layout', array(
					'default'      		=> 'fullwidth',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_blog_single_page_layout', array(
					'type'    		 => 'radio',
					'label'  		 => __('Blog Single Post Layout', 'aneeq'),
					'description'    => __('Sidebar setting for single blog post', 'aneeq'),
					'section' 		 => 'aneeq_general_settings',
					'priority' 		 => 6,
					'choices'  		 => array(
						'leftsidebar'       => __( 'Left Sidebar', 'aneeq' ),
						'fullwidth'         => __( 'Full width (no sidebar)', 'aneeq' ),
						'rightsidebar'    	=> __( 'Right Sidebar', 'aneeq' )
					),
				)
			);
			
			//Enable Static Page			
			$wp_customize->add_setting( 'aneeq_static_page_setting', array(
					'default'      		=> 'active',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_static_page_setting', array(
					'type'     		 => 'radio',
					'label'   	 	 => __('Static Page Content', 'aneeq'),
					'description'    => __('Hide/Show Page or Post Content from Homepage', 'aneeq'),
					'section'  		 => 'aneeq_general_settings',
					'priority' 		 => 7,
					'choices'  		 => array(
						'active'       => __( 'Show', 'aneeq' ),
						'inactive'     => __( 'Hide', 'aneeq' ),
					),
				)
			);
			
			//Blog Page Layout
			$wp_customize->add_setting( 'aneeq_page_layout_style', array(
					'default'      		=> 'rightsidebar',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_page_layout_style', array(
					'type'      => 'radio',
					'label'     => __('Homepage Blog layout', 'aneeq'),
					'description' => __('Required: Set Static Page Content as Show', 'aneeq'),
					'section'   => 'aneeq_general_settings',
					'priority'  => 9,
					'choices'   => array(
						'leftsidebar'       => __( 'Left Sidebar', 'aneeq' ),
						'fullwidth'         => __( 'Full width (no sidebar)', 'aneeq' ),
						'rightsidebar'    	=> __( 'Right Sidebar', 'aneeq' )
					),
				)
			);
			
		//2. General Settings End ======================================
		
		//3. Header Settings Start ======================================
		$wp_customize->add_section( 'aneeq_header_option' , array(
				'title'      	=> __( 'Header Settings', 'aneeq' ),
				'priority'      => 3,
				'panel'      	=> 'aneeq_theme_options',
			) 
		);
			//Site Logo
			$wp_customize->add_setting( 'logo_type_aneeq', array(
					'default'      		=> 'aneeq_logo_text',
					'sanitize_callback' => 'aneeq_sanitize_radio',
				)
			);
			$wp_customize->add_control('logo_type_aneeq', array(
					'type'      => 'radio',
					'label'     => __('Site Logo', 'aneeq'),
					'description'   => __('Select the logo type you want display as your site logo.', 'aneeq'),
					'section'   => 'aneeq_header_option',
					'priority'  => 1,
					'choices'   => array(
						'aneeq_logo_text'       => __( 'Text', 'aneeq' ),
						'aneeq_logo_image'      => __( 'Image', 'aneeq' ),
					),
				)
			); 
			
			//Logo Text Name
			$wp_customize->add_setting('aneeq_logo_text_name', array(
					'default' 			=> esc_html( '', 'aneeq' ),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_logo_text_name', array(
					'label' 		=> __( 'Text', 'aneeq' ),
					'section' 		=> 'aneeq_header_option',
					'type'		 	=> 'text',
					'description'   => __('Type in the text to set as your site logo.', 'aneeq'),       
					'priority' 		=> 2,
					'active_callback' => 'aneeq_logo_text_name_choice',
				)
			);
			
			//function aneeq_logo_text_name_choice
				function aneeq_logo_text_name_choice( $aneeq_logo_text_name_callback ) {
					if ( $aneeq_logo_text_name_callback->manager->get_setting('logo_type_aneeq')->value() == 'aneeq_logo_text' ) {
						return true;
					} else {
						return false;
					}
				}
			
			//Site Icon
			$wp_customize->add_setting('aneeq_logo_image_url', array(
					'default' 			=> get_template_directory_uri() . '/images/aneeq-theme-logo.png',
					'sanitize_callback' => 'esc_url_raw',
				)
			);
			$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'aneeq_logo_image_url', array(
					   'label'          => __( 'Image', 'aneeq' ),
					   'type'           => 'image',
					   'description'   => __('Select the image you want display as your site logo. NOTE : Upload Logo "272x45" size for Best Look.', 'aneeq'),
					   'section'        => 'aneeq_header_option',
					   'settings'       => 'aneeq_logo_image_url',
					   'priority'       => 3,					   
						'active_callback' => 'aneeq_logo_image_url_choice',
					)
				)
			);
			
			//function aneeq_logo_text_name_choice
				function aneeq_logo_image_url_choice( $aneeq_logo_image_url_callback ) {
					if ( $aneeq_logo_image_url_callback->manager->get_setting('logo_type_aneeq')->value() == 'aneeq_logo_image' ) {
						return true;
					} else {
						return false;
					}
				}
			
			//Header Max Height
			$wp_customize->add_setting('aneeq_header_height', array(
					'default' 			=> esc_html( '10', 'aneeq' ),
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control('aneeq_header_height', array(
					'label' 		=> __( 'Header Max Height (px)', 'aneeq' ),
					'section' 		=> 'aneeq_header_option',
					'type'		 	=> 'number',
					'description'   => __('Header height in pixels. [default: 10]', 'aneeq'),       
					'priority' 		=> 4
				)
			);
		//3. Header Settings End ======================================
			
			
		//4. Slider Settings Start ======================================
		$wp_customize->add_section( 'aneeq_slider_option' , array(
				'title'      	=> __( 'HomePage Slider Settings', 'aneeq' ),
				'description'   => __('You can add up to 3 images in the slider. ', 'aneeq'),
				'priority'      => 4,
				'panel'      	=> 'aneeq_theme_options',
			) 
		);
		
			//Enable Slider			
			$wp_customize->add_setting( 'aneeq_slider_section', array(
					'default'      		=> 'inactive',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_slider_section', array(
					'type'      => 'radio',
					'label'     => __('Slider Section', 'aneeq'),
					'section'   => 'aneeq_slider_option',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			//Slider Speed
			$wp_customize->add_setting('aneeq_slider_speed', array(
					'default' 			=> esc_html('2500', 'aneeq'),
					'sanitize_callback' => 'absint'
				)
			);
			$wp_customize->add_control('aneeq_slider_speed', array(
					'label' 		=> __( 'Slider Speed', 'aneeq' ),
					'section' 		=> 'aneeq_slider_option',
					'type'		 	=> 'number',
					'description'   => __('Slider speed in miliseconds. [default: 2500]', 'aneeq'),       
					'priority' 		=> 2,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Slider Autoplay			
			$wp_customize->add_setting( 'aneeq_slider_autoplay', array(
					'default'      		=> 'true',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_slider_autoplay', array(
					'type'      => 'radio',
					'label'     => __('Slider Autoplay', 'aneeq'),
					'section'   => 'aneeq_slider_option',
					'priority'  => 1,
					'choices'   => array(
						'true'       => __( 'Enable', 'aneeq' ),
						'false'      => __( 'Disable', 'aneeq' ),
					),
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Slide One
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 's1', array(
						'label' 	=> __('Slide One', 'aneeq'),
						'section' 	=> 'aneeq_slider_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 3,
						'active_callback' => 'aneeq_slider_callback',
					) 
				)
			);    
			
			$wp_customize->add_setting('aneeq_slider_image_1', array(
					'default' 			=> get_template_directory_uri() . '/images/slider/slide_1.jpg',
					'sanitize_callback' => 'esc_url_raw',
				)
			);
			$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'aneeq_slider_image_1', array(
					   'label'          => __( 'Upload your image for the slide one', 'aneeq' ),
					   'type'           => 'image',
					   'section'        => 'aneeq_slider_option',
					   'settings'       => 'aneeq_slider_image_1',
					   'priority'       => 4,
						'active_callback' => 'aneeq_slider_callback',
					)
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_slider_title_1', array(
					'default' 			=> esc_html('Aneeq is fully perfect for company & agency','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
					
				)
			);
			$wp_customize->add_control('aneeq_slider_title_1', array(
					'label' 	=> __( 'Title for the slide one', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority' 	=> 5,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_slider_desc_1', array(
					'default' 			=> esc_html('Aneeq have to satisfy real needs of real projects. We"ve got a pack of tools for that.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_desc_1', array(
					'label' 	=> __( 'Slider Description', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type'		=> 'textarea',
					'priority' 	=> 5,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Link
			$wp_customize->add_setting('aneeq_slider_btn_link_1', array(
					'default' 			=> esc_html('#','aneeq'),
					'sanitize_callback' => 'esc_url_raw'
				)
			);
			$wp_customize->add_control('aneeq_slider_btn_link_1', array(
					'label' 	=> __( 'Button Link', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'url',
					'priority'	=> 6,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Text
			$wp_customize->add_setting('aneeq_slider_btn_text_1', array(
					'default' 			=> esc_html('Read More','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_btn_text_1', array(
					'label' 	=> __( 'Button Text', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority' 	=> 7,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Slide Two
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 's2', array(
						'label' 	=> __('Slide Two', 'aneeq'),
						'section' 	=> 'aneeq_slider_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 8,
						'active_callback' => 'aneeq_slider_callback',
					) 
				)
			);    
			
			$wp_customize->add_setting('aneeq_slider_image_2', array(
					'default' 			=> get_template_directory_uri() . '/images/slider/slide_2.jpg',
					'sanitize_callback' => 'esc_url_raw',
				)
			);
			$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'aneeq_slider_image_2', array(
					   'label'          => __( 'Upload your image for the slide two', 'aneeq' ),
					   'type'           => 'image',
					   'section'        => 'aneeq_slider_option',
					   'settings'       => 'aneeq_slider_image_2',
					   'priority'       => 9,
						'active_callback' => 'aneeq_slider_callback',
					)
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_slider_title_2', array(
					'default' 			=> esc_html('We love Making Beautiful Themes','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_title_2', array(
					'label' 	=> __( 'Title for the slide two', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority' 	=> 10,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_slider_desc_2', array(
					'default' 			=> esc_html('Aneeq have to satisfy real needs of real projects. We"ve got a pack of tools for that.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_desc_2', array(
					'label' 	=> __( 'Slider Description', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'textarea',
					'priority' 	=> 11,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Link
			$wp_customize->add_setting('aneeq_slider_btn_link_2', array(
					'default' 			=> esc_html('#','aneeq'),
					'sanitize_callback' => 'esc_url_raw'
				)
			);
			$wp_customize->add_control('aneeq_slider_btn_link_2', array(
					'label' 	=> __( 'Button Link', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'url',
					'priority' 	=> 12,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Text
			$wp_customize->add_setting('aneeq_slider_btn_text_2', array(
					'default' 			=> esc_html('Read More','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_btn_text_2', array(
					'label' 	=> __( 'Button Text', 'aneeq' ),
					'section'	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority'  => 13,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Slide Three
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 's3', array(
						'label' 	=> __('Slide Three', 'aneeq'),
						'section' 	=> 'aneeq_slider_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 14,
						'active_callback' => 'aneeq_slider_callback',
					) 
				)
			);    
			
			$wp_customize->add_setting('aneeq_slider_image_3', array(
					'default' 			=> get_template_directory_uri() . '/images/slider/slide_3.jpg',
					'sanitize_callback' => 'esc_url_raw',
				)
			);
			$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'aneeq_slider_image_3', array(
					   'label'          => __( 'Upload your image for the slide three', 'aneeq' ),
					   'type'           => 'image',
					   'section'        => 'aneeq_slider_option',
					   'settings'       => 'aneeq_slider_image_3',
					   'priority'       => 15,
						'active_callback' => 'aneeq_slider_callback',
					)
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_slider_title_3', array(
					'default' 			=> esc_html('The Way of Business Success','aneeq'),
					'sanitize_callback' => 'wp_kses_post'

				)
			);
			$wp_customize->add_control('aneeq_slider_title_3', array(
					'label' 	=> __( 'Title for the slide three', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority' 	=> 16,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_slider_desc_3', array(
					'default' 			=> esc_html('Aneeq have to satisfy real needs of real projects. We"ve got a pack of tools for that.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_desc_3', array(
					'label' 	=> __( 'Slider Description', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'textarea',
					'priority' 	=> 17,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Link
			$wp_customize->add_setting('aneeq_slider_btn_link_3', array(
					'default' 			=> esc_html('#','aneeq'),
					'sanitize_callback' => 'esc_url_raw'

				)
			);
			$wp_customize->add_control('aneeq_slider_btn_link_3', array(
					'label' 	=> __( 'Button Link', 'aneeq' ),
					'section' 	=> 'aneeq_slider_option',
					'type' 		=> 'url',
					'priority' 	=> 18,
					'active_callback' => 'aneeq_slider_callback',
				)
			);
			
			//Button Text
			$wp_customize->add_setting('aneeq_slider_btn_text_3', array(
					'default' 			=> esc_html('Read More','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_slider_btn_text_3', array(
					'label' 	=> __( 'Button Text', 'aneeq' ),
					'section'	=> 'aneeq_slider_option',
					'type' 		=> 'text',
					'priority'  => 19,
					'active_callback' => 'aneeq_slider_callback',
				)
			);	
			
			//Slider Radio Button Show And Hide Funcion			
			function aneeq_slider_callback( $aneeq_slider_control ) {
				$aneeq_slider_radio_setting = $aneeq_slider_control->manager->get_setting('aneeq_slider_section')->value();
				$aneeq_slider_control_id = $aneeq_slider_control->id;
				//slide one
				if ( $aneeq_slider_control_id == 'aneeq_slider_speed'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_autoplay'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 's1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_image_1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_title_1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_desc_1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_link_1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_text_1'  && $aneeq_slider_radio_setting == 'active' ) return true;
				//slide two
				if ( $aneeq_slider_control_id == 's2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_image_2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_title_2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_desc_2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_link_2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_text_2'  && $aneeq_slider_radio_setting == 'active' ) return true;
				//slide three
				if ( $aneeq_slider_control_id == 's3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_image_3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_title_3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_desc_3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_link_3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				if ( $aneeq_slider_control_id == 'aneeq_slider_btn_text_3'  && $aneeq_slider_radio_setting == 'active' ) return true;
				
				return false;
			}	
		//4. Slider Settings End ======================================
		
		
		//5. Service Settings Start ======================================
		$wp_customize->add_section( 'aneeq_service_option' , array(
				'title'      	=> __( 'HomePage Service Settings', 'aneeq' ),
				'priority'      => 5,
				'panel'      	=> 'aneeq_theme_options',
			) 
		);
		
			//Enable Service
			$wp_customize->add_setting( 'aneeq_service_section', array(
					'default'     		=> 'inactive',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_service_section', array(
					'type'      => 'radio',
					'label'     => __('Service Section', 'aneeq'),
					'section'   => 'aneeq_service_option',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_service_section_title', array(
					'default' 			=> esc_html('Services We Offer','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_section_title', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 1,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_service_section_desc', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_section_desc', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 1,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			
			//Service Layout
			$wp_customize->add_setting( 'aneeq_service_layout', array(
					'default'      		=> 2,
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_service_layout', array(
					'type'      => 'radio',
					'label'     => __('Design Settings', 'aneeq'),
					'section'   => 'aneeq_service_option',
					'priority'  => 1,
					'choices'   => array(
						2      => __( 'Layout 1', 'aneeq' ),
						1      => __( 'Layout 2', 'aneeq' ),
					),
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Service Column Layout
			$wp_customize->add_setting( 'aneeq_service_column_layout', array(
					'default'     		=> 'col-md-3',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_service_column_layout', array(
					'type'      => 'radio',
					'label'     => __('Column Settings (Only For Desktop)', 'aneeq'),
					'section'   => 'aneeq_service_option',
					'priority'  => 1,
					'choices'   => array(
						'col-md-3'     	=> __( '4 Column', 'aneeq' ),
						'col-md-4'      => __( '3 Column', 'aneeq' ),						
						'col-md-6'      => __( '2 Column', 'aneeq' ),						
					),
					'active_callback' => 'aneeq_service_callback',
				)
			);	
			
			//Service One
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 'service_one', array(
						'label' 	=> __('Service One', 'aneeq'),
						'section' 	=> 'aneeq_service_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 2,
						'active_callback' => 'aneeq_service_callback',
					) 
				)
			);
			
			
			//Icon
			$wp_customize->add_setting('aneeq_service_icon_1', array(
					'default' 			=> esc_html('fa-user-md','aneeq'),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control('aneeq_service_icon_1', array(
					'label' 	=> __( 'Service Icon', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 3,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			
			
			//Title
			$wp_customize->add_setting('aneeq_service_title_1', array(
					'default' 			=> esc_html('Responsive Design','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_title_1', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 4,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			
			//Description
			$wp_customize->add_setting('aneeq_service_desc_1', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_desc_1', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 5,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Service Two
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 'service_two', array(
						'label' 	=> __('Service Two', 'aneeq'),
						'section' 	=> 'aneeq_service_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 6,
						'active_callback' => 'aneeq_service_callback',
					) 
				)
			);
			
		
			//Icon
			$wp_customize->add_setting('aneeq_service_icon_2', array(
					'default' 			=> esc_html('fa-calculator','aneeq'),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control('aneeq_service_icon_2', array(
					'label' 	=> __( 'Service Icon', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 7,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			
			//Title
			$wp_customize->add_setting('aneeq_service_title_2', array(
					'default' 			=> esc_html('Fast & Effective Solutions','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_title_2', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 8,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_service_desc_2', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_desc_2', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 9,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Service Three
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 'service_three', array(
						'label' 	=> __('Service Three', 'aneeq'),
						'section' 	=> 'aneeq_service_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 10,
						'active_callback' => 'aneeq_service_callback',
					) 
				)
			);
			
			//Icon
			$wp_customize->add_setting('aneeq_service_icon_3', array(
					'default' 			=> esc_html('fa-calendar','aneeq'),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control('aneeq_service_icon_3', array(
					'label' 	=> __( 'Service Icon', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 11,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_service_title_3', array(
					'default' 			=> esc_html('Flexible Pricing System','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_title_3', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 12,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_service_desc_3', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_desc_3', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 13,
					'active_callback' => 'aneeq_service_callback',
				)
			);

			//Service Four
			$wp_customize->add_setting('aneeq_title', array(
					'type'              => 'info_control',
					'capability'        => 'edit_theme_options',
					'sanitize_callback' => 'esc_attr',            
				)
			);
			
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 'service_four', array(
						'label' 	=> __('Service Four', 'aneeq'),
						'section' 	=> 'aneeq_service_option',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 14,
						'active_callback' => 'aneeq_service_callback',
					) 
				)
			);
			
			//Icon
			$wp_customize->add_setting('aneeq_service_icon_4', array(
					'default' 			=> esc_html('fa-sort-amount-desc','aneeq'),
					'sanitize_callback' => 'wp_filter_nohtml_kses'
				)
			);
			$wp_customize->add_control('aneeq_service_icon_4', array(
					'label' 	=> __( 'Service Icon', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 15,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_service_title_4', array(
					'default' 			=> esc_html('Clean & Clear Design','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_title_4', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 16,
					'active_callback' => 'aneeq_service_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_service_desc_4', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_service_desc_4', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_service_option',
					'type' 		=> 'text',
					'priority' 	=> 17,
					'active_callback' => 'aneeq_service_callback',
				)
			);
				
			//Service Radio Button Show And Hide Funcion			
			function aneeq_service_callback( $aneeq_service_control ) {
				$aneeq_service_radio_setting = $aneeq_service_control->manager->get_setting('aneeq_service_section')->value();
				$aneeq_service_control_id = $aneeq_service_control->id;
				//service one
				if ( $aneeq_service_control_id == 'aneeq_service_section_title'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_section_desc'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_layout'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_column_layout'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'service_one'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_icon_1'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_title_1'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_desc_1'  && $aneeq_service_radio_setting == 'active' ) return true;
				//service two			
				if ( $aneeq_service_control_id == 'service_two'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_icon_2'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_title_2'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_desc_2'  && $aneeq_service_radio_setting == 'active' ) return true;
				//service three
				if ( $aneeq_service_control_id == 'service_three'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_icon_3'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_title_3'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_desc_3'  && $aneeq_service_radio_setting == 'active' ) return true;
				
				//service four
				if ( $aneeq_service_control_id == 'service_four'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_icon_4'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_title_4'  && $aneeq_service_radio_setting == 'active' ) return true;
				if ( $aneeq_service_control_id == 'aneeq_service_desc_4'  && $aneeq_service_radio_setting == 'active' ) return true;
				 
				return false;
			}
		//5. Service Settings End ======================================
		
			
		//6. Blog Options Settings Start ======================================
		$wp_customize->add_section( 'aneeq_blog_option' , array(
				'title'      	=> __( 'HomePage Blog Settings', 'aneeq' ),
				'description'	=> __( 'You can change blog page layout and single blog page layout from here.', 'aneeq' ),
				'priority'      => 6,
				'panel'      	=> 'aneeq_theme_options',
			) 
		);
			
			//Enable Blog
			$wp_customize->add_setting( 'aneeq_blog_section', array(
					'default'     		=> 'inactive',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_blog_section', array(
					'type'      => 'radio',
					'label'     => __('Blog Section', 'aneeq'),
					'section'   => 'aneeq_blog_option',
					'settings'   => 'aneeq_blog_section',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_blog_section_title', array(
					'default' 			=> esc_html('Latest News','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_blog_section_title', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_blog_option',
					'type' 		=> 'text',
					'priority' 	=> 2,
					'active_callback' => 'aneeq_blog_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_blog_section_desc', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_blog_section_desc', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_blog_option',
					'type' 		=> 'text',
					'priority' 	=> 3,
					'active_callback' => 'aneeq_blog_callback',
				)
			);
			
			//Service Column Layout
			$wp_customize->add_setting( 'aneeq_blog_column_layout', array(
					'default'     		=> 'col-md-3',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_blog_column_layout', array(
					'type'      => 'radio',
					'label'     => __('Column Settings (Only For Desktop)', 'aneeq'),
					'section'   => 'aneeq_blog_option',
					'priority'  => 4,
					'choices'   => array(
						'col-md-3'     	=> __( '4 Column', 'aneeq' ),
						'col-md-6'      => __( '2 Column', 'aneeq' ),						
					),
					'active_callback' => 'aneeq_blog_callback',
				)
			);	
			
			//Blog Radio Button Show And Hide Funcion			
			function aneeq_blog_callback( $aneeq_blog_control ) {
				$aneeq_blog_setting = $aneeq_blog_control->manager->get_setting('aneeq_blog_section')->value();
				$aneeq_blog_control_id = $aneeq_blog_control->id;
				//service one
				if ( $aneeq_blog_control_id == 'aneeq_blog_section_title'  && $aneeq_blog_setting == 'active' ) return true;
				if ( $aneeq_blog_control_id == 'aneeq_blog_section_desc'  && $aneeq_blog_setting == 'active' ) return true;
				if ( $aneeq_blog_control_id == 'aneeq_blog_column_layout'  && $aneeq_blog_setting == 'active' ) return true;
				return false;
			}
		//6. Blog Options Settings End ======================================
		
			
		//7. Woocommerce Options Settings Start ======================================
		$wp_customize->add_section( 'aneeq_woocommerce_settings' , array(
			'title'      	=> __( 'HomePage Woocommerce Settings', 'aneeq' ),
			'priority'      => 7,
			'panel'      	=> 'aneeq_theme_options',
		) );
			
			//Enable Slider			
			$wp_customize->add_setting( 'aneeq_woocommerce_section', array(
					'default'      		=> 'inactive',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_woocommerce_section', array(
					'type'      => 'radio',
					'label'     => __('Woocommerce Section', 'aneeq'),
					'section'   => 'aneeq_woocommerce_settings',
					'settings'  => 'aneeq_woocommerce_section',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_woocommerce_title', array(
					'default' 			=> esc_html('Featured Products','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_woocommerce_title', array(
					'label' 	=> __( 'Title', 'aneeq' ),
					'section' 	=> 'aneeq_woocommerce_settings',
					'type' 		=> 'text',
					'priority' 	=> 1,
					'active_callback' => 'aneeq_woocommerce_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_woocommerce_desc', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_woocommerce_desc', array(
					'label' 	=> __( 'Description', 'aneeq' ),
					'section' 	=> 'aneeq_woocommerce_settings',
					'type' 		=> 'text',
					'priority' 	=> 2,
					'active_callback' => 'aneeq_woocommerce_callback',
				)
			);
			
			//Woo-commerce Radio Button Show And Hide Funcion			
			function aneeq_woocommerce_callback( $aneeq_woocommerce_control ) {
				$aneeq_woocommerce_radio_setting = $aneeq_woocommerce_control->manager->get_setting('aneeq_woocommerce_section')->value();
				$aneeq_woocommerce_control_id = $aneeq_woocommerce_control->id;
				//woocommerce one
				if ( $aneeq_woocommerce_control_id == 'aneeq_woocommerce_title'  && $aneeq_woocommerce_radio_setting == 'active' ) return true;
				if ( $aneeq_woocommerce_control_id == 'aneeq_woocommerce_desc'  && $aneeq_woocommerce_radio_setting == 'active' ) return true;
				return false;
			}
		//7. Woocommerce Options Settings End ======================================
			
		//8. testimonial Settings Settings Start ======================================
		$wp_customize->add_section( 'aneeq_testimonial_settings' , array(
				'title'      	=> __( 'HomePage Testimonial Settings', 'aneeq' ),
				'priority'      => 8,
				'panel'			=> 'aneeq_theme_options'
			) 
		);
		
			//Enable testimonial
			$wp_customize->add_setting( 'aneeq_testimonial_section', array(
					'default'     		=> 'inactive',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_section', array(
					'type'      => 'radio',
					'label'     => __('Testimonial Section', 'aneeq'),
					'section'   => 'aneeq_testimonial_settings',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			//Title
			$wp_customize->add_setting('aneeq_testimonial_section_title', array(
					'default' 			=> esc_html('What People Say','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_section_title', array(
					'label' 	=> __( 'Section Title', 'aneeq' ),
					'section' 	=> 'aneeq_testimonial_settings',
					'type' 		=> 'text',
					'priority' 	=> 1,
					'active_callback' => 'aneeq_testimonial_callback',
				)
			);
			
			//Description
			$wp_customize->add_setting('aneeq_testimonial_section_desc', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_section_desc', array(
					'label' 	=> __( 'Section Description', 'aneeq' ),
					'section' 	=> 'aneeq_testimonial_settings',
					'type' 		=> 'text',
					'priority' 	=> 2,
					'active_callback' => 'aneeq_testimonial_callback',
				)
			);
			
			//testimonial one
			$wp_customize->add_control( new Aneeq_info( $wp_customize, 'testimonial_section_info', array(
						'label' 	=> __('Testimonial', 'aneeq'),
						'section' 	=> 'aneeq_testimonial_settings',
						'settings' 	=> 'aneeq_title',
						'priority' 	=> 3,
						'active_callback' => 'aneeq_testimonial_callback',
					) 
				)
			);    
			
			$wp_customize->add_setting('aneeq_testimonial_image_1', array(
					'default' 			=> get_template_directory_uri() . '/images/img-small-4.jpg',
					'sanitize_callback' => 'esc_url_raw',
				)
			);
			$wp_customize->add_control(	new WP_Customize_Image_Control(	$wp_customize, 'aneeq_testimonial_image_1', array(
					   'label'          => __( 'Upload your image for the Testimonial', 'aneeq' ),
					   'type'           => 'image',
					   'section'        => 'aneeq_testimonial_settings',
					   'settings'       => 'aneeq_testimonial_image_1',
					   'priority'       => 4,
						'active_callback' => 'aneeq_testimonial_callback',
					)
				)
			);
			
			//Testimonial Description
			$wp_customize->add_setting('aneeq_testimonial_description', array(
					'default' 			=> esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s.','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_description', array(
					'label' 	=> __( 'Section Description', 'aneeq' ),
					'section' 	=> 'aneeq_testimonial_settings',
					'type' 		=> 'textarea',
					'priority' 	=> 6,
					'active_callback' => 'aneeq_testimonial_callback',
				)
			);
			
			//Client Title
			$wp_customize->add_setting('aneeq_testimonial_client_title', array(
					'default' 			=> esc_html('John Smith','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_client_title', array(
					'label' 	=> __( 'Client Title', 'aneeq' ),
					'section' 	=> 'aneeq_testimonial_settings',
					'type' 		=> 'text',
					'priority' 	=> 7,
					'active_callback' => 'aneeq_testimonial_callback',
				)
			);
			
			//Client Designation
			$wp_customize->add_setting('aneeq_testimonial_client_designation', array(
					'default' 			=> esc_html('Marketing Department','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
				)
			);
			$wp_customize->add_control('aneeq_testimonial_client_designation', array(
					'label' 	=> __( 'Designation', 'aneeq' ),
					'section' 	=> 'aneeq_testimonial_settings',
					'type' 		=> 'text',
					'priority' 	=> 8,
					'active_callback' => 'aneeq_testimonial_callback',
				)
			);
			
			//Client Designation
			$wp_customize->add_setting('aneeq_testimonial_client_link', array(
					'default' 			=> esc_html('','aneeq'),
					'sanitize_callback' => 'wp_kses_post'
			));
			$wp_customize->add_control('aneeq_testimonial_client_link', array(
				'label' 	=> __( 'Site Link', 'aneeq' ),
				'section' 	=> 'aneeq_testimonial_settings',
				'type' 		=> 'text',
				'priority' 	=> 9,
				'active_callback' => 'aneeq_testimonial_callback',
			));
			
			
			//testimonial Radio Button Show And Hide Funcion			
			function aneeq_testimonial_callback( $aneeq_testimonial_control ) {
				$aneeq_testimonial_radio_setting = $aneeq_testimonial_control->manager->get_setting('aneeq_testimonial_section')->value();
				$aneeq_testimonial_control_id = $aneeq_testimonial_control->id;
				//testimonial section
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_section_title'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_section_desc'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				//Testimonial 
				if ( $aneeq_testimonial_control_id == 'testimonial_section_info'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_image_1'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_description'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_client_title'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_client_designation'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
				if ( $aneeq_testimonial_control_id == 'aneeq_testimonial_client_link'  && $aneeq_testimonial_radio_setting == 'active' ) return true;
								
				return false;
			}
		//8. testimonial Settings Settings Start ======================================
			
		//9. Footer Settings Start ======================================
		$wp_customize->add_section( 'aneeq_footer_settings' , array(
				'title'      	=> __( 'Footer Settings', 'aneeq' ),
				'priority'      => 9,
				'panel'			=> 'aneeq_theme_options',
			) 
		);
			//Enable testimonial			
			$wp_customize->add_setting( 'aneeq_widgets_section', array(
					'default'      		=> 'active',
					'sanitize_callback' => 'aneeq_sanitize_radio'
				)
			);
			$wp_customize->add_control('aneeq_widgets_section', array(
					'type'      => 'radio',
					'label'     => __('Widgets Section', 'aneeq'),
					'section'   => 'aneeq_footer_settings',
					'settings'   => 'aneeq_widgets_section',
					'priority'  => 1,
					'choices'   => array(
						'active'       => __( 'Active', 'aneeq' ),
						'inactive'     => __( 'Inactive', 'aneeq' ),
					),
				)
			);
			
			
			//Footer Social Icons
			$wp_customize->add_setting( 'aneeq_footer_social_icons', array(
					'default'      		=> 'show',
					'sanitize_callback' => 'aneeq_sanitize_radio',
				)
			);
			$wp_customize->add_control('aneeq_footer_social_icons', array(
					'type'      => 'radio',
					'label'     => __('Footer Social Icons', 'aneeq'),
					'section'   => 'aneeq_footer_settings',
					'priority'  => 2,
					'choices'   => array(
						'show'      => __( 'Show', 'aneeq' ),
						'hide'      => __( 'Hide', 'aneeq' ),
					),
					'active_callback' => 'aneeq_footer_choice_callback',
				)
			);
			
			//Footer Column Layout
			$wp_customize->add_setting( 'aneeq_footer_column_layout', array(
					'default'      		=> '3',
					'sanitize_callback' => 'aneeq_sanitize_radio',
				)
			);
			$wp_customize->add_control('aneeq_footer_column_layout', array(
					'type'      => 'radio',
					'label'     => __('Footer Column Layout', 'aneeq'),
					'section'   => 'aneeq_footer_settings',
					'priority'  => 3,
					'choices'   => array(
						'1'   	 => __( 'One Column', 'aneeq' ),
						'2'      => __( 'Two Column', 'aneeq' ),
						'3'      => __( 'Three Column', 'aneeq' ),
						'4'      => __( 'Four Column', 'aneeq' ),
					),
					'active_callback' => 'aneeq_footer_choice_callback',
				)
			);
			
			
			function aneeq_footer_choice_callback( $aneeq_footer_control ) {
				$aneeq_footer_radio_setting = $aneeq_footer_control->manager->get_setting('aneeq_widgets_section')->value();
				$aneeq_footer_control_id = $aneeq_footer_control->id;
				 
				if ( $aneeq_footer_control_id == 'aneeq_footer_social_icons'  && $aneeq_footer_radio_setting == 'active' ) return true;
				if ( $aneeq_footer_control_id == 'aneeq_footer_column_layout'  && $aneeq_footer_radio_setting == 'active' ) return true;
				 
				return false;
			} 
		//9. Footer Settings End ======================================
			
}
add_action( 'customize_register', 'aneeq_customize_register' );

/**
	Sanitize
**/
//checkbox sanitization function
function aneeq_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return 0;
	}
}
     
//radio box sanitization function
function aneeq_sanitize_radio( $input, $setting ){
 
	//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key($input);

	//get the list of possible radio box options 
	$choices = $setting->manager->get_control( $setting->id )->choices;
					 
	//return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
	 
}

//select sanitization function
function aneeq_sanitize_select( $input, $setting ){
 
	//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	$input = sanitize_key($input);

	//get the list of possible select options 
	$choices = $setting->manager->get_control( $setting->id )->choices;
					 
	//return input if valid or return default option
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
	 
}

?>