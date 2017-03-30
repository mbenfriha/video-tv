<?php get_header(); ?>



<div class="single col s12">
    <div class="single-video">
        <div class="post-video">
            <div class="prev-next">

                <div id="prev">  <?php previous_post_link('%link', '<i class="fa fa-caret-left" aria-hidden="true"></i> previous video'); ?></div>

                <div id="next"><?php next_post_link('%link', 'next video <i class="fa fa-caret-right" aria-hidden="true"></i>'); ?> </div>

            </div>
            <?php echo get_post_meta(get_the_ID(), 'video_tv_code')[0] ?>

            <div class="info-video"> <?php the_time('j F Y') ?> in <?php echo the_category(', ')?> </div>
        </div>
    </div>

    <div class="sub-video">
        <div class="first-sub-video row">
            <div class="content col s12 m7">
                <h1><?php the_title(); ?></h1>
                <?php the_content() ?>
            </div>
            <div class="share col s12 m5">
                <?php
                if(is_active_sidebar('single-sub')){
                    dynamic_sidebar('single-sub');
                }
                ?>
            </div>
            <div class="tags">
                <?php the_tags('Tags: ', ', ', '<br />'); ?>
            </div>
            <?php
            if(get_option( 'ad_single', ''))
                echo '<div class="adv-single">
                <div class="adv">'
                    . get_option( 'ad_single', '') .
                    '</div>
            </div>';
            ?>
        </div>
        <div class="seconde-sub-video">
            <div class="more-video"><h2><?php echo get_option( 'single_title', 'OTHERS' ); ?></h2>
                <ul>
                    <?php

                    // The Query
                    query_posts('orderby=rand&posts_per_page=5&cat='. get_the_category(get_the_ID())[0]->term_id);

                    // The Loop
                    while ( have_posts() ) : the_post();
                        echo
                            '<li>

                               <a href="'. get_permalink(get_the_ID()) .'">' . get_the_post_thumbnail(get_the_ID(), 'small') . '</a>

                                <span class="title-more"> <a href="'. get_permalink(get_the_ID()) .'">' . get_the_title(get_the_ID()). ' </a></span>

                               </li>';


                    endwhile;

                    // Reset Query
                    wp_reset_query();
                    ?>

                </ul>

            </div>


        </div>

        <div id="comment" class="third-sub-video">
            <?php comments_template(); ?>
        </div>
    </div>
    <?php get_footer(); ?>
</div>




