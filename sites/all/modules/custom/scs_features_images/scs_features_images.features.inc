<?php
/**
 * @file
 * scs_features_images.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function scs_features_images_image_default_styles() {
  $styles = array();

  // Exported image style: 1024x610.
  $styles['1024x610'] = array(
    'label' => '1024x610',
    'effects' => array(
      1 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 1024,
          'height' => 610,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 220x136.
  $styles['220x136'] = array(
    'label' => '220x136',
    'effects' => array(
      4 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 220,
          'height' => 136,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 515x318.
  $styles['515x318'] = array(
    'label' => '515x318',
    'effects' => array(
      2 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 515,
          'height' => 318,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: 800x494.
  $styles['800x494'] = array(
    'label' => '800x494',
    'effects' => array(
      3 => array(
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => 800,
          'height' => 494,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}
