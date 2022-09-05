<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner">
            <div class="col-md-12 backgroundimg" style="background-image: url(<?php the_field("banner") ?>)">
                <h1>Bæredygtig energi</h1>
                <div class="col-md-12 btns">
                    <a href="/sdg17/groups/baeredygtig-energi/members/all-members/"><p>Forums</p></a>
                    <button class="col-md-6 mål"><p>Mål for bæredygtig energi</p></button>
                    <button class="col-md-6 forum"><p>Verdensmålets forum</p></button>
                </div>
            </div>
        </section>
        <section class="info1"></section>
        <section class="info2"></section>
        <section class="info3"></section>
        <section class="goals"></section>

    <?php endwhile ?>
    
<?php get_footer(); ?>