<html <?php language_attributes(); ?>>
<head>

    <title>Linsolite v1.0</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="inc/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="inc/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="inc/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="inc/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="inc/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="inc/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="inc/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="inc/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="inc/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="inc/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="inc/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="inc/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="inc/img/favicon-16x16.png">
    <link rel="manifest" href="inc/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="inc/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <script src="https://use.fontawesome.com/250b302b5a.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>


<?php wp_head( ) ?>
    <?php if (have_posts()):while(have_posts()):the_post(); endwhile; endif;?>
    <!-- the default values -->
    <meta property="fb:app_id" content="683931481746708" />

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
        <meta property="og:type" content="website" />
        <meta property="og:image" content="http://linsolite.tv/wp-content/uploads/2015/01/trans.png" /> <?php } ?>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-51466246-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({appId: '683931481746708', status: true, cookie: true,
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

             if (get_option( 'dailymotion_menu', ''))
            echo '<li><a target="_blank" href="'. get_option( 'dailymotion_menu', '').'"> <i class="fa fa-youtube" aria-hidden="true"></i>  </a></li>';

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
            echo '<div class="logo"><a href="'. esc_url( home_url( '/' )).'"><img src="'.get_option( 'top_logo', '').'" alt="logo linsolite.Tv linsolite tv"></a></div>';
        else
            echo  '<div class="logo"><a href="'. esc_url( home_url( '/' )).'"><img src="'. esc_url( home_url( '/' )). 'wp-content/themes/Linsolite V2/inc/img/logo.png" alt="logo linsolite.Tv linsolite tv"></a></div>';

        ?>



    </div>


    <?php wp_nav_menu( array( 'theme_location' => 'Top', 'container_class' => 'menu', 'container_id' => 'menu', 'menu_class' => '' ) ); ?>

<?php

if (get_option( 'send_button', '')) {
    echo '<a href="'. get_option( 'send_button', '') .'"><img class="img-upload" src="' . esc_url(home_url('/')) . 'wp-content/themes/Linsolite V2/inc/img/envoyer_video.png" alt=""> </li></a>';
}

?>



</div>

