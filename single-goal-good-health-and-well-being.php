<?php get_header()?>
    <?php while(have_posts()): the_post() ?>




    <!-- Actions Section - Rose -->
    <div class="action-section container">
        <h2>
                This is a sample text
                <?php 
                    the_field("action_title")
                ?>
         </h2>
    </div>

        



    <!-- End of Actions Section - Rose -->
    <?php endwhile ?>

<?php get_footer(); ?>