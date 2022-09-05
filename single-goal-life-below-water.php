<?php get_header()?>
    <?php while(have_posts()): the_post() ?>






    <section id="headline-section" class="col-12">
        <div class="col-12 headline-box">

            <img src="<?php the_field("headline_image") ?>" alt="headline" class="col-2">

            <div class="col-10">

                 <h1><?php the_field("headline_text") ?></h1>

            </div>
        </div>
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