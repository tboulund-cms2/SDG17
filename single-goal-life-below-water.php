<?php get_header()?>
    <?php while(have_posts()): the_post() ?>

    <section id="headline-section" class="d-flex col-md-12 align-items-center justify-content-center info-background">
        <div class="d-flex col-md-10 col-sm-12 flex-column flex-md-row justify-content-center align-items-center justify-content-md-start headline-container">
            <img src="<?php the_field("headline_image") ?>" alt="banner" class="col-12 col-md-3">
            <div class="d-flex col-12 col-md-9 col-xl-9 justify-content-center px-4 banner-text text-center text-md-start">
             <h1><?php the_field("headline_text") ?></h1>
            </div>
        </div>
    </section>

                <section class="part_1">
                    <div class="top-headline col-11">
                        <div class="col-2">
                            <img src="<?php the_field("headline_image") ?>" alt="">
                        </div>

                        <div class="col-2"></div>

                        <div class="headline-text col-6">
                            
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
        

    <?php endwhile ?>
    
<?php get_footer(); ?>