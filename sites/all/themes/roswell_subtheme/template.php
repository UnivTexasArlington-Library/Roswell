<?php

/**
 * @file
 * The primary PHP file for this theme.
 */
/*Comments by Chirag*/
function roswell_subtheme_bootstrap_search_form_wrapper(array $variables) {

  $output = '<div class="input-group"/>';
/*  $output = '<label aria-label="search" class="sr-only" />';*/
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';	/*removing to remove attached input and button*/
/*  $output .= '<span>';*/
  $output .= '<button type="submit" class="btn btn-submit">Search</button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}

