<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="stop-sult">
    <div class="colums">
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
    </div>
 
    <div class="col-2">
    <button class="btn-b2"> Forum </button> 
    <a href="https://www.un.org/development/desa/disabilities/envision2030-goal2.html"> <button class="btn-b2">  Mål </button></a>
    </div>

    <div class="video">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2UK5mY8b8gg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

    </div>
        

    <?php endwhile ?>

<?php get_footer() ?>