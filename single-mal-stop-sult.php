<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <h1 class="mal2">MÅL 2</h1>
    
    <div class="col">
    <div class="box">
    <h1 class="overskrift"> <?php the_title() ?></h1>
    </div>
        <div class="box">
         <p class="tekst"><?php the_field("text") ?></p> 
       </div>
        <img class="image" src="<?php the_field("image-2") ?>" alt="">
        <div class="box">
        <p class="tekst"><?php the_field("text-3") ?></p> 
        </div> 
        <img class="image" src="<?php the_field("image-4") ?>" alt="">
    </div>   
    
    <div class="col-1">
    <img class="image" src="<?php the_field("image") ?>" alt="">
    <div class="box">
        <p class="tekst"><?php the_field("text-2") ?></p> 
        </div>  
        <img class="image" src="<?php the_field("image-3") ?>" alt="">
        <div class="box">
        <p class="tekst"><?php the_field("text-4") ?></p> 
        </div> 
    </div>

    <button> Forum </button>

    <div class="video">
<iframe width="560" height="315" src="https://youtu.be/2UK5mY8b8gg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
    
    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>