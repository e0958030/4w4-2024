<!-- Template de footer.php -->

<div id="footer" class="global  clr-agencement-primaire">   
        <div class="motif-footer">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M602.45,3.86h0S572.9,116.24,281.94,120H923C632,116.24,602.45,3.86,602.45,3.86Z" style="fill:var(--couleur-arriere-galerie)"></path>
            </svg>
        </div>     
        <footer>            
            <h2>Footer</h2>
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
                        <a href="https://www.google.ca/maps">                        
                        555, rue Omnivox
                        Montréal, Québec
                        (H2W 1G2)
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
                        <a href="https://www.cmaisonneuve.qc.ca">Écrivez-nous</a>
                    </ul>
                </div>
                <div id="imgFooter"></div>

                <!-- Menu personnalisé WP pour le footer -->
                <div class="menu__footer">
                    <?php wp_nav_menu(array("container" => "nav", "menu" => "piedgpage")); ?>
                </div>
            </blockquote>        

            <!-- Bouton pour retour en haut de page -->
             <a href="#menu__entete"><button id="hautPage">Retour</button></a>
        </footer>
    </div>
</body>
</html>