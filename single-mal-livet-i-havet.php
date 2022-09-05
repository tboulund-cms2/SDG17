<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="card-container">
    <img src="<?php the_field('hero_picture'); ?>" alt="" />
    </div>

    <div>
      <h1>14</h1>
      <h2>Conserve and sustainably use the oceans, <br>
seas and marine resources for sustainable development</h2> 
    </div>

    <?php endwhile ?>

<?php get_footer() ?>