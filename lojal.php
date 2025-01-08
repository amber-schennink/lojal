<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Lojal is een organisatie die begeleiding biedt aan (kwetsbare)jongeren en volwassenen. Wij bieden beschermd/beschut wonen, ambulante begeleiding en behandeling.">
  <meta name="author" content="Lojal">
  <title>Lojal</title>
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
      <div class="position-absolute w-100">
        <?php include 'includes/navbar.html'; ?>
      </div>
    </header>
    <section style="background-image: linear-gradient(#f9f9f9, #fefefe);" class="wrapper image-wrapper bg-cover bg-xs-none bg-gray mt-nav h-dt-full-nav min-h-sm-full-nav">
      <div style="padding: 15px; display: flex; flex-direction: column; justify-content: center; height: 100%;" class="container">
        <div class="row">
          <div class="col-lg-7 text-center text-sm-start d-flex flex-column justify-content-evenly" data-cues="slideInDown" data-group="page-title" data-interval="-200" data-delay="500">
            <h2 class="display-1 fs-56 mb-4 mt-0 ls-xs pe-xl-5 pe-xxl-0 text-primary">Stichting Woonzorg <span class="underline-3 style-3 primary">Lojal</span></h2>
            <p class="lead fs-20 fs-md-23 lh-sm mb-0 pe-lg-5 pe-xl-5 pe-xxl-0">Welkom op de site van Stichting Woonzorg Lojal. Sinds 2007 zijn wij, als organisatie, actief in het begeleiden van met name kwetsbare jongeren en jongvolwassenen. Dat doen we vol enthousiasme en overtuiging vanuit verschillende invalshoeken, omdat wij geloven dat de cliënt het meeste baat heeft bij een integrale behandeling/begeleiding. Daarnaast helpen wij ook mensen met een hulpvraag, die buiten de genoemde doelgroep vallen, graag op weg. Lojal biedt hulp op verschillende levensterreinen. De organisatie blijft sterk in ontwikkeling en probeert steeds weer nieuwe hulpvormen te organiseren.</p>
          </div>
          <div class="col-sm-5 flex display-none-not-desktop">
            <img class="w-100 object-fit-contain" src="assets/logos/logoLojal2.png" />
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pt-4 pb-14 pt-md-6 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Wat doen wij?</h2>
            <h3 class="display-4 mb-10 px-xl-10">Onze zorg</h3>
          </div>
        </div>
        <div class="position-relative">
          <div class="shape rounded-circle bg-soft-blue rellax w-16 h-16" data-rellax-speed="1" style="bottom: -0.5rem; right: -2.2rem; z-index: 0;"></div>
          <div class="shape bg-dot yellow rellax w-16 h-17" data-rellax-speed="1" style="top: -0.5rem; left: -2.5rem; z-index: 0;"></div>
          <div class="row gx-md-5 gy-5 text-center">
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <img class="imgDiensten pointer" onclick="location.href='ambulante-begeleiding.php'" src="./assets/imgs/Ambulant2.jpg" alt="" />
                <div class="card-body pt-0">
                  <h4 class="pointer" onclick="location.href='ambulante-begeleiding.php'">Ambulant</h4>
                  <p class="mb-2">De ambulante begeleiding van Stichting Woonzorg Lojal is gericht op zowel jongeren, volwassenen en gehele gezinnen. Bij ambulante begeleiding bezoekt de ambulante begeleider de individu of het gezin op in de eigen thuissituatie voor de... </p>
                  <a href="ambulante-begeleiding.php" class="more hover link-yellow">Lees meer</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <img class="imgDiensten pointer" onclick="location.href='wonen.php'" src="./assets/imgs/wonenLarenPieperSmit.jpg" alt="" />
                <div class="card-body pt-0">
                  <h4 class="pointer" onclick="location.href='wonen.php'">Wonen</h4>
                  <p class="mb-2">Binnen Stichting Woonzorg Lojal maken we onderscheid tussen beschermd wonen en beschut wonen. We hebben 5 beschermd wonen locaties (Zutphen, Zelhem, Doetinchem, Lichtenvoorde en Winterswijk), 1 gezinshuis in Laren en...</p>
                  <a href="wonen.php" class="more hover link-blue">Lees meer</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <img class="imgDiensten pointer" onclick="location.href='behandeling.php'" src="./assets/imgs/BBQ (17).jpg" alt="" />
                <div class="card-body pt-0">
                  <h4 class="pointer" onclick="location.href='behandeling.php'">Behandeling</h4>
                  <p class="mb-2">Binnen Lojal heeft iedereen recht op een effectieve behandeling van zijn of haar problematiek. Omdat de cliënten van Lojal meestal veel hulpverleners hebben gezien en het vertrouwen vaak laag is in hulpverleners vindt Stichting Woonzorg...</p>
                  <a href="behandeling.php" class="more hover link-red">Lees meer</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="card shadow-lg">
                <img class="imgDiensten pointer" onclick="location.href='paardrijden.php'" src="./assets/imgs/Paardrijden3.jpg" alt="" />
                <div class="card-body pt-0">
                  <h4 class="pointer" onclick="location.href='paardrijden.php'">Paardrijden</h4>
                  <p class="mb-2">Bij Lojal hebben we verschillende mogelijkheden om in contact te komen met paarden. Zowel in de dagbesteding, als activiteit of als therapie. Bij de dagbesteding wordt er regelmatig gewerkt op een manege. Dit betekent niet...</p>
                  <a href="paardrijden.php" class="more hover link-green">Lees meer</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-white">
      <div class="container"> 
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-0 mb-10 mb-md-12">
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-md-5">
                <figure class="rounded"><img style="aspect-ratio: 1/1;" class="object-fit-cover" src="./assets/imgs/Lasergamen4.JPG" alt=""></figure>
              </div>
              <div class="col-md-7 align-self-end">
                <figure class="rounded"><img src="./assets/imgs/Dagbesteding1.jpg" alt=""></figure>
              </div>
              <div class="col-12">
                <figure class="rounded mx-md-5"><img src="./assets/imgs/Personeel1.jpg" alt=""></figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="fs-15 text-uppercase text-muted mb-3"><a href="over-ons.php" class="alert-heading">Over ons</a></h2>
            <h3 class="display-3 ls-sm mb-5">Stichting Woonzorg Lojal begeleidt mensen die moeite hebben om zich staande te houden in onze complexe maatschappij.</h3>
            <p class="mb-6">We zijn met name gespecialiseerd in jongvolwassenen met een licht verstandelijke handicap en moeilijk verstaanbaar gedrag veelal veroorzaakt door psychiatrische problemen en die aangewezen zijn op langdurige begeleiding. De contextuele hulpverlening is onze methodische basis en we verwachten dat men zich daar mee kan vereenzelvigen.</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Individuele trajecten</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>HKZ gecertificeerd</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Paardrijden</span></li>
                </ul>
              </div>
              <div class="col-xl-6">
                <ul class="icon-list bullet-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Trajecten in groepsverband</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Hulpverlening</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-6 mb-10 mb-md-13">
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <svg class="svgImgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle class="lineal-fill" cx="283.8" cy="283.8" r="143"/><path class="lineal-stroke" d="M283.8 441.8c-87.1 0-158-70.9-158-158s70.9-158 158-158 158 70.9 158 158-70.9 158-158 158zm0-286.1c-70.7 0-128.1 57.3-128.1 128.1S213 411.9 283.8 411.9s128.1-57.3 128.1-128.1c-.1-70.7-57.4-128-128.1-128.1z"/><path class="lineal-fill" d="M283.8 210.5c40.5 0 73.3 32.8 73.3 73.3s-32.8 73.3-73.3 73.3-73.3-32.8-73.3-73.3"/><path class="lineal-stroke" d="M283.8 372.1c-48.7-.1-88.2-39.5-88.2-88.3.2-8.2 7.1-14.8 15.3-14.5 7.9.2 14.3 6.6 14.5 14.5 0 32.2 26.1 58.4 58.4 58.4s58.4-26.1 58.4-58.4-26.1-58.4-58.4-58.4c-8.2-.2-14.8-7.1-14.5-15.3.2-7.9 6.6-14.3 14.5-14.5 48.7-.5 88.7 38.6 89.2 87.3s-38.6 88.7-87.3 89.2h-1.9z"/><path class="lineal-fill" d="M107.9 55.1l-5.3 47.5-47.5 5.3-40.2-40.1 52.9-52.9z"/><path class="lineal-stroke" d="M283.8 55.7c-55.3 0-108.8 20.1-150.4 56.7l-15.2-15.2 4.5-40.4c.5-4.5-1.1-9-4.3-12.2L78.3 4.4c-5.8-5.8-15.3-5.8-21.1 0L4.4 57.2c-5.8 5.8-5.8 15.3 0 21.1l40.1 40.1c2.8 2.8 6.6 4.4 10.6 4.4.5 0 1.1 0 1.6-.1l40.4-4.5 15.2 15.2c-36.6 41.5-56.7 95-56.7 150.4C55.7 409.6 158 512 283.8 512c66.2 0 129.1-28.7 172.4-78.7 5.6-6.1 5.1-15.6-1-21.1s-15.6-5.1-21.1 1l-.5.5c-37.7 43.4-92.3 68.4-149.8 68.4-109.3 0-198.3-89-198.3-198.3 0-47.4 17-93.3 48-129.2l140.2 140.2c5.8 5.8 15.3 5.8 21.1 0s5.8-15.3 0-21.1L154.6 133.5c35.9-31 81.8-48 129.2-48 109.4 0 198.3 89 198.3 198.3 0 8.3 6.7 14.9 14.9 14.9s14.9-6.7 14.9-14.9C512 158 409.6 55.7 283.8 55.7zM36.1 67.8l31.7-31.7 24.5 24.5-3.2 28.5-28.5 3.2-24.5-24.5z"/></svg>
              </div>
              <div>
                <h4 class="fs-20 ls-sm">Onze Visie</h4>
                <p class="mb-2">Iedereen heeft recht op een effectieve behandeling van zijn of haar problematiek. Het uitgangspunt van de behandeling is dat het de cliënt helpt en ondersteunt.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <svg class="svgImgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 404.7"><path class="lineal-stroke" d="M90.8 404.7c-6.5 0-12.4-4-14.7-10.1L57.7 347 10 328.7c-8.1-3.1-12.2-12.2-9-20.4.8-2 2-3.9 3.5-5.5l93.6-93.6 97.3 97.3-93.6 93.6c-2.9 2.9-6.9 4.6-11 4.6zm-60.7-93.8l39.5 15.2c4.1 1.6 7.4 4.9 9 9l15.2 39.5 68.1-68.1-63.7-63.7-68.1 68.1zm288.7 93.8c-4.2 0-8.2-1.7-11.1-4.6l-20.8-20.8 16.8-16.8 12.1 12.1 15.2-39.5c1.6-4.1 4.9-7.4 9-9l39.4-15.2-76.4-76.5 16.8-16.8 85.2 85.2c6.1 6.1 6.1 16.1 0 22.3-1.6 1.6-3.4 2.8-5.5 3.6L351.9 347l-18.3 47.6c-1.9 5-6.2 8.7-11.4 9.8-1.1.2-2.2.3-3.4.3z"/><path class="lineal-fill" d="M347.3 224.1c5.1-15.7 31-28.9 31-46.3s-25.9-30.6-31-46.3c-5.3-16.3 7.8-42.2-2.1-55.7s-38.6-9.2-52.4-19.2-18-38.6-34.4-43.9C242.7 7.6 222.2 28 204.8 28s-37.9-20.4-53.6-15.3c-16.3 5.3-20.8 34-34.4 43.9s-42.4 5.5-52.4 19.2 3.2 39.4-2.1 55.7c-5.1 15.7-31.1 28.8-31.1 46.3s25.9 30.6 31 46.3c5.3 16.3-7.8 42.1 2.1 55.7S103 289 116.7 299s18.1 38.6 34.4 43.9c15.7 5.1 36.2-15.3 53.6-15.3s37.9 20.4 53.6 15.3c16.3-5.3 20.8-34 34.4-43.9s42.4-5.5 52.4-19.2-3.1-39.3 2.2-55.7zm-142.5 48.7c-52.5 0-95-42.5-95-95s42.5-95 95-95 95 42.5 95 95-42.5 95-95 95z"/><path class="lineal-stroke" d="M253 355.7c-10.1 0-19.6-4.6-28.8-9.1-7-3.4-14.3-7-19.4-7s-12.4 3.6-19.4 7c-9.2 4.5-18.7 9.1-28.8 9.1-3.1 0-6.2-.5-9.1-1.4-13.7-4.5-20.7-17.6-26.8-29.2-3.5-6.7-7.2-13.6-10.9-16.3s-11.6-4.2-19.2-5.5c-12.8-2.2-27.4-4.8-35.8-16.3s-6.3-26-4.5-38.8c1.1-7.6 2.2-15.6.7-20.2-1.4-4.2-6.7-9.8-11.9-15.1-9.2-9.5-19.7-20.2-19.7-34.9s10.5-25.4 19.7-34.9c5.2-5.3 10.6-10.8 12-15.1 1.5-4.7.4-12.6-.7-20.2C48.6 95 46.5 80.4 54.8 69s23-14.1 35.8-16.3c7.5-1.3 15.3-2.7 19.2-5.5s7.4-9.6 10.9-16.3c6.1-11.6 13.1-24.8 26.8-29.2 2.9-1 6-1.4 9.1-1.4 10.1 0 19.6 4.6 28.8 9.1 7 3.4 14.3 7 19.4 7s12.4-3.6 19.4-7C233.4 4.6 243 0 253 0c3.1 0 6.2.5 9.1 1.4 13.7 4.5 20.7 17.6 26.8 29.2 3.5 6.7 7.2 13.6 10.9 16.3s11.6 4.2 19.2 5.5c12.9 2.2 27.4 4.8 35.8 16.3s6.3 26 4.5 38.8c-1.1 7.6-2.2 15.6-.7 20.2 1.4 4.2 6.7 9.8 11.9 15.1 9.2 9.5 19.7 20.2 19.7 34.9s-10.5 25.4-19.7 34.9c-5.2 5.3-10.6 10.9-11.9 15.1-1.5 4.7-.4 12.6.7 20.2 1.8 12.9 3.9 27.4-4.5 38.8s-23 14.1-35.8 16.3c-7.5 1.3-15.3 2.7-19.2 5.5s-7.4 9.6-10.9 16.3c-6.1 11.6-13.1 24.8-26.8 29.2-2.9 1.2-6 1.7-9.1 1.7zm-48.2-39.9c10.6 0 20.4 4.8 29.8 9.4 6.8 3.3 13.8 6.7 18.4 6.7.6 0 1.2-.1 1.7-.2 4.5-1.5 9.1-10.1 13.1-17.8 4.8-9.1 9.8-18.5 18-24.5s18.9-7.9 29.1-9.7c8.4-1.5 18-3.1 20.7-6.9s1.3-13.2.1-21.6c-1.4-10.3-2.9-21 .3-30.8 3.1-9.5 10.4-17 17.5-24.3 6.1-6.2 13-13.3 13-18.3s-6.9-12.1-13-18.3c-7.1-7.3-14.4-14.8-17.5-24.3-3.2-9.9-1.7-20.5-.3-30.8 1.2-8.4 2.5-17.9-.1-21.6s-12.3-5.4-20.7-6.9c-10.2-1.8-20.8-3.6-29.1-9.7s-13.2-15.4-18-24.5c-4-7.6-8.6-16.3-13.1-17.8-.6-.2-1.2-.3-1.8-.2-4.6 0-11.6 3.4-18.4 6.7-9.5 4.6-19.3 9.4-29.8 9.4s-20.4-4.8-29.8-9.4c-6.8-3.3-13.8-6.7-18.4-6.7-.6 0-1.2.1-1.8.2-4.5 1.5-9.1 10.1-13.1 17.8-4.8 9.1-9.8 18.5-18 24.5s-18.9 7.9-29.1 9.7c-8.4 1.5-18 3.2-20.7 6.9s-1.3 13.2-.1 21.6c1.4 10.3 2.9 21-.3 30.8-3.1 9.5-10.4 17-17.5 24.3-6 6.2-12.9 13.3-12.9 18.3s6.9 12.1 13 18.3c7.1 7.3 14.4 14.8 17.5 24.3 3.2 9.9 1.7 20.5.3 30.8-1.2 8.4-2.5 17.9.1 21.6s12.3 5.4 20.7 6.9c10.2 1.8 20.8 3.6 29.1 9.7s13.2 15.4 18 24.5c4 7.6 8.6 16.3 13.1 17.7.6.2 1.2.3 1.8.2 4.6 0 11.6-3.4 18.4-6.7 9.5-4.6 19.3-9.3 29.8-9.3z"/><path class="lineal-stroke" d="M204.8 284.7c-59 0-106.9-47.9-106.9-106.9 0-59 47.9-106.9 106.9-106.9 59 0 106.9 47.8 106.9 106.8v.1c-.1 59-47.9 106.9-106.9 106.9zm0-190c-45.9 0-83.2 37.2-83.2 83.1 0 45.9 37.2 83.2 83.1 83.2 45.9 0 83.2-37.2 83.2-83.1 0-25.8-12-50.1-32.4-65.9-14.4-11.2-32.3-17.3-50.7-17.3z"/></svg>
              </div>
              <div>
                <h4 class="fs-20 ls-sm">Onze Missie</h4>
                <p class="mb-2">Jonge mensen de kans geven door middel van een beschermde omgeving, weer structuur en veiligheid in zijn/haar leven te verkrijgen.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex flex-row">
              <div>
                <svg class="svgImgs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 457.97"><path class="lineal-fill" d="M286.5 180.78c-18.21 0-26.38 10.21-29.59 16.2a1.08 1.08 0 01-1.9 0c-3.21-6-11.33-16.2-29.54-16.2-20.74 0-39 14.16-39 40a54.24 54.24 0 008 29.43c12.06 20.38 51.78 46.81 59.94 52a2.74 2.74 0 003 0c8.16-5.18 47.9-31.48 60.05-52a54.22 54.22 0 008-29.43c.05-25.84-18.22-40-38.96-40z"/><path class="lineal-stroke" d="M256 316.82a16.91 16.91 0 01-9.09-2.65c-8.3-5.3-50.43-32.93-64.51-56.74a68.28 68.28 0 01-10-36.64c0-31.38 22.34-54.16 53.13-54.16 13.91 0 23.74 4.56 30.5 9.92 6.76-5.36 16.61-9.92 30.53-9.92 30.81 0 53.16 22.78 53.16 54.16a68.25 68.25 0 01-10 36.64c-14.19 24-56.34 51.49-64.65 56.76a16.86 16.86 0 01-9.07 2.63zm-30.53-121.88c-11.45 0-24.83 6.77-24.83 25.85a40.3 40.3 0 006.08 22.21c7.43 12.57 31.56 31.35 49.25 43.27 17.69-11.87 41.84-30.61 49.33-43.27a40.38 40.38 0 006.06-22.22c0-19.08-13.39-25.86-24.86-25.86-8.25 0-14 2.94-17.12 8.74a15.24 15.24 0 01-26.86 0c-3.09-5.79-8.82-8.72-17.05-8.72z"/><path class="lineal-stroke" d="M130.67 458c-8.1 0-19.71-3.73-44.41-31.37C74.07 413 64.07 399.53 63.65 399a14.32 14.32 0 01-1-1.56A58.57 58.57 0 0155.29 369v-67.66a14.15 14.15 0 0114.15-14.15h86.46a50 50 0 0135.31 14.46l44.27 43.56a36.25 36.25 0 11-51.18 51.34L141 353.28l-9.66-.06a14.16 14.16 0 01.08-28.31h.07c5.35 0 9.26.06 11.84.09 5.33.07 9.54.13 13.67 4.25l47.28 47.29a7.94 7.94 0 0011.23-11.24l-44.18-43.48a21.93 21.93 0 00-15.46-6.33H83.59V369A30.14 30.14 0 0087 382.9c16.91 22.62 37.33 44.05 44.52 46.77h115c7.14 0 15.91-4 24.27-8 6.87-3.33 59.31-38.81 94.36-62.95.24-.16.48-.32.73-.46a9.49 9.49 0 003.22-13 9.47 9.47 0 00-12.79-3.34l-64.07 42.48a14.15 14.15 0 11-15.64-23.58l64.4-42.73.52-.33a37.77 37.77 0 0139.39 64.46c-15.12 10.41-86.6 59.5-97.77 64.9S259.62 458 246.49 458H130.67z"/><path class="lineal-fill" d="M14.15 288.21h73.13v141.2H14.15z"/><path class="lineal-stroke" d="M87.28 443.56H14.15A14.16 14.16 0 010 429.41v-141.2a14.15 14.15 0 0114.15-14.15h73.13a14.14 14.14 0 0114.15 14.15v141.2a14.15 14.15 0 01-14.15 14.15zm-59-28.31h44.85V302.36H28.3zm414.28-244.46h-86.45a50.09 50.09 0 01-35.32-14.46l-44.27-43.56a36.25 36.25 0 1151.19-51.35L371 104.69l9.66.07a14.15 14.15 0 01-.07 28.3h-.08c-5.34 0-9.25-.06-11.84-.09-5.33-.07-9.54-.12-13.66-4.25l-47.32-47.28a7.94 7.94 0 00-11.23 11.23l44.18 43.48a21.93 21.93 0 0015.46 6.33h72.3V88.94a30.13 30.13 0 00-3.4-13.87C408.11 52.45 387.69 31 380.5 28.3h-115c-7.14 0-15.91 4-24.28 8-6.86 3.33-59.3 38.82-94.35 63-.24.16-.48.32-.73.47a9.47 9.47 0 009.56 16.34l64.09-42.51a14.15 14.15 0 0115.64 23.59l-64.38 42.7-.52.32a37.77 37.77 0 01-39.39-64.46c15.11-10.4 86.6-59.49 97.77-64.9C240.23 5.37 252.38 0 265.51 0h115.81c8.1 0 19.72 3.73 44.41 31.37C437.94 45 447.93 58.44 448.35 59a14.32 14.32 0 011 1.56 58.57 58.57 0 017.35 28.37v67.69a14.16 14.16 0 01-14.14 14.17z"/><path class="lineal-fill" d="M424.72 28.56h73.13v141.2h-73.13z"/><path class="lineal-stroke" d="M497.85 183.92h-73.13a14.15 14.15 0 01-14.15-14.16V28.56a14.15 14.15 0 0114.15-14.15h73.13A14.16 14.16 0 01512 28.56v141.2a14.16 14.16 0 01-14.15 14.16zm-59-28.31h44.85V42.72h-44.83z"/></svg>
              </div>
              <div>
                <h4 class="fs-20 ls-sm">Onze Waarden</h4>
                <p class="mb-2">Lojal staat voor loyaliteit. Wij staan naast de cliënt, denken met hen mee en blijven loyaal.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-white">
      <div class="container pt-8 pt-md-10">
        <div class="row text-center">
          <div class="col-lg-10 col-xl-7 col-xxl-6 mx-auto">
            <h3 class="display-3 ls-sm mb-10"><a href="nieuws.php" class="alert-heading">Ons nieuws</a></h3>
          </div>
        </div>
        <div class="swiper-container blog grid-view mb-10" data-margin="30" data-dots="true" data-items-xl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php 
                $files = glob('nieuws-artikelen/*.*');
                include 'includes/get-nieuws-artikellen.php';
                if(isset($newFiles) && count($newFiles) != 0){
                  foreach ($newFiles as $key => $file) {
                    if($key >= 7){
                      break;
                    }
                    include $file;
                    echo '<div class="swiper-slide h-auto">
                      <article> 
                        <figure class="overlay overlay-1 hover-scale rounded mb-6">
                          <a href="'; echo $file; echo'"> ';
                            if($headerFotoType == 'video'){ 
                              //Video
                              if(isset($headerVideoPoster) && $headerVideoPoster != ''){
                                echo'<img class="imgNieuws" src="nieuws-artikelen/uploads/'; echo $headerVideoPoster; echo'" alt="" />';
                              }else{
                                echo '<div class="imgNieuws" class="unplayableVideo card-img-top">
                                  <video class="player" width="320" height="240" controls>
                                    <source src="nieuws-artikelen/uploads-video/'; echo $headerVideo; echo'" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                </div>';
                              }
                            }else{
                              //Foto
                              if(isset($headerFoto) && $headerFoto !== ''){
                                echo '<img class="imgNieuws" src="nieuws-artikelen/uploads/' .$headerFoto.'" alt="" />';
                              }else{
                                echo '<img class="imgNieuws" src="nieuws-artikelen/uploads/lojalImgPlaceholder.png" alt="" />';
                              }
                            }
                          echo '</a>
                          <figcaption>
                            <h5 class="from-top mb-0">Lees meer</h5>
                          </figcaption>
                        </figure>
                        <div class="post-header">
                          <h2 class="text-truncate post-title h3 ls-sm mb-3"><a class="primary" href="'; echo $file; echo'">'; echo $title; echo'</a></h2>
                        </div>
                        <p class="position-relative post-footer overflow-hidden" style="white-space: normal; max-height: 163px;">'; 
                          foreach ($blog as $value) {
                            if($value['Type'] == 'Text'){
                              echo $value['Text'][0]; 
                              for ($i=1; $i < count($value['Text']); $i++) { 
                                echo " " . $value['Text'][$i];
                              }echo' 
                              <span class="position-absolute bottom-0 right-0 ps-14 pe-10 text-decoration-underline offset-2 primary-light pointer" style="background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 45%);">
                                <a class="primary-light" href="'; echo $file; echo'">lees meer</a>
                              </span>'; 
                              break;
                            }
                          }
                        echo'</p>
                        <div class="post-footer">
                          <ul class="post-meta mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>'; echo $datum; echo'</span></li>
                            <li class="post-author"><i class="uil uil-user"></i><span>'; echo $schrijver; echo'</span></li>
                          </ul>
                        </div>
                      </article>
                    </div>';
                    $title = '';
                    $schrijver = '';
                    $datum = '';
                    $headerFotoType = '';
                    $headerFoto = '';
                    $headerVideoPoster = '';
                    $headerVideo = '';
                    $blog = [];
                  }
                }else{
                  echo "Geen nieuwsartikelen gevonden";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include 'includes/contact-formulier.php' ?>
  </div>
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