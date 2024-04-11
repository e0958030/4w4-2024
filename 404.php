<!-- Fichier PHP pour la page d'erreur -->

<!-- Récupérer l'entete php -->
<?php get_header(); ?>

<!-- Contenu principal -->
<div id="erreur_404" class="global">
    <section>
        <h2>Erreur 404</h2>
        <span></span>
        <h3>Vous essayez d'accéder à une page qui n'existe pas...</h3>
        <span></span>
        <p>Pour revenir à la page d'accueil, cliquez sur le lien suivant :</p>
        <span></span>

        <!-- Bouton pour retourner à la page d'accueil -->
        <span></span>
        <a href="#entete"><button id="btn-evnt"> <a href="<?php echo get_bloginfo('url'); ?>"> <?php echo get_bloginfo('name'); ?></a> </button></a>
    </section>

    <!-- Image de la librairie médias -->
    <a href="<?php echo get_bloginfo('url'); ?>"><img src="http://localhost:8080/4w4camilia/wp-content/uploads/2024/04/logoIntra.png"></a>
</div>

<!-- Pied de page -->
<!-- Récupérer le footer php -->
<?php get_footer(); ?>

<!-- Ajouter le menu avec toutes les catégories -->
<div id="liensCatFooter">
    <?php wp_nav_menu(array("container" => "nav", "menu" => "principal")); ?>
</div>