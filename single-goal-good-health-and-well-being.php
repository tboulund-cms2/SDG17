<?php get_header()?>
    <?php while(have_posts()): the_post(); ?>

    <!-- start by Jianming -->
    <div class="navbar"> 
        <div class="row navbar-section"></div>       
            <div class="logo-box col-12 my-2 d-flex justify-content-center align-items-center">
                <img class="square-logo col-2" src="<?php the_field("square_logo") ?>" alt="">
            </div>           
        </div>
    </div>      
     
    <div class="hero-section text-center">              
        <img class="hero-image img-fluid" src="<?php the_field("hero_image") ?>" alt="">
            <div class="row hero-content bg-primary">
                <div class="hero-title-section col-12">                    
                    <h1 class="hero-title text-wrap col-4"><?php the_field("hero_title") ?></h1>
                    <h5 class="hero-subtitle text-wrap col-4"><?php the_field("hero_subtitle") ?></h5>
                    <div class="call-to-action my-2">
                        <a class="btn btn-cta" role="button" href="http://boulund.com/sdg17/groups/good-health-and-well-being/forum/good-health-and-well-being/" target="_blank"> Join the Forum </a>
                    </div>
                </div> 
            </div>      
    </div>

    <div class="data-section text-center my-3">
        <div class="row data-group mx-5 px-5 row-cols-1 row-cols-sm-2 row-cols-md-4">                
            <div class="data-group-1 col ml-5">
                <h1 class="data-number"><?php the_field("data_number_1") ?></h1>
                <p class="data-description"><?php the_field("data_description_1") ?></p>
            </div>  
            <div class="data-group-2 col">
                <h1 class="data-number"><?php the_field("data_number_2") ?></h1>
                <p class="data-description"><?php the_field("data_description_2") ?></p>
            </div> 
            <div class="data-group-3 col">
                <h1 class="data-number"><?php the_field("data_number_3") ?></h1>
                <p class="data-description"><?php the_field("data_description_3") ?></p>
            </div> 
            <div class="data-group-4 col mr-5">
                <h1 class="data-number"><?php the_field("data_number_4") ?></h1>
                <p class="data-description"><?php the_field("data_description_4") ?></p>
            </div>  
        </div>
    </div>

    <div class="new-goal-section text-center text-wrap">
        <div class="row new-goal-content my-3">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column flex-wrap">
                <p class="col-4 d-flex justify-content-center align-items-center flex-column flex-wrap">
                    <?php the_field("the_new_goal_") ?>
                </p> 
            </div>
        </div>                         
    </div>    
    <!-- end by Jianming -->
    
    
    <!-- Targets Section - Leifur -->

<div class="target-section-container">
    <div class="main-card-target">
        <div class="main-icon-img">
            <?php echo wp_get_attachment_image(321, array('500', '500')); ?>
        </div>
        <div class="main-info-grid">
            <div class="main-info-grid-title">
                <h2 class="target-h2"><?php the_field("target_title") ?></h2>
                <p><?php the_field("target_description") ?></p>
            </div>

            <div class="box-container-for-icons">
                <div class="main-info-grid-icon">
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image") ?>" alt="">
                        <p><?php the_field("small_icon_text") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy2") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy2") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy3") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy3") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy4") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy4") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy5") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy5") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy6") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy6") ?></p>
                    </div>


                </div>

                <div class="main-info-grid-icon">
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy7") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy7") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy8") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy8") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy9") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy9") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy10") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy10") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy11") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy11") ?></p>
                    </div>
                    <div class="main-info-grid-icon-box">
                        <img src="<?php the_field("small_icon_image_copy12") ?>" alt="">
                        <p><?php the_field("small_icon_text_copy12") ?></p>
                    </div>


                </div>
            </div>

        </div>
    </div>

</div>

    <!-- End of Targets Section - LEifur -->


    <!-- Actions Section - Rose -->
    <div class="action-section container">
        <div class="row action-title-section my-5">
            <div class="col-12 d-flex justify-content-center align-items-center flex-column flex-wrap">
                <div class="action-title-container col-12 col-xl-6 d-flex justify-content-center align-items-center flex-column flex-wrap">
                    <h2>
                        <?php the_field("action_title") ?>
                    </h2>
                    <p class="action-title-desc-container">
                        <?php the_field("action_description") ?>
                    </p>
                </div>
                   
            </div>
        </div>
        <div class="row action-items-section d-flex flex-row flex-wrap justify-content-center">
            <div class="item-group-1 mb-5 col-12 col-xl-6 px-5">
                <div class="item-image item-image-1">
                     <img class="action-item-image" src="<?php the_field("action_item_image_1") ?>" alt="Support Goal 3 Charity">
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_1") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description") ?>
                </p>
            </div>
            <div class="item-group-2 mb-5 col-12 col-xl-6 px-5">
                <div class="item-image item-image-2">
                    <img class="action-item-image" src="<?php the_field("action_item_image_2") ?>" alt="Register in Donors Registry">
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_2") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_2") ?>
                </p>
            </div>
            <div class="item-group-3 mb-5 col-12 col-xl-6 px-5">
                <div class="item-image item-image-3">
                    <img class="action-item-image" src="<?php the_field("action_item_image_3") ?>" alt="Get Vaccinate">
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_3") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_3") ?>
                </p>
            </div>
            <div class="item-group-4 col-12 col-xl-6 px-5">
                <div class="item-image item-image-4">
                    <img class="action-item-image" src="<?php the_field("action_item_image_4") ?>" alt="Donate Blood">
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_4") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_4") ?>
                </p>
            </div>
        </div>
    </div>
<!-- End of Actions Section - Rose -->

    <?php endwhile ?>

<?php get_footer(); ?>