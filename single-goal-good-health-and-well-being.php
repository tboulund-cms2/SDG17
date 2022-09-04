<?php get_header()?>
<?php while(have_posts()): the_post() ?>




<!-- Actions Section - Rose -->


    <h2>
        <?php 
            the_field("action_title")
        ?>
    </h2>



 <!-- End of Actions Section - Rose -->
 <?php endwhile ?>

<?php get_footer(); ?>