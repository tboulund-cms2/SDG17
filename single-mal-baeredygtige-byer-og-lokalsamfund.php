<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

    <?php get_header() ?>
    <div class="container-byer">

        <div class="banner">
            <div class="headline">Mål:11 bæredygtige byer og lokalsamfund</div>
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <h1><?php the_field("banner-text") ?></h1>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <img class="banner-image" src="<?php the_field("banner-image") ?>" alt="">
        </div>
    </div>
    <div class="description">
        <div>
            <p style="padding:30px,100px,30px,100px"><?php the_field("description-1") ?></p>
        </div>
        <div>
            <p style="padding:30px,100px,30px,100px"><?php the_field("description-2") ?></p>
        </div>
    </div>
    <div>
        <img class="image-1" src="<?php the_field("image-1") ?>" alt="">
    </div>

    <div class="video">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/EHeWPWny3BE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="description2">
        <div class="description-3">
            <p style="padding:50px,150px,20px,150px"><?php the_field("description-3") ?></p>

            <p style="padding:0px,150px,30px,150px"><?php the_field("description-4") ?></p>
        </div>
    </div>
    <div class="col-md-12 btn">
        <a href="http://boulund.com/sdg17/groups/baeredygtige-byer/members/all-members/" class="forums">
            <p class="pcconfiq">Forum</p>
        </a>
    </div>
    <div class="del-mål">
        <h2>Verdensmål 11 i delmål og indikatorer</h2>

    </div>


    <?php get_footer() ?>
</body>

</html>