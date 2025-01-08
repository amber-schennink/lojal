
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Wonen - Zelhem</title>
  <link rel="shortcut icon" href="../assets/logos/logoLojal.png">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php 
  session_start();
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojal') {}else {
    header("Location: ../login.php");
  }
?>
<body>
  <div class="page-loader"></div>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <?php include '../includes/navbar-one-folder-back.html'; ?>
    </header>
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="../assets/imgs/Woongroep13.JPG">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="../wonen.php" class="text-reset hover-underline offset-2" rel="category">Wonen</a>
              </div>
              <h1 class="display-1 mb-3 text-white">Zelhem</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light wrapper-border">
      <div class="container pt-14 pt-md-16 pb-13 pb-md-15">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <article>
              <div class="row gx-0">
                <div class="col-md-9 text-justify">
                  <h3>Woongroepen</h3>
                  <p>Twee geschakelde woongroepen op een locatie in een dorp in de buurt van Doetinchem. Plek voor 6 (jong)volwassenen tussen (ongeveer) de 16 en 25 jaar aan de ene kant van het huis en plek voor 5 jongeren tussen de 16 en 25 jaar aan de andere kant van het huis. In de groepen wordt veel in de gezamenlijkheid gedaan en is de structuur de leidraad. Er is altijd begeleiding aanwezig binnen deze gemengde groep. Ieder heeft zijn eigen kamer, maar eten en koken wordt samengedaan. Iedere bewoner doorloopt zijn of haar eigen woon traject in zijn of haar tempo. </p>
                  <h3>Uitstroomplek</h3>
                  <p>Daarnaast is er nog een beschutte uitstroomplek voor drie (jong)volwassenen, tussen de twee bovenbeschreven woongroepen in. Je hebt je eigen kamer, maar deelt de woonkamer, keuken en het sanitair. De (jong)volwassen hebben zichzelf ontwikkeld op de woongroep, maar zijn nog niet toe aan een stap voor het zelfstandig wonen. (Jong)volwassenen trainen in een vertrouwde omgeving naar meer zelfstandigheid. Daar waar nodig kunnen de (jong)volwassenen 24u per dag een beroep doen op de begeleiding in de aangrenzende twee woongroepen. Plaatsing op deze locatie is alleen voor 18+.</p>
                  <p>Aanmelden kan via <a class="text-decoration-underline offset-2 primary-light" href="mailto:mail@mail.com">mail@mail.com</a></p>
                </div>
                <div style="padding-right: 1px;" class="ms-auto d-flex w-fit">
                  <a href="../contact.php" class="btn btn-lg btn-primary rounded mt-auto">Aanmelden</a>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="container-fluid px-md-6">
        <div class="swiper-container blog grid-view mb-17 mb-md-19" data-margin="30" data-nav="true" data-dots="true" data-items-xxl="3" data-items-md="2" data-items-xs="1">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Woongroep.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Woongroep13.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Woongroep6.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Woongroep4.JPG" alt="" /></figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container py-10">
        <div class="row gx-md-6 gy-3 gy-md-0">
          <div class="text-center text-md-start navigation flex w-100 justify-content-between flex-wrap gap-3">
            <a href="winterswijk.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 m-1 m-auto-mb"><i class="uil uil-arrow-left"></i>Zorghuis + De Villa</a>
            <a href="zutphen.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0 m-auto-mb">Woongroep + huizen Zutphen<i class="uil uil-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '../includes/footer-one-folder-back.html'; ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>
</html>