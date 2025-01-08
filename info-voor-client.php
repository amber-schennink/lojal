<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Informatie voor clienten en ouders</title>
  <meta name="description" content="Bij Lojal kun je terecht als je ergens niet goed uit kunt komen, en dat je zelf of andere mensen vinden dat je hulp nodig hebt.">
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
      <div class="swiper-slide h-100 bg-overlay bg-overlay-600 bg-dark" style="background-image:url('./assets/imgs/Client4.jpg'); background-size: cover; background-position: center center;">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-md-11 col-lg-8 col-xl-7 col-xxl-6 mx-auto text-center justify-content-center align-self-center">
              <h2 class="display-1 fs-56 mb-4 text-white animate__animated animate__slideInDown animate__delay-1s">Informatie voor clienten en ouders</h2>
              <p class="lead fs-23 lh-sm m-0 text-white animate__animated animate__slideInRight animate__delay-2s">Als je dit leest dan ben je aangemeld of overweeg je een aanmelding bij Lojal. Dit doe je niet zomaar. Dit doe omdat je ergens niet goed alleen uit kunt komen en dat je zelf vindt of andere mensen vinden dat je hulp nodig hebt. Dit kunnen verschillende dingen zijn, binnen Lojal hebben we deze dingen verdeeld in leefgebieden.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
      <div class="col-lg-6 position-lg-absolute top-0 start-0 image-wrapper bg-image bg-cover h-100" data-image-src="./assets/imgs/Client3.jpg">
        <div class="divider text-gray divider-v-end d-none d-lg-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
            <g />
            <g>
              <g>
                <polygon fill="currentColor" points="48 0 0 0 48 1200 54 1200 54 0 48 0" />
              </g>
            </g>
          </svg>
        </div>
      </div>
      <div class="container">
        <div class="row gx-0">
          <div class="col-lg-6 ms-auto">
            <div class="pt-8 pb-11 pb-md-15 py-lg-13 ps-lg-11 pe-xxl-13">
              <a href="wonen.php" class="w-fit d-block"><h4 class="display-4 ls-sm mb-5 w-fit">Wonen</h4></a>
              <p class="lead fs-lg">Het kan zijn dat je een vraag hebt over wonen. Dat het even niet lukt om een eigen huis te vinden of dat je niet goed hoe je dit moet organiseren. Soms is het zo dat het zelfs beter is om een tijdje bij Lojal te komen wonen. Om (verder) te trainen of om tot rust te komen.</p>
              <p class="mb-0">Lojal heeft deze plekken in <a class="aUnderline" href="wonen/zelhem.php">Zelhem</a>, <a class="aUnderline" href="wonen/zutphen.php">Zutphen</a>, <a class="aUnderline" href="wonen/winterswijk.php">Winterswijk</a> en in <a class="aUnderline" href="wonen/doetinchem.php">Doetinchem</a>. Je kan daar wonen samen met andere jongeren die ongeveer dezelfde vragen hebben als jij. Samen met de groepsleiding, die 24 uur per dag daar is of daar in de buurt is, en de andere jongeren zorgen jullie voor het huis. Samen zorgen jullie ervoor dat het huis veilig genoeg is om er een fijne, een goede tijd te hebben en om op die manier weer een stap verder te komen. Soms hebben we hier strenge regels voor nodig, hier moeten we het dan bij de kennismaking en intake goed over hebben.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-gray position-relative min-vh-60 d-lg-flex align-items-center">
      <div class="col-lg-6 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100" data-image-src="./assets/imgs/Ambulant2.jpg">
        <div class="divider text-gray divider-v-start d-none d-lg-block">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 54 1200">
            <g />
            <g>
              <g>
                <polygon fill="currentColor" points="6 0 0 0 0 1200 6 1200 54 0 6 0" />
              </g>
            </g>
          </svg>
        </div>
      </div>
      <div class="container">
        <div class="row gx-0">
          <div class="col-lg-6">
            <div class="pt-8 pb-11 pb-md-15 py-lg-13 pe-lg-11">
              <a href="ambulante-begeleiding.php" class="w-fit d-block"><h4 class="display-4 ls-sm mb-5 w-fit">Ambulante begeleiding</h4></a>
              <p class="lead fs-lg">Soms beperkt je vraag alleen tot leefgebieden van financiën of tot sociale contacten.</p>
              <p class="mb-0">Je woont op een prima plek, maar het lukt je niet om iedere week de post goed onder elkaar te zetten of om goede vrienden te vinden. Dan kan Lojal ook een aantal uur in de week bij langs komen om het hier over te hebben en dit samen met je op te lossen. Wij noemen dit ambulante begeleiding.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pt-14 pt-md-16 text-center">
        <div class="row">
          <div class="col-md-9 col-lg-7 col-xl-7 mx-auto text-center">
            <svg class="svg-inject icon-svg icon-svg-md mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 465.5"><path class="lineal-stroke" d="M156.8 465.5c-9.9 0-24.2-4.8-56.2-40.6-16.2-18.2-29.5-36-30.1-36.8-.4-.5-.7-1-1-1.6-6.1-11-9.3-23.3-9.3-35.8v-90.9c0-7.9 6.4-14.4 14.3-14.4h116c16.5 0 32.4 6.5 44.2 18.1l59.4 58.5c17.2 17.2 17.3 45.1.1 62.3s-45.1 17.3-62.3.1L172.7 325c-5.9 0-15.5-.1-23.1-.1l-10.8-.1c-7.9 0-14.3-6.5-14.3-14.4s6.5-14.3 14.4-14.3h.1l10.8.1c6.8 0 14.1.1 19.6.1h6.9c4.2 0 8.5.1 12.7 4.3l63.5 63.5c6 6 15.7 6 21.7 0s6-15.7 0-21.7L214.6 284c-6.4-6.3-15-9.9-24-9.8H88.9v76.5c0 7.4 1.8 14.6 5.2 21.1 2.6 3.5 13.6 17.9 26.5 32.4 25.5 28.8 35.2 32.2 36.5 32.6h155.1c10.6 0 22.9-5.5 34.6-11.2 9.9-4.8 83.3-54.6 127.3-84.9l.7-.5c8.2-5.1 10.7-15.8 5.6-23.9-4.9-7.9-15.2-10.5-23.3-6L350 381.4c-6.6 4.4-15.5 2.6-19.9-4-4.4-6.6-2.6-15.5 4-19.9l107.5-71.3c.2-.1.3-.2.5-.3 21.8-13.1 50.1-6 63.2 15.8 12.9 21.6 6.2 49.6-15.2 62.8-13.3 9.2-115.8 79.6-130.8 86.9-14.7 7.1-30.5 14.1-47.1 14.1H156.8z"/><path class="lineal-fill" d="M14.4 242.2h84.2v189.6H14.4z"/><path class="lineal-stroke" d="M98.5 446.1H14.4c-7.9 0-14.4-6.4-14.4-14.4V242.2c0-7.9 6.4-14.4 14.3-14.4h84.1c7.9 0 14.3 6.4 14.3 14.4v189.6c.1 7.9-6.3 14.3-14.2 14.3zm-69.8-28.7h55.4V256.5H28.7v160.9zM273 214.2c-59.2 0-107.1-48-107.1-107.1C165.9 47.9 213.9 0 273.1 0c59.1 0 107.1 48 107.1 107.1-.1 59.1-48.1 107.1-107.2 107.1zm0-185.5c-43.3 0-78.4 35.1-78.4 78.4s35.1 78.4 78.4 78.4c43.3 0 78.4-35.1 78.4-78.4-.1-43.3-35.1-78.3-78.4-78.4z"/><circle class="lineal-fill" cx="348.9" cy="178.6" r="92.8"/><path class="lineal-stroke" d="M348.9 285.7c-59.1 0-107.1-47.9-107.1-107.1 0-59.1 47.9-107.1 107.1-107.1S456 119.4 456 178.6c-.1 59.1-48 107-107.1 107.1zm0-185.5c-43.3 0-78.4 35.1-78.4 78.4S305.7 257 349 257s78.4-35.1 78.4-78.4c-.1-43.3-35.2-78.4-78.5-78.4z"/><path class="lineal-stroke" d="M345.4 224.9c-15.5-.5-28.2-8.5-28.2-16.8 0-4.4 3.9-10.9 8.8-10.9 5.4 0 9.8 7.6 19.4 9.3v-20.9c-11.9-4.5-25.9-10.1-25.9-26.6s12.1-24.3 25.9-26.2v-3.6c0-1.8 2.1-3.5 4.9-3.5 2.5 0 4.9 1.7 4.9 3.5v3.2c8 .3 23.1 2.3 23.1 11.2 0 3.5-2.3 10.6-8 10.6-4.3 0-6.7-4.1-15.1-4.8v18.9c11.8 4.4 25.5 10.5 25.5 27.9 0 16-10.4 25.7-25.5 28.2v3.8c0 1.8-2.5 3.5-4.9 3.5-2.9 0-4.9-1.7-4.9-3.5v-3.3zm1.3-59.7v-15.4c-5.8 1.2-8.3 4.1-8.3 7.2 0 3.8 3.4 6.1 8.3 8.2zm7.2 23.9v17.3c4.4-1 7.9-3.5 7.9-8.1 0-4.3-3.2-7-7.9-9.2z"/></svg>
            <h2 class="display-4 mb-3">Financiën</h2>
            <p class="lead fs-lg mb-6">Lojal wordt betaald door de gemeente of door het zorgkantoor. Voordat we iemand mogen en kunnen helpen moeten we eerst met een van deze instanties overleggen. De gemeente of het zorgkantoor bepaald welke hulp er geboden mag worden en hoe vaak we elkaar gaan zien. Dit leggen ze vast in een indicatie. Voor het zorgkantoor regelt het CIZ dit, voor de gemeente krijg je hiervoor een keukentafelgesprek.</p>
          </div>
        </div>
      </div>
    </section>
    <div class="container py-10 py-md-12">
        <h2 class="display-4 mb-3">Aanmelden bij Lojal</h2>
        <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line">
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">01</span></span>
            <h4 class="mb-1">Aanmelden</h4>
            <p class="mb-0">Als je je bij Lojal wilt aanmelden voor zorg kun je een e-mail sturen naar mail@mail.com. Deze e-mail komt binnen bij het clientbureau. Zij nemen daarna contact met je op.</p>
          </div>
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">02</span></span>
            <h4 class="mb-1">Eerste kennismaking</h4>
            <p class="mb-0">Als we de mogelijkheid hebben om jou binnen Lojal te helpen dan volgt er een eerste kennismaking bij ons. Je kunt dan kennismaken met de woongroep en/of begeleiding.</p>
          </div>
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">03</span></span>
            <h4 class="mb-1">Intake gesprek</h4>
            <p class="mb-0">Als de eerste kennismaking goed is gegaan, krijg je een intakegesprek bij ons. Afhankelijk van wat er nodig is, kan dit op verschillende manieren plaatsvinden.</p>
          </div>
          <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none mb-4"><span class="number">04</span></span>
            <h4 class="mb-1">Start Traject</h4>
            <p class="mb-0">Als zowel het intaketeam van Lojal en jij als client positief is, gaan we over tot plaatsing. Er wordt een startgesprek gepland waarin alle praktische zaken en startafspraken worden gemaakt.</p>
          </div>
        </div>
      </div>
    <section class="wrapper bg-light">
      <div class="container pt-14 pt-md-16 flex">
        <div class="col-6">
          <h2 class="display-4 mb-3">Klachten</h2>
          <p class="lead fs-lg mb-8">Het kan natuurlijk zijn dat er dingen in de begeleiding niet goed gaan. Dat kan heel vervelend zijn, zowel voor jou als voor ons. Je moet hier niet mee blijven rondlopen maar zorgen dat er wat mee gedaan wordt. Hier vind je onze <a class="aUnderline" href="Klachtenreglement Cliënten.pdf" target="_blank">klachtenregeling</a></p>
        </div>
        <div class="col-6 flex justify-content-center">
          <a href="Klachtenreglement Cliënten.pdf" target="_blank" style="width: 70%; border: solid 2px var(--bs-pale-primary);">
            <img class="pointer mw-100" src="assets/imgs/klachtenreglementPagina.jpg">
          </a>
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