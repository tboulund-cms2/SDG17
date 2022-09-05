<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php get_header() ?>
    <div class="container">

        <div class="banner">
            <div class="headline">Mål:11 bæredygtige byer og lokalsamfund</div>
            <div class="row">
                <div class="col-4">
                    <img class="banner-image" src="<?php the_field("banner-image") ?>" alt="">
                </div>
                <div class="col-8">
                    <h1><?php the_field("banner-text") ?></h1>
                </div>
            </div>
        </div>


    </div>


    <?php get_footer() ?>
</body>

</html>