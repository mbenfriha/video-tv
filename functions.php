<?php

register_nav_menus( array(
    'Top' => 'Main menu',
) );

add_theme_support( 'post-thumbnails' );



add_action( 'admin_init', 'myThemeRegisterSettings' );

function myThemeRegisterSettings( )
{
    register_setting( 'my_theme', 'top_logo' ); // logo top nav
    register_setting( 'my_theme', 'footer_logo' ); // logo footer
    register_setting( 'my_theme', 'slider_number' ); // nombre de slide
    register_setting( 'my_theme', 'slider_active' ); // activer slider
    register_setting( 'my_theme', 'facebook_menu' ); // facebook
    register_setting( 'my_theme', 'twitter_menu' ); // twitter
    register_setting( 'my_theme', 'instagram_menu' ); // instagram
    register_setting( 'my_theme', 'snapchat_menu' ); // snapchat
    register_setting( 'my_theme', 'dailymotion_menu' ); // dailymotion
    register_setting( 'my_theme', 'send_button' ); // send button
    register_setting( 'my_theme', 'contact_button' ); // contact button
}


add_action( 'admin_menu', 'myThemeAdminMenu' );

function myThemeAdminMenu( )
{
    add_menu_page(
        'Options linsolite', // le titre de la page
        'Linsolite',            // le nom de la page dans le menu d'admin
        'administrator',        // le rôle d'utilisateur requis pour voir cette page
        'linsolite-theme',        // un identifiant unique de la page
        'myThemeSettingsPage'   // le nom d'une fonction qui affichera la page
    );
}

