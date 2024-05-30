<?php
/**
 * Template name: Conference
 *
 */
?>

<?php get_header(); ?>
<main class="site__main">
<?php
if ( have_posts() ) : the_post(); ?>
<h2><?= get_the_title(); ?></h2>
<?php the_content();?>
<p>L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
<p>La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?></p>     
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();