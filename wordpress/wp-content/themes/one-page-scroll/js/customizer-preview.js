( function( $ ) {
	
	$(document).ready(function(e) {
        var winWidth = $(window).width();

		if(winWidth>721){
			
			$(".sidebar.desktop-open").removeClass("hide-sidebar");
			$(".sidebar.desktop-close").addClass("hide-sidebar");
			$('section.content_wrap.content-desktop-open').css({'margin-left':ops_customizer_params.sidebar_width+"px" });
			$('section.content_wrap.content-desktop-close').css({'margin-left':"0" });
		
		}
	
		if(winWidth>320 && winWidth<721){
			
			$(".sidebar.tablet-open").removeClass("hide-sidebar");
			$(".sidebar.tablet-close").addClass("hide-sidebar");
			$('section.content_wrap.content-tablet-open').css({'margin-left':ops_customizer_params.sidebar_width+"px" });
			$('section.content_wrap.content-tablet-close').css({'margin-left':"0" });
		
		}
		
		if( winWidth<=320){
			
			$(".sidebar.mobile-open").removeClass("hide-sidebar");
			$(".sidebar.mobile-close").addClass("hide-sidebar");
			$('section.content_wrap.content-mobile-open').css({'margin-left':ops_customizer_params.sidebar_width+"px" });
			$('section.content_wrap.content-mobile-close').css({'margin-left':"0" });
		
		}
		
		
	var onepagescroll_customizer_section_scroll = function ( $ ) {
    'use strict';
    $( function () {
        var customize = wp.customize;

        customize.preview.bind( 'clicked-customizer-section', function( data ) {
			data = data.replace('sub-accordion-section-home-page-section-','');
            var sectionId = '';
            switch (data) {
				case '0':
                    sectionId = 'section.onepagescroll-section-0';
                    break;
               case '1':
                    sectionId = 'section.onepagescroll-section-1';
                    break;
				case '2':
                    sectionId = 'section.onepagescroll-section-2';
                    break;
				case '3':
                    sectionId = 'section.onepagescroll-section-3';
                    break;
                default:
                    sectionId = 'section.onepagescroll-section-' + data;
                    break;
            }
            if ( $(sectionId).length > 0) {
                $('html, body').animate({
                    scrollTop: $(sectionId).offset().top
                }, 1000);
            }
        } );
    } );
};

onepagescroll_customizer_section_scroll( jQuery );
	
	
    });

		
} )( jQuery );
