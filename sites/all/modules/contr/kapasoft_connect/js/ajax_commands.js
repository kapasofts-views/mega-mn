/**
 * @file
 *
 * Implement a Drupal Ajax Commands on product refresh.
 *
 */

(function ($) {
    // Make sure our objects are defined.
    Drupal.Bazar = Drupal.Bazar || {};

    Drupal.Bazar.reattach_magnifier = function(ajax, response, status) {
        //debugger;
        //copy form sites/all/themes/bazar/js/forntend.js to reattach event
        var yith_wcmg = $('.images');
        var yith_wcmg_zoom  = $('.yith_magnifier_zoom');
        var yith_wcmg_image = $('.yith_magnifier_zoom img');

        var yith_wcmg_default_zoom = yith_wcmg.find('.yith_magnifier_zoom').attr('href');
        var yith_wcmg_default_image = yith_wcmg.find('.yith_magnifier_zoom img').attr('src');

        yith_wcmg.yith_magnifier(yith_magnifier_options);
        //debugger;
        var active_element = $( 'form.variations_form' );
        active_element.on( 'found_variation', function( event, variation ) {
            var image_magnifier = variation.image_magnifier ? variation.image_magnifier : yith_wcmg_default_zoom;
            var image_src       = variation.image_src ? variation.image_src : yith_wcmg_default_image;

            yith_wcmg_zoom.attr('href', image_magnifier);
            yith_wcmg_image.attr('src', image_src);

            if( yith_wcmg.data('yith_magnifier') ) {
                yith_wcmg.yith_magnifier('destroy');
            }

            yith_wcmg.yith_magnifier(yith_magnifier_options);
        }).on( 'reset_image', function( event ) {
                yith_wcmg_zoom.attr('href', yith_wcmg_default_zoom);
                //yith_wcmg_image.attr('src', yith_wcmg_default_image);

                if( yith_wcmg.data('yith_magnifier') ) {
                    yith_wcmg.yith_magnifier('destroy');
                }

                yith_wcmg.yith_magnifier(yith_magnifier_options);
            })

        var active_element2 = $( 'form.variations_form .variations select');
        active_element2.trigger('change');

        Drupal.attachBehaviors(active_element);
        Drupal.attachBehaviors(active_element2);
    }

    $(function() {
        Drupal.ajax.prototype.commands.reattach_magnifier = Drupal.Bazar.reattach_magnifier;
    });

})(jQuery);
