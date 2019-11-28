jQuery(document).ready(function($){
	var customize = wp.customize;
	var ops_menu_status = function(device){
		
		var menu_status = $('select[data-customize-setting-link="one_page_scroll[menu_status_'+device+']"]').val();

		iframe = $("#customize-preview iframe").contents();
		iframe.find('body').addClass('ops-preview-'+device);
		
		if (  menu_status !='close' ) {
			iframe.find(".sidebar").removeClass("hide-sidebar").removeClass(device+'-close').addClass(device+'-open');
			iframe.find('section.content_wrap').css({'margin-left':ops_customizer_params.sidebar_width+"px" });
		}
		 
		if (  menu_status =='close' ) {
			iframe.find(".sidebar").addClass("hide-sidebar").removeClass(device+'-open').addClass(device+'-close');
			iframe.contents().find('section.content_wrap').css({'margin-left':"0" });
		}
		console.log(iframe.find(".sidebar").attr('class'));
	}
		
	$(document).on('click', '.devices button', function(){
		
		var device = $(this).data('device');
		ops_menu_status(device);
	
   });

	
	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title' ).text( to );
		} );
	} );

	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );
	
	$('#sub-accordion-panel-home-page-sections > li.control-section > .accordion-section-title').append('<i class="fa fa-arrows">&nbsp;</i>');
	
	var sections_container = $('#sub-accordion-panel-home-page-sections');
		
    update_order();
    sections_container.sortable({
        axis: 'y',
        items: '> li[id^="accordion-section-home-page"]',
        handle: '> h3',
        update: function(){
			
            update_order();
        },
        helper : 'clone',
        placeholder: 'ui-state-highlight'
    });

    function update_order(){
        var values = {};
        var idsInOrder = sections_container.sortable({
            axis: 'y',
            items: '> li[id^="accordion-section-home-page"]',
            handle: '> h3',
            helper : 'clone',
            placeholder: 'ui-state-highlight'
        });
        var sections = idsInOrder.sortable('toArray');
		
        for(var i = 0; i < sections.length; i++){
            var section_id =  sections[i].replace('accordion-section-home-page-section-','');
            values[i] = section_id;
        }
		
        var data_to_send = JSON.stringify(values);

		customize.instance('one_page_scroll[section_order]').set(data_to_send)
        customize.instance('one_page_scroll[section_order]').previewer.refresh();

    }
	
	var onepagescroll_customize_scroller = function ( $ ) {
    'use strict';

    $( function () {
        var customize = wp.customize;

        $('ul[id*="sub-accordion-panel-home-page-sections"] .accordion-section').not('.panel-meta').each( function () {
            $( this ).on( 'click', function() {
                var section = $( this ).attr('aria-owns').split( '_' ).pop();
                customize.previewer.send('clicked-customizer-section', section);
            });
        });
    } );
};

onepagescroll_customize_scroller( jQuery );

		
});
