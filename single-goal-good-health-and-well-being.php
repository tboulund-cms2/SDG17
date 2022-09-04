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
        <div class="row action-items-section">
            <div class="item-image">
                <?php echo wp_get_attachment_image(337, array('674', '448')); ?>
            </div>
        </div>
    </div>

        



    <!-- End of Actions Section - Rose -->
    <?php endwhile ?>

<?php get_footer(); ?>