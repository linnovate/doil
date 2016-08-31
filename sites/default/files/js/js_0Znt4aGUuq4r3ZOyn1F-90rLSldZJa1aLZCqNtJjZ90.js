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
/**
 * @file
 * Attaches behaviors for the Comment module's "by-viewer" class.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * Add 'by-viewer' class to comments written by the current user.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.commentByViewer = {
    attach: function (context) {
      var currentUserID = parseInt(drupalSettings.user.uid, 10);
      $('[data-comment-user-id]')
        .filter(function () {
          return parseInt(this.getAttribute('data-comment-user-id'), 10) === currentUserID;
        })
        .addClass('by-viewer');
    }
  };

})(jQuery, Drupal, drupalSettings);
;
