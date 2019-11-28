(function(jQuery){
    jQuery(document).ready(function(){

        /*----------------------------------------------------*/
        /*	Same Height Div's
        /*----------------------------------------------------*/
        if(jQuery.isFunction(jQuery.fn.matchHeight)){
            jQuery('.same-height').matchHeight();
        }

        /*===========================================================*/
        /*	Image Hover Effect - HoverDirection.js
        /*===========================================================*/
        if(jQuery.isFunction(jQuery.fn.hoverDirection)){
            jQuery('.box').hoverDirection();

            // Example of calling removeClass method after a CSS animation
            jQuery('.box .inner').on('animationend', function (event) {
                var $box = jQuery(this).parent();
                $box.filter('[class*="-leave-"]').hoverDirection('removeClass');
            });
        }
    });
})(this.jQuery);

jQuery(document).ready(function() {
    /*============
     BUTTON UP
     * ===========*/
    var btnUp = jQuery('<div/>', {'class':'btntoTop'});
    btnUp.appendTo('body');
    jQuery(document)
        .on('click', '.btntoTop', function() {
            jQuery('html, body').animate({
                scrollTop: 0
            }, 700);
        });

    jQuery(window)
        .on('scroll', function() {
            if (jQuery(this).scrollTop() > 200)
                jQuery('.btntoTop').addClass('active');
            else
                jQuery('.btntoTop').removeClass('active');
        });
});