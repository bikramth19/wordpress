<?php

/**
 * @file
 * template.php
 */

function corporatex3_preprocess_page(&$vars) {
  $path = drupal_get_path_alias();
  if ($path == 'contact') {
    $vars['title'] = t('Contact us');
    drupal_set_title(t('Contact us'));
  }
}