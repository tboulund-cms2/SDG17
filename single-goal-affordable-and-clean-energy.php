<?php get_header() ?>

<?php while (have_posts()) : the_post() ?>
    <section id="banner-section" class="d-flex col-md-12 align-items-center justify-content-center info-background">
        <div class="d-flex col-md-10 col-sm-12 flex-column flex-md-row justify-content-center align-items-center justify-content-md-start banner-container">
            <img src="<?php the_field("banner_image") ?>" alt="banner" class="col-12 col-md-3">
            <div class="d-flex col-12 col-md-9 col-xl-6 justify-content-center px-4 banner-text text-center text-md-start">
                <h1 id="banner-description" class="col-10 col-md-12">Ensure access to affordable, reliable, sustainable and modern energy for all.</h1>
            </div>
        </div>
    </section>
    <section id="overview-section" class="d-flex py-4 col-md-12 align-items-center justify-content-center">
        <div class="d-flex col-md-8 flex-wrap align-items-center justify-content-center justify-content-md-between image-text-container">
            <!-- Convert this to Image Custom Post Type 1-->
            <img class="col-12 col-md-6" src="<?php the_field("overview_image") ?>" alt="overview">
            <div class="d-flex col-10 col-md-5 flex-wrap text-container align-items-center justify-content-center text-center text-md-start">
                <h2 class="col-4 col-md-12 px-0 py-2">Overview</h2>
                <!-- Combine these into Text Custom Post Type 1-->
                <p class="col-12 py-2"><?php the_field("overview") ?> </p>
            </div>
        </div>
    </section>
    <section id="contribution-section" class="d-flex py-4 col-md-12 align-items-center justify-content-center">
        <div class="d-flex col-md-8 flex-row-reverse flex-wrap align-items-center justify-content-center image-text-container">
            <!-- Convert this to Image Custom Post Type 1-->
            <img class="col-12 col-md-6" src="<?php the_field("contributors_image") ?>" alt="contribution">
            <div class="d-flex col-10 col-md-6 flex-wrap text-container align-items-center justify-content-center text-center text-md-start">
                <h2 class="col-4 col-md-12 py-2 px-0">Contributor - Be the One!</h2>
                <!-- Combine these into Text Custom Post Type 1-->
                <p class="col-12 py-2"><?php the_field("contributors") ?> </p>
            </div>
        </div>
    </section>
    <section id="signup-section" class="d-flex col-md-12 align-items-center justify-content-center justify-content-center info-background">
        <div class="d-flex col-md-8 flex-column signup-container text-center text-md-start">
            <h2 id="banner_description" class="px-0 py-4">Be Up To Date</h2>
            <!-- Convert this to Text Custom Post Type 2-->
            <p class="col-6"><?php the_field("newsletter") ?> </p>
            <div class="d-flex px-0 py-4 col-md-4 col-sm-12 justify-content-between flex-column flex-md-row email-container">
                <input type="email" class="col-12 py-2" placeholder="email address">
                <button type="button" class="col-12 col-lg-5 col-xl-5 col-xxl-4 py-2 btn btn-dark mx-md-2">Get In</button>
            </div>
        </div>
    </section>
    <section id="events-section" class="d-flex col-md-12 py-4 align-items-center justify-content-center">
        <div class="d-flex flex-column col-12 col-md-8 align-items-center events-container">
            <div class="d-flex col-md-12 justify-content-between align-items-center top-container">
                <h2 class="col-md-3 px-0">Events</h2>
                <button type="button" class="btn btn-warning d-none d-md-inline">See all events</button>
            </div>
            <!--Inside this div, we probably want a loop getting our beautiful Image Custom Post Type 2 or not -->
            <div class="d-flex flex-wrap col-12 justify-content-between bottom-container">
                <img class="my-4 my-md-0 col-12 col-md-4" src="<?php the_field("event_image_1") ?>" alt="event1">
                <img class="my-4 my-md-0 col-12 col-md-4" src="<?php the_field("event_image_2") ?>" alt="event2">
                <img class="my-4 my-md-0 col-12 col-md-4" src="<?php the_field("event_image_3") ?>" alt="event3">
            </div>
            <button type="button" class="btn btn-warning d-sm-none">See all events</button>
        </div>
    </section>
    <section id="news-section" class="d-flex col-md-12 py-4 align-items-center justify-content-center">
        <div class="d-flex flex-column col-12 col-md-8 align-items-center news-container">
            <div class="d-flex col-md-12 justify-content-between align-items-center top-container">
                <h2 class="col-md-3">News</h2>
                <button type="button" class="btn btn-warning d-none d-md-inline">See all news</button>
            </div>
            <!--Inside this div, we probably want a loop getting our beautiful News Custom Post Type -->
            <div class="d-flex flex-wrap py-4 col-md-12 justify-content-between bottom-container">
                <div class="card my-3 my-md-0 col-12 col-md-6">
                    <img class="col-12 card-img-top" src="<?php the_field("highlighted_news_article_1_image") ?>" alt="news1">
                    <div class="card-body">
                        <p class="card-text"><?php the_field("highlighted_news_article_1") ?> </p>
                    </div>
                </div>
                <div class="card my-3 my-md-0 col-12 col-md-6">
                    <img class="col-12 card-img-top" src="<?php the_field("highlighted_news_article_2_image") ?>" alt="news2">
                    <div class="card-body">
                        <p class="card-text"><?php the_field("highlighted_news_article_2") ?> </p>
                    </div>
                </div>
                <div class="card my-3 my-md-0 col-12 col-md-6">
                    <img class="col-12 card-img-top" src="<?php the_field("highlighted_news_article_3_image") ?>" alt="news3">
                    <div class="card-body">
                        <p class="card-text"><?php the_field("highlighted_news_article_3") ?> </p>
                    </div>
                </div>
                <div class="card my-3 my-md-0 col-12 col-md-6">
                    <img class="col-12 card-img-top" src="<?php the_field("highlighted_news_article_4_image") ?>" alt="news4">
                    <div class="card-body">
                        <p class="card-text"><?php the_field("highlighted_news_article_4") ?> </p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-warning d-sm-none">See all news</button>
        </div>

    </section>
    <section id="footer-section" class="d-flex col-md-12 info-background justify-content-center align-items-center">

        <!--Inside this h2, we want to dynamically get the year -->
        <h2>Powered By Wordpress 2022</h2>
        <!--<h2>Powered By Wordpress <?php echo date('Y'); ?></h2> -->
    </section>

<?php endwhile ?>

<?php get_footer(); ?>