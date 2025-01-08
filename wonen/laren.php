
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Wonen - Laren</title>
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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="../assets/imgs/wonenLarenPieperSmit.jpg">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="../wonen.php" class="text-reset hover-underline offset-2" rel="category">Wonen</a>
              </div>
              <h1 class="display-1 mb-3 text-white">Laren</h1>
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
              <h2 class="display-6 mb-4">Gezinshuis Pieper Smit</h2>
              <div class="row gx-0">
                <div class="col-md-9 text-justify">
                  <p>Net buiten Lochem, in het plaatsje Laren, is Lojal, in samenwerking, een zeer kleinschalig gezinshuis begonnen. In de afgelopen jaren werd duidelijk dat er een cliënten groep bestond die de warmte en de nabijheid van een gezinshuis, ondanks hun leeftijd, goed konden gebruiken. De plekken zijn gericht op langdurig verblijf. Het er mogen “zijn” gaat voor snelle ontwikkeling.</p>
                  <p>Gezinshuis Pieper Smit is een kleinschalig gezinshuis waar de zelfredzaamheid van de jongeren de basis vormt. De sfeer van gewoon wonen, de huiselijkheid en kleinschaligheid staat voorop.</p>
                  <p>De gezinshuisouders zijn 24/7 in de buurt voor vragen,of voor gewoon even te helpen, problemen op te lossen of om “kletspraat” te houden. Ze gaan respectvol om met de mensen die in ons gezinshuis wonen en verwachten dat ook andersom. Er is veel aandacht voor de onderlinge saamhorigheid en betrokkenheid met ons als gezin en met de jongeren onder elkaar.</p>
                  <p class="fw-bolder">Elkaar stimuleren, naar elkaar luisteren en motiveren zorgt ervoor dat een ieder zich “thuis” voelt!</p>
                  <p>Gezinshuis ouders Gerdien en Sander werken nauw samen met Lojal om een zo optimaal mogelijke plek te creeeren voor diegene die hiervoor in aanmerking komt of wil komen. Gerdien is meer dan 10 jaar in dienst bij Lojal en heeft daarvoor ook al een schat aan ervaring opgedaan. Sander is, door zijn ervaring als voorman, ook het nodige gewend en ondersteund Gerdien waar hij kan.</p>
                  <p>Gerdien en Sander hebben een eigen website met veel meer informatie: <a class="text-decoration-underline offset-2 primary-light" href="link" target="_blank">www.piepersmit.nl</a></p>
                  <p>Aanmelden kan via <a class="text-decoration-underline offset-2 primary-light" href="mailto:mail@mail.com">mail@mail.com</a></p>
                </div>
                <div style="padding-right: 1px;" class="ms-auto-dt position-relative w-fit-dt">
                  <ul class="list-unstyled">
                    <li>
                      <h5 class="mb-1">Adres</h5>
                      <p>straat <br> postcode plaats</p>
                    </li>
                    <li>
                      <h5 class="mb-1">E-mail</h5>
                      <p>mail@mail.com</p>
                    </li>
                    <li>
                      <h5 class="mb-1">Telefoonnummer</h5>
                      <p>12345678</p>
                    </li>
                  </ul>
                  <h6><a href="link" target="_blank" class="more hover primary mt-4">Pieper Smit website</a></h6>
                  <a href="../contact.php" class="btn btn-lg btn-primary rounded mt-auto position-absolute bottom-0 start-0 end-0 ms-auto-mb">Aanmelden</a>
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
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/pieperSmit1.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide">
                <figure class="rounded "><img src="../assets/imgs/pieperSmit2.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide">
                <figure class="rounded"><img src="../assets/imgs/pieperSmit3.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/pieperSmit4.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/pieperSmit5.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/pieperSmit6.jpg" alt="" /></figure>
              </div>
              <div class="swiper-slide">
                <figure class="rounded"><img src="../assets/imgs/pieperSmit7.jpg" alt="" /></figure>
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
            <a href="zutphen.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 m-1 m-auto-mb"><i class="uil uil-arrow-left"></i>Woongroep + huizen Zutphen</a>
            <a href="doetinchem.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0 m-auto-mb">Vancouver + Spinbaan<i class="uil uil-arrow-right"></i></a>
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