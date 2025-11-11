<?php
/**
* Plugin name: WPLand General
* Description: Core Code
* Version: 1.0
* Author: Viorel Soltan
* License: GPLv2 or later
*/

function wpland_remove_dashbord_widgets(){
    global $wp_meta_boxes;

    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
    // Zona Laterală (Sidebar)
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);  
    
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);  
}
add_action('wp_dashboard_setup', 'wpland_remove_dashbord_widgets');