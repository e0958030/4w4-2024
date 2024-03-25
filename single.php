<!-- Page HTML pour le labo 4 par Camilia El Moustarih -->

    <!-- Récupérer l'entete php -->
    <?php get_header(); ?>
    
   
   <section id="accueil">
    <h2>single.php</h2> 
    <span></span>
        <div class="cours">             
            <?php
                if (have_posts()): the_post(); 
                    $titre = get_the_title(); ?> 
                        <div class="carte">
                            <h4><?php echo $titre; ?></h4>
                            <p><?php the_content();?></p>                                     
                        </div>        
            <?php endif; ?>  
            </div>     
    </section>
    </div>    

 <!-- Récupérer le footer php -->
 <?php get_footer(); ?>