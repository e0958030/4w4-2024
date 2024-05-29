<?php
/**
* template-part ou gabarit pour créer une carte
*/ 
?>


<div class="carte">
    <!-- Pour afficher une image de l'article qui a été mise en avant -->
    <?php the_post_thumbnail('thumbnail'); ?>
    <h3><?php the_title() ?></h3>
    <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
    <?php the_category(); ?>

    <!-- Pour ajouter un lien vers l'article -->
    <a style="font-size: 2rem" href="<?php the_permalink(); ?>">SUITE</a>
</div>