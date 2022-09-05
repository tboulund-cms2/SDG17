<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner">
            <div class="col-sm-12 backgroundimg" style="background-image: url(<?php the_field("banner") ?>)">
                <h1>Bæredygtig energi</h1>
            </div>
        </section>
        <section class="info1"></section>
        <section class="info2"></section>
        <section class="info3"></section>
        <section class="goals"></section>

    <?php endwhile ?>
    
<?php get_footer(); ?>