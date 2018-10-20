<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Saufhampton
 */

get_header();
get_sidebar();
?>
<section class="blog">
    <div class="blog__wrapper">
	<?php
		if (have_posts()) : while (have_posts()) : the_post(); ?>
         <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div class="entry">
        <?php the_content(); ?>
	</div>
    <?php endwhile; endif; ?>

    <?php
    /*
     * Kommentare sind auf Seiten deaktiviert.
     * Möchtest du die Kommentarfunktion auf Seiten aktivieren, entferne einfach die beiden "//"-Zeichen vor "comments_template();"
     */

    //comments_template();
    ?>
    </div>
</section>
<?php
get_footer();
