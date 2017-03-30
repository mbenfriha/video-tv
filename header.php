<html <?php language_attributes(); ?>>
<head>

    <title><?= get_bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri () ?>/inc/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="https://use.fontawesome.com/250b302b5a.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>


<?php wp_head( ) ?>
    <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
    <!-- the default values -->
    <meta property="fb:app_id" content="1992139823" />

    <!-- if page is content page -->
    <?php if (is_single()) { ?>
        <meta property="og:url" content="<?php the_permalink() ?>"/>
        <meta property="og:title" content="<?php single_post_title(''); ?>" />
        <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false)[0];}?>" />

        <!-- if page is others -->
    <?php } else { ?>
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
        <meta property="og:description" content="<?php bloginfo('description'); ?>" />
        <meta property="og:type" content="website" /><?php } ?>




    <?php echo get_option( 'header_code', '') ?>

</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({status: true, cookie: true,
            xfbml: true});
    };
    (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
            '//connect.facebook.net/en_US/all.js';
        document.getElementById('fb-root').appendChild(e);
    }());
</script>

<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="header-top">

    <div class="col s12 head-blue"></div>
    <div class="col s12 nav">
        <ul class="left">
            <li id="active-menu"> <i class="fa fa-bars" aria-hidden="true"></i> </li>
            <?php

            if (get_option( 'contact_button', '')) {
                echo'<a href="'. get_option( 'contact_button', '') .'"><li id = "contact" > <i class="fa fa-envelope-o" aria - hidden = "true" ></i > </li></a>';
            }
            ?>
        </ul>

        <ul class="right sociaux-nav">
            <?php

             if (get_option( 'youtube_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'youtube_menu', '').'"> <i class="fa fa-youtube" aria-hidden="true"></i>  </a></li>';

             if (get_option( 'snapchat_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'snapchat_menu', '').'"> <i class="fa fa-snapchat-ghost" aria-hidden="true"></i> </a></li>';

            if (get_option( 'facebook_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'facebook_menu', '').'"> <i class="fa fa-facebook" aria-hidden="true"></i> </a></li>';

             if (get_option( 'twitter_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'twitter_menu', '').'"> <i class="fa fa-twitter" aria-hidden="true"></i> </a></li>';

            if (get_option( 'instagram_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'instagram_menu', '').'"> <i class="fa fa-instagram" aria-hidden="true"></i> </a></li>'

            ?>
        </ul>

        <div class="right search">

            <form id="demo-2">
                <input type="search" name="s" placeholder="Rechercher" />

            </form>

        </div>

        <?php
        if (get_option( 'top_logo', ''))
            echo '<div class="logo"><a href="'. esc_url( home_url( '/' )).'"><img src="'.get_option( 'top_logo', '').'" alt="logo"></a></div>';
        else
            echo  '<div class="logo"><a href="'. esc_url( home_url( '/' )).'"><img src="'. esc_url( home_url( '/' )). 'wp-content/themes/video-tv/inc/img/logo_footer.png" alt="logo"></a></div>';

        ?>



    </div>


    <style>
        .menu {
            background-color: <?php echo get_option( 'color-menu-top', '') ?>;
        }
        #menu ul ul li {
            background: <?php echo get_option( 'color-menu-top', '') ?>;
        }
        #menu ul ul a  {
            background: <?php echo get_option( 'color-menu-top', '') ?>;
        }
        .menu ul a:hover {
            background-color: #7eabc7;
        }
        .nav ul li a {
            color: <?php echo get_option( 'color-social-top', '') ?>; !important;
        }
        .newVideo:after {
            background-color: <?php echo get_option( 'color-slider', '#2196f3') ?>; !important;
        }
        .footer:after {
            background-color: <?php echo get_option( 'color-footer', '#2196f3') ?>; !important;
        }
        .single-video {
            background-color: <?php echo get_option( 'color-video', '#2196f3') ?>; !important;
        }

        .prev-next a {
            color: <?php echo get_option( 'single_color_navigation-video', 'black') ?>; !important;
        }
        .info-video a {
            color: <?php echo get_option( 'single_color_navigation-video', 'black') ?>; !important;
        }
        .allvideo article:hover {
            background-color: <?php echo get_option( 'color-social-top', '') ?>; !important;
        }

    </style>
    <?php wp_nav_menu( array( 'theme_location' => 'Top', 'container_class' => 'menu', 'container_id' => 'menu', 'menu_class' => '' ) ); ?>

<?php

if (get_option( 'send_button', '')) {
    echo '<a href="'. get_option( 'send_button', '') .'"><img class="img-upload" src="' . esc_url(home_url('/')) . 'wp-content/themes/video-tv/inc/img/envoyer_video.png" alt=""> </li></a>';
}

?>

</div>

