<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner">
            <div class="col-md-12 backgroundimg" style="background-image: url(<?php the_field("banner") ?>)">
                <h1>Bæredygtig energi</h1>
                <div class="col-md-12 btns">
                    <a href="#goals" class="goal">Mål for bæredygtig energi</a>
                    <a href="/sdg17/groups/baeredygtig-energi/members/all-members/" class="forums"><p>Forums</p></a>
                </div>
            </div>
        </section>
        <section class="info1">
            <div class="col-md-12 headertext1"><?php the_field("info1_overskrift")?></div>
            <div class="col-md-12 infotext1"><?php the_field("info1_text")?></div>
        </section>
        <section class="info2">
            <div class="col-md-12 headertext1"><?php the_field("info2_overskrift")?></div>
            <div class="col-md-12 headertext1"><?php the_field("info2_text")?></div>
        </section>
        <section class="info3">
            <div class="col-md-12 headertext1"><?php the_field("info3_overskrift")?></div>
            <div class="col-md-12 headertext1"><?php the_field("info3_text")?></div>
        </section>

        <div class="col-md-12 spacerContainer">
            <div class="col-md-12 spacerLine">
                <div class="col-md-7 spacer"></div>
            </div>
            <div class="col-md-12 spacerLine">
                <div class="col-md-6 spacer"></div>
            </div>
            <div class="col-md-12 spacerLine">
                <div class="col-md-7 spacer"></div>  
            </div>
        </div>

        <section class="goals" id="goals"></section>

    <?php endwhile ?>
    
<?php get_footer(); ?>