<?php
	$menu_status_desktop     = esc_attr(onepagescroll_get_option( 'menu_status_desktop' ));
	$menu_status_tablet      = esc_attr(onepagescroll_get_option( 'menu_status_tablet' ));
	$menu_status_mobile      = esc_attr(onepagescroll_get_option( 'menu_status_mobile' ));
?>
<div class="main_wrap">
  <section class="home-header">
  <?php if ( has_nav_menu( 'home_page_main_menu' ) ) : ?>
    <nav class="site-nav main-menu navbar-nav" id="navbar-collapse" role="navigation">
      <?php wp_nav_menu(array('theme_location'=>'home_page_main_menu','container'=>'','container_class'=>'main-menu','menu_id'=>'menu-main','menu_class'=>'main-nav','link_before' => '<span>', 'link_after' => '</span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));?>
    </nav>
    <?php endif;?>
  </section>
  <section class="sidebar visible sidebar_collapse hide-sidebar desktop-<?php echo $menu_status_desktop;?> tablet-<?php echo $menu_status_tablet;?> mobile-<?php echo $menu_status_mobile;?>">
    <section id="panel-cog"> <i class="fa fa-bars"></i> </section>
    <div class="logo-container">
      <?php 
	  $custom_logo_id = get_theme_mod('custom_logo');
	  $image          = wp_get_attachment_image_src($custom_logo_id , 'full');
	  $logo           = $image[0];
	  if ( $logo != "" ) { ?>
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($logo); ?>" class="site-logo" alt="<?php bloginfo('name'); ?>" /></a>
      <?php 
		} else{
			?>
      <div class="name-box"> <a href="<?php echo esc_url(home_url('/')); ?>">
        <h2 id="site-title" class="site-title">
          <?php bloginfo('name'); ?>
        </h2>
        </a> <span class="site-description">
        <?php  bloginfo('description');?>
        </span>
        <div class="close-menu hide"><i class="fa fa-bars"></i></div>
      </div>
      <?php }?>
    </div>
    <?php
	$allowedposttags = wp_kses_allowed_html( 'post' );
	$sectionNum      = 4;
	$video_background_section    = absint(onepagescroll_get_option('video_background_section'));
	$mp4_video_url   = esc_url(onepagescroll_get_option( 'mp4_video_url' ));
	$ogv_video_url   = esc_url(onepagescroll_get_option( 'ogv_video_url' ));
	$webm_video_url  = esc_url(onepagescroll_get_option( 'webm_video_url' ));
	$poster_url      = esc_url( onepagescroll_get_option( 'poster_url' ));
	$video_loop      = absint(onepagescroll_get_option( 'video_loop' ));
	$video_volume    = esc_attr(onepagescroll_get_option( 'video_volume'));
	$default_volum   = absint(onepagescroll_get_option('default_volum'));
	$autoplay        = absint(onepagescroll_get_option('autoplay'));
	
	?>
    
     <?php if ( has_nav_menu( 'home_page_sidebar_menu' ) ) : ?>
    <nav id="main_nav" class="main_nav">
      <?php
	   wp_nav_menu(array('theme_location'=>'home_page_sidebar_menu','depth'=>3,'container'=>'','menu_id'=>'home_page_sidebar_menu','menu_class'=>'home_page_sidebar_menu','link_before' => '', 'link_after' => '<span></span>','items_wrap'=> '<ul id="%1$s" class="%2$s">%3$s</ul>'));

?>
    </nav>
     <?php endif;?>
    <div class="side-footer side-footer-collapse">
      <ul class="socialmedia">
        <?php 
				
				for($i=0;$i<9; $i++){
					$social_icon  = onepagescroll_get_option('social_icon_'.$i);
					$social_link  = onepagescroll_get_option('social_link_'.$i);
					$social_title = onepagescroll_get_option('social_title_'.$i);
					$social_icon  = str_replace('fa-','',$social_icon);
					if($social_icon !=""){
					echo '<li><a href="'.esc_url($social_link).'" target="_blank" data-toggle="tooltip" title="'.esc_attr($social_title).'"><i class="fa fa-2x fa-'.esc_attr($social_icon).'"></i></a></li>';
					}
					}
					?>
      </ul>
      <div class="copyright">&copy; <?php echo date("Y");?>, <?php printf(__('Designed by <a href="%s">HooThemes</a>.','one-page-scroll'),esc_url('http://www.hoothemes.com/'));?></div>
    </div>
  </section>
  <!--- sidebar ends -->
  <section class="content_wrap homepage_content_wrap content-desktop-<?php echo $menu_status_desktop;?> content-tablet-<?php echo $menu_status_tablet;?> content-mobile-<?php echo $menu_status_mobile;?>" style=" margin-left:0;">
    <section class="header-image">
      <?php get_custom_header_markup();?>
    </section>
<?php
	$sections = onepagescroll_get_sections(array(0,1,2,3));

	if( is_array( $sections ) ) { 
		foreach( $sections as $key=>$i ){
				
				$hide =  absint( onepagescroll_get_option('section_hide_'.$i) );
				
				if($hide=='1')
					continue;
				
				$title        =  esc_attr( onepagescroll_get_option('section_title_'.$i));
				$sub_title    =  esc_attr( onepagescroll_get_option('section_sub_title_'.$i));
				$class        =  esc_attr( onepagescroll_get_option('section_css_class_'.$i));
				$content	  =  onepagescroll_get_option('section_content_'.$i);
				$menu_id      =  esc_attr( onepagescroll_get_option('section_id_'.$i ) );
				
				if( $menu_id =='' )
				  $menu_id    =  'section-'.($i+1);
				  
			// video background
			$background_video = '';
			$play_button      = '';
			if( $video_background_section > 0 && $video_background_section == ($i+1) ){
					
					
			if( $video_loop == 1 ){
				$video_loop = "true";
			}else{
				$video_loop = "false";	
			}
			$class .= " section-video-background";
			$background_video   = array("mp4_video_url"=>$mp4_video_url,"webm_video_url"=>$webm_video_url,"ogv_video_url"=>$ogv_video_url,"loop"=>$video_loop,"volume"=>$video_volume,"poster_url"=>$poster_url,"container"=>'.onepagescroll-section-'.$i,"volume"=>$video_volume,"autoplay"=>$autoplay);
			wp_localize_script( 'jquery-videobackground', 'background_video',$background_video);
			$background = "";
			$play_button     = '<span class="play-video hide"><i class="fa fa-play-circle"></i></span>';  
			
					}
				?>
    <section id="<?php echo $menu_id;?>" class="section onepagescroll-section-<?php echo $i;?> section-<?php echo $menu_id;?> <?php echo $class;?>">
      <div class="section-content-wrap">
        <div class="section-title">
          <?php if ( $title !='' ): ?>
          <h3><?php echo $title;?></h3>
          <?php endif; ?>
          <?php if ( $sub_title !='' ): ?>
          <h4 class="section-sub-title"><?php echo $sub_title;?></h4>
          <?php endif; ?>
        </div>
        <div class="section-content"> <?php echo do_shortcode( wp_kses( $content , $allowedposttags ) );?>
          <div class="clear"></div>
        </div>
      </div>
      <?php echo $play_button;?> </section>
    <?php } }?>
  </section>
  <!--- content_wrap ends --> 
</div>