function myThemeSettingsPage( )
{
    ?>
    <div class="wrap">
        <h2>Options de mon thème</h2>

        <form method="post" action="options.php">
            <?php
            // cette fonction ajoute plusieurs champs cachés au formulaire
            // pour vous faciliter le travail.
            // elle prend en paramètre le nom du groupe d'options
            // que nous avons défini plus haut.

            settings_fields( 'my_theme' );
            ?>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="top_logo">Logo top</label></th>
                    <td>
                        <label for="upload_image">
                            <input class="upload_image" name="top_logo" type="text" size="36" name="ad_image" value="<?php echo get_option( 'top_logo', '' ); ?>" />
                            <input class="upload_image_button" name="top_logo" class="button" type="button" value="Upload Image" />
                            <br />Enter a URL or upload an image (400x200px)
                        </label>
                    </td>
                </tr>
                <tr valign="footer">
                    <th scope="row"><label for="footer_logo">Logo footer</label></th>
                    <td>
                        <label for="upload_image">
                            <input class="upload_image" name="footer_logo" type="text" size="36" name="ad_image" value="<?php echo get_option( 'footer_logo', '' ); ?>" />
                            <input class="upload_image_button" name="footer_logo" class="button" type="button" value="Upload Image" />
                            <br />Enter a URL or upload an image (150x150px)
                        </label>
                    </td>
                </tr>

            </table>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="slider_active">Slider newest</label></th>
                    <td><input type="checkbox" id="slider_active" name="slider_active" value="1" <?= checked( get_option('slider_active'), 1, false );?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="slider_number">slider number item</label></th>
                    <td><input type="text" id="slider_number" name="slider_number" class="small-text" value="<?php echo get_option( 'slider_number', '' ); ?>" /></td>
                </tr>

            </table>

            <h1>Social</h1>
            <table class="form-table">
            <tr valign="top">
                <th scope="row"><label for="facebook_menu">facebook</label></th>
                <td><input type="text" id="facebook_menu" name="facebook_menu" class="text" value="<?php echo get_option( 'facebook_menu', '' ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="twitter_menu">Twitter</label></th>
                <td><input type="text" id="twitter_menu" name="twitter_menu" class="text" value="<?php echo get_option( 'twitter_menu', '' ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="instagram_menu">Instagram</label></th>
                <td><input type="text" id="instagram_menu" name="instagram_menu" class="text" value="<?php echo get_option( 'instagram_menu', '' ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="snapchat_menu">Snapchat</label></th>
                <td><input type="text" id="snapchat_menu" name="snapchat_menu" class="text" value="<?php echo get_option( 'snapchat_menu', '' ); ?>" /></td>
            </tr>
            <tr valign="top">
                <th scope="row"><label for="dailymotion_menu">Dailymotion</label></th>
                <td><input type="text" id="dailymotion_menu" name="dailymotion_menu" class="text" value="<?php echo get_option( 'dailymotion_menu', '' ); ?>" /></td>
            </tr>
            </table>

            <h1>Custom button</h1>

            <table class="form-table">
                <tr valign="top">
                    <th scope="row"><label for="send_button">Envoyer une vidéo</label></th>
                    <td><input type="text" id="send_button" name="send_button" class="text" value="<?php echo get_option( 'send_button', '' ); ?>" /></td>
                </tr>
                <tr valign="top">
                    <th scope="row"><label for="contact_button">Bouton contacter</label></th>
                    <td><input type="text" id="contact_button" name="contact_button" class="text" value="<?php echo get_option( 'contact_button', '' ); ?>" /></td>
                </tr>

            </table>

            <p class="submit">
                <input type="submit" class="button-primary" value="Mettre à jour" />
            </p>
        </form>
    </div>
    <?php
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
    if (isset($_GET['page']) && $_GET['page'] == 'linsolite-theme') {
        wp_enqueue_media();
        wp_register_script('upload-js', get_template_directory_uri ().'/inc/js/upload.js', array('jquery'));
        wp_enqueue_script('upload-js');
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

    add_post_meta($post_id, 'jtheme_video_code', '', true);
    return true;
}


/*
 *
 * widget
 *
 */

require_once( get_template_directory() . '/widget/widget_social_footer.php' );

/*
 *
 * plugin
 *
 */

if ( function_exists('register_sidebar') ) register_sidebar();



// Include the TGM_Plugin_Activation class.
require_once( trailingslashit( get_template_directory() ) . 'extensions/class-tgm-plugin-activation.php' );



/**
 * Register the required or recommended plugins for this theme.
 *
 * @since 1.3.7
 */
add_action( 'tgmpa_register', 'jtheme_re2plugins' );
function jtheme_re2plugins() {

    $plugins = array(
        array(
            'name'      => 'Video Thumbnails',
            'slug'      => 'video-thumbnails',
            'required'  => false
        ),
        array(
            'name'      => 'MailPoet Newsletters',
            'slug'      => 'wysija-newsletters',
            'required'  => false
        )

    );

    // Change this to your theme text domain, used for internationalising strings
    $theme_text_domain = 'linsolite stream';

    /**
     * Array of configuration settings. Amend each line as needed.
     * If you want the default strings to be available under your own theme domain,
     * leave the strings uncommented.
     * Some of the strings are added into a sprintf, so see the comments at the
     * end of each line for what each argument will be.
     */
    $config = array(
        'domain'            => $theme_text_domain,           // Text domain - likely want to be the same as your theme.
        'default_path'      => '',                           // Default absolute path to pre-packaged plugins
        'parent_menu_slug'  => 'themes.php',         // Default parent menu slug
        'parent_url_slug'   => 'themes.php',         // Default parent URL slug
        'menu'              => 'install-required-plugins',   // Menu slug
        'has_notices'       => true,                         // Show admin notices or not
        'is_automatic'      => false,            // Automatically activate plugins after installation or not
        'message'           => '',               // Message to output right before the plugins table
        'strings'           => array(
            'page_title'                                => __( 'Install Required &amp; Recommended Plugins', $theme_text_domain ),
            'menu_title'                                => __( 'Install Plugins', $theme_text_domain ),
            'installing'                                => __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
            'oops'                                      => __( 'Something went wrong with the plugin API.', $theme_text_domain ),
            'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
            'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
            'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
            'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
            'return'                                    => __( 'Return to Required Plugins Installer', $theme_text_domain ),
            'plugin_activated'                          => __( 'Plugin activated successfully.', $theme_text_domain ),
            'complete'                                  => __( 'All plugins installed and activated successfully. %s', $theme_text_domain ) // %1$s = dashboard link
        )
    );

    tgmpa( $plugins, $config );

}


?>