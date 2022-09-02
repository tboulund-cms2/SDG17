<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

    <section class="body">
    <div class="row">
         <div class="top-headline col-11">
            <div class="col-2">
                <img class="headline-image" src="<?php the_field("headline_image") ?>" alt="">
            </div>

            <div class="col-2"></div>

            <div class="headline-text col-6">
                <p><?php the_field("headline_text") ?></p>
            </div>
            
            <div class="col-2"></div>        
                    
        </div>
        <div class="col-1"></div>
    </div>
        </section>

    <?php endwhile ?>
    
<?php get_footer(); ?>