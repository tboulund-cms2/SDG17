<?php get_header()?>

    <?php while(have_posts()): the_post() ?>
       <section class="top">
            <h1 class="overskrift"><?php the_field("overskrift_1")?></h1>
            <a href=""><p class="knap">Forum</p></a>
            
       </section>

       <section class="mid">
       <h2 class="overskrift2"><?php the_field("overskrift_2")?></h2>
        <div class="midmid">
            <p class="text2"><?php the_field("text_2")?></p>
            <iframe width="560" height="315" src="<?php the_field("video") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

       </section>
       <section class="bund">
            <h2 class="overskrift3"><?php the_field("overskrift_3")?></h2>
            <p class="text3"><?php the_field("text_3")?></p>
        </section>
    <?php endwhile ?>
    
<?php get_footer(); ?>