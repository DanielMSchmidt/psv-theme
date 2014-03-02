<?php
/**
 * Plugin Name: Calender
 * Description: A simple event Calendar, which goes with a widget. In the Plugin you store the data, the widget will show a list of upcoming events
 * Version: 0.1
 * Author: Daniel Schmidt
 * License: GPL2
 */

add_option('headline');
add_action( 'admin_menu', 'addPluginMenu' );

/** Step 1. */
function addPluginMenu() {
  add_options_page( 'Kalender Optionen', 'Kalenderplugin', 'manage_options', 'cal-plugin', 'getPluginsContent' );
}

/** Step 3. */
function getPluginsContent() {
  if ( !current_user_can( 'manage_options' ) )  {
    wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
  }
  echo '<div class="wrap">';
  echo '<p>Here is where the form would go if I actually had options.</p>';
  echo '</div>';
}
?>
