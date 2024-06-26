<?php get_header(); ?>  
   <section id="accueil">
    <!-- <h2>single.php</h2>  -->
    <span></span>
        <div class="cours">             
            <?php
                if (have_posts()): the_post(); ?> 
                        <div class="carte">
                            <h3><?php the_title() ?></h3>
                            <span></span>
                            <!-- Ajouter l'image de mise à l'avant -->
                            <?php the_post_thumbnail('medium'); ?>
                            <span></span>
                            <p><?php the_content();?></p>      
                            <span></span>
                            <p>Température minimum : <?php the_field('temperature_minimum'); ?></p>
                            <p>Température maximum : <?php the_field('temperature_maximum'); ?></p>
                            <p>Ville avoisinante : <?php the_field('ville_avoisinante'); ?></p>
                            <p>Appréciation : <?php the_field('appreciation'); ?></p>
                        </div>        
            <?php endif; ?>  
            </div>     
            <span></span>
    </section>
    </div>    

 <!-- Récupérer le footer php -->
 <?php get_footer(); ?>