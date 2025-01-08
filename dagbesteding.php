<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Dagbesteding</title>
  <meta name="description" content="Wij bieden verschillende soorten dagbesteding aan binnen onze organisatie.">
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
    <section class="video-wrapper bg-overlay bg-overlay-gradient px-0 mt-0 min-vh-80" style="height: 80vh;">
      <img class="w-100 h-100 object-fit-cover" src="./assets/imgs/Dagbesteding8.jpg" />
      <div class="video-content top-0">
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 col-xl-6 text-center text-white mx-auto">
              <h1 class="display-1 fs-54 text-white mb-5">Dagbesteding</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="addNavBarHeight">
      <div class="container pt-12 pt-md-14">
        <div class="gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="gy-3">
            <p>In de visie van Lojal staat het begeleiden van de cliënten naar een zo normaal mogelijk bestaan voorop. Het streven van Lojal is erop gericht de cliënten zoveel mogelijk te laten integreren in de samenleving. Als werk of school niet binnen de mogelijkheden ligt, wordt er gekeken naar andere mogelijkheden</p>
            <p>Onze cliënten kunnen naar verschillende soorten dagbesteding, zowel extern als intern. Voor de externe dagbesteding gaan cliënten naar andere partijen zoals Workmate, ICT op Maat en Zorgboerderij Rutgers.</p>
            <p>Intern hebben we een breed aanbod aan activiteiten zoals een wekelijkse kookclub, paardrijden, Hotel Bi-j Ons of werken in de groenvoorziening.</p>
            <p>Daarnaast nemen we deel aan de uitvoering van diverse festivals door het jaar heen. Onze deelname behelst dat cliënten en begeleiders diverse werkzaamheden verrichten voorafgaand, tijdens en na afloop van een festival. Deze werkwijze is uniek in Nederland en wordt door de organisatoren zeer gewaardeerd. Waar mogelijk willen we de activiteiten uitbreiden. Onze cliënten zijn o.a. betrokken bij Concert at Sea, Down the Rabbit Hole, Zwarte Cross, Mañana Mañana en Lowlands. De ervaring van deelname is voor onze cliënten en medewerkers een terugkerend hoogtepunt in hun jaarprogramma. We doen het samen!</p>
          </div>
        </div>
      </div>
    </section>
    <section id="paardrijden" class="addNavBarHeight">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-6 order-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-primary rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="./assets/imgs/Paardrijden3.jpg" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <div class="row gy-3">
              <h3 class="display-4 mb-4">Paardrijden</h3>
              <p>Als dagbesteding hebben we ook de mogelijkheid om actief te zijn op manege ‘Het Loenhorst’. Dit kan op verschillende manieren, je kunt leren paardrijden maar ook helpen bij de verzorging van de paarden en de manege.</p>
              <p>Paardrijden kan spannend zijn, wij hebben ervaren begeleiders die geschoold zijn en jarenlange ervaring hebben op het gebied van hulpverlening en paardenverzorging. Samen zetten we stappen om meer vertrouwen te krijgen bij de verzorging van paarden.</p>
              <a href="paardrijden.php" class="btn btn-primary mt-2 ms-auto me-3">Meer informatie</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div id="hotelBi-jOns" style="margin-top: -175px !important;" class="row gx-lg-8 gx-xl-12 gy-10 mb-14 align-items-center addNavBarHeight">
          <div class="col-lg-6 order-2-mb position-relative">
            <div class="shape bg-line leaf rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; right: -0.6rem;"></div>
            <div class="shape bg-pale-violet rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; left: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="./assets/logos/Logo Hotel BI-J ONS.png" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <h3 class="display-4 mb-4">Hotel Bi-j Ons</h3>
            <p>In 2023 is Stichting Woonzorg Lojal een samenwerking gestart met Hotel Bi-j Ons. Onze cliënten hebben geholpen bij de renovering en de verbouwing van het hotel. Sinds zomer 2024 is het hotel geopend. Clienten ondersteunen in de dagelijkse bezigheden van het hotel zoals het voorbereiden van het ontbijtbuffet, het onderhouden van de kamers en het contact met gasten.</p>
            <p>In juli zal het hotel opengaan en zal de dagbesteding opgestart worden. De dagbesteding zal ondersteunen in de dagelijkse bezigheden in het hotel, bijvoorbeeld het voorbereiden van het ontbijtbuffet, het onderhouden van de kamers en het contact met de gasten. Daarnaast worden er regelmatig vergaderingen of partijen georganiseerd vanuit het hotel waarbij de clienten bijdragen aan het verzorgen van koffie, thee en lunch.</p>
          </div>
        </div>
        <div id="groenvoorziening" style="margin-top: -175px !important" class="row gx-lg-8 gx-xl-12 gy-10 align-items-center addNavBarHeight">
          <div class="col-lg-6 order-2 position-relative">
            <div class="shape bg-line aqua rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="top: -2rem; left: -0.6rem;"></div>
            <div class="shape bg-pale-red rounded-circle rellax w-17 h-17" data-rellax-speed="1" style="bottom: -2rem; right: -0.4rem;"></div>
            <figure class="rounded mb-0"><img src="./assets/imgs/LojalAlg2.JPG" alt=""></figure>
          </div>
          <div class="col-lg-6">
            <div class="row gy-3">
              <h3 class="display-4 mb-4">Groenvoorziening</h3>
              <p>Binnen Lojal hebben we verschillende ‘groene’ werkplekken. Enkele woongroepen zijn omgeven met groen, hebben huisdieren of een moestuin. Het onderhouden en verzorgen van deze plekken is onderdeel van de dagbesteding.</p>
              <p>Door onze dagbesteding cliënten worden ook op meerdere locaties ad hoc klussen uitgevoerd.</p>
            </div>
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
  <script>
    // contact form select onderwerp
    if(document.getElementById('form-select')){
      var selectForm = document.getElementById('form-select')
      for (let i = 0; i < selectForm.length; i++) {
        if(selectForm[i]['label'] == 'Dagbesteding'){
          selectForm[i].selected = 'selected'
        }
      }
    }
  </script>
</body>
</html>