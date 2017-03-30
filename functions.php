<?php

register_nav_menus( array(
    'Top' => 'Main menu',
) );

add_theme_support( 'post-thumbnails' );



add_action( 'admin_init', 'myThemeRegisterSettings' );

function myThemeRegisterSettings( )
{
    register_setting( 'video-tv', 'top_logo' ); // logo top nav
    register_setting( 'video-tv', 'footer_logo' ); // logo footer
    register_setting( 'video-tv', 'slider_title' ); // slider title
    register_setting( 'video-tv', 'index_title' ); // index title
    register_setting( 'video-tv', 'slider_number' ); // number slide
    register_setting( 'video-tv', 'slider_active' ); // activer slider
    register_setting( 'video-tv', 'ad_index' ); // ad index page
    register_setting( 'video-tv', 'ad_single' ); // ad single page
    register_setting( 'video-tv', 'facebook_menu' ); // facebook
    register_setting( 'video-tv', 'twitter_menu' ); // twitter
    register_setting( 'video-tv', 'instagram_menu' ); // instagram
    register_setting( 'video-tv', 'snapchat_menu' ); // snapchat
    register_setting( 'video-tv', 'youtube_menu' ); // Youtube
    register_setting( 'video-tv', 'send_button' ); // send button
    register_setting( 'video-tv', 'contact_button' ); // contact button
    register_setting( 'video-tv', 'header_code' ); // header-code
    register_setting( 'video-tv', 'color-menu-top' ); // color menu top
    register_setting( 'video-tv', 'color-social-top' ); // color social top
    register_setting( 'video-tv', 'color-slider' ); // color slider
    register_setting( 'video-tv', 'color-footer' ); // color footer
    register_setting( 'video-tv', 'color-video' ); // color video
    register_setting( 'video-tv', 'single_title' ); // single sub video title
    register_setting( 'video-tv', 'single_color_navigation' ); // color link navigation
}


add_action( 'admin_menu', 'myThemeAdminMenu' );

function myThemeAdminMenu( )
{
    add_menu_page(
        'Options Video-TV', // le titre de la page
        'Video-TV',            // le nom de la page dans le menu d'admin
        'administrator',        // le rôle d'utilisateur requis pour voir cette page
        'video-tv-theme',        // un identifiant unique de la page
        'myThemeSettingsPage'   // le nom d'une fonction qui affichera la page
    );
}

function myThemeSettingsPage( )
{
    include ('admin-menu.php');
}


add_action( 'wp_head', 'myThemeCss' );

function myThemeCss( )
{

    if (!get_option( 'slider_active', 'true'))
        echo
        '
    <style type="text/css">

        .newVideo {
            display:none;
        }
    </style>
    ';
}


add_action('admin_enqueue_scripts', 'my_admin_scripts');

function my_admin_scripts() {
    if (isset($_GET['page']) && $_GET['page'] == 'video-tv-theme') {
        wp_enqueue_media();
        wp_register_script('upload-js', get_template_directory_uri ().'/inc/js/upload.js', array('jquery'));
        wp_enqueue_script('upload-js');

    }
}

add_action('admin_enqueue_scripts', 'my_admin_add_color_picker');

function my_admin_add_color_picker() {
    if (isset($_GET['page']) && $_GET['page'] == 'video-tv-theme') {
        wp_register_script('wp-color-picker', get_template_directory_uri ().'/inc/js/upload.js', array('jquery'));
        wp_enqueue_script( 'wp-color-picker');
        wp_enqueue_style( 'wp-color-picker');
    }
}

/*
 *
 * pagination
 *
 */
function pressPagination($pages = '', $range = 2)
{
    global $paged;
    $showitems= ($range * 2)+1;

    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class='pagination'>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a id=\"next\" href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
        echo "</div>";
    }
}


/*
 *
 * widget
 *
 */

if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 3',
        'id' => 'footer-sidebar-3',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Single sub',
        'id' => 'single-sub',
        'description' => 'Appears in the single area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}

/**
 * If we go beyond the last page and request a page that doesn't exist,
 * force WordPress to return a 404.
 * See http://core.trac.wordpress.org/ticket/15770
 */
function custom_paged_404_fix( ) {
    global $wp_query;

    if ( is_404() || !is_paged() || 0 != count( $wp_query->posts ) )
        return;

    $wp_query->set_404();
    status_header( 404 );
    nocache_headers();
}
add_action( 'wp', 'custom_paged_404_fix' );

/*
 *
 * custom field
 *
 */

add_action('wp_insert_post', 'wpc_champs_personnalises_defaut');
function wpc_champs_personnalises_defaut($post_id)
{

    add_post_meta($post_id, 'video_tv_code', '', true);
    return true;
}

/*
 *
 *  css admin menu
 *
 */

add_action('admin_head', 'registerCustomAdminCss');

function registerCustomAdminCss() {

    if (isset($_GET['page']) && $_GET['page'] == 'video-tv-theme') {
        $src = get_template_directory_uri() . "/inc/css/admin.css";
        $handle = "customAdminCss";
        wp_enqueue_style($handle, $src, array(), false, false);
        wp_enqueue_style("font-awesome", get_template_directory_uri() . "/inc/css/font-awesome.min.css", array(), false, false);
    }
}

/*
 *
 * widget
 *
 */

require_once( get_template_directory() . '/widget/widget_social_footer.php' );

/*
 *
 * metabox
 *
 */

add_action('add_meta_boxes','initialisation_metaboxes');
function initialisation_metaboxes(){
    //on utilise la fonction add_metabox() pour initialiser une metabox
    add_meta_box('video_tv_code', 'Video Code', 'videoCode', 'post', 'normal', 'high');
}

function videoCode($post){
    echo '<label for="video_tv_code">iframe video : </label>';
    echo '<textarea id="video_tv_code" cols="100" row="10" type="text" name="video_tv_code" >'.get_post_meta($post->ID,'video_tv_code',true).'</textarea>';
}

add_action('save_post','save_metaboxes');
function save_metaboxes($post_ID){
    // si la metabox est définie, on sauvegarde sa valeur
    if(isset($_POST['video_tv_code'])){
        update_post_meta($post_ID,'video_tv_code', $_POST['video_tv_code']);
    }
}
/*
 *
 * plugin
 *
 */
include ('plugins-need.php');

?>