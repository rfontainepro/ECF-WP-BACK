<?php

/**
 * @package pluginRFO
 */

/*
Plugin Name: pluginRFO
PLugin URI: https://oxbe.fr
Description: ECF-Back &#x1F608;
Version: 0.9
Author: Romain
Author URI: https://oxbe.fr
License: GPLv2 or later
Text Domain: pluginRFO
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
Copyright 2005-2015 Automattic, Inc.
*/

// Si ce fichier est appelé correctement, abandonnez !!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here?' );

//---------------------------------------------------------------------------------------------------

function register_post_types() {
	
    $labels = array(
        'name' => 'Test',
        'all_items' => 'Tous les tests',  // Affiché dans le sous menu
        'singular_name' => 'Test',
        'add_new_item' => 'Ajouter un test',
        'edit_item' => 'Modifier le test',
        'menu_name' => 'Test',
        'add_picture' => 'Ajouter une image'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-admin-customizer',
	);

	register_post_type( 'test', $args );
}
add_action( 'init', 'register_post_types' ); // Lance la fonction