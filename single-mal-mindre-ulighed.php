<?php get_header()?>

    <?php while(have_posts()): the_post() ?>
       <section class="top">
            <div class="logo">
            </div>
            <h1 class="overskrift"></h1>
            <p class="knap"></p>
       </section>

       <section class="mid">
        <h2 class="tektop"></h2>
        <div class="midmid">
            <p class="textbox1"></p>
            <div class="video"></div>
        </div>

       </section>
       <section class="bund">
          <h2 class="tektop"></h2>
          <p class="textbox1"></p>
        </section>
    <?php endwhile ?>
    
<?php get_footer(); ?>