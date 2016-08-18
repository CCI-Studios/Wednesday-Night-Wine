<?php

function wnw_preprocess_html(&$vars) {
  $path = drupal_get_path_alias($_GET['q']);
  $aliases = explode('/', $path);
  foreach($aliases as $alias) {
    $vars['classes_array'][] = "path-".drupal_clean_css_identifier($alias);
  } 
}

function wnw_css_alter(&$css) { 
  unset($css[drupal_get_path('module','system').'/system.menus.css']); 
}
