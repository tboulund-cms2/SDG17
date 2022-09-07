<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner">
            <div class="col-md-12 backgroundimg" style="background-image: url(<?php the_field("banner") ?>)">
                <h1>Bæredygtig energi</h1>
                <div class="col-md-12 btns">
                    <a href="/sdg17/groups/baeredygtig-energi/members/all-members/"><p>Forums</p></a>
                    <a href="#goals">Mål for bæredygtig energi</a>
                </div>
            </div>
        </section>
        <section class="info1">
            <div class="col-md-12 headertext"><?php the_field("info1_overskrift")?></div>
            <div class="col-md-12 infotext"><?php the_field("info1_text")?></div>

        </section>
        <section class="info2"></section>
        <section class="info3"></section>
        <section class="goals" id="goals"></section>

    <?php endwhile ?>
    
<?php get_footer(); ?>