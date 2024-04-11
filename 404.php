<!-- Fichier PHP pour la page d'erreur -->

<!-- Récupérer l'entete php -->
<?php get_header(); ?>

<!-- Contenu principal -->
<div id="erreur_404" class="global">
    <section>
        <h2>Erreur 404</h2>
        <p>Vous essayez d'accéder à une page qui n'existe pas...</p>
        <p>Pour revenir à la page d'accueil, cliquez sur le lien suivant :</p>
        <h4><?php echo get_bloginfo('name'); ?></h4>
        <h5><?php echo get_bloginfo('url'); ?></h5>
        <a href="<?php echo get_bloginfo('url'); ?>"> <?php echo get_bloginfo('name'); ?></a>
    </section>
    </header>
</div>

<!-- Pied de page -->
<!-- <div id="footer" class="global">
    <div class="motif-footer">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" style="fill:var(--couleur-arriere-galerie)"></path>
        </svg>
    </div>   
</div>  -->

    <!-- Récupérer le footer php -->
    <?php get_footer(); ?>
    
    <!-- Ajouter le menu avec toutes les catégories -->
    <div id="liensCatFooter">
        <?php wp_nav_menu(array("container" => "nav", "menu" => "principal")); ?>
    </div>