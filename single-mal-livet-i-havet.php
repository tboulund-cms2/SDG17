<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="card-container">
    <?php the_field("hero_picture") ?>" alt="">
    </div>

    <?php endwhile ?>

<?php get_footer() ?>