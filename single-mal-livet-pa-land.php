<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

<div class="container">

    <div class="intro">
        <div class="heading">MÅL 15: LIVET PÅ LANDET</div>
        <div class="row">
            <div class="col-4">
                <img class="intro-image" src="<?php the_field("intro-image") ?>" alt="">
            </div>
            <div class="col-8">
                <h3><?php the_field("intro-text") ?></h3>
            </div>
        </div>

    </div>

    <div class="description">
        <div>
            <p><?php the_field("description-1") ?></p>
        </div>
        <div>
            <p><?php the_field("description-2") ?></p>
        </div>
        <div>
            <img class="image-1" src="<?php the_field("image-1") ?>" alt="">
        </div>

    </div>

    <div class="video">

    </div>

    <div class="second-description">
        <div class="description-3">
            <p><?php the_field("description-3") ?></p>
            <p><?php the_field("description-4") ?></p>
        </div>
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <img class="image-2" src="<?php the_field("image-2") ?>" alt="">
                </div>
            </div>
    </div>

    <div class="small-goals">
        <h2>VERDENSMÅL 15 I DELMÅL OG INDIKATORER</h2>
                                <?php $loop = new WP_Query(array("post_type" => "livetpåland-goals", "posts_per_page" => -1)) ?>
                                    <?php while($loop->have_posts()): $loop->the_post() ?>
                                            <div>
                                                <div>
                                                <img src="<?php the_field("icon") ?>" alt="">
                                                </div>
                                                <div>
                                                    <h3><?php the_field("title") ?></h3>
                                                    <p><?php the_field("text-field") ?></p>
                                                </div>
                                            </div>

                                    <?php endwhile ?>
                                    <?php wp_reset_postdata() ?>
    </div>

    <div class="image">
        <img class="image" src="<?php the_field("image") ?>" alt="">
    </div>

    <div class="all-goals">

    </div>

</div>

<?php endwhile ?>

<?php get_footer(); ?>