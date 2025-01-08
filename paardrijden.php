<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Paardrijden</title>
  <meta name="description" content="Bij Lojal hebben we verschillende mogelijkheden om in contact te komen met paarden. Zowel in de dagbesteding, als activiteit of als therapie.">
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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="./assets/imgs/Paardrijden2.jpg">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-3 text-white">Paardrijden</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light wrapper-border">

    <section id="paardrijden" class="addNavBarHeight">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 align-items-center">
          <div class="col-lg-6 order-lg-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-primary rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="./assets/imgs/Paardrijden1.JPG" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <div class="row gy-3">
              <h3 class="display-4 mb-4">Paarden bij Lojal</h3>
              <p>Bij Lojal hebben we verschillende mogelijkheden om in contact te komen met paarden. Zowel in de dagbesteding, als activiteit of als therapie. Bij de dagbesteding wordt er regelmatig gewerkt op een manege. Dit betekent niet dat er meteen contact is met paarden. De stallen en het gebied rondom de manege worden bijvoorbeeld ook onderhouden. Daarnaast is er ook de mogelijkheid om meer in contact te komen met de paarden.</p>
            </div>
          </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="./assets/imgs/Paardrijden3.jpg" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Paardrijden</h3>
            <p>Wie wil leren paardrijden en/of paarden verzorgen, en daar extra hulp bij nodig heeft, kan bij ons terecht. We zijn geschoold en hebben jarenlange ervaring op het gebied van hulpverlening en paardenverzorging. Enkele van de jongeren die al langer met de paarden omgaan, mogen de nieuwkomers helpen. Op het paard is iedereen ‘een ruiter’. Voor het paardrijden moet je ook leren vertrouwen. Dit kan een moeilijke opgave zijn, soms is daar wat meer tijd voor nodig en dat is geen probleem.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
            <h3 class="display-5 mb-12 mb-md-2 px-lg-10">Het paardrijden brengt ook nog andere voordelen met zich mee:</h3>
          </div>
        </div>
        <div class="pricing-wrapper position-relative">
          <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="top: 2rem; right: -2.4rem;"></div>
          <div class="shape rounded-circle bg-line red rellax w-18 h-18 d-none d-lg-block" data-rellax-speed="1" style="bottom: 0.5rem; left: -2.5rem;"></div>
          <div class="row gy-6 mt-3 mt-md-5">
            <div class="col-md-6 col-lg-4">
              <div class="pricing card text-center">
                <div class="card-body">
                  <h4 class="card-title">Lichamelijk:</h4>
                  <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                    <li><i class="uil uil-check"></i>Ontspanning door de ritmische beweging van het paard</li>
                    <li><i class="uil uil-check"></i>Je kracht beter leren controleren omdat het paard heel gevoelig is</li>
                    <li><i class="uil uil-check"></i>Bewuster worden van je lichaam en lichaamshouding</li>
                    <li><i class="uil uil-check"></i>Verbetering van gevoel voor evenwicht en coördinatie.</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="pricing card text-center">
                <div class="card-body">
                  <h4 class="card-title">Mentaal:</h4>
                  <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                    <li><i class="uil uil-check"></i>Opbouw van gevoel voor verantwoording nemen</li>
                    <li><i class="uil uil-check"></i>Leren beheersen van een vaardigheid</li>
                    <li><i class="uil uil-check"></i>Leren omgaan met frustratie</li>
                    <li><i class="uil uil-check"></i>Versterken van eigenwaarde, vertrouwen in eigen prestaties</li>
                    <li><i class="uil uil-check"></i>Erkennen en overwinnen van angsten</li>
                    <li><i class="uil uil-check"></i>Leren meedoen in een groep</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0">
              <div class="pricing card text-center">
                <div class="card-body">
                  <h4 class="card-title">Sociaal:</h4>
                  <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8 text-start">
                    <li><i class="uil uil-check"></i>Het verwerven van respect en liefde voor dieren</li>
                    <li><i class="uil uil-check"></i>Delen van ervaring met anderen</li>
                    <li><i class="uil uil-check"></i>Leren waarderen van prestaties van anderen</li>
                    <li><i class="uil uil-check"></i>Binding maken met een paard</li>
                    <li><i class="uil uil-check"></i>Hulp geven en hulp vragen</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="wrapper bg-light">
      <div class="container">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="./assets/imgs/Paardtherapie (8).jpg" alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img src="./assets/imgs/Paardtherapie (4).JPG" alt=""></figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="display-4 mb-3">Equitherapie</h2>
            <p>Naast het paardrijden en de paarden verzorging, biedt Lojal ook een specifieke behandeling aan met paarden. Equitherapie is een lichaamsgerichte therapie, waarbij de bewegingen van het paard het belangrijkste zijn. De equitherapeut werkt met een vaste structuur waarin de client binnen een veilige sfeer, een relatie kan aangaan met het paard en de therapeut. Vanuit deze situatie kan de client zich dan verder ontwikkelen.</p>
            <p class="mb-6">Om te kunnen starten met equitherapie is het belangrijk dat de client een hulpvraag heeft, enige motivatie om te leren en open staat voor het willen begrijpen van paarden. Ervaring is niet nodig maar interesse wel!</p>
          </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center mt-0">
          <div class="col-lg-6 position-relative">
            <figure class="rounded mb-0"><img src="./assets/imgs/Paardtherapie (7).jpg" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <p>De paarden zijn speciaal opgeleid voor equitherapie. De positieve aspecten die het paard bijdraagt in de therapie:</p>
            <div class="row gy-3 gx-xl-8">
              <div>
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>De bewegingen van het paard</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>De sociale vaardigheden van het paard</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Analoge communicatie, het paard is eerlijk en begrijpt geen dubbele boodschappen</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Acceptatie, het paard accepteert iedereen hoe hij is, motiveert tot contact maar stelt ook grenzen.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Aantrekkingskracht, dit heeft een paard vaak van nature waardoor contact makkelijker ontstaat</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
</body>
</html>