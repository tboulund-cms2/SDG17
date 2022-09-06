<?php get_header() ?>
<?php while (have_posts()) : the_post() ?>






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



    <section id="quote-section" class="col-12">
        <div class="col-12 quote-up">
            <div class="col-3"></div>
            <div class="col-6 text-color">
                <h2><?php the_field("quote") ?></h2>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="col-12">
            <div class="col-12 quote-down">
                <div class="col-4"></div>
                <div class="col-4 text-color">
                    <h2><?php the_field("quote_author") ?></h2>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>

    <section id="informative-section"  class="col-12">
        <img class="informative-image" src="<?php the_field("informative_image") ?>" alt="">
        </div>
    </section>


    <section id="targets-section" class="col-8">
        <div class="col-12">
            <h2><?php the_field("headline") ?></h2>
        </div>


    <div class="another-container d-flex justify-content-center col-8">
        <div class="col-12 target-container">
            <div class="col-6 target-left">
                <div class="col-4">
                    <img class="target-image" src="<?php the_field("target_image") ?>" alt="">
                </div>
                <div class="col-8">
                    <div class="col"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description") ?>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>









            <div class="col-6 target-right">
                <div class="col-4">
                    <img class="target-image" src="<?php the_field("target_image_2") ?>" alt="">
                </div>
                <div class="col-8">
                    <div class="col"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_2") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_2") ?>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        <div class="col-12 target-container">
            <div class="col-6 target-left">
                <div class="col-4">
                    <img class="target-image" src="<?php the_field("target_image_3") ?>" alt="">
                </div>
                <div class="col-8">
                    <div class="col"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description") ?>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>

            <div class="col-6 target-right">
                <div class="col-4">
                    <img class="target-image" src="<?php the_field("target_image_4") ?>" alt="">
                </div>
                <div class="col-8">
                    <div class="col"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_2") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_2") ?>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
        </div>
    </section>

<?php endwhile ?>

<?php get_footer(); ?>