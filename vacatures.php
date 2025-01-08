
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Vacatures</title>
  <meta name="description" content="Stichting Woonzorg Lojal is op zoek naar…">
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
    <section class="wrapper bg-soft-primary position-relative">
      <div class="container pt-10 pb-17 pt-md-14 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto mb-5">
            <h1 class="fs-15 text-uppercase text-muted mb-3">Kom bij het team</h1>
            <h3 class="display-1 mb-6">Stichting Woonzorg Lojal is op zoek naar medewerkers.</h3>
            <a href="#vacatures" class="btn btn-lg btn-primary rounded-pill mx-auto">Ontdek de mogelijkheden</a>
          </div>
        </div>
      </div>
      <div class="overflow-hidden">
        <div class="divider text-light mx-n2">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
            <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
          </svg>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-14">
        <div class="row gy-10 gy-sm-13 gx-md-8 gx-xl-12 align-items-center mt-n8 mt-md-n9">
          <div class="col-lg-6">
            <div class="row gx-md-5 gy-5">
              <div class="col-12">
                <figure class="rounded mx-md-5"><img src="./assets/imgs/Personeel1.jpg" alt=""></figure>
              </div>
              <div class="col-md-5">
                <figure class="rounded"><img style="aspect-ratio: 1/1;" class="object-fit-cover" src="./assets/imgs/Lasergamen4.JPG" alt=""></figure>
              </div>
              <div class="col-md-7">
                <figure class="rounded"><img src="./assets/imgs/Dagbesteding1.jpg" alt=""></figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 class="fs-16 text-uppercase text-muted mb-3 mt-md-n5">Wie zijn wij?</h2>
            <h3 class="display-3 mb-5">Stichting Woonzorg Lojal begeleidt mensen die moeite hebben om zich staande te houden in onze complexe maatschappij.</h3>
            <p class="mb-6">We zijn met name gespecialiseerd in jong volwassenen met een licht verstandelijke handicap en moeilijk verstaanbaar gedrag veelal veroorzaakt door psychiatrische problemen en die aangewezen zijn op langdurige begeleiding. De Contextuele hulpverlening is onze methodische basis en we verwachten dat men zich daar mee kan vereenzelvigen.</p>
          </div>
        </div>
        <hr class="my-14" />
        <div id="vacatures" style="margin-top: -125px !important;" class="row text-center addNavBarHeight">
          <div class="col-xl-10 mx-auto">
            <h3 class="display-4 px-xxl-15">Vacatures</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-10 mx-auto">
            <div class="job-list my-10">
              <h3 class="mb-4">Woon begeleiding</h3>
              <a href="vacatures/woonbegeleider.php" class="card mb-4 lift">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-red text-white w-9 h-9 fs-17 me-3">WB</span> Woonbegeleider(ster) m/v voor de groep </span>
                    <span class="col-5 col-md-3 text-body d-flex align-items-center">
                      <i class="uil uil-clock me-1"></i> Full time </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Zelhem </span>
                    <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span>
                  </span>
                </div>
              </a>
              <a href="vacatures/ambulante-woonbegeleider.php" class="card mb-4 lift">
                <div class="card-body p-5">
                  <span class="row justify-content-between align-items-center">
                    <span class="col-md-5 mb-2 mb-md-0 d-flex align-items-center text-body">
                      <span class="avatar bg-green text-white w-9 h-9 fs-17 me-3">AWB</span> Ambulante Woonbegeleider(ster) m/v </span>
                    <span class="col-5 col-md-3 text-body d-flex align-items-center">
                      <i class="uil uil-clock me-1"></i> Full time </span>
                    <span class="col-7 col-md-4 col-lg-3 text-body d-flex align-items-center">
                      <i class="uil uil-location-arrow me-1"></i> Zelhem </span>
                    <span class="d-none d-lg-block col-1 text-center text-body">
                      <i class="uil uil-angle-right-b"></i>
                    </span>
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-soft-primary">
      <div class="container py-14 py-md-16">
        <div class="row">
          <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto text-center">
            <h2 class="fs-15 text-uppercase text-muted mb-3">Staat de passende vacature er niet bij?</h2>
            <h3 class="display-4 mb-7 px-lg-5 px-xl-0 px-xxl-5">Wij denken in mogelijkheden en gaan graag het gesprek met je aan!</h3> 
            <h4 class="text-primary-light">Schroom niet een open sollicitatie te sturen naar <a href="mailto:mail@mail.com" class="hover pointer">mail@mail.com</a> of contact op te nemen via <a href="tel:12345678" class="hover pointer">12345678</a>.</h4>
          </div>
        </div>
      </div>
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