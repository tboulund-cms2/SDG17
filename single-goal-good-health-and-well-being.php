<?php get_header()?>
    <?php while(have_posts()): the_post(); ?>


    <!-- Actions Section - Leifur -->

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

                <div class="main-info-grid-icon">
                    <div class="main-info-grid-icon-box">
                        <?php echo wp_get_attachment_image(360, array('40', '40')); ?>
                        <p><?php the_field("small_icon_text") ?></p>
                    </div>


                </div>
                
            </div>
        </div>

    </div>

    <!-- End of Actions Section - LEifur -->


    <!-- Actions Section - Rose -->
    <div class="action-section container">
        <div class="row action-title-section">
            <h2>
                <?php the_field("action_title") ?>
            </h2>
            <p>
                <?php the_field("action_description") ?>
            </p>
        </div>
        <div class="row action-items-section d-flex flex-row flex-wrap ">
            <div class="item-group-1 mb-5 col-12 col-xl-6">
                <div class="item-image item-image-1">
                    <?php echo wp_get_attachment_image(337, array('565', '375.55')); ?>
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_1") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description") ?>
                </p>
            </div>
            <div class="item-group-2 mb-5 col-12 col-xl-6">
                <div class="item-image item-image-2">
                    <?php echo wp_get_attachment_image(338, array('565', '375.55')); ?>
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_2") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_2") ?>
                </p>
            </div>
            <div class="item-group-3 mb-5 col-12 col-xl-6">
                <div class="item-image item-image-3">
                    <?php echo wp_get_attachment_image(339, array('565', '375.55')); ?>
                </div>  
                <h3 class="my-2">
                    <?php the_field("action_item_title_3") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_3") ?>
                </p>
            </div>
            <div class="item-group-4 col-12 col-xl-6">
                <div class="item-image item-image-4">
                    <?php echo wp_get_attachment_image(340, array('565', '375.55')); ?>
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


    <?php endwhile ?>

<?php get_footer(); ?>