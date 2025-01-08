
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Wonen</title>
  <meta name="description" content="Lojal heeft woonlocaties in Doetinchem, Zelhem, Zutphen, Winterswijk en Lichtenvoorde en een gezinshuis in Laren.">
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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" data-image-src="./assets/imgs/wonenLarenPieperSmit.jpg">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-3 text-white">Wonen</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light wrapper-border">
      <div class="container pt-14 pt-md-16">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <article>
              <div class="row gx-0">
                <div class="col-md-9 text-justify" style="width: 70%;">
                  <h2 class="display-6 mb-4">Wonen</h2>
                  <p>Binnen Stichting Woonzorg Lojal maken we onderscheid tussen beschermd wonen en beschut wonen. We hebben 5 beschermd wonen locaties (Zutphen, Zelhem, Doetinchem, Lichtenvoorde en Winterswijk), 1 gezinshuis in Laren en</p>
                  <h3>Beschermd wonen</h3>
                  <p>Op een leefgroep van Stichting Woonzorg Lojal wonen voornamelijk jongeren (minimaal 14 jr.) en jong- volwassenen. Iedere bewoner werkt, in zijn of haar eigen traject, toe naar een zo zelfstandig als mogelijk leven.</p>
                  <p>In samenwerking met de bewoner en de belangrijke anderen om de bewoner heen proberen we alle lopende trajecten passend vorm te geven. We gaan gezamenlijk opzoek naar verbetering en herstel op alle levensgebieden, denkend aan ADL, maatschappelijke participatie, regievoering, zingeving en dag invulling. We kijken niet alleen naar concrete doelen, maar kijken naar het totale beeld van de bewoners.</p>
                  <p>Ook wordt de relatie tussen de steunende betrokkenheid van alle betrokkenen om de bewoner heen in kaart gebracht. De balans tussen het geven en ontvangen is soms verstoord geraakt. Samen met de bewoner en de belangrijke anderen om hem heen gaan de woonbegeleiders aan de slag om de relaties te herstellen, de mogelijkheden te benutten en toe te passen in het dagelijks leven.</p>
                  <p>Binnen de leefgroep is een klein team van woonbegeleiders werkzaam die 24u per dag aanwezig is (ook in de nacht). De bewoners hebben hun eigen kamer in huis en kunnen gezamenlijk gebruik maken van de gedeelde ruimtes (woonkamer, keuken en badkamer). Op de woongroep wordt gewerkt met een duidelijke dag structuur doormiddel van het toepassen van groep- en leefregels.</p>
                  <h3>Beschut wonen</h3>
                  <p>De beschutte woonlocaties van Stichting Woonzorg Lojal (Doetinchem en Lichtenvoorde) kunnen gezien worden als een vervolgplek na het beschermd wonen. Dagelijks is er een begeleider aanwezig op de locatie zodat de bewoners de hulpvragen kunnen stellen en de nodige ondersteuning ontvangen. De woonbegeleiders zijn 24u per dag bereikbaar, maar niet aanwezig binnen de beschutte woonlocatie.</p>
                  <p>In het beschut wonen wordt er een beroep gedaan op de zelfstandigheid van de bewoners. Zo wordt er bijvoorbeeld van je verwacht dat je je verantwoordelijk voelt voor bijvoorbeeld huishoudelijke taken, de ADL zelf kan vasthouden, zelfstandig je dag invulling kan vasthouden en bij problemen om hulp vraagt bij een belangrijke ander of woonbegeleiding.</p>
                  <p>Ook binnen het beschut wonen worden in overleg met de bewoner de betrokkenen uitgenodigd om deel te nemen aan het beschutte begeleidingstraject omdat we er vanuit onze contextuele benadering vanuit gaan dat mensen elkaar nodig hebben.</p>
                  <p>Binnen de beschutte woonlocaties heb je je eigen kamer en deel je de gemeenschappelijke ruimtes.</p>
                </div>
                <div style="max-width: 27%;" class="col-lg-4 sidebar mt-8 mt-lg-6 ms-auto w-fit">
                    <div class="widget position-sticky top-150px">
                      <h4 class="widget-title mb-3">Locaties</h4>
                      <ul class="image-list">
                        <li>
                          <figure class="rounded"><a href="wonen/doetinchem.php"><img class="h-100 object-fit-cover" src="./assets/imgs/doetinchem3.jpg" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/doetinchem.php">Vancouver + Spinbaan</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i></i><span>Doetinchem</span></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <figure class="rounded"><a href="wonen/lichtenvoorde.php"><img class="h-100 object-fit-cover" src="./assets/imgs/woongroep9.jpg" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/lichtenvoorde.php">Woning Lichtenvoorde</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i></i><span>Lichtenvoorde</span></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <figure class="rounded"><a href="wonen/winterswijk.php"><img class="h-100 object-fit-cover" src="./assets/imgs/winterswijk7.JPG" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/winterswijk.php">Zorghuis + De Villa</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i></i><span>Winterswijk</span></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <figure class="rounded"> <a href="wonen/zelhem.php"><img class="h-100 object-fit-cover" src="./assets/imgs/Woongroep13.JPG" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/zelhem.php">Woongroepen + uitstroomplek Zelhem</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i><span>Zelhem</span></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <figure class="rounded"><a href="wonen/zutphen.php"><img class="h-100 object-fit-cover" src="./assets/imgs/Woongroep7.JPG" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/zutphen.php">Woongroep + huizen Zutphen</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i><span>Zutphen</span></li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <figure class="rounded"><a href="wonen/laren.php"><img class="h-100 object-fit-cover" src="./assets/imgs/wonenLarenPieperSmit.jpg" alt="" /></a></figure>
                          <div class="post-content">
                            <h6 class="mb-2"> <a class="primary" href="wonen/laren.php">Gezinshuis Pieper Smit</a> </h6>
                            <ul class="post-meta">
                              <li class="post-date"><i class="uil uil-map-marker"></i></i><span>Laren</span></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                </div>
              </div>
            </article>
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
        if(selectForm[i]['label'] == 'Wonen'){
          selectForm[i].selected = 'selected'
        }
      }
    }
  </script>
</body>
</html>