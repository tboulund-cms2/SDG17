<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner"></section>
        <section class="info1"></section>
        <section class="info2"></section>
        <section class="info3"></section>
        <section class="goals"></section>

    <?php endwhile ?>
    
<?php get_footer(); ?>