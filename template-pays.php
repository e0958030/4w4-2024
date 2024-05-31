<?php
/**
 * Template name: Pays
 *
 */
?>

<?php get_header(); ?>
<main class="main__pays">
<?php
if ( have_posts() ) : the_post(); ?>
<h2><?= get_the_title(); ?></h2>
<span></span>
<div id="description_cat">
    <?php the_content();?>  
    <span></span>
</div>
<?php endif;?>
</main><!-- #main -->
<?php
get_footer();