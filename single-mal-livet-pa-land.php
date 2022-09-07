
<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

<div class="container">

    <div class="intro">
        <div class="heading">MÅL 15: LIVET PÅ LANDET</div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <img class="intro-image" src="<?php the_field("intro-image") ?>" alt="">
            </div>
            <div id="intro-text" class="col-md-8 col-sm-12">
                <h3><?php the_field("intro-text") ?></h3>
            </div>
        </div>

    </div>

    <div class="description">
        <div>
            <p style="padding: 50px 150px 20px 150px;"><?php the_field("description-1") ?></p>
        </div>
        <div>
            <p style="padding: 0px 150px 5px 150px;"><?php the_field("description-2") ?></p>
        </div>
        <div>
            <img class="image-1" src="<?php the_field("image-1") ?>" alt="">
        </div>

    </div>

    <div class="video">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/-ZbMirEktjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="second-description">
        <div class="description-3">
            <p style="padding: 50px 150px 20px 150px;"><?php the_field("description-3") ?></p>
            <p style="padding: 0px 150px 30px 150px;"><?php the_field("description-4") ?></p>
        </div>
            <div class="row">
                <div id="groups" class="col-md-7 col-sm-12">
                    <p style="font-size:30px; font-weight:900 ;">Del din mening!</p>
                    <p style="padding: 0px 150px 30px 150px;">Vær med i fælleskabet og deltag i forskellige forummer. Din mening er vigtig, og her er plads til alles holdninger.</p>
                    <a href="http://boulund.com/sdg17/groups/livet-pa-landet/members/all-members/">
                    <button class="button-34" role="button">BLIV EN DEL AF FÆLLESKABET!</button>
                    </a>

                </div>
                <div class="col-md-5 col-sm-12">
                    <img class="image-2" src="<?php the_field("image-2") ?>" alt="">
                </div>
            </div>
    </div>

    <div class="small-goals">
        <h2>VERDENSMÅL 15 I DELMÅL OG INDIKATORER</h2>
                                <?php $loop = new WP_Query(array("post_type" => "livetpaland-goals", "posts_per_page" => -1)) ?>
                                <?php $i = 0 ?>
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                    <?php $class = ($i % 2 == 0) ? "odd" : "even" ?>
                                            <div class="subgoal <?php echo $class; ?>">
                                                <div id="greenbox" class="col-4">
                                                <img src="<?php the_field("icon") ?>" alt="">
                                                </div>
                                                <div id="subgoal-text" class="col-8">
                                                    <h3 style="color: #707070 !important; font-weight:900 ; padding-left:100px;"><?php the_field("title") ?></h3>
                                                    <p style="color: #707070 ; padding-right:100px; padding-left:100px;"><?php the_field("text-field") ?></p>
                                                </div>
                                            </div>

                                            <?php $i++ ?>

                                    <?php endwhile; wp_reset_query(); ?>
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