<!-- Page HTML pour le labo 4 par Camilia El Moustarih -->

    <!-- Récupérer l'entete php -->
    <?php get_header(); ?>
    
   <h1>single.PHP</h1> 
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
            <span></span>         
            <p id="rectangleGalerie">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae, beatae eligendi delectus saepe molestias amet ad corporis alias officiis reprehenderit excepturi aliquid eaque nostrum magnam impedit laboriosam asperiores soluta. Veniam?</p>
        
        </section>
        <div class="vague-galerie">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>

    <?php  get_template_part('gabarits/vague'); ?>

 <!-- Récupérer l'entete php -->
 <?php get_footer(); ?>