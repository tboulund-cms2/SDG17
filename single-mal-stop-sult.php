<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <h1 class="overskrift"> <?php the_title() ?></h1>


    <div class="first">
      
       <p class="tekst"><?php the_field("text") ?></p> 
        <img class="image" src="<?php the_field("image") ?>" alt="">
    </div>

    <div class="second">
    <img class="image-2" src="<?php the_field("image-2") ?>" alt="">
    <p class="tekst"><?php the_field("text-2") ?></p> 
       
    </div>

    <div class="third">
    <p class="tekst"><?php the_field("text-3") ?></p> 
        <img class="image" src="<?php the_field("image-3") ?>" alt="">
    </div> 

    <div class="fourth">
    <img class="image" src="<?php the_field("image-4") ?>" alt="">
    <p class="tekst"><?php the_field("text-4") ?></p> 
    </div>

    <button> Forum </button>
    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>