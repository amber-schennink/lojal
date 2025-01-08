
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Over Ons</title>
  <meta name="description" content="Lojal is een organisatie die begeleiding biedt aan (kwetsbare)jongeren en volwassenen. Wij bieden beschermd/beschut wonen, ambulante begeleiding en behandeling.">
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
    </section>
    <section class="wrapper bg-gray">
      <div class="position-absolute z-3 pt-10 pt-md-16 ms-18 text-center">
        <h1 class="display-1 mb-4">Hallo! Wij zijn Lojal</h1>
      </div>
      <figure class="position-relative" style="bottom: 0; left: 0; z-index: 2;">
        <div id="overlay">
          <img class="object-fit-cover" style="height: 600px !important;" src="./assets/imgs/Personeel1.jpg" alt=""/>
        </div>
      </figure> 
      <style>
        #overlay::before {
          background: -moz-linear-gradient(top,  #f9f9fb 0%, rgba(255,255,255,0) 100%);
          background: -webkit-linear-gradient(top,  #f9f9fb 0%,rgba(255,255,255,0) 100%);
          background: -ms-linear-gradient(top,  #f9f9fb 0%,rgba(255,255,255,0) 100%);
          background: linear-gradient(to bottom,  #f9f9fb 0%,rgba(255,255,255,0) 100%);
          content: "";
          position: absolute;
          top: 0;
          left: 0;
          height: 100%;
          width: 100%;
        }
      </style>
    </section>
    <section id="wieZijnWij" class="wrapper bg-light angled upper-end">
      <div class="container pt-14 pt-md-16">
        <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
          <div class="col-lg-6 position-relative order-lg-2">
            <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1" style="top: 3rem; left: 5.5rem"></div>
            <div class="overlap-grid overlap-grid-2">
              <div class="item">
                <figure class="rounded shadow"><img src="./assets/imgs/Dagbesteding1.jpg" alt=""></figure>
              </div>
              <div class="item">
                <figure class="rounded shadow"><img class="object-fit-cover" style="aspect-ratio: 1/1;" src="./assets/imgs/Lasergamen4.JPG" alt=""></figure>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <svg class="svg-inject icon-svg icon-svg-md mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 362.5"><path class="lineal-stroke" d="M343.4 302.9L61 302.5c-25.3-.2-47.5-16.8-54.8-40.9l-3.9-12.9c-7.1-24.2 2.5-50.3 23.5-64.2L262.1 29.8c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.3 249.8c2.4 6.4-.9 13.5-7.3 15.8-1.3.5-2.8.7-4.2.7zM261.8 59.4L39.3 205c-12 7.9-17.4 22.8-13.4 36.6l3.8 12.9c4.2 13.8 16.8 23.3 31.2 23.4l265.8.4-64.9-218.9z"/><path class="lineal-stroke" d="M138 362.5c-40.4 0-72.8-31.1-73.6-70.8 0-6.8 5.5-12.3 12.3-12.3 6.6 0 12.1 5.2 12.3 11.8.6 26.2 22.1 46.7 49 46.7 14.2 0 27.7-6.2 37-16.9 4.5-5.1 12.2-5.7 17.4-1.2 5.1 4.5 5.7 12.2 1.2 17.4-14 16.1-34.3 25.3-55.6 25.3z"/><path class="lineal-fill" d="M183.4 96l57.8 194.5 102.1.1-74.5-250.5L183.4 96z"/><path class="lineal-stroke" d="M343.4 302.9l-102.1-.1c-5.4 0-10.2-3.6-11.8-8.8L171.6 99.5c-1.6-5.2.5-10.8 5.1-13.8l85.4-55.9c5.7-3.7 13.3-2.1 17 3.6.7 1 1.2 2.1 1.5 3.2l74.5 250.6c1.9 6.5-1.8 13.4-8.3 15.3-1.1.2-2.3.4-3.4.4zm-92.9-24.7l76.4.1-65.1-218.9-63.9 41.8 52.6 177z"/><path class="lineal-stroke" d="M351.8 330.6c-5.4 0-10.2-3.6-11.8-8.8l-91-306c-2.1-6.5 1.3-13.4 7.8-15.6 6.5-2.1 13.4 1.3 15.6 7.8.1.3.2.5.2.8l91 305.9c1.9 6.5-1.8 13.4-8.3 15.3-1.1.4-2.3.6-3.5.6zM338 91.7c-6.8 0-12.3-5.5-12.3-12.3 0-1.8.4-3.6 1.2-5.3l13.4-28.5c2.9-6.2 10.2-8.8 16.4-5.9 6.2 2.9 8.8 10.2 5.9 16.4l-13.4 28.5c-2.1 4.3-6.4 7.1-11.2 7.1zm28.2 64.9c-6.8 0-12.3-5.5-12.3-12.3 0-5.7 3.9-10.6 9.4-12l31.1-7.5c6.6-1.5 13.2 2.6 14.7 9.3 1.5 6.5-2.5 13-9 14.7l-31.2 7.4c-.8.3-1.8.4-2.7.4zm29.1 90c-2.7 0-5.4-.9-7.5-2.6l-24.9-19.4c-5.4-4.2-6.3-11.9-2.2-17.3s11.9-6.3 17.3-2.2l24.9 19.4c5.4 4.2 6.3 11.9 2.1 17.3-2.3 3-5.9 4.7-9.7 4.8z"/></svg>
            <h2 class="display-4 mb-3">Wie zijn wij?</h2>
            <p class="lead fs-lg">In Lojal hebben een aantal mensen hun krachten gebundeld vanuit verschillende invalshoeken. Zij richt zich met name op jongeren en jong volwassenen, maar ook voor anderen staat de deur op een kier.</p>
            <p>Het gaat hier om een kwetsbare doelgroep. Om mensen die in de problemen zijn of zijn gekomen, veelal door een te groot aantal beperkingen in het dagelijks leven. Lojal biedt hulp op verschillende levensterreinen.</p>
            <p class="mb-6">De organisatie blijft sterk in ontwikkeling en probeert steeds weer nieuwe hulpvormen te organiseren</p>
            <div class="row gy-3 gx-xl-8">
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Het belang van de client staat centraal.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Lojal is flexibel, creatief en blijft in ontwikkeling.</span></li>
                </ul>
              </div>
              <div class="col-xl-6">
                <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
                  <li><span><i class="uil uil-check"></i></span><span>Wij werken vanuit de contextuele hulpverlening.</span></li>
                  <li class="mt-3"><span><i class="uil uil-check"></i></span><span>Wij denken graag mee over een passende oplossing.</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div id="missieEnVisie" class="addNavBarHeight">
          <div class="row mb-5">
            <div class="col-md-10 col-xl-8 col-xxl-7 mx-auto text-center">
              <svg class="svg-inject icon-svg icon-svg-md mb-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 447"><path class="lineal-stroke" d="M102.4 447C45.8 447 0 401.1 0 344.6s45.9-102.4 102.4-102.4c36.3 0 69.9 19.2 88.3 50.5 4.1 6.9 1.8 15.8-5.2 19.9-6.9 4.1-15.8 1.8-19.9-5.2-20.5-34.9-65.4-46.6-100.3-26.1s-46.6 65.4-26.1 100.3 65.4 46.6 100.3 26.1c10.2-6 18.8-14.3 25-24.3 4.3-6.8 13.2-8.9 20.1-4.6 6.8 4.3 8.9 13.2 4.6 20.1-18.7 30-51.5 48.2-86.8 48.1zm395.1-119.8H254.3c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h243.1c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.4 14-14.1 14.2zm-91.2 63.9h-152c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h152c8 .2 14.4 6.9 14.2 14.9-.2 7.7-6.5 14-14.2 14.2z"/><circle class="lineal-fill" cx="102.4" cy="102.4" r="87.8"/><path class="lineal-stroke" d="M102.4 204.8C45.8 204.8 0 158.9 0 102.4S45.8 0 102.4 0s102.4 45.8 102.4 102.4c-.1 56.5-45.9 102.3-102.4 102.4zm0-175.7c-40.5 0-73.3 32.8-73.3 73.3s32.8 73.3 73.3 73.3 73.3-32.8 73.3-73.3c-.1-40.5-32.9-73.2-73.3-73.3zM497.5 85H254.3c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h243.1c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.4 14-14.1 14.2zm-91.2 63.8h-152c-8-.2-14.4-6.9-14.2-14.9.2-7.7 6.4-14 14.2-14.2h152c8 .2 14.4 6.9 14.2 14.9-.2 7.8-6.5 14-14.2 14.2z"/></svg>
              <h2 class="display-4 mb-4 px-lg-14">Missie en Visie</h2>
            </div>
          </div>
        </div>
        <div class="row gx-lg-8 gx-xl-12 gy-10">
          <div class="col-lg-6 order-lg-2">
            <h3 class="display-6 mb-4">Doelen</h3>
            <div class="card me-lg-6">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div class="d-flex">
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none my-auto me-4"><span class="number">01</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Cliënten</h4>
                    <p class="mb-0">Cliënten, zowel onze wooncliënten als de cliënten die we ambulant begeleiden of in ons gezinshuis verblijven, hebben een goed leven, met zoveel mogelijk eigen regie. Het bieden van toekomstperspectief is een belangrijke opdracht.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card ms-lg-13 mt-3">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div class="d-flex">
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none my-auto me-4"><span class="number">02</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Medewerkers</h4>
                    <p class="mb-0">Medewerkers zijn of ontwikkelen zich tot vakmensen die inventief en snel kunnen en durven in te spelen en aan te sluiten op de behoeften en wensen van cliënten en hun omgeving. Wanneer dit niet via de algemeen geldende richtlijnen lukt, dan blijven de werkers zoeken en laten niet los.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card ms-lg-6 me-lg-3 mt-3">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div class="d-flex">
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none my-auto me-4"><span class="number">03</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Hulpvragen</h4>
                    <p class="mb-0">Lojal is een flexibele organisatie waarbij creatief denken en doen hoog gewaardeerd wordt en waar gewerkt wordt vanuit de bedoeling waarbij de (hulp)vraag van de cliënt en de cliënt zelf centraal staat.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card me-lg-6 mt-3">
              <div class="card-body p-6">
                <div class="d-flex flex-row">
                  <div class="d-flex">
                    <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none my-auto me-4"><span class="number">04</span></span>
                  </div>
                  <div>
                    <h4 class="mb-1">Financiën</h4>
                    <p class="mb-0">Lojal is en blijft een financieel gezonde organisatie.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 position-lg-sticky h-fit" style="top: 10rem;">
            <h2 class="display-6 mb-4">Missie</h2>
            <p class="lead fs-lg pe-lg-5">Lojal ondersteunt mensen – met name jongeren/jongvolwassenen die, door verschillende oorzaken de aansluiting met de maatschappij dreigen te verliezen of hebben verloren om zich als uniek mens te ontplooien en hun eigen leven te leiden, in overleg met hen, binnen hun eigen mogelijkheden wat het best bij hen aansluit.</p>
            <p class="mb-6">We werken vanuit passie, vanuit voelen en beleven, vanuit betrokkenheid, van moeten naar willen. Vakmanschap, vertrouwen en verbinden zijn belangrijke principes</p>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="tab-content mt-6 mt-lg-8">
          <div id="visie">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6">
                <div class="row gx-md-5 gy-5 align-items-center">
                  <div class="col-6">
                    <img style="aspect-ratio: 1/1;" class="img-fluid rounded shadow-lg d-flex ms-auto object-fit-cover" src="./assets/imgs/BBQ (20).jpg" alt="" />
                  </div>
                  <div class="col-6">
                    <img class="img-fluid rounded shadow-lg mb-5" src="./assets/imgs/BBQ (7).JPG" alt="" />
                    <img class="img-fluid rounded shadow-lg d-flex col-10 w-100" src="./assets/imgs/Dagbesteding4.JPG" alt="" />
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3">Visie</h2>
                <p>Omdat de cliënten van Lojal meestal al veel hulpverleners hebben gezien en het vertrouwen in hulpverleners laag is, vindt Lojal het belangrijk om behandeling laagdrempelig aan te bieden.</p>
                <p>Uitgangspunt om behandeling intern binnen Lojal vorm te geven is dat behandeling helpend is voor de cliënt, zijn of haar systeem en de hulpverleners om hen heen. Het moet een bijdrage kunnen leveren voor de praktijk en de cliënt ondersteunen in zijn of haar ontwikkeling. Doordat er een nauwe afstemming is tussen de leefwereld van cliënt, systeem, begeleider en de behandelaar, is er een integrale overgang van behandeling naar de praktijk. De begeleiders kunnen worden ingezet als hulptherapeuten of mediatoren. Hierdoor vindt generalisatie makkelijker plaats. Daarnaast staat de leefwereld van de cliënt centraal, want iedereen wordt gevormd door zijn of haar context...</p>
                <a href="over-ons/visie.php" class="btn btn-primary mt-2">Lees verder</a>
              </div>
            </div>
          </div>
          <div id="doelgroep" class="py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="gx-md-5 gy-5">
                  <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" src="./assets/imgs/BBQ (15).jpg" alt="" />
                </div>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3">Doelgroep</h2>
                <p>Onze vaak jonge cliënten zijn mensen die, veelal door een te groot aantal beperkingen in het dagelijks leven, in de problemen zijn gekomen of dreigen te komen. Zij hebben om die reden een steun in de rug nodig. Wij zorgen hiervoor door verschillende diensten aan te bieden. Het mooie is dat ook ouders en/of verzorgers van onze diensten kunnen profiteren. Onze zorgprofessionals zijn vooral goed in actie. In het doen en samen bezig zijn, zit onze grote kracht. Dat is ook ons idee over hoe hulpverlening hoort te werken. Onze specialisatie zit met name in de kwetsbare groep van jongvolwassenen met een licht verstandelijke beperking en moeilijk verstaanbaar gedrag. Eventueel in combinatie met bijkomende psychiatrische problemen die weliswaar niet om behandeling vragen, maar wel om langdurige begeleiding.</p>
                <a href="over-ons/doelgroep.php" class="btn btn-primary mt-2">Lees verder</a>
              </div>
            </div>
          </div>
          <div id="samenwerkingen" class="addNavBarHeight">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6">
                <video poster="nieuws-artikelen/uploads/videoPostI-Nova.png" class="player" width="320" height="240" controls>
                  <source src="nieuws-artikelen/uploads-video/I-Novafilmpje.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="col-lg-6">
                <h2 class="mb-3">Samenwerkingen</h2>
                <p>Lojal maakt deel uit van de coöperatie I-Nova. Dit is een nieuwe coöperatie bestaande uit 5 leden en 12 samenwerkende zorgorganisaties uit de Achterhoek die op een integrale manier samenwerken. Vanaf 2024 is deze coöperatie een gegunde aanbieder in de Achterhoek actief voor ambulante spoedhulp, jeugdhulp, WMO en wonen.</p>
                <p>De unieke mix van verschillende organisaties zorgt ervoor dat er een snelle overgang mogelijk is op verschillende disciplines. Denk hierbij aan de inzet van begeleiding na een spoedhulptraject of het afschalen van behandeling naar begeleiding. Er is sneller toegang tot elkaars kennis en er kan sneller geschakeld worden als het gaat om passende hulp en betere dienstverlening voor de cliënt.</p>
                <a href="nieuws-artikelen/lojal-maakt-deel-uit-van-i-nova-zorg.php" class="btn btn-primary mt-2">Lees verder</a>
              </div>
            </div>
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
              <div class="col-lg-6 order-lg-2">
                <div class="gx-md-5 gy-5">
                  <img class="img-fluid rounded shadow-lg my-5 d-flex ms-auto" src="./assets/logos/multi-signaal.png" alt="" />
                </div>
              </div>
              <div class="col-lg-6">
                <p>Soms heeft een kind, een jongere of een gezin om verschillende redenen extra ondersteuning nodig. Vaak zijn er diverse professionals betrokken. Denkt u hierbij aan (soms meerdere) hulpverleners in de zorg of het sociaal domein, maar ook aan de intern begeleider op school bijvoorbeeld. Allen willen, net als u, het beste voor uw kind. Om niet langs elkaar heen te werken en zo onnodige problemen te voorkomen, is samenwerken belangrijk. Daarom maken wij gebruik van de verwijsindex. Dit is een digitaal systeem, waarin professionals van verschillende organisaties hun betrokkenheid bij een kind of jongere kenbaar kunnen maken. Wij informeren u, indien wij uw kind en onze organisatie aan elkaar koppelen in de verwijsindex. Alleen als andere organisaties dit ook doen, ontvangen wij elkaars contactgegevens. De verwijsindex bevat geen inhoudelijke gegevens, dus ook niet de reden waarom wij bij uw kind betrokken zijn. Enkel onze contactgegevens en welk kind de vermelding betreft zijn zichtbaar, en dan alleen voor die professionals die ook hebben aangegeven bij dit kind betrokken te zijn. Het is geen zoeksysteem; uw kind is niet vindbaar voor andere partijen. Zo vinden de juiste partijen elkaar en kunnen wij samen afstemmen wie wat doet en wie alle hulp samen coördineert. Voor het uitwisselen van gegevens met andere betrokken partij(-en) vragen wij om uw toestemming. Door samen te werken, kunnen we uw kind en uw gezin tijdig de juiste ondersteuning en begeleiding bieden.</p>
                <p>Meer informatie kunt u vinden op <a href="link" target="blank_">www.multisignaal.nl</a>.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div id="kwaliteit" class="container addNavBarHeight">
        <div class="row gx-lg-8 gx-xl-12 gy-10">
          <div class="col-lg-6 mb-0">
            <h3 class="display-5 mt-4 mb-4">Kwaliteit</h3>
            <p class="lead fs-lg">Lojal is continu in ontwikkeling, waarbij het belang van de cliënt voorop staat.</p>
            <p class="lead mb-6">Om de juiste begeleiding te geven aan onze cliënten proberen we zowel op het gebied van zorg als beleid onze kwaliteit te verbeteren.</p>
          </div>
          <div class="col-lg-6">
            <div id="accordion-3" class="accordion accordion-wrapper">
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-3-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1" aria-expanded="false" aria-controls="accordion-collapse-3-1">Lojal heeft de HKZ certificering</button>
                </div>
                <div id="accordion-collapse-3-1" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-parent="#accordion-3">
                  <div class="card-body">
                    <p>Om onze kwaliteit te garanderen is Lojal gecertificeerd vanuit de HKZ. Zij komen elk jaar langs om te kijken of Lojal voldoet aan de kwaliteitseisen vanuit dit keurmerk. Er wordt bijvoorbeeld gekeken naar de kwaliteit- en opleidingseisen van het personeel, veiligheid en tevredenheid van zowel cliënten en medewerkers en het hebben van een klachtenregeling en vertrouwenspersoon.</p>
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-3-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-2" aria-expanded="false" aria-controls="accordion-collapse-3-2">Clienttevredenheid</button>
                </div>
                <div id="accordion-collapse-3-2" class="collapse" aria-labelledby="accordion-heading-3-2" data-bs-parent="#accordion-3">
                  <div class="card-body">
                    <p>Om onze zorg te verbeteren voeren we regelmatig een clienttevredenheidsonderzoek uit. Daarnaast is er binnen Lojal ook een cliëntenraad die regelmatig bij elkaar komen. Zij behartigen de belangen van onze cliënten. De cliëntenraad heeft bij enkele aspecten van ons beleid inspraak in onze besluitvorming.</p>
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-3-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-3" aria-expanded="false" aria-controls="accordion-collapse-3-3">Medewerkerstevredenheid</button>
                </div>
                <div id="accordion-collapse-3-3" class="collapse" aria-labelledby="accordion-heading-3-3" data-bs-parent="#accordion-3">
                  <div class="card-body">
                    <p>Bij Lojal hechten we veel waarde aan het welzijn van onze medewerkers. Daarom voeren we jaarlijks een medewerkerstevredenheid onderzoek uit. Binnen onze organisatie is er ook een ondernemingsraad. Hierin zitten 4 medewerkers, zij vertegenwoordigen de werknemers van onze organisatie.</p>
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-3-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-4" aria-expanded="false" aria-controls="accordion-collapse-3-4">Klachten</button>
                </div>
                <div id="accordion-collapse-3-4" class="collapse" aria-labelledby="accordion-heading-3-4" data-bs-parent="#accordion-3">
                  <div class="card-body">
                    <p>Heeft u een klacht of suggestie? Laat het ons weten! We luisteren graag en doen ons best om het op te lossen. Klachten nemen we zeer serieus daarom hebben we een <a href="Klachtenreglement Cliënten.pdf" target="_blank" class="underline-4">klachtenregeling</a>. Hierin kunt u meer informatie vinden over welke stappen verder worden gezet na een klacht.</p>
                  </div>
                </div>
              </div>
              <div class="card accordion-item">
                <div class="card-header" id="accordion-heading-3-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-5" aria-expanded="false" aria-controls="accordion-collapse-3-5">Privacy</button>
                </div>
                <div id="accordion-collapse-3-5" class="collapse" aria-labelledby="accordion-heading-3-5" data-bs-parent="#accordion-3">
                  <div class="card-body">
                    <p>Om cliënten en medewerkers goed van dienst te zijn, worden binnen Lojal allerlei gegevens vastgelegd. Cliënten en medewerkers hebben recht op de bescherming van deze persoonlijke gegevens. In ons <a href="Privacybeleid voor clienten.pdf" target="_blank" class="underline-4">privacybeleid</a> staat hoe Lojal hiermee omgaat. Alle onderdelen zijn gebaseerd op de Algemene Verordening Gegevensbescherming (AVG)</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light angled lower-end">
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