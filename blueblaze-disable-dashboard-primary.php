<?php
/**
 * Blue Blaze Disable WordPress News Widget
 *
 * @author  Blue Blaze Associates
 * @license GPL-2.0+
 * @link    https://github.com/blueblazeassociates/blueblaze-disable-dashboard-primary
 */

/*
 * Plugin Name:       Blue Blaze Disable WordPress News Widget
 * Plugin URI:        https://github.com/blueblazeassociates/blueblaze-disable-dashboard-primary
 * Description:       Disables the WordPress News dashboard widget.
 * Version:           1.0.1
 * Author:            Blue Blaze Associates
 * Author URI:        http://www.blueblazeassociates.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/blueblazeassociates/blueblaze-disable-dashboard-primary
 * GitHub Branch:     master
 * Requires WP:       4.7
 * Requires PHP:      5.6
 */

/**
 * Removes the 'dashboard_primary' meta box from the WordPress dashboard.
 *
 * @since 1.0.0
 */
function blueblaze__disable_dashboard_primary_widget() {
  remove_meta_box( 'dashboard_primary', 'dashboard', 'side' ); // WordPress News
}
add_action( 'wp_dashboard_setup', 'blueblaze__disable_dashboard_primary_widget' );
