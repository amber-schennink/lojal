<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Ambulante begeleiding</title>
  <meta name="description" content="De ambulante begeleiding is gericht op zowel jongeren, volwassenen als gehele gezinnen. Bij Lojal is er ook HouVast begeleiding mogelijk.">
  <link rel="shortcut icon" href="./assets/logos/logoLojal.png">
  <link rel="stylesheet" href="./assets/css/plugins.css">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>
<?php 
  session_start();
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojal') {}else {
    header("Location: login.php");
  }
?>
<body>
  <div class="page-loader"></div>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <?php include 'includes/navbar.html'; ?>
    </header>
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="./assets/imgs/Ambulant1.JPG">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-5 text-white">Ambulant</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light wrapper-border">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card shadow-lg">
                <div class="card-body">
                  <div id="ambulanteBegeleiding" class="mb-10">
                    <p>De ambulante begeleiding van Stichting Woonzorg Lojal is gericht op zowel jongeren, volwassenen en gehele gezinnen. Bij ambulante begeleiding bezoekt de ambulante begeleider de individu of het gezin op in de eigen thuissituatie voor de begeleidingsmomenten. De begeleidingsinzet wordt in overleg met de individu, het gezin, eventueel belangrijke anderen en de consulent van de gemeente bepaald.</p>
                  </div>
                  <div class="mb-10">
                    <h3 class="h2 mb-3 mt-9">Basis ambulant (1-3u p.w.)</h3>
                    <p>Bij deze vorm van begeleiding zijn de doelen en uren variabel, afhankelijk van de behoeften van het individu. Ondersteuning kan worden geboden op verschillende levensgebieden in de ADL (algemene dagelijkse levensverrichtingen).</p>
                    <div class="text-white p-5 m-auto text-center" style="background: #5d9eda; border-radius: 20px 0px; width: fit-content;">Met ambulante begeleiding toewerken na een zo <br> zelfstandig mogelijk leven</div>
                  </div>
                  <img class="w-100 mb-10 rounded object-fit-cover" style="aspect-ratio: 3/2;" src="assets/imgs/Ambulant2.jpg"/>
                  <div class="mb-10">
                    <h3 class="h2 mb-3 mt-9">Systemisch ambulant (2-4u p.w.)</h3>
                    <p>De focus bij systemisch ambulante begeleiding ligt niet alleen op het individu, maar ook op de omgeving eromheen. Begeleiders werken actief samen met belangrijke anderen, die in de kring om de individu heen staan, zoals familie, werkgevers en vrienden.</p>
                    <p>De ambulante begeleiders vertalen, verbinden, coördineren en structureren in het belang van de individu. Het doel is om een ondersteunende context te creëren waarin de cliënt zich kan ontwikkelen en gedijen.</p>
                    <div class="text-white p-5 m-auto text-center" style="background: #5d9eda; border-radius: 20px 0px; width: fit-content;">
                      Creëren van de loyale, samenwerkende context voor de individu <br> <br>
                      Met de belangrijke andere(n) en ambulante begeleiding om de <br> individu heen samenwerkend en toewerken naar een zo zelfstandig <br> als mogelijk leven. 
                    </div>
                  </div>
                  <div class="row g-6 mt-3 mb-10">
                    <div class="col-md-6 flex">
                      <figure class="rounded m-auto w-100">
                        <img src="assets/imgs/Ambulant3.jpg" alt="" />
                      </figure>
                    </div>
                    <div class="col-md-6 flex">
                      <figure class="rounded m-auto w-100">
                        <img src="assets/imgs/Ambulant4.jpg" alt="" />
                      </figure>
                    </div>
                  </div>
                  <div id="specialistischeGezinsbegeleiding" class="mb-10 addNavBarHeight">
                    <h3 class="h2 mb-3 mt-9">Specialistische systemische gezinsbegeleiding (4-6u p.w.)</h3>
                    <p>Deze vorm van begeleiding richt zich specifiek op gezinnen met complexe behoeften. Door observatie en analyse van gezinsdynamiek wordt gewerkt aan verbetering en herstel binnen het gezinssysteem.</p>
                    <p>De gezinsbegeleiding richt zich op het observeren van gezinsdynamiek gedurende de dag, het bespreken van rollen en taken van gezinsleden, en het identificeren van ondersteunende relaties rondom het gezin. De begeleider neemt een neutrale positie in, begrijpt en respecteert alle perspectieven, en werkt aan het verbeteren van relaties door het aanpakken van blokkades en teleurstellingen uit het verleden. De betrokkenheid van externe hulpbronnen, zoals professionals en het sociale netwerk, is essentieel voor succesvolle ondersteuning.</p>
                    <div class="text-white p-5 m-auto text-center" style="background: #5d9eda; border-radius: 20px 0px; width: fit-content;">
                      Oog voor de belangrijke relaties binnen het gezin  <br> <br>
                      Daar waar mogelijk worden betrokkenen uitgenodigd om deel te <br> nemen aan specialistische ambulante gezinsbegeleiding omdat we <br> er vanuit onze contextuele benadering vanuit gaan dat mensen <br> elkaar nodig hebben <br> <br>
                      Hoop en mogelijkheden voor verbetering en herstel
                    </div>
                  </div>
                  <img class="w-100 mb-10 rounded object-fit-cover" style="aspect-ratio: 3/1;" src="assets/imgs/Ambulant1.JPG"/>
                  <div id="houVastGezinsbegeleiding" class="mb-10 addNavBarHeight">
                    <h3 class="h2 mb-3 mt-9">HouVast gezinsbegeleiding (6-8u p.w.)</h3>
                    <p>De HouVast-interventie is gericht op gezinnen met ouders die een licht verstandelijke beperking hebben. De begeleiders van Stichting Woonzorg Lojal zijn van mening dat deze interventie ook passend kan zijn bij gezinnen waarbij de ouders anderszins overbelast zijn. De HouVast-interventie richt zich op het versterken van de krachten van het gezin om de opvoedsituatie te verbeteren en zorgen te verminderen.</p>
                    <p>Samen met de ouders wordt een HouVast-plan opgesteld waarin successen en zorgen worden besproken. Alle betrokkenen hebben de mogelijkheid hun krachten en zorgen te delen. Zo kan er gezocht worden naar passende ondersteuning, inclusief hulp van het sociale netwerk. Het doel is om een veilige opvoedsituatie te creëren met gezamenlijke inspanningen.</p>
                    <div class="text-white p-5 m-auto text-center" style="background: #5d9eda; border-radius: 20px 0px; width: fit-content;">
                      Stut en steun voor gezinnen <br> <br>
                      Gezamenlijk krachten vergroten <br> <br>
                      Er is een intensieve interventie mogelijk (dagelijkse begeleiding of <br> meerdere momenten per week), maar ook een waakvlam <br> interventie waarbij de frequentie van inzet afgeschaald wordt. <br> <br>
                      Binnen de HouVast gezinsbegeleiding wordt er veelal gewerkt met <br> een complementair werkend team van HouVast begeleiders.
                    </div>
                  </div>
                  <div class="row g-6 mt-3 mb-10">
                    <div class="col-md-6 flex">
                      <figure class="rounded m-auto w-100">
                        <img src="assets/imgs/BBQ (8).JPG" alt="" />
                      </figure>
                    </div>
                    <div class="col-md-6 flex">
                      <figure class="rounded m-auto w-100">
                        <img src="assets/imgs/BBQ (12).JPG" alt="" />
                      </figure>
                    </div>
                  </div>
                  <div class="mb-10 addNavBarHeight">
                    <h3 class="h2 mb-3 mt-9">Aanvullende Mogelijkheden</h3>
                    <p>Naast de genoemde vormen van begeleiding biedt Stichting Woonzorg Lojal ook aanvullende mogelijkheden, zoals systeem- en contextuele behandelingen, diagnostiek en behandeling van psychische aandoeningen. De focus ligt op het bieden van passende ondersteuning die aansluit bij de specifieke behoeften van cliënten en gezinnen.</p>
                  </div>
                  <a href="#contact" class="btn btn-primary-light rounded-pill">Aanmelden</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include 'includes/contact-formulier.php' ?>
    </section>
  </div>
  <?php include 'includes/footer.html'; ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
  <script>
    // contact form select onderwerp
    if(document.getElementById('form-select')){
      var selectForm = document.getElementById('form-select')
      for (let i = 0; i < selectForm.length; i++) {
        if(selectForm[i]['label'] == 'Ambulante zorg'){
          selectForm[i].selected = 'selected'
        }
      }
    }
  </script>
</body>
</html>