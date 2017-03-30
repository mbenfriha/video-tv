<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Video-TV
 * @since Video-TV 1.0
 */

get_header(); ?>

<div class="allVideo">

	<h1><?php the_title(); ?></h1>

	<div id="content" class="videos">

		<?php the_content(); ?>

	</div>



</div>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
