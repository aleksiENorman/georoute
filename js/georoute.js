/**
 * @file: georoute.js
 *
 * Add a direct link on node submit form to the link
 */

jQuery(document).ready(function($) {
  $('#edit-hash').bind('keypress input beforepaste', function () {
    $('#hash-value').html( $('#edit-hash').val() );
  });
  $('#hash-value').html( $('#edit-hash').val() );
});