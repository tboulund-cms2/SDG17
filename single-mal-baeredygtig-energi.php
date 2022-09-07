<?php get_header()?>

    <?php while(have_posts()): the_post() ?>

        <section class="banner">
            <div class="col-md-12 backgroundimg" style="background-image: url(<?php the_field("banner") ?>)">
                <h1>Bæredygtig energi</h1>
                <div class="col-md-12 btns">
                    <a href="#goals" class="goal"><p class="pconfiq">Mål for bæredygtig energi</p></a>
                    <a href="/sdg17/groups/baeredygtig-energi/members/all-members/" class="forums"><p class="pconfiq">Forums</p></a>
                </div>
            </div>
        </section>
        <section class="info1">
            <div class="info1">
                <h2 class="col-md-12 headertext1 h2confiq"><?php the_field("info1_overskrift")?></h2>
                <p class="col-md-12 infotext1 pconfiq"><?php the_field("info1_text")?></p>
            </div>
            
            
        </section>
        <section class="info2">
            <div class="img2"></div>
            <div class="textbox2">
                <h2 class="col-md-12 headertext2 pconfiq"><?php the_field("info2_overskrift")?></h2>
                <p class="col-md-12 headertext2 pconfiq"><?php the_field("info2_text")?></p>
            </div>
        </section>
        <section class="info3">
            <div class="textbox3">
                <h2 class="col-md-12 headertext3 pconfiq"><?php the_field("info3_overskrift")?></h2>
                <p class="col-md-12 headertext3 pconfiq"><?php the_field("info3_text")?></p>
            </div>
            <div class="img3"></div>
        </section>

        <div class="col-md-12 spacerContainer">
            <div class="col-md-12 spacerLine">
                <div class="col-md-7 spacer"></div>
            </div>
            <div class="col-md-12 spacerLine">
                <div class="col-md-6 spacer"></div>
            </div>
            <div class="col-md-12 spacerLine">
                <div class="col-md-7 spacer"></div>  
            </div>
        </div>

        <section class="goals" id="goals">

        <div class="goaltitle">Mål for 2030</div>

        <div class="cardcontainer">
            <div class="cardcolumnone">
                <div class="leftcardone"></div>
                <div class="leftcardtwo"></div>
                <div class="leftcardthree"></div>
            </div>
            <div class="cardcolumntwo">
                
            </div>
            <div class="cardcolumnthree">
                <div class="rightcardone"></div>
                <div class="rightcardtwo"></div>
            </div>
        </div>

        </section>
        <section>
        <iframe width="560" height="315" src="<?php the_field("video_link") ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>
    <?php endwhile ?>
    
<?php get_footer(); ?>