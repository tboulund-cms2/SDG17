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
</div>


    <section id="informative-section"  class="col-12">
        <img class="informative-image" src="<?php the_field("informative_image") ?>" alt="">
    </section>

<div class="container">


    <section id="targets-section" class="col-12">
        <div class="col-12">
            <h2><?php the_field("headline") ?></h2>
        </div>


     <div class="another-container col-12">
        <div class="col-12 target-container">
        <div class="one">
            <div class="col-6 target-left">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline") ?><br><br>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 target-right">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_2") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_2") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_2") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
         
        </div>
        <div class="two">
            <div class="col-6 target-left">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_3") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_3") ?><br><br>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_3") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 target-right">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_4") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_4") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_4") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="three">
            <div class="col-6 target-left">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_5") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_5") ?><br><br>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_5") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 target-right">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_6") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_6") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_6") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="four">
            <div class="col-6 target-left">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_7") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_7") ?><br><br>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_7") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 target-right">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_8") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_8") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_8") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="five">
            <div class="col-6 target-left">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_9") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_9") ?><br><br>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_9") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 target-right">
                <div class="col-3">
                    <img class="target-image" src="<?php the_field("target_image_10") ?>" alt="">
                </div>
                <div class="col-9 boox">
                    <div class="col-1"></div>
                    <div class="col-10 target-box">
                        <div class="col-12 target-box-headline">
                            <?php the_field("target_headline_10") ?>
                        </div>
                        <div class="col-12 target-box-description">
                            <?php the_field("target_description_10") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            </div>
        </div>
 
        </div>
    </section>


    <section id="things-section" class="col-12">
        <div class="col-12">
            <h2><?php the_field("headline_2") ?></h2>
        </div>

        <div class="one">
            <div class="col-6 things-left">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 things-right">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_2") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
         
        </div>
        <div class="two">
            <div class="col-6 things-left">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_3") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 things-right">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_4") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
         
        </div>
        <div class="three">
            <div class="col-6 things-left">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_5") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>



            <div class="col-6 things-right">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_6") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
         
        </div>
        <div class="four">
            <div class="col-6 things-left">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12">
                            <?php the_field("light_bulb_desctiption_7") ?>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
            
            <div class="col-6 things-right">
                <div class="col-3">
                    <img class="things-image" src="<?php the_field("light_bulb_icon") ?>" alt="">
                </div>
                <div class="col-9">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <div class="col-12 link">
                        <a href="<?php the_field("life_below_water_group") ?>">
                            <p>Continue to the group members</p>
                        </a>
                        </div>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>

        </div>
    </section>


    <section id="goals-section" class="col-12">
        <div class="col-12">
            <h2><?php the_field("headline_3") ?></h2>
        </div>


        <div class="goals-container">
            <div class="col-3">
                <a href="<?php the_field("no_poverty_page") ?>">
                    <img class="things-image" src="<?php the_field("goal_1") ?>" alt="">
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
            <a href="#">
                <img class="things-image" src="<?php the_field("goal_2") ?>" alt="">
                </a>
            </div>
            <div class="col-1"></div>
            <div class="col-3">
            <a href="<?php the_field("good_health_page") ?>">
                 <img class="things-image" src="<?php the_field("goal_3") ?>" alt="">
                 </a>
             </div>
        </div>

    </section>

    <section id="newsletter-section" class="col-12">
        <div class="col-12">
            <h2><?php the_field("headline_4") ?></h2>
        </div>


        <div class="goals-container">
            <div class="col-12">
                <div class="col-6">
                    <h3><?php the_field("updated_text") ?></h3>
                </div>
                <div class="col-6">
                    <div class="col-12">
                        <h4><?php the_field("headline_5") ?></h4>
                    </div>
                    <div class="col-12">
                        <label for="email">Enter your email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
            </div>

</div>
    </section> 



<?php endwhile ?>

<?php get_footer(); ?>