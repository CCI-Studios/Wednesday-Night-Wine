<?php
/**
 * @file
 * wednesday_night_wine.bean.inc
 */

/**
 * Implements hook_bean_admin_ui_types().
 */
function wednesday_night_wine_bean_admin_ui_types() {
  $export = array();

  $bean_type = new stdClass();
  $bean_type->disabled = FALSE; /* Edit this to true to make a default bean_type disabled initially */
  $bean_type->api_version = 5;
  $bean_type->name = 'background_image';
  $bean_type->label = 'Background Image';
  $bean_type->options = '';
  $bean_type->description = '';
  $export['background_image'] = $bean_type;

  return $export;
}
