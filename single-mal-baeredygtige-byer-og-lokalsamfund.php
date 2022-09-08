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
                <div class="col-md-12 col-sm-12">
                    <img class="banner-image" src="<?php the_field("banner-image") ?>" alt="">
                    <h1><?php the_field("banner-text") ?></h1>

                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="description">
                <div>
                    <p style="padding:30px,100px,30px,100px"><?php the_field("description-1") ?></p>
                </div>
                <div>
                    <p style="padding:30px,100px,30px,100px"><?php the_field("description-2") ?></p>
                </div>
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
        <div class="col-md-12 col-sm-12 btn">
            <a href="http://boulund.com/sdg17/groups/baeredygtige-byer/members/all-members/" class="forums">
                <p class="pcconfiq">Forum</p>
            </a>

        </div>
        <br>
        <br>
        <div class="del-mål">
            <br>
            <br>
            <h2 class="mål-overskrift">Verdensmål 11 i delmål</h2>
            <br>
            <p class="mål-hvid">
                <span class="mål-tekst">Inden 2030</span>,skal alle sikres adgang til egnede og sikre boliger til en overkommelige pris med adgang til grundlæggende tjenesteydelser, og slumkvarterer skal opgraderes.
                <br>
                <br>
                <span class="mål-tekst">Inden 2030</span>, skal der skabes adgang for alle til sikre, tilgængelige og bæredygtige transportsystemer til en overkommelig pris, trafiksikkerheden skal forbedres bl.a. ved at udbygge den kollektive trafik med særlig hensyn til behov hos sårbare befolkningsgrupper, kvinder, børn, personer med handicap og de ældre.
                <br>
                <br>
                <span class="mål-tekst">Inden 2030</span>,skal byudvikling gøres mere inkluderende og bæredygtig, og kapaciteten til en inddragende, integreret og bæredygtig boligplanlægning og forvaltning i alle lande skal styrkes.
                <br>
                <br>
                <span class="mål-tekst">Indsatsen</span>,for at beskytte og bevare verdens kultur- og naturarv skal styrkes.
                <br>
                <br>
                <span class="mål-tekst">Inden 2030</span>,skal antallet af dødsfald og antallet af berørte personer samt reduktion i de direkte økonomiske tab i forhold til det globale bruttonationalprodukt, som følge af katastrofer, herunder vandrelaterede katastrofer, reduceres betydeligt med fokus på beskyttelse af de fattige og mennesker i sårbare situationer.
                <br>
                <br>
                <span class="mål-tekst">Inden 2030</span>,skal den negative miljøbelastning pr. indbygger reduceres, herunder ved at lægge særlig vægt på luftkvalitet og på husholdnings- og anden affaldsforvaltning.
                <br>
                <br>
                <span class="mål-tekst">Inden 2030</span>,skal der gives universel adgang til sikre, inkluderende og tilgængelige, grønne og offentlige rum, især for kvinder og børn, for ældre mennesker og for personer med handicap.
                <br>
                <br>
                <span class="mål-tekst">Positive økonomiske, sociale og miljømæssige forbindelser</span>,mellem by, opland og landdistrikter skal støttes ved at styrke den nationale og regionale udviklingsplanlægning.
                <br>
                <br>
                <span class="mål-tekst">Inden 2020</span>,skal der ske en betydelig stigning i antallet af byer og bosættelser, der vedtager og gennemfører integrerede politikker og planer, der stræber mod inklusion, ressourceeffektivitet, modvirkning og tilpasning til klimaændringer, modstandsdygtighed over for katastrofer, og som udvikler og gennemfører helhedsorienteret katastrofe- risikostyring på alle niveauer, i overensstemmelse med Sendai-rammen for Katastrofe- og Risikoforebyggelse (Sendai Framework for Disaster Risk Reduction 2015-2030).
                <br>
                <br>
                <span class="mål-tekst">De mindst udviklede lande skal støttes</span>,bl.a. gennem finansiel og teknisk bistand, til at bygge bæredygtige og robuste bygninger med anvendelse af lokale materialer.
                <br>
            </p>


        </div>
    </div>
    <section id="power-wordpress" class="d-flex col-md-12 info-background justify-content-center align-items-center">
        <h2>powered by Wordpress <?php echo date('Y'); ?></h2>
    </section>
    <?php get_footer() ?>
</body>

</html>