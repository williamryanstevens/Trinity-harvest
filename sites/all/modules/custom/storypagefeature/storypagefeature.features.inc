<?php
/**
 * @file
 * storypagefeature.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function storypagefeature_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "bean_admin_ui" && $api == "bean") {
    return array("version" => "5");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function storypagefeature_node_info() {
  $items = array(
    'storypage' => array(
      'name' => t('StoryPage'),
      'base' => 'node_content',
      'description' => t('Contents page for Parallax'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
