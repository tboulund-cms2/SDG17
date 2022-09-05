<?php get_header()?>

    <?php while(have_posts()): the_post() ?>


        <div class="container">
            <div class="row">
                <section class="part_1">
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
                </section>
                
                <section class="part_2">
                    <div class="col-12">
                        <p><?php the_field("quote") ?></p>
                    </div>
                    <div class="col-12">
                        <p><?php the_field("guote_author") ?></p>
                    </div>
                </section>

                <section class="part_3">
                    <div class="col-12">
                            <img class="informative-image" src="<?php the_field("informative_image") ?>" alt="">
                    </div>
                </section>
            </div>
      </div>
        

    <?php endwhile ?>
    
<?php get_footer(); ?>