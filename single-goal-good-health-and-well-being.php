<?php get_header()?>
    <?php while(have_posts()): the_post(); ?>




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
        <div class="row action-items-section d-flex flex-wrap">
            <div class="item-group-1 mb-5">
                <div class="item-image">
                    <?php echo wp_get_attachment_image(337, array('674', '448')); ?>
                </div>  
                <h3>
                    <?php the_field("action_item_title_1") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description") ?>
                </p>
            </div>
            <div class="item-group-2">
                <div class="item-image">
                    <?php echo wp_get_attachment_image(338, array('674', '448')); ?>
                </div>  
                <h3>
                    <?php the_field("action_item_title_2") ?>
                </h3>
                <p>
                    <?php the_field("action_item_description_2") ?>
                </p>
            </div>
        </div>
    </div>

        



    <!-- End of Actions Section - Rose -->
    <?php endwhile ?>

<?php get_footer(); ?>