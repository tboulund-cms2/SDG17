<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <h1 class="overskrift"> <?php the_title() ?></h1>


    <div class="first">
      
       <p><?php the_field("text") ?></p> 
        <img class="image" src="<?php the_field("image") ?>" alt="">
    </div>

    <div class="second">
    <img class="image" src="<?php the_field("image-2") ?>" alt="">
    <p><?php the_field("text-2") ?></p> 
       
    </div>

    <div class="third">
    <p><?php the_field("text-3") ?></p> 
        <img class="image" src="<?php the_field("image-3") ?>" alt="">
    </div> 
    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>