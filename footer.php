<div id="footer" class="global  clr-agencement-primaire">
    <div class="motif-footer">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" style="fill:var(--couleur-arriere-galerie)"></path>
        </svg>
    </div>
    <footer>
        <h2>À propos de nous</h2>
        <span>
            <blockquote>
                <div id="iconesSociaux">
                    Au plaisir de vous rencontrer ! N'hésitez-pas à nous contacter.
                    <ul>
                        <span class="material-symbols-outlined">ring_volume</span>
                        123 456 7890
                    </ul>
                    <ul>
                        <span class="material-symbols-outlined">pin_drop</span>
                        <a href="https://maps.app.goo.gl/RjgTih8oXfMGS9iF8">
                            3 800, rue Sherbrooke Est Montréal H1X 2A2
                        </a>
                    </ul>
                    <ul>
                        <span class="material-symbols-outlined">verified_user</span>
                        <a href="">Politique de confidentialité</a>
                    </ul>
                    <ul>
                        <span class="material-symbols-outlined">contact_support</span>
                        <a href="">Foire aux questions</a>
                    </ul>
                    <ul>
                        <span class="material-symbols-outlined">stacked_email</span>
                        <a href="mailto:communic@cmaisonneuve.qc.ca">Écrivez-nous</a>
                    </ul>
                </div>
                <div id="imgFooter"></div>
            </blockquote>

            <!-- Menu personnalisé WP pour le footer -->
            <div class="menu__footer">
                <?php wp_nav_menu(array("container" => "nav", "menu" => "piedgpage")); ?>
            </div>

            <span></span>
            <blockquote id="txtFooter">
                <h4>Site fait par Camilia El Moustarih lors du cours de 582-4W4-MA - Hiver 2024</h4>
                <span></span>
                <h4><a href="https://e0958030.github.io/4w4-2024/">>>> Lien GitHub Page <<< </a>
                </h4>
                <span></span>
                <h4><a href="https://github.com/e0958030/4w4-2024/tree/tp2">>>> Lien GitHub de la branche TP2 <<< </a>
                </h4>
                <span></span>
                <p>Description du TP2 : Création d'un site de voyage avec WordPress</p>
                <?php echo get_custom_logo(); ?>
                <!-- Icônes des réseaux sociaux SVG Icons -->
                <div class="iconesReseauxSociaux">
                    <ul>
                        <li><a href="https://fr-ca.facebook.com/maisonneuvetim/" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.325v21.351C0 23.404.597 24 1.325 24h11.488v-9.294H9.691v-3.622h3.122V8.413c0-3.1 1.894-4.788 4.66-4.788 1.325 0 2.463.099 2.797.143v3.24h-1.918c-1.504 0-1.796.715-1.796 1.763v2.31h3.588l-.467 3.622h-3.121V24h6.116C23.403 24 24 23.403 24 22.676V1.325C24 .597 23.403 0 22.675 0z" />
                                </svg>
                                Facebook
                            </a></li>
                        <li><a href="https://twitter.com/cdemaisonneuve?lang=en" aria-label="Twitter">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M23.954 4.569c-.885.392-1.83.656-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.594-1.559-2.717 0-4.917 2.2-4.917 4.917 0 .385.045.761.127 1.124C7.728 8.087 4.1 6.128 1.67 3.149c-.422.722-.666 1.561-.666 2.475 0 1.708.87 3.213 2.188 4.099-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.828-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.085.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.396 0-.787-.023-1.175-.067 2.179 1.396 4.768 2.209 7.557 2.209 9.054 0 14.001-7.496 14.001-13.986 0-.209 0-.42-.015-.63.961-.695 1.8-1.562 2.46-2.548l-.047-.02z" />
                                </svg>
                                Twitter
                            </a></li>
                        <li><a href="https://www.instagram.com/maisonneuvetim/" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.246 2.242 1.308 3.608.058 1.266.069 1.646.069 4.851 0 3.204-.012 3.584-.07 4.85-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.246-3.608 1.308-1.266.058-1.646.069-4.851.069-3.204 0-3.584-.012-4.85-.07-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.246-2.242-1.308-3.608C2.175 15.648 2.163 15.268 2.163 12c0-3.204.012-3.584.07-4.85.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.246 3.608-1.308C8.416 2.175 8.796 2.163 12 2.163zm0-2.163C8.735 0 8.332.012 7.052.07 5.748.127 4.479.395 3.326 1.549 2.173 2.702 1.905 3.971 1.847 5.275c-.058 1.28-.07 1.683-.07 4.948s.012 3.667.07 4.948c.058 1.304.326 2.573 1.479 3.726 1.153 1.153 2.422 1.421 3.726 1.479 1.28.058 1.683.07 4.948.07s3.667-.012 4.948-.07c1.304-.058 2.573-.326 3.726-1.479 1.153-1.153 1.421-2.422 1.479-3.726.058-1.28.07-1.683.07-4.948s-.012-3.667-.07-4.948c-.058-1.304-.326-2.573-1.479-3.726C19.521.395 18.252.127 16.948.07 15.668.012 15.265 0 12 0zm0 5.838a6.163 6.163 0 1 0 0 12.326 6.163 6.163 0 0 0 0-12.326zm0 10.163a3.999 3.999 0 1 1 0-7.998 3.999 3.999 0 0 1 0 7.998zm6.406-11.845a1.44 1.44 0 1 0 0 2.879 1.44 1.44 0 0 0 0-2.879z" />
                                </svg>
                                Instagram
                            </a></li>
                        <li><a href="https://www.linkedin.com/in/tim-coll%C3%A8ge-de-maisonneuve-9407b7131/" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.23 0H1.77C.792 0 0 .771 0 1.72v20.56C0 23.229.792 24 1.77 24h20.46c.978 0 1.77-.771 1.77-1.72V1.72C24 .771 23.208 0 22.23 0zM7.09 20.452H3.605V9.039H7.09v11.413zM5.348 7.797a2.107 2.107 0 1 1 0-4.215 2.107 2.107 0 0 1 0 4.215zM20.452 20.452h-3.484V14.88c0-1.332-.027-3.043-1.853-3.043-1.854 0-2.138 1.448-2.138 2.942v5.674H9.493V9.039h3.348v1.561h.047c.466-.885 1.603-1.818 3.299-1.818 3.528 0 4.176 2.321 4.176 5.34v6.33z" />
                                </svg>
                                LinkedIn
                            </a></li>
                    </ul>
                    <span></span>
                    <!-- Récupérer le formulaire de recherche -->
                    <?php get_search_form(); ?>
                </div>
            </blockquote>


            <!-- Bouton pour retour en haut de page -->
            <a href="#menu__entete"><button id="hautPage">Retour</button></a>
    </footer>
</div>

<!-- Ajouter les script de notre plugin -->
<?php wp_footer(); ?>
</body>

</html>