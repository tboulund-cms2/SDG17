<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

    <section class="body">
            <h1>Body</h1>
        </section>

    <?php endwhile ?>
    
<?php get_footer(); ?>