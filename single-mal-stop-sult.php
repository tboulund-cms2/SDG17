<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <h1 class="overskrift"> <?php the_title() ?></h1>


    <div class="first">
      
       <p><?php the_field("text") ?></p> 
        <img class="image" src="<?php the_field("image") ?>" alt="">
    </div>

    <div class="second">
        
    </div>
    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>