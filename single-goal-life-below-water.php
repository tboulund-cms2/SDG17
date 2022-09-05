<?php get_header()?>
    <?php while(have_posts()): the_post() ?>






    <section id="headline-section" class="col-12">
        <div class="col-12 headline-box">
            <div class="col-1"></div>
                <img src="<?php the_field("headline_image") ?>" alt="headline" class="col-2">

                <div class="col-9 headline-text">
                    <div class="col-2"></div>
                    
                    <div class="col-8 text-color">
                        <h1><?php the_field("headline_text") ?></h1>
                    </div>
                    <div class="col-2"></div>
            </div>
        </div>
    </section>

               
                
                <section class="quote-section">
                    <div class="col-12 quote-up">
                            <div class="col-3"></div>
                            <div class="col-6">
                                <h2><?php the_field("quote") ?></h2>
                            </div>
                            <div class="col-3"></div>
                    </div>
                        
                    <div class="col-12">
                        <div class="col-12 quote-down">
                                <div class="col-4"></div>
                                <div class="col-4">
                                    <h2><?php the_field("quote") ?></h2>
                                </div>
                                <div class="col-4"></div>
                        </div>
                    </div>
                </section>

                <section class="part_3">
                    <div class="col-12">
                            <img class="informative-image" src="<?php the_field("informative_image") ?>" alt="">
                    </div>
                </section>
        

    <?php endwhile ?>
    
<?php get_footer(); ?>