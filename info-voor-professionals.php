<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Informatie voor professionals</title>
  <meta name="description" content="Lojal heeft tot doel jongeren, vanaf 18 jaar, die (langdurig) in de problemen zitten en ‘zorg’ nodig hebben, te begeleiden, te adviseren of te bemiddelen.">
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
    <div style="height: 750px !important;">
      <div class="swiper-slide h-100 bg-overlay bg-overlay-600 bg-dark" style="background-image:url('./assets/imgs/Dagbesteding5.JPG'); background-size: cover; background-position: center center;">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
              <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Informatie voor professionals</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-12 align-items-center">
          <div class="col-lg-6 position-relative">
            <div class="row gx-md-5 gy-5 align-items-center">
              <figure class="rounded"><img src="./assets/imgs/BBQ (2).JPG" alt=""></figure>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="display-5 mb-5 ">Lojal heeft tot doel jongeren die (langdurig) in de problemen zitten vanaf 18 jaar en “zorg” nodig hebben, te begeleiden, te adviseren of te bemiddelen.</h3>
            <p>Het gaat hier vooral om jongeren met een (licht) verstandelijke beperking en moeilijk verstaanbaar gedrag en of een psychiatrische stoornis die vooral langdurige begeleiding vragen. Lojal heeft op dit moment contracten met diverse gemeenten. Daarnaast werken we samen met I-Nova en hebben we een zeer klein aantal PGB overeenkomsten.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Onze partners</h2>
        <div class="row gx-lg-8 mb-10 gy-5">
          <div class="col-lg-6">
            <h3 class="display-5 mb-0">Er zijn verschillende financiers met wie wij een contract hebben, waaronder zorgkantoren en gemeenten.</h3>
          </div>
          <div class="col-lg-6">
            <p class="lead mb-0">Lojal is te vinden in verschillende gemeentes. Wij hebben onder andere cliënten in sociaal domein achterhoek, gemeente Zutphen en gemeente Deventer. Daarnaast maakt Lojal deel uit van coöperatie I-Nova Zorg en werken wij samen met gezinshuis Pieper-Smit.</p>
          </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-xl-5 gx-lg-6 gy-6 justify-content-center">
          <div class="col">
            <div class="card shadow-lg h-100 align-items-center">
              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><a href="link"><img src="./assets/logos/sociaalDomeinAchterhoekLogo.jpg" alt="" /></a></figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg h-100 align-items-center">
              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><a href="nieuws-artikelen/lojal-maakt-deel-uit-van-i-nova-zorg.php"><img src="./assets/logos/logo-i-nova.jpg" alt="" /></a></figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg h-100 align-items-center">
              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><a href="wonen/laren.php"><img src="./assets/logos/pieperSmitLogo.jpg" alt="" /></a></figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg h-100 align-items-center">
              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><a href="dagbesteding.php#paardrijden"><img src="./assets/logos/manegeHetLoenhorstLogo.jpg" alt="" /></a></figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-lg h-100 align-items-center">
              <div class="card-body align-items-center d-flex px-3 py-6 p-md-8">
                <figure class="px-md-3 px-xl-0 px-xxl-3 mb-0"><a href="dagbesteding.php#hotelBi-jOns"><img src="./assets/logos/LogoHotelBI-JONS.png" alt="" /></a></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-md-8 col-lg-6 col-xl-5 order-lg-2 position-relative">
            <div class="shape bg-soft-primary rounded-circle rellax w-20 h-20" data-rellax-speed="1" style="top: -2rem; right: -1.9rem;"></div>
            <figure class="rounded"><img class="object-fit-cover" style="aspect-ratio: 1 / 1;" src="./assets/imgs/BBQ (14).JPG" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <h2 class="display-4 mb-3">De omgeving</h2>
            <p class="lead fs-lg">In de visie van Lojal is contact met de direct betrokkenen rondom een cliënt erg belangrijk. Natuurlijk staat de privacywetgeving ook bij ons hoog in het vaandel, echter geloven wij ook dat iedere cliënt, ieder mens, niet zonder zijn direct omgeving kan. Wij willen die dan ook graag betrekken bij het maken van de zorgplannen en de uitvoering van de zorgplannen.</p>
            <p class="mb-6">Tijdens de intake procedure komt aan de orde welke personen voor de cliënt belangrijk zijn of moeten zijn. Lojal probeert, in samenwerking met de cliënt, tot een plan te komen hoe de omgeving betrokken wordt bij het te lopen traject. De wijze waarop kan voor eenieder verschillend zijn en bestaat uit maatwerk.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-6 mb-md-8 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto rounded" src="./assets/imgs/BBQ (17).jpg" alt="" /></figure>
          </div>
          <div class="col-lg-5">
            <h3 class="display-4 mb-6 pe-xxl-6">Binnen Lojal zijn alle medewerkers getraind om te werken vanuit een contextuele houding.</h3>
            <p>Dit houdt in dat we oog hebben voor waar iemand vandaan komt en wat daar de normen, waarden en verwachtingen van zijn. Dit houdt niet in dat we hier altijd aan kunnen voldoen, maar door het te benoemen en het er over te hebben ontstaat er een goed en realistisch beeld van mogelijkheden en onmogelijkheden.</p>
          </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7 order-lg-2">
            <figure><img class="w-auto rounded" src="./assets/imgs/BBQ (22).jpg" alt="" /></figure>
          </div>
          <div class="col-lg-5">
            <h3 class="display-4 mb-5">Dit geldt ook voor de plaatsende instantie.</h3>
            <p class="mb-6">Er bestaat een bepaalde verwachting van de keuze om aan te melden dan wel te plaatsen bij Lojal. Lojal blijft graag in contact met de plaatsende instelling gedurende het gehele traject. Dit doet Lojal door eens per half jaar het zorgplan te evalueren en zo nodig bij te stellen. Hier zijn de plaatsende instellingen van harte voor uitgenodigd.</p>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include 'includes/contact-formulier.php' ?>
  <?php include 'includes/footer.html'; ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="./assets/js/plugins.js"></script>
  <script src="./assets/js/theme.js"></script>
</body>
</html>
<style>
  .col-lg-3 {
    width: 10%;
    flex-grow: 1;
  }
</style>