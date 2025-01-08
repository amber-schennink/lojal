
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Wonen - Winterswijk</title>
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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="../assets/imgs/winterswijk7.JPG">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <div class="post-category text-line text-white">
                <a href="../wonen.php" class="text-reset hover-underline offset-2" rel="category">Wonen</a>
              </div>
              <h1 class="display-1 mb-3 text-white">Winterswijk</h1>
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
                  <p>In Winterswijk zijn er twee locaties: het Zorghuis en De Villa.</p>
                  <h3>Zorghuis</h3>
                  <p>In het zorghuis wordt er zeer kleinschalig gewerkt, wat het woonklimaat hier veilig en gestructureerd maakt. Er zijn hier vier plekken waarvan een crisisbed. Ieder heeft zijn eigen kamer, maar koken en eten doen we samen. In principe heeft iedereen een dagbesteding, maar heb je dit niet dan doe je mee in de dagorde van Lojal. Dit houdt in dat er dagbesteding georganiseerd wordt op het ruime buiten terrein in Winterswijk, Doetinchem of elders.</p>
                  <h3>De Villa</h3>
                  <p>De Villa is een locatie waar getraind kan worden om zelfstandiger te kunnen gaan leven. Groepsleiding is dan wel in de buurt maar niet voortdurend in het huis. Er zijn hier 5 plekken. Iedereen heeft een eigen kamer met gedeeld sanitair. Er wordt gezamenlijk gekookt. Begeleiding is altijd aanwezig rondom etenstijd om hierin te ondersteunen wanneer nodig. Het huishouden wordt gezamenlijk gedaan. </p>
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
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/winterswijk7.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Winterswijk3.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Winterswijk2.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Winterswijk4.JPG" alt="" /></figure>
              </div>
              <div class="swiper-slide h-auto">
                <figure class="rounded h-100"><img class="h-100" src="../assets/imgs/Winterswijk.jpg" alt="" /></figure>
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
            <a href="lichtenvoorde.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-start mb-0 m-1 m-auto-mb"><i class="uil uil-arrow-left"></i>Woning Lichtenvoorde</a>
            <a href="zelhem.php" style="white-space: initial;" class="btn btn-soft-ash rounded-pill btn-icon btn-icon-end mb-0 m-auto-mb">Woongroepen + uitstroomplek Zelhem<i class="uil uil-arrow-right"></i></a>
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