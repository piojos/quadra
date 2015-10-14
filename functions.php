<?php

/*
 *	Functions for Quadra
 */

// Mostrar Opciones en Menu

	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
			'page_title' 	=> 'Opciones Generales',
			'menu_title'	=> 'Opciones',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}




// Image Sizes handler

	//	1	Tamaños de Imágenes
	add_action( 'after_setup_theme', 'baw_theme_setup' );
	function baw_theme_setup() {
		add_image_size( 'cardSize', 720, 540, true );
		add_image_size( 'larger', 1400, 1400 );
		add_image_size( 'largest', 1800, 1800 );
		add_image_size( 'huge', 2200, 2200 );
	}


	//	2	Borrar tamaño original de disco y opción
	function replace_uploaded_image($image_data) {
		// if there is no large image : return
		if (!isset($image_data['sizes']['huge'])) return $image_data;

		// paths to the uploaded image and the large image
		$upload_dir = wp_upload_dir();
		$uploaded_image_location = $upload_dir['basedir'] . '/' .$image_data['file'];
		$large_image_filename = $image_data['sizes']['huge']['file'];

		// Do what wordpress does in image_downsize() ... just replace the filenames ;)
		$image_basename = wp_basename($uploaded_image_location);
		$large_image_location = str_replace($image_basename, $large_image_filename, $uploaded_image_location);

		// delete the uploaded image
		unlink($uploaded_image_location);

		// rename the large image
		rename($large_image_location, $uploaded_image_location);

		// update image metadata and return them
		$image_data['width'] = $image_data['sizes']['huge']['width'];
		$image_data['height'] = $image_data['sizes']['huge']['height'];
		unset($image_data['sizes']['huge']);

		// Check if other size-configurations link to the large-file
		foreach($image_data['sizes'] as $size => $sizeData) {
			if ($sizeData['file'] === $large_image_filename)
			unset($image_data['sizes'][$size]);
		}

		return $image_data;
	}
	add_filter('wp_generate_attachment_metadata', 'replace_uploaded_image');


	//	3	Cambiar nombre de Tamaños a Español
	function theme_t_wp_set_image_size_options( $sizes ){
		$sizes = array(
			'thumbnail' => 'Miniatura',
			'medium' => 'Mediana',
			'large' => 'Grande',
			'larger' => __( 'Mas grande' ),
			'largest' => __( 'Grandísimo' ),
			'huge' => __( 'Gigantesco' )
		);
		return $sizes;
	}
	add_filter('image_size_names_choose', 'theme_t_wp_set_image_size_options');




// Hide Posts & usuals in Editor level Admin
/*
	function hide_menu() {
		global $current_user;
		$user_id = get_current_user_id();
		if($user_id != '1') {

			remove_menu_page( 'index.php' );                  	//Dashboard
			remove_menu_page( 'upload.php' );                 	//Media
			remove_menu_page( 'edit-comments.php' );          	//Comments
			remove_menu_page( 'plugins.php' );                	//Plugins
				remove_submenu_page( 'themes.php', 'themes.php' );
				remove_submenu_page( 'themes.php', 'theme-editor.php' );
				remove_submenu_page( 'themes.php', 'customize.php' );
			remove_menu_page( 'nav-menus.php' );              	//Editar Menus
			// remove_menu_page( 'users.php' );                  	Users
			remove_menu_page( 'tools.php' );                  	//Tools
			remove_menu_page( 'options-general.php' );        	//Settings
			remove_menu_page( 'edit.php?post_type=acf' );     	//Advanced Custom Fields
			remove_menu_page( 'admin.php?page=cpt_main_menu' );	//Custom Post Types
			remove_menu_page( 'themes.php' );     			//Custom Fields
		}
	}
	add_action('admin_head', 'hide_menu');
*/



// Edit wysiwyg editor
