<?php

/**
 * @file
 * template.php
 */

// Adds Bootstrap img-responsive class
function seatheme_preprocess_image_style(&$variables) {
	$variables['attributes']['class'][] = 'img-responsive';
}