<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

    <div class="card-container">
    <img src="<?php the_field('hero_picture'); ?>" alt="" />
    </div>
    <div id="hero">
         <div class="hero-tekst">
            <h1>14</h1>
              <h2>Conserve and sustainably use the oceans, <br>
               seas and marine resources for sustainable development</h2> 
         </div>
         </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>
    <div class="col-sm-3"></div>

            <div class="first paragraph">
                <h3>OUR OCEAN <br>
                 THE PLANET'S LARGEST ECOSYSTEM <br>
                 IS ENDANGERED</h3>
                    <p>
                    The world's oceans—their temperature, chemistry, currents, and life—drive the global systems that make Earth habitable for humans. The management of this vital resource is crucial for humanity as a whole, but also for mitigating the consequences of climate change.

                    The livelihoods of over three billion people depend on the biodiversity in marine and coastal areas. But today there is overfishing by around 30 percent, which is far above the level at which fish stocks can reproduce sustainably.

                    The world's oceans absorb about 30 percent of the CO2 produced by humans, and there has been a 26 percent increase in ocean acidification since the start of the industrial revolution. Marine pollution, mainly from land-based sources, is reaching alarming levels. On average, there are 13,000 pieces of plastic waste in every square kilometer in the ocean.

                    The Global Goals for Sustainable Development create a framework for the sustainable management and protection of the oceans and coastal ecosystems in relation to land-based pollution and address the impacts of ocean acidification. Better conservation and sustainable use of ocean-based resources through international legislation will also contribute to mitigating some of the challenges facing our world's oceans.

                    Life in the sea is one of 17 global goals that are part of the development agenda for sustainable development towards 2030. An integrated approach is essential for progress across the various goals.
                    </p>
            </div>


    <?php endwhile ?>

<?php get_footer() ?>