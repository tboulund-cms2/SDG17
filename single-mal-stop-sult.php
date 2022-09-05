<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <h1 class="overskrift"> <?php the_title() ?></h1>


    <div class="first">
        <p> text </p>
        <?php the_field("text") ?>
    </div>

    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>