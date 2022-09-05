<?php get_header() ?>

<?php while (have_posts()) : the_post() ?>
    <section id="banner-section" class="d-flex col-md-12 align-items-center justify-content-center info-background">
        <div class="d-flex col-md-8 col-sm-12 flex-column flex-md-row justify-content-center align-items-center justify-content-md-start banner-container">
            <img src="" alt="" class="col-12 col-md-3">
            <div class="d-flex col-12 col-md-6 col-xl-5 justify-content-center px-4 banner-text text-center text-md-start">
                <h1 id="banner_description" class="col-8 col-md-12">Ensure access to affordable, reliable, sustainable and modern energy for all.</h1>
            </div>
        </div>
    </section>
    <section id="overview-section" class="d-flex py-4 col-md-12 align-items-center justify-content-center">
        <div class="d-flex col-md-8 flex-wrap align-items-center justify-content-center justify-content-md-between image-text-container">
            <!-- Convert this to Image Custom Post Type 1-->
            <!-- <img class="col-12 col-md-6" src="<?php the_field("overview_image") ?>" alt="overview"> -->
            <img class="col-12 col-md-6" src="" alt="">
            <div class="d-flex col-10 col-md-5 flex-wrap text-container align-items-center justify-content-center text-center text-md-start">
                <h2 class="col-4 col-md-12 py-4">Overview</h2>
                <!-- Combine these into Text Custom Post Type 1-->
                <p class="col-12 py-2"><?php the_field("overview") ?> </p>
                <!--    <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolores quas voluptatem,
                    eveniet officia hic excepturi non labore provident numquam corporis?
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p> -->
            </div>
        </div>
    </section>
    <section id="contribution-section" class="d-flex py-4 col-md-12 align-items-center justify-content-center">
        <div class="d-flex col-md-8 flex-row-reverse flex-wrap align-items-center justify-content-center image-text-container">
            <!-- Convert this to Image Custom Post Type 1-->
            <!-- <img class="col-12 col-md-6" src="<?php the_field("contribution_image") ?>" alt="contribution"> -->
            <img class="col-12 col-md-6" src="" alt="">
            <div class="d-flex col-10 col-md-6 flex-wrap text-container align-items-center justify-content-center text-center text-md-start">
                <h2 class="col-4 col-md-12 py-4">Contributor - Be the One!</h2>
                <!-- Combine these into Text Custom Post Type 1-->
                <!-- <p class="col-12 py-2"><?php the_field("contribution_description") ?> </p> -->
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolores quas voluptatem,
                    eveniet officia hic excepturi non labore provident numquam corporis?
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p>
                <p class="col-12 py-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Voluptas rem deserunt repellat laborum sapiente fugit,
                    nam odit aperiam dolore
                </p>
            </div>
        </div>
    </section>
    <section id="signup-section" class="d-flex col-md-12 align-items-center justify-content-center justify-content-center info-background">
        <div class="d-flex col-md-8 flex-column signup-container text-center text-md-start">
            <h2 id="banner_description" class="p-3 ">Be Up To Date</h2>
            <!-- Convert this to Text Custom Post Type 2-->
            <!-- <p class="col-6"><?php the_field("signup_description") ?> </p> -->
            <p class="col-md-6">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Mollitia facere possimus tenetur modi inventore culpa hic sapi,
                Voluptas rem deserunt repellat laborum sapiente fugit,
                nam odit aperiam dolore
            </p>
            <div class="d-flex py-4 col-md-4 col-sm-12 justify-content-between flex-column flex-md-row email-container">
                <input type="email" class="col-12 py-2" placeholder="email address">
                <button type="button" class="col-12 col-lg-4 col-xl-4 col-xxl-3 py-2 btn btn-dark mx-md-2">Get In</button>
            </div>
        </div>
    </section>
    <section id="events-section" class="d-flex col-md-12 py-4 align-items-center justify-content-center">
        <div class="d-flex flex-column col-12 col-md-8 align-items-center events-container">
            <div class="d-flex col-md-12 justify-content-between align-items-center top-container">
                <h2 class="col-md-3">Events</h2>
                <button type="button" class="btn btn-warning d-none d-md-inline">See all events</button>
            </div>
            <!--Inside this div, we probably want a loop getting our beautiful Image Custom Post Type 2 or not -->
            <div class="d-flex flex-wrap col-12 justify-content-between bottom-container">
                <!-- <img class="col-12 col-md-4" src="<?php the_field("event_image_1") ?>" alt="event1"> -->
                <!-- <img class="col-12 col-md-4" src="<?php the_field("event_image_2") ?>" alt="event2"> -->
                <!-- <img class="col-12 col-md-4" src="<?php the_field("event_image_3") ?>" alt="event3"> -->
                <img class="col-12 col-md-4" src="" alt="">
                <img class="col-12 col-md-4" src="" alt="">
                <img class="col-12 col-md-4" src="" alt="">
            </div>
            <button type="button" class="btn btn-warning d-sm-none">See all events</button>
        </div>
    </section>
    <section id="news-section" class="d-flex col-md-12 py-4 align-items-center justify-content-center">
        <div class="d-flex flex-column col-12 col-md-8 align-items-center news-container">
            <div class="d-flex col-md-12 justify-content-between align-items-center top-container">
                <h2>News</h2>
                <button type="button" class="btn btn-warning d-none d-md-inline">See all news</button>
            </div>
            <!--Inside this div, we probably want a loop getting our beautiful News Custom Post Type -->
            <div class="d-flex flex-wrap py-4 col-md-12 justify-content-between bottom-container">
                <div class="card col-12 col-md-3">
                    <img src="" class="card-img-top" alt="...">
                    <!-- <img class="card-img-top" src="<?php the_field("news_image_1") ?>" alt="news1"> -->
                    <div class="card-body">
                        <!-- <p class="col-6"><?php the_field("news_description") ?> </p> -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-12 col-md-3">
                    <img src="" class="card-img-top" alt="...">
                    <!-- <img class="card-img-top" src="<?php the_field("news_image_2") ?>" alt="news2"> -->
                    <div class="card-body">
                        <!-- <p class="col-6"><?php the_field("news_description") ?> </p> -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card col-12 col-md-3">
                    <img src="" class="card-img-top" alt="...">
                    <!-- <img class="card-img-top" src="<?php the_field("news_image_3") ?>" alt="news3"> -->
                    <div class="card-body">
                        <!-- <p class="col-6"><?php the_field("news_description") ?> </p> -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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