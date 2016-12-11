<?php
/**
 * @package Positive_Affirmations
 * @version 1.0
 */
/*
Plugin Name: Positive Affirmations
Plugin URI: https://github.com/andystitt829/positive-affirmations
Description: This shows you a different positive affirmation on every page of the admin section.
Author: Andy Stitt
Version: 1.0
Author URI: https://andystitt.com
*/

function get_affirmation() {
  $affirmations = array(
    'You have excellent instincts and should trust yourself.',
    'You\'re good enough, you\'re smart enough, and gosh darnit, people like you!',
    'You are really good at what you do. Nice job!',
    'Your positive outlook on life allows you to get through any situation. Keep it up!',
    'Your hair looks fabulous today!',
    'You light up a room whenever you walk in. Keep up your positive energy!',
    'You deserve to love yourself fully and completely.',
  );

  $affirmation_index = mt_rand( 0, 6 );

  return $affirmations[$affirmation_index];
}

function generate_affirmation() {
  $affirmation = get_affirmation();
  echo '<p>' . $affirmation . '</p>';
}

add_action( 'admin_notices', 'generate_affirmation');

?>
