/**
 * @file
 * Global utilities.
 *
 */
(function ($, Drupal) {

  'use strict';

  $('a').each(function() {
    if ($(this).find('img').length) {
      $(this).addClass('img-rollover')
    }
  });

  Drupal.behaviors.setAttributes = {
    attach: function (context, settings) {
      // Replace 'your-element-selector' with the appropriate selector for your element.
      var $element = $('#off-canvas', context);

      if ($element.length > 0) {
        $element.attr('role', 'navigation');
        $element.attr('aria-label', 'mobile-menu');
      }
    }
  };

})(jQuery, Drupal);
