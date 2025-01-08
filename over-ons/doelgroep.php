
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Over Ons - Doelgroup</title>
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
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-4">Doelgroep</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card">
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <div>
                          <p class="text-pre-wrap">Onze vaak jonge cliënten zijn mensen die, veelal door een te groot aantal beperkingen in het dagelijks leven, in de problemen zijn gekomen of dreigen te komen. Zij hebben om die reden een steun in de rug nodig. Wij zorgen hiervoor door verschillende diensten aan te bieden. Het mooie is dat ook ouders en/of verzorgers van onze diensten kunnen profiteren. Onze zorgprofessionals zijn vooral goed in actie. In het doen en samen bezig zijn, zit onze grote kracht. Dat is ook ons idee over hoe hulpverlening hoort te werken. Onze specialisatie zit met name in de kwetsbare groep van jongvolwassenen met een licht verstandelijke beperking en moeilijk verstaanbaar gedrag. Eventueel in combinatie met bijkomende psychiatrische problemen die weliswaar niet om behandeling vragen, maar wel om langdurige begeleiding.</p>
                        </div>
                        <div>
                          <h2 class="mt-5">Oorzaken</h2>
                          <p class="text-pre-wrap">Mensen kunnen door verschillende oorzaken in de problemen gekomen zijn. Oorzaken die soms ontstaan zijn door omstandigheden en soms ook omdat ze nu eenmaal biologisch zijn bepaald. Binnen Lojal denken wij graag creatief, bestaat de passende oplossing niet, dan gaan we samen met cliënt, ouders, verzorgers of instelling op zoek naar een goed alternatief. Niet alles valt op te lossen, maar dat wil niet zeggen dat er niets meer te doen valt.</p>
                        </div>
                        <div class="row g-6 mt-3 mb-10">
                          <div class="col-md-6 flex">
                            <figure class="hover-scale rounded cursor-dark m-auto w-100">
                              <a href="../assets/imgs/Dagbesteding2.jpg" data-glightbox data-gallery="post"> 
                                <img src="../assets/imgs/Dagbesteding2.jpg" alt="" />
                              </a>
                            </figure>
                          </div>
                          <div class="col-md-6 flex">
                            <figure class="hover-scale rounded cursor-dark m-auto w-100 h-100">
                              <a href="../assets/imgs/BBQ (15).jpg" data-glightbox data-gallery="post"> 
                                <img class="h-100 object-fit-cover" src="../assets/imgs/BBQ (15).jpg" alt="" />
                              </a>
                            </figure>
                          </div>
                        </div>
                        <div>
                          <h2>Wonen</h2>
                          <p class="text-pre-wrap">Lojal heeft mogelijkheden in verschillende (beschermde) woonvormen, in ambulante begeleidingsvormen en op het gebied van behandeling. Lojal is actief in verschillende Achterhoekse gemeenten en daarnaast in de gemeenten Deventer, Lochem en Zutphen.</p>
                        </div>
                        <div>
                          <h2 class="mt-5">Vragen?</h2>
                          <p class="text-pre-wrap">Het grootste gedeelte van ons dienstenaanbod vind je terug op deze site. Lojal heeft echter flexibiliteit en maatwerk hoog in het vaandel. Regelmatig bereiken ons nieuwe vragen en wordt ons programma daarop uitgebreid en/of aangepast. Heb je een vraag, schroom dan niet om contact met ons op te nemen. Weten wij het antwoord niet (direct), dan zoeken we dat elders of werken we samen met andere organisaties om het antwoord te vinden.</p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '../includes/contact-formulier.php' ?>
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