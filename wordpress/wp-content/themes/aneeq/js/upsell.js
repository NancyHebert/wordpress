/**
 * Upsell notice for theme
 */

( function( $ ) {

	// Add Upgrade Message
	if ('undefined' !== typeof prefixL10n) {
		upsell = $('<a class="prefix-upsell-link"></a>')
			.attr('href', prefixL10n.prefixURL)
			.attr('target', '_blank')
			.text(prefixL10n.prefixLabel)
			.css({
				'display' : 'inline-block',
				'background-color' : '#2EA2CC',
				'color' : '#fff',
				//'text-transform' : 'uppercase',
				'margin-top' : '6px',
				'padding' : '10px 12px',
				'font-size': '12px',
				'letter-spacing': '1px',
				'line-height': '1.5',
				'clear' : 'both',
				'text-decoration': 'none',
				'font-weight': '600'
			})
		;

		setTimeout(function () {
			$('#customize-info .accordion-section-title').append(upsell);
		}, 200);

		// Remove accordion click event
		$('.prefix-upsell-link').on('click', function(e) {
			e.stopPropagation();
		});
	}

} )( jQuery );