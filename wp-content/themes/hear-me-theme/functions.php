<?php
// function HearMe_Files(){
//     // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0' , true);
//     // wp_enqueue_style('GoogleFont' , '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
//     // wp_enqueue_style('FontAwesom' , '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
//     wp_enqueue_style('stylesheet' , get_stylesheet_uri());

// }

// add_action('wp_enqueue_scripts', 'HearMe_Files');
?>


<?php 

function HearMe_Files() {
    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    // wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', NULL, '1.0' , true);
    wp_enqueue_style('GoogleFont1', '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    wp_enqueue_style('GoogleFont2', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('GoogleFont3', '//fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swa');
    wp_enqueue_script('bootstrap_jquery', '//code.jquery.com/jquery-3.5.1.min.js', NULL, '1.0' , true);
    wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', NULL, '1.0' , true);
    wp_enqueue_style('FontAwesom' , '//pro.fontawesome.com/releases/v5.10.0/css/all.css');
    wp_enqueue_style('Animation' , '//cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');
    // manul linking
    // wp_enqueue_style('stylesheet', get_stylesheet_uri());
    // wp_enqueue_script('main_js', get_theme_file_uri('/js/scripts.js'), NULL, '1.0' , true);

    // Live Render Linking
    wp_enqueue_script('main_js', 'http://localhost:3000/bundled.js', NULL, '1.0' , true);


}

add_action('wp_enqueue_scripts', 'HearMe_Files');


function hearme_features(){
    // register_nav_menu('headerMenuLocation' , 'Header Menu Location');
    // register_nav_menu('footerLocationOne' , 'Footer Location One');
    // register_nav_menu('footerLocationTwo' , 'Footer Location Two');
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
        );
    add_theme_support( 'custom-logo', $defaults );
    add_theme_support('title-tag');
    // add_theme_support('post-thumbnails');
    // add_image_size('professorLandscape' , '400' , '260' , true);
    // add_image_size('professorPortrait' , '480' , '650' , true);
    // add_image_size('pageBanner' , '1500' , '350' , true);
}
add_action('after_setup_theme', 'hearme_features');

// custom menu link for editing and viewing home page

// $link = get_edit_post_link(get_option('page_on_front'));

// function register_custom_menu_link(){

//     add_menu_page( '', $link, 'view_options', 'home-menu', '', 'dashicons-external', 3 );
//     add_submenu_page( 'home-menu', 'view', 'View Page', 'manage_options', 'view-page', 'view_page', );
//     add_submenu_page( 'home-menu', 'Edit', 'Edit Page', 'manage_options', 'edit-page', 'edit_page', ); 
// }

// function view_page(){
//     wp_redirect( get_option('page_on_front')); 
// 	exit;
// }

// function edit_page(){
    
//     header($GLOBALS['$link']);
// }

// add_action( 'admin_menu', 'register_custom_menu_link' );

// Remove editor support from page 


function remove_content()
{ 
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'page-attributes');
    remove_post_type_support('page', 'title');        
}

add_action('admin_head', 'remove_content');

?>