<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>
<div class="background">
    <div class="card-container">
    <img src="<?php the_field('hero_picture'); ?>" alt="" />
    </div>
    <div id="hero">
         <div class="hero-tekst">
            <h1 id="yellowtekst">14</h1>
              <h2 id="white">Conserve and sustainably use the oceans, <br>
               seas and marine resources for sustainable development</h2> 
         </div>
         </div>
    <div class="col-sm-2"> <img src="<?php the_field('polar_bear'); ?>" alt="" /> </div>
    <div class="col-sm-2"> <img src="<?php the_field('skrald_1'); ?>" alt="" /> </div>
    <div class="col-sm-2"> <img src="<?php the_field('water_pol'); ?>" alt="" /> </div>
    <div class="col-sm-2"> <img src="<?php the_field('over_fishing'); ?>" alt="" /> </div>
    <div class="col-sm-2"> <img src="<?php the_field('dead_fishy'); ?>" alt="" /> </div>

            <div class="first-paragraph">
                <h1 id="white">OUR OCEAN <br>
                 THE PLANET'S LARGEST ECOSYSTEM <br>
                <span class="tekstyellow">IS ENDANGERED</span></h1>
                    <p id="white">
                    The world's oceans—their temperature, chemistry, currents, and life—drive the global systems that make Earth habitable for humans. The management of this vital resource is crucial for humanity as a whole, but also for mitigating the consequences of climate change. <br>
                    <br>

                    The livelihoods of over three billion people depend on the biodiversity in marine and coastal areas. But today there is overfishing by around 30 percent, which is far above the level at which fish stocks can reproduce sustainably. <br>
<br>
                    The world's oceans absorb about 30 percent of the CO2 produced by humans, and there has been a 26 percent increase in ocean acidification since the start of the industrial revolution. Marine pollution, mainly from land-based sources, is reaching alarming levels. On average, there are 13,000 pieces of plastic waste in every square kilometer in the ocean. <br>
<br>
                    The Global Goals for Sustainable Development create a framework for the sustainable management and protection of the oceans and coastal ecosystems in relation to land-based pollution and address the impacts of ocean acidification. Better conservation and sustainable use of ocean-based resources through international legislation will also contribute to mitigating some of the challenges facing our world's oceans. <br>
<br>
                    Life in the sea is one of 17 global goals that are part of the development agenda for sustainable development towards 2030. An integrated approach is essential for progress across the various goals. <br>
                    </p>
            </div>


                <div class="video"></div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/qnyRm05yofs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</iframe>
                <div class="second-paragraph">
                    <h1 id="yellowtekst">OUR TARGETS</h1>
                        <p id="white">
                        <span id="yellowtekst">By 2025</span>, prevent and significantly reduce marine pollution of all kinds, in particular from land-based activities, including marine debris and nutrient pollution <br>
                        <br>

                       <span id="yellowtekst">By 2020</span>, sustainably manage and protect marine and coastal ecosystems to avoid significant adverse impacts, including by strengthening their resilience, and take action for their restoration in order to achieve healthy and productive oceans <br>
                       <br>

                        <span id="yellowtekst">Minimize and address</span> the impacts of ocean acidification, including through enhanced scientific cooperation at all levels <br>
                        <br>

                       <span id="yellowtekst">By 2020</span>, effectively regulate harvesting and end overfishing, illegal, unreported and unregulated fishing and destructive fishing practices and implement science-based management plans, in order to restore fish stocks in the shortest time feasible, at least to levels that can produce maximum sustainable yield as determined by their biological characteristics <br>
                       <br>

                        <span id="yellowtekst">By 2020</span>, conserve at least 10 per cent of coastal and marine areas, consistent with national and international law and based on the best available scientific information <br>
                        <br>

                       <span id="yellowtekst">By 2020</span>, prohibit certain forms of fisheries subsidies which contribute to overcapacity and overfishing, eliminate subsidies that contribute to illegal, unreported and unregulated fishing and refrain from introducing new such subsidies, recognizing that appropriate and effective special and differential treatment for developing and least developed countries should be an integral part of the World Trade Organization fisheries subsidies negotiation <br>
                       <br>

                         <span id="yellowtekst">By 2030</span>, increase the economic benefits to Small Island developing States and least developed countries from the sustainable use of marine resources, including through sustainable management of fisheries, aquaculture and tourism <br>
                        Increase scientific knowledge, develop research capacity and transfer marine technology, taking into account the Intergovernmental Oceanographic Commission Criteria and Guidelines on the Transfer of Marine Technology, in order to improve ocean health and to enhance the contribution of marine biodiversity to the development of developing countries, in particular small island developing States and least developed countries <br>
                        <br>

                        <span id="yellowtekst">Provide access</span> for small-scale artisanal fishers to marine resources and markets <br>
                        <br>

                        <span id="yellowtekst">Enhance</span> Enhance the conservation and sustainable use of oceans and their resources by implementing international law as reflected in UNCLOS, which provides the legal framework for the conservation and sustainable use of oceans and their resources, as recalled in paragraph 158 of The Future We Want
                    </p>
                </div>

                    <div class="last-picture">
 <img src="<?php the_field('bottom_picture'); ?>" alt="" /> 
                    </div>

                        <div class="bottom">
                            <p class="bottomtekst">To the top</p>
                        </div>
  </div>
    <?php endwhile ?>

<?php get_footer() ?>