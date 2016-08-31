"use strict";
document.addEventListener('DOMContentLoaded', function (event) {
    console.log('DOM fully loaded and parsed');
    //console.log(drupalSettings);
});
window.addEventListener('load', function() {
    console.log('window and all contents loaded');
    //console.log(drupalSettings);
});
;
/**
 * @file
 * Statistics functionality.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  $(document).ready(function () {
    $.ajax({
      type: 'POST',
      cache: false,
      url: drupalSettings.statistics.url,
      data: drupalSettings.statistics.data
    });
  });
})(jQuery, Drupal, drupalSettings);
;
