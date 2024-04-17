<?php get_header(); ?>  
   <section id="accueil">
    <!-- <h2>single.php</h2>  -->
    <span></span>
        <div class="cours">             
            <?php
                if (have_posts()): the_post(); 
                    $titre = get_the_title(); ?> 
                        <div class="carte">
                            <h3><?php echo $titre; ?></h3>
                            <span></span>
                            <!-- Ajouter l'image de mise à l'avant -->
                            <?php the_post_thumbnail('large'); ?>
                            <p><?php the_content();?></p>                                     
                        </div>        
            <?php endif; ?>  
            </div>     
            <span></span>
    </section>
    </div>    

 <!-- Récupérer le footer php -->
 <?php get_footer(); ?>