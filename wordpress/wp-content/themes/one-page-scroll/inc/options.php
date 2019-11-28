<?php

function onepagescroll_library_options() {
	
	$os_faces = array(
       'Open Sans, sans-serif' => 'Open Sans',
      'Arial, sans-serif' => 'Arial',

      '"Avant Garde", sans-serif' => 'Avant Garde',

      'Cambria, Georgia, serif' => 'Cambria',

      'Copse, sans-serif' => 'Copse',

      'Garamond, "Hoefler Text", Times New Roman, Times, serif' => 'Garamond',

      'Georgia, serif' => 'Georgia',

      '"Helvetica Neue", Helvetica, sans-serif' => 'Helvetica Neue',

      'Tahoma, Geneva, sans-serif' => 'Tahoma'

  );
  for($i=9;$i<=70;$i++){
 	 $font_size[$i.'px'] = $i.'px';
  }

	// Theme defaults
	$primary_color = '#5bc08c';
	$secondary_color = '#666';
	// Stores all the controls that will be added
	$options = array();
	// Stores all the sections to be added
	$sections = array();
	// Stores all the panels to be added
	$panels = array();
	
	// Adds the sections to the $options array
	$options['sections'] = $sections;
	
	$section = 'basic-setting';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'OPS: Basic Settings', 'one-page-scroll' ),
		'priority' => '6',
		'description' => '',
		'panel' => ''
	);
	
	$options['logo'] = array(
		'id' => 'logo',
		'label'   => __( 'Upload Logo', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);
	
	$options['home_logo'] = array(
		'id' => 'home_logo',
		'label'   => __( 'Upload Home Page Logo', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);
	
	$options['custom_css'] = array(
		'id' => 'custom_css',
		'label'   => __( 'Custom CSS', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'code',
		'default' => ''
	);
	
	$options['tracking_code'] = array(
		'id' => 'tracking_code',
		'label'   => __( 'Tracking Code', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'code',
		'default' => ''
	);
	
	$panel = 'home-page';
	$panels[] = array(
		'id' => $panel,
		'title' => __( 'OPS: Home Page Settings', 'one-page-scroll' ),
		'priority' => '10'
	);
	
	$section = 'home-page-general';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'General Options', 'one-page-scroll' ),
		'priority' => '10',
		'description' => '',
		'panel' => $panel
	);
	
	$section_num =  4 ;
	$video_background_section = array('0'=>__('No video background', 'one-page-scroll'));
		if( is_numeric( $section_num ) ){
		for($i=1; $i <= $section_num; $i++){
			$video_background_section[$i] = sprintf(__('Section %d','one-page-scroll'),$i);
			}
		}
		
	
	$options['scrollspeed'] = array(
		'id' => 'scrollspeed',
		'label'   => __( 'Front Page Scrolling Delay', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '750'
	);
	$options['section_order'] = array(
		'id' => 'section_order',
		'label'    => __('Section Order', 'one-page-scroll' ),
		'section'  => $section,
		'type'     => 'textarea',
		'priority' => 16,
		'default'  => '{"0":"0","1":"1","2":"2","3":"3"}',
	 );
	
	$section = 'home-page-html5-video';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'HTML5 Video Background Options', 'one-page-scroll' ),
		'priority' => '10',
		'description' => '',
		'panel' => $panel
	);
	
	$options['mp4_video_url'] = array(
		'id' => 'mp4_video_url',
		'label'   => __( 'MP4 Video URL', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'text',
		'default' => ''
	);
	
	$options['ogv_video_url'] = array(
		'id' => 'ogv_video_url',
		'label'   => __( 'OGV Video URL', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'text',
		'default' => ''
	);
	$options['webm_video_url'] = array(
		'id' => 'webm_video_url',
		'label'   => __( 'WEBM Video URL', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'text',
		'default' => ''
	);
	
	$options['poster_url'] = array(
		'id' => 'poster_url',
		'label'   => __( 'Poster', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'image',
		'default' => ''
	);
	
	$options['video_loop'] = array(
		'id' => 'video_loop',
		'label'   => __( 'Video Loop', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => '1'
	);
	
	$options['autoplay'] = array(
		'id' => 'autoplay',
		'label'   => __( 'Autoplay', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => '1'
	);
	
	$options['video_volume'] = array(
		'id' => 'video_volume',
		'label'   => __( 'Video Volume', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => array('0.001'=>'0','0.1'=>'0.1','0.2'=>'0.2','0.3'=>'0.3','0.4'=>'0.4','0.5'=>'0.5','0.6'=>'0.6','0.7'=>'0.7','0.8'=>'0.8','0.9'=>'0.9','1.0'=>'1.0'),
		'default' => '0.8'
	);
	
	$options['video_background_section'] = array(
		'id' => 'video_background_section',
		'label'   => __( 'Video Background Section', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'select',
		'choices' => $video_background_section,
		'default' => '1'
	);
	
	$section = 'home-page-sidebar';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Home Page & Blog Sidebar Menu options', 'one-page-scroll' ),
		'priority' => '10',
		'description' => '',
		'panel' => $panel
	);
	
	$options['sidebar_width'] = array(
		'id' => 'sidebar_width',
		'label'   => __( 'Sidebar Width', 'one-page-scroll' ),
		'section' => $section,
		'type'    => 'text',
		'default' => '280'
	);
	
	$options['menu_status_desktop'] = array(	
		'label' => __('Menu Status ( Desktop )', 'one-page-scroll'),
		'id' => 'menu_status_desktop',
		'default' => 'open',
		'section' => $section,
		'choices' => array('open'=>__( 'Open', 'one-page-scroll' ),'close'=>__( 'Close', 'one-page-scroll' )),
		'type' => 'radio'
		);

	$options['menu_status_tablet'] = array(
		'label' => __('Menu Status ( Tablet )', 'one-page-scroll'),
		'id' => 'menu_status_tablet',
		'default' => 'close',
		'section' => $section,
		'choices' => array('open'=>__( 'Open', 'one-page-scroll' ),'close'=>__( 'Close', 'one-page-scroll' )),
		'type' => 'radio'
		);

	$options['menu_status_mobile'] = array(
		'label' => __('Menu Status ( Mobile )', 'one-page-scroll'),
		'id' => 'menu_status_mobile',
		'section' => $section,
		'default' => 'close',
		'choices' => array('open'=>__( 'Open', 'one-page-scroll' ),'close'=>__( 'Close', 'one-page-scroll' )),
		'type' => 'radio'
		);
	
	$section_id                 = array("section-one","section-two","section-three","section-four");
	$section_content_color      = array("#ffffff","#ffffff","#ffffff","#ffffff");
	$section_css_class          = array("","","","");
	 
	$section_title     = array(
							 'Start a Magical Web Design Journey',
							 "Rationes ad Elige HooThemes",
							 "Hec igitur omnia et dux free online elit",
							 "SECTION FOUR"
							 );
	 $section_sub_title = array(
								 'Impressive Design & Responsive Layout',
								 '',
								 '',
								 ''
								 );
	 $section_content   = array(
								 'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Integer sed magna vel velit dignissim luctus eu n urna. Dapibus ege-stas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.<br><div class="section-title">EXILIO A prandio MAGUS WEB Design</div><div class="center">
<a href="#section-two" target="_self" rel="nofollow"><button>View our Themes</button></a></div>',
								 '<ul>
          <li>
            <h4>Impressive Design</h4>
            <ul>
              <li>
                <h3>HTML/CSS Design</h3>
                Elegans Lorem Ratio amoena, fons et oculorum captans iconibus conferre haec omnia melius consilium vestri website.
              </li>
              <li>
                <h5>Web Design</h5>
                Hic ex nostra Customers / Clients
              </li>
              <li>
                <h5>PHP Coding</h5>
               Sit at Quid aiunt argumenta nostra
              </li>
            </ul>
          </li>
          <li>
            <h4>SEO</h4>
            <ul>
              <li>
                <h5>Sed efficaciae Pane</h5>
               Dat tibi nostra propositum, potestatem vestri website
              </li>
              <li>
                <h5>Lorem ipsum dolor</h5>
                Tendimus omnes lemma pasco penitus popularis esse compatitur etiam Rimor VIII, IX, X, Aluminium, Incendia, Safari etc.
              </li>
            </ul>
          </li>
          
        </ul>',
		'<div class=" col-sm-6 col-md-4 ">
  <div class="text-center "><i class="fa fa-pie-chart fa-5x"> </i>
    <h3>FEATURE ONE</h3>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscingelit. Integer sed magna vel velit dignissim luctus eu n urna. Dapibus ege-stas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.</p>
      <a href="http://">Read More&gt;&gt;</a></div>
  </div>
  <div class="clear"></div>
</div>
<div class="col-sm-6 col-md-4 ">
  <div class="text-center "><i class="fa fa-line-chart fa-5x"> </i>
    <h3>FEATURE TWO</h3>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscingelit. Integer sed magna vel velit dignissim luctus eu n urna. Dapibus ege-stas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.</p>
      <a href="http://">Read More&gt;&gt;</a></div>
  </div>
  <div class="clear"></div>
</div>
<div class="col-sm-6 col-md-4 ">
  <div class="text-center "><i class="fa fa-comments-o fa-5x"> </i>
    <h3>FEATURE THREE</h3>
    <div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscingelit. Integer sed magna vel velit dignissim luctus eu n urna. Dapibus ege-stas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.</p>
      <a href="http://">Read More&gt;&gt;</a></div>
  </div>
  <div class="clear"></div>
</div>
',
'Lorem ipsum dolor sit amet, consectetur adipiscingelit. Integer sed magna vel velit dignissim luctus eu n urna. Dapibus ege-stas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.'
								 
 );
 $section_background = array(
	     array(
		'color' => '#ffcc33',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top left',
		'attachment'=>'fixed' ),
		 array(
		'color' => '#1ed87d',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top left',
		'attachment'=>'fixed' ),
		 array(
		'color' => '#ff415c',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top left',
		'attachment'=>'fixed' ),
		 array(
		'color' => '#178cc6',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top left',
		'attachment'=>'fixed' )
		 );
	
	$panel = 'home-page-sections';
	$panels[] = array(
		'id' => $panel,
		'title' => __( 'OPS: Home Page Sections', 'one-page-scroll' ),
		'priority' => '10'
	);
	
	$section_num = absint(onepagescroll_get_option_saved( 'section_num'));
	$hide        = '';
	
	$sections_order = onepagescroll_get_sections(array(0,1,2,3));
	foreach( $sections_order as $key=>$i ){
		
		if( $section_num!='' && is_numeric($section_num) && $i>=$section_num )
			$hide = '1';
		
		$section = 'home-page-section-'.$i;
		$sections[] = array(
			'id' => $section,
			'title' => sprintf(__( 'Home Section %s', 'one-page-scroll' ),($i+1)),
			'priority' => '10',
			'description' => '',
			'panel' => $panel
		);
		
		$options['section_hide_'.$i.''] = array(
			'id' => 'section_hide_'.$i.'',
			'label'   => __( 'Hide Section', 'one-page-scroll' ),
			'section' => $section,
			'type'    => 'checkbox',
			'default' => $hide
		);
	
		$options['section_id_'.$i.''] = array(
			'label' => __('Section ID', 'one-page-scroll'),
			'id' => 'section_id_'.$i.'',
			'type' => 'text',
			'default'=>$section_id[$i],
			'section' => $section,
			'description'=> __('Add anchor tag to jump to specific section on one page without having any space or symbol. This section id will be related with the menu link, it should be call on wp appearance menu by using # after site url. It is usually all lowercase and contains only letters, numbers, and hyphens.', 'one-page-scroll'),
			);
		
		$options['section_title_'.$i.''] = array(
			'label' => __('Section Title', 'one-page-scroll'),
			'id' => 'section_title_'.$i.'',
			'type' => 'text',
			'section' => $section,
			'default'=>$section_title[$i],
			);
			
		$options['section_sub_title_'.$i.''] = array(
			'label' => __('Section Sub-Title', 'one-page-scroll'),
			'id' => 'section_sub_title_'.$i.'',
			'type' => 'text',
			'section' => $section,
			'default'=>$section_sub_title[$i],
			);
		
	   $options['section_css_class_'.$i.''] = array(
	   		'label' => __('Section Css Class', 'one-page-scroll'),
			'id' => 'section_css_class_'.$i.'',
			'type' => 'text',
			'section' => $section,
			'default'=>$section_css_class[$i],
			);
	   
	   $options['section_content_'.$i.''] = array(
	   		'label' => __('Section Content', 'one-page-scroll'),
			'id' => 'section_content_'.$i.'',
			'default' => $section_content[$i],
			'section' => $section,
			'type' => 'hoo-editor',
			'description'=> '',
			);
			
		// section title typography
		$title_typography_old = onepagescroll_get_option_saved('section_title_typography_'.$i);
		$title_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '24px',
			'color' => '#333333',
			'text-align'     => 'left',
		);
		if(!empty($title_typography_old))
			$title_typography = array(
			'font-family' => $title_typography_old['face'],
			'font-size' => $title_typography_old['size'],
			'color' => $title_typography_old['color'],
			'text-align' => 'left',
		);
			
		$options['section_title_typography1_'.$i] = array(
			'label' => __('Section Title Typography', 'one-page-scroll'),
			'id' => 'section_title_typography1_'.$i,
			'type' => 'typography',
			'section' => $section,
			'default'  => $title_typography,
			'output' => array(
								array(
									'element' => 'body section.onepagescroll-section-'.$i.' .section-title h3',
										),
								),
			);
			
		// subtitle typography
		$title_sub_typography_old = onepagescroll_get_option_saved('section_sub_title_typography_'.$i);
		$title_sub_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '30px',
			'color' => '#ffffff',
			'text-align' => 'left',
		);
		if(!empty($title_typography_old))
			$title_sub_typography = array(
			'font-family' => $title_sub_typography_old['face'],
			'font-size' => $title_sub_typography_old['size'],
			'color' => $title_sub_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['section_sub_title_typography1_'.$i] = array(
			'label' => __('Section Subtitle Typography', 'one-page-scroll'),
			'id' => 'section_sub_title_typography1_'.$i,
			'type' => 'typography',
			'section' => $section,
			'default'  => $title_sub_typography,
			'output' => array(
								array(
									'element' => 'body section.onepagescroll-section-'.$i.' h4.section-sub-title',
										),
								),
			);
			
		// section content typography
		$content_typography_old = onepagescroll_get_option_saved('section_content_typography_'.$i);
		$content_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '16px',
			'color' => '#ffffff',
			'text-align' => 'left',
		);
		if(!empty($content_typography_old))
			$content_typography = array(
			'font-family' => $content_typography_old['face'],
			'font-size' => $content_typography_old['size'],
			'color' => $content_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['section_content_typography1_'.$i] = array(
			'label' => __('Section Content Typography', 'one-page-scroll'),
			'id' => 'section_content_typography1_'.$i,
			'type' => 'typography',
			'section' => $section,
			'default'  => $content_typography,
			'output' => array(
								array(
									'element' => 'body section.onepagescroll-section-'.$i.' .section-content,body section.onepagescroll-section-'.$i.' .section-content p,body section.onepagescroll-section-'.$i.' .section-content a',
										),
								),
			);
		
		
		$options['section_background1_'.$i] = array(
			'label' =>  __('Section Background', 'one-page-scroll'),
			'id' => 'section_background1_'.$i,
			'section' => $section,
			'type' => 'background',
			'default'     => array(
				'background-color'      => $section_background[$i]['color'],
				'background-image'      => $section_background[$i]['image'],
				'background-repeat'     => 'repeat',
				'background-position'   => 'center center',
				'background-size'       => 'cover',
				'background-attachment' => 'scroll',
			),
			'output' => array(
								array(
									'element' => 'body section.onepagescroll-section-'.$i.'',
										),
								),
			'js_vars' => array(
								array(
									'element' => 'body section.onepagescroll-section-'.$i.'',
										),
								),
			 );
			 
	}
	
	// footer
	$section = 'sidebar';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'OPS: Sidebar', 'one-page-scroll' ),
		'priority' => '10'
	);
	
	$options['page_layout'] = array(
			'label' => __('Page Sidebar', 'one-page-scroll'),
			'id' => 'page_layout',
			'type' => 'select',
			'section' => $section,
			'default'=> 'full-width',
			'choices' => array(
						'full-width'=>__('No Sidebar', 'one-page-scroll'),
						'left-sidebar'=>__('Left Sidebar', 'one-page-scroll'),
						'right-sidebar'=>__('Right Sidebar', 'one-page-scroll'),
						)
			);
		
		$options['post_layout'] = array(
			'label' => __('Post Sidebar', 'one-page-scroll'),
			'id' => 'post_layout',
			'type' => 'select',
			'section' => $section,
			'default'=> 'full-width',
			'choices' => array(
						'full-width'=>__('No Sidebar', 'one-page-scroll'),
						'left-sidebar'=>__('Left Sidebar', 'one-page-scroll'),
						'right-sidebar'=>__('Right Sidebar', 'one-page-scroll'),
						)
			);
	
	
	// footer
	$section = 'footer';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'OPS: Footer', 'one-page-scroll' ),
		'priority' => '10'
	);
	for($i=0;$i<9;$i++){
			
	    $options['social_icon_'.$i.''] = array(
			"label" => sprintf(__('Social Icon #%s', 'one-page-scroll'),($i+1)),
			"id" => 'social_icon_'.$i.'',
			"default" => "",
			'description'=> esc_attr__( 'Get social icon string from https://fontawesome.com/v4.7.0/icons/, e.g. facebook.', 'one-page-scroll' ),
			"type" => "text",
			'section' => $section,
			);
		$options['social_title_'.$i.''] = array(
			'label' => sprintf(__('Social Title #%s', 'one-page-scroll'),($i+1)),
			'id' => 'social_title_'.$i.'',
			'section' => $section,
			'type' => 'text'
			);	
		$options['social_link_'.$i.''] = array(
			'label' => sprintf(__('Social Link #%s', 'one-page-scroll'),($i+1)),
			'id' => 'social_link_'.$i.'',
			'section' => $section,
			'type' => 'link'
			);	
		}
	
	  $options['copyright'] = array(
	 	'label' => __('Copyright', 'one-page-scroll'),
		'description' => __('Copyright text.', 'one-page-scroll'),
		'id' => 'copyright',
		'default' => 'Copyright &copy; '.date('Y').', Designed by <a href="'.esc_url("http://www.hoothemes.com/").'">HooThemes</a>.',
		'section' => $section,
		'type' => 'editor'
		);
	
	//Typography
	$section = 'typography';
	$sections[] = array(
		'id' => $section,
		'title' => __( 'OPS: Typography', 'one-page-scroll' ),
		'priority' => '10'
	);
	
	$options['content_link_color'] = array(
			'label' =>  __('Content Link Color', 'one-page-scroll'),
			'id' => 'content_link_color',
			'default' => '#a29c9a',
			'section' => $section,
			'type' => 'color',
		);
	
	$options['content_link_hover_color'] = array(
			'label' =>  __('Content Link Hover Color', 'one-page-scroll'),
			'id' => 'content_link_hover_color',
			'default' => '#fe8a02',
			'section' => $section,
			'type' => 'color',
		);
	
	// page menu typography
		$page_menu_typography_old = onepagescroll_get_option_saved('page_menu_typography');
		$page_menu_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '14px',
			'color' => '#c2d5eb',
			'text-align' => 'left',
		);
		if(!empty($page_menu_typography_old))
			$page_menu_typography = array(
			'font-family' => $page_menu_typography_old['face'],
			'font-size' => $page_menu_typography_old['size'],
			'color' => $page_menu_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['page_menu_typography1'] = array(
			'label' => __('Page Menu Typography', 'one-page-scroll'),
			'id' => 'page_menu_typography1',
			'type' => 'typography',
			'section' => $section,
			'default'  => $page_menu_typography,
			'output' => array(
								array(
									'element' => '.page  .site-nav > ul > li > a',
										),
								),
			);
			

		$options['home_nav_menu_hover_color'] = array(
			'label' =>  __('Page Menu Active Color', 'one-page-scroll'),
			'id' => 'home_nav_menu_hover_color',
			'default' => '#ffffff',
			'section' => $section,
			'type' => 'color',
		);
		
		
		// Blog Menu Typography
		
		$blog_menu_typography_old = onepagescroll_get_option_saved('blog_menu_typography');
		$blog_menu_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '14px',
			'color' => '#666666',
			'text-align' => 'left',
		);
		if(!empty($blog_menu_typography_old))
			$blog_menu_typography = array(
			'font-family' => $blog_menu_typography_old['face'],
			'font-size' => $blog_menu_typography_old['size'],
			'color' => $blog_menu_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['blog_menu_typography1'] = array(
			'label' => __('Blog Menu Typography', 'one-page-scroll'),
			'id' => 'blog_menu_typography1',
			'type' => 'typography',
			'section' => $section,
			'default'  => $blog_menu_typography,
			'output' => array(
								array(
									'element' => '.blog header .site-nav > ul > li > a',
										),
								),
			);
			
			
		$options['blog_menu_hover_color'] = array(
			'label' =>  __('Blog Menu Active Color', 'one-page-scroll'),
			'id' => 'blog_menu_hover_color',
			'default' => '#d54e21',
			'section' => $section,
			'type' => 'color',
		);
		
		
		//Homepage Side Nav Menu Typography
		$homepage_side_nav_menu_typography_old = onepagescroll_get_option_saved('homepage_side_nav_menu_typography');
		$homepage_side_nav_menu_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '13px',
			'color' => '#555555',
			'text-align' => 'left',
		);
		if(!empty($homepage_side_nav_menu_typography_old))
			$homepage_side_nav_menu_typography = array(
			'font-family' => $homepage_side_nav_menu_typography_old['face'],
			'font-size' => $homepage_side_nav_menu_typography_old['size'],
			'color' => $homepage_side_nav_menu_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['homepage_side_nav_menu_typography1'] = array(
			'label' => __('Homepage Side Nav Menu Typography', 'one-page-scroll'),
			'id' => 'homepage_side_nav_menu_typography1',
			'type' => 'typography',
			'section' => $section,
			'default'  => $homepage_side_nav_menu_typography,
			'output' => array(
								array(
									'element' => '.home ul.home_page_sidebar_menu > li > a',
										),
								),
			);
			
		$options['homepage_side_nav_menu_typography][size'] = array(
			'label' => __('Homepage Side Nav Menu Font Size', 'one-page-scroll'),
			'id' => 'homepage_side_nav_menu_typography][size',
			'type' => 'text',
			'section' => $section,
			'default'=> '14px',
			'choices' => $font_size
			);
		
		$options['homepage_side_nav_menu_typography][face'] = array(
			'label' => __('Homepage Side Nav Menu Font Family', 'one-page-scroll'),
			'id' => 'homepage_side_nav_menu_typography][face',
			'type' => 'select',
			'section' => $section,
			'default'=> 'Open Sans, sans-serif',
			'choices' => $os_faces
			);
		
		$options['homepage_side_nav_menu_typography][color'] = array(
			'label' => __('Homepage Side Nav Menu Font Color', 'one-page-scroll'),
			'id' => 'homepage_side_nav_menu_typography][color',
			'type' => 'color',
			'section' => $section,
			'default'=> '#666666',
			);
			
		$options['home_side_nav_menu_active_color'] = array(
			'label' =>  __('Side Nav Menu Active Color', 'one-page-scroll'),
			'id' => 'home_side_nav_menu_active_color',
			'default' => '#ffcc33',
			'section' => $section,
			'type' => 'color',
		);
		
		//Page & post content Typography
		
		$page_post_content_typography_old = onepagescroll_get_option_saved('page_post_content_typography');
		$page_post_content_typography = array(
			'font-family' => 'Open Sans, sans-serif',
			'font-size' => '13px',
			'color' => '#555555',
			'text-align' => 'left',
		);
		if(!empty($page_post_content_typography_old))
			$page_post_content_typography = array(
			'font-family' => $page_post_content_typography_old['face'],
			'font-size' => $page_post_content_typography_old['size'],
			'color' => $page_post_content_typography_old['color'],
			'text-align'     => 'left',
		);
			
		$options['page_post_content_typography1'] = array(
			'label' => __('Pages & Posts Content Typography', 'one-page-scroll'),
			'id' => 'page_post_content_typography1',
			'type' => 'typography',
			'section' => $section,
			'default'  => $page_post_content_typography,
			'output' => array(
								array(
									'element' => '.entry-content',
										),
								),
			);
			
	$return = array( 'options' => $options, 'sections' => $sections, 'panels' => $panels );
	return $return;
}

$option_name = onepagescroll_option_name();

$options = onepagescroll_library_options();
Kirki::add_config( $option_name, array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'option',
	'option_name'   => $option_name
) );
	
$p = 10;
foreach( $options['panels'] as $panel ){
	
	Kirki::add_panel( $panel['id'], array(
    	'priority'    => $p,
		'title'       => $panel['title'],
		'description' => '',
	) );
	$p++;
}
	
$s = 10;
foreach( $options['sections'] as $section ){
	
	Kirki::add_section( $section['id'], array(
		'title'          => $section['title'],
		'description'    => '',
		'panel'          => isset($section['panel'])?$section['panel']:'',
		'priority'       => $s,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	) );
		$s++;
}

$o = 10;
foreach( $options['options'] as $key=>$option ){
	if(!empty($option)){
		Kirki::add_field( $option_name, array(
		'type'     => $option['type'],
		'settings' => $option['id'],
		'label'    => $option['label'],
		'description' => isset($option['description'])?$option['description']:'',
		'section'  => $option['section'],
		'default'  => isset($option['default'])?$option['default']:'',
		'priority' => $o,
		'transport' => isset($option['transport'])?$option['transport']:'refresh',
		'choices' => isset($option['choices'])?$option['choices']:'',
		'output' => isset($option['output'])?$option['output']:'',
		'output' => isset($option['output'])?$option['output']:'',
		'js_vars' => isset($option['js_vars'])?$option['js_vars']:'',
		) );
		$o++;
	}
}