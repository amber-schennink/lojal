<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Behandeling</title>
  <meta name="description" content="Het uitgangspunt van behandeling binnen Lojal is dat het helpend moet zijn voor de client, zijn of haar systeem en de hulpverleners eromheen.">
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
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-500 text-white" style="background-position: center 80%;" data-image-src="./assets/imgs/BBQ (17).jpg">
      <div class="container pt-17 pb-12 pt-md-19 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-3 text-white">Behandeling</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light wrapper-border">
       <div class="container pt-14 pt-md-16">
        <div class="row">
          <div>
            <article>
              <div class="row gx-0">
                <div class="text-justify m-auto px-5">
                  <h2 class="display-6 mb-4">Behandeling</h2>
                  <section id="snippet-1">
                    <p>Binnen Lojal heeft iedereen recht op een effectieve behandeling van zijn of haar problematiek. Omdat de cliënten van Lojal meestal veel hulpverleners hebben gezien en het vertrouwen vaak laag is in hulpverleners vindt Stichting Woonzorg Lojal het belangrijk om behandeling laagdrempelig aan te bieden. Uitgangspunt om behandeling intern binnen Lojal vorm te geven is dat behandeling helpend is voor de cliënt, zijn of haar systeem en de hulpverleners om hem heen. Het moet een bijdrage kunnen leveren voor de praktijk en de cliënt ondersteunen in zijn ontwikkeling. Doordat er een nauwe afstemming is tussen de leefwereld van cliënt, systeem, begeleider en de behandelaar, is er een integrale overgang van behandeling naar de praktijk.</p>
                    <img class="w-100 mb-4 object-fit-cover" style="aspect-ratio: 4/1; object-position: center 36%;" src="assets/imgs/Client5.JPG" />
                    <p>De begeleiders kunnen worden ingezet als hulptherapeuten of mediatoren. Hierdoor vindt generalisatie makkelijker plaats. Daarnaast staat de leefwereld van de cliënt centraal. Lojal verdiept zich en sluit aan bij het leven van de cliënt. Er is oog en oor voor de knelpunten en de gewenste veranderingen naar het gewone leven. Er is aandacht voor de context en het systeem en daarbij oog voor cultuur en diversiteit. Door het bieden van behandeling op een integrale wijze wordt er zorg gedragen dat de behandeling niet los komt te staan van de begeleiding en zo veel mogelijk één geheel vormt. Het laatste wordt gezien als noodzaak om de vaak aanwezig basale wantrouwende houding van cliënten te kunnen “doorbreken”.</p>
                  </section>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <div class="container py-10 py-md-12">
        <div class="card bg-soft-primary rounded-4">
            <div class="card-body p-md-10 p-xl-11">
              <div class="row gx-lg-8 gx-xl-12 gy-10">
                <div class="col-lg-6">
                  <h3 class="display-4 mb-4">Voor welke psychische aandoeningen kunt u bij ons terecht?</h3>
                  <p class="lead fs-lg mb-0">Vragen? <a class="text-decoration-underline offset-2 primary-hover">Neem contact met ons op</a></p>
                </div>
                <div class="col-lg-6">
                  <div class="accordion accordion-wrapper" id="accordionExample">
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingOne">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Psychotrauma</button>
                      </div>
                      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>De term psychotrauma verwijst naar een zeer ingrijpende of schokkende ervaring, of een reeks van dergelijke ervaringen. Er is sprake van een feitelijke of dreigende dood, ernstige verwonding, ernstige en/of langdurige (emotionele) verwaarlozing of seksueel geweld. Het langdurig blootgesteld worden aan schokkende gebeurtenissen kan resulteren in een trauma. Wanneer trauma onbehandeld blijft zijn er verandering in het stresssysteem waarneembaar en daarmee ook problemen met stressregulatie. Langdurige stress is van Invloed op het geheugen en de concentratie. Er ontstaan lichamelijke klachten (slapeloosheid en gezondheidsproblemen), het zelfbeeld raakt beschadigd. Het risico op een onveilige hechting is groot en het wantrouwen in de medemens is vaak ernstig beschadigd.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingTwo">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Angststoornissen</button>
                      </div>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Er zijn verschillende angststoornissen te onderscheiden, vaak spelen lichamelijke sensaties een rol bij angstklachten. Angststoornissen gaan gepaard met het vermijden van datgene waar men angst voor heeft.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingThree">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Depressieve stemmingsstoornis</button>
                      </div>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Een depressieve stoornis verschilt in ernst en beloop. Hierbij wordt uitgegaan van een onderscheidt de volgende indeling: Lichte depressieve stoornis, matig-ernstige depressie of een persisterende depressieve stoornis. De behandelinzet is afhankelijk van de ernst en het beloop van de gestelde stoornis.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingFour">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">ADHD</button>
                      </div>
                      <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Er kan gedacht worden aan planning- en organisatieproblemen, sociale of emotionele problemen en conflicten met ouders.Bij de behandeling van ADHD is psycho-educatie een fundamenteel onderdeel. Er wordt op een gestructureerde manier voorlichting gegeven over het ontstaan en beloop van ADHD-symptomen, de impact van de symptomen op het functioneren, de rol van de omgeving en de behandelmogelijkheden.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card plain accordion-item">
                      <div class="card-header" id="headingFive">
                        <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Persoonlijkheidsstoornissen</button>
                      </div>
                      <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="card-body">
                          <p>Mensen met een persoonlijkheidsstoornis lopen vast in het dagelijks leven. Over het algemeen kunnen zij baat hebben bij verschillende soorten interventies. Voor elke persoonlijkheidsstoornis zijn verschillende bijpassende interventies en methodieken. De behandeling van een persoonlijkheidsstoornis is langdurig en hoog-gedoseerd. Daarnaast is het belangrijk om terugvalpreventie te bieden. Naast psychologische therapie kan ook gedacht worden aan farmacotherapie en vak-therapie. Beide moeten worden afgestemd op het individu en de specifieke diagnose die is gesteld.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <div class="container py-10 py-md-12">
          <div class="row d-flex align-items-start gy-10">
            <div class="col-lg-5 position-lg-sticky" style="top: 8rem;">
              <h3 class="display-2 mb-5">Lojal beschikt over de volgende behandeltechnieken;</h3>
              <p class="mb-7">Lojal biedt verschillende behandelmogelijkheden. afhankelijk van de aard en de ernst van de klachten wordt door de behandelcoördinator in overleg met de client en de regiebehandelaar een keuze gemaakt over de intensiteit en of een individuele of groepsbehandeling passend is.</p>
            </div>
            <div class="col-lg-6 ms-auto">
              <div class="card bg-soft-fuchsia mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-fuchsia me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 511.9"><path class="lineal-stroke" d="M297.3 429.9c-118.7 0-215-96.2-215-215 0-80.1 44.5-153.5 115.5-190.6 105.1-54.7 235.1-13.8 289.9 91.3 4 8 .8 17.7-7.1 21.7-7.8 3.9-17.3.9-21.5-6.8C412.5 41.2 302 6.4 212.7 52.9c-89.4 46.7-124 156.9-77.4 246.3s156.9 124 246.3 77.4c61.7-32.2 99.8-96.8 98-166.4-.2-8.9 6.9-16.3 15.8-16.4 8.9-.2 16.2 6.8 16.4 15.7 2.9 118.8-91.1 217.5-209.9 220.4-1.4-.1-3 0-4.6 0z"/><circle class="lineal-fill" cx="297.1" cy="214.9" r="111.1"/><path class="lineal-stroke" d="M297.1 342.1c-70.3 0-127.2-57-127.2-127.2s57-127.2 127.2-127.2 127.2 57 127.2 127.2c-.1 70.2-57 127.1-127.2 127.2zm0-222.2c-52.5 0-95 42.5-95 95s42.5 95 95 95 95-42.5 95-95c-.1-52.5-42.6-95-95-95zm-240.6 392C25.3 511.9 0 486.6 0 455.4c0-17.6 8.2-34.2 22.2-44.9L88.3 360c6.4-4.9 15.5-4.3 21.2 1.4l41.1 41.1c5.7 5.7 6.3 14.8 1.4 21.2l-50.5 66.1c-9.9 12.9-24.9 21-41.2 22.1h-3.8zm40.1-117.7l-54.9 41.9c-10.7 8.1-12.9 23.3-4.8 34s23.3 12.9 34 4.8c1.8-1.4 3.4-3 4.8-4.8l42-54.9-21.1-21z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">Traumabehandeling</h3>
                    <p>Traumabehandeling is effectief bij het terugdringen van herbelevingen, (lichamelijke) stress, vermijdingsgedrag en verandering in cognities.
                      <span class="extraText p">Binnen de traumabehandeling kan gebruik worden gemaakt van verschillende wetenschappelijk onderbouwde technieken. Lojal biedt mogelijkheden in EMDR, Imaginaire exposure, Imaginaire rescripting en Write-junior. Meestal wordt er bij psychotrauma behandeling een combinatiebehandeling geboden.</span>
                      <span class="leesMeer" onclick="this.parentElement.parentElement.classList.add('techniekenInfoOpen')">Lees meer</span>
                    </p>
                    <p class="leesMinder" onclick="this.parentElement.classList.remove('techniekenInfoOpen')">Lees minder</p>
                  </div>
                </div>
              </div>
              <div class="card bg-soft-aqua mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-aqua me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 507.4 512"><path class="lineal-fill" d="M257.9 15.2v65.1c-28.7-15.6-64.7-5-80.3 23.8s-5 64.7 23.8 80.3c17.6 9.6 38.9 9.6 56.6 0v65.1h59.9c-8.4-31.6 10.5-64 42.1-72.4 31.6-8.4 64 10.5 72.4 42.1 2.6 9.9 2.6 20.4 0 30.3h59.9V70.7c0-30.7-24.9-55.5-55.5-55.5H257.9z"/><path class="lineal-stroke" d="M436.7 0h-366C31.7 0 0 31.7 0 70.7v370.6c0 39 31.7 70.7 70.7 70.7h188.1c8.4 0 15.2-6.8 15.2-15.1V453c5.5 1 11.2 1.3 16.8 1 17.5-.9 34.2-7.9 47.1-19.9 30.1-28 31.7-75.1 3.7-105.2-23.2-24.8-60.2-30.8-90-14.6-7.3 4-10.1 13.2-6.1 20.6 4 7.4 13.2 10.1 20.6 6.1 7.4-4 15.7-5.8 24.1-5.2 24.3 1.7 42.6 22.8 40.9 47-1.5 21.8-19.8 39.8-41.7 40.8-8.1.4-16.1-1.4-23.2-5.3-2.2-1.2-4.7-1.8-7.3-1.8-8.4 0-15.2 6.8-15.2 15.2v49.9h-173c-22.3 0-40.3-18.1-40.3-40.3V264.6h28.7c-.5 2.6-.8 5.2-1 7.8-2.9 41 28 76.6 69 79.5 1.8.1 3.6.2 5.3.2 18.8.1 37-7.1 50.7-20 24.8-23.2 30.8-60.1 14.6-89.9-.1-.2-.2-.3-.3-.5-4.1-7.3-13.4-9.9-20.7-5.7-7.3 4.1-9.9 13.4-5.7 20.7 4 7.4 5.8 15.8 5.2 24.2-1.7 24.3-22.8 42.5-47.1 40.8-21.8-1.5-39.8-19.8-40.8-41.7-.4-8.1 1.4-16.1 5.2-23.3 1.2-2.2 1.9-4.7 1.9-7.3 0-8.4-6.8-15.2-15.2-15.2H30.4V70.7c0-22.3 18.1-40.3 40.3-40.3h172v28.7c-8.7-1.6-17.6-1.6-26.2 0-40.5 7.2-67.4 45.9-60.1 86.4s45.9 67.4 86.4 60.1v43.9c0 8.4 6.8 15.2 15.2 15.2h59.9c1.6 0 3.2-.3 4.7-.7 8-2.6 12.3-11.2 9.7-19.2-.6-2.5-1-5.1-1.2-7.7-1.5-24.3 16.9-45.2 41.2-46.7.9-.1 1.8-.1 2.7-.1 3.8 0 7.6.5 11.3 1.5 23.5 6.2 37.5 30.4 31.3 53.9-.3 1.3-.5 2.6-.5 3.9 0 8.4 6.8 15.2 15.2 15.2h59.9c8.4 0 15.2-6.8 15.2-15.2V70.7c-.1-39-31.7-70.7-70.7-70.7zM477 234.2h-27.5c0-41.1-33.3-74.4-74.4-74.4-1.5 0-3 0-4.6.1-36 2.2-65.9 30.9-69.5 66.8-.2 2.5-.4 5-.4 7.5h-27.5v-49.9c0-2.5-.6-5-1.8-7.3-4-7.4-13.2-10.1-20.6-6.1-7.4 4-15.7 5.8-24.1 5.2-24.3-1.7-42.6-22.8-40.9-47 1.5-21.8 19.8-39.8 41.7-40.8 8.1-.4 16.1 1.4 23.2 5.3 2.2 1.2 4.7 1.8 7.3 1.8 8.4 0 15.2-6.8 15.2-15.2V30.4h163.6c22.3 0 40.3 18.1 40.3 40.3v163.5z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">Cognitieve gedragstherapie</h3>
                    <p>Cognitieve gedragstherapie (CGT) is een verzamelterm van bewezen effectieve behandelmethoden voor psychische problemen.
                      <span class="extraText p">CGT probeert zowel de manier van denken en interpreteren van de cliënt te beïnvloeden, maar ook diens manier van doen en laten. Soms ligt de nadruk meer op denken, soms meer op doen en laten. In andere gevallen werkt men gelijktijdig met beide aspecten. De meeste cliënten komen in individuele therapie, maar er bestaat ook mogelijkheden voor groepstherapie. CGT is onder andere geschikt voor stemmingsstoornissen, gedragsstoornissen, maar ook verslaving, psychotische stoornis, aanpassingsstoornissen, psychosomatische stoornissen en persoonlijkheidsstoornissen.</span>
                      <span class="leesMeer" onclick="this.parentElement.parentElement.classList.add('techniekenInfoOpen')">Lees meer</span>
                    </p>
                    <p class="leesMinder" onclick="this.parentElement.classList.remove('techniekenInfoOpen')">Lees minder</p>
                  </div>
                </div>
              </div>
              <div class="card bg-soft-yellow mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-yellow me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 350.3"><path class="lineal-fill" d="M312.8 275H10.7v17.3c0 26.1 21.2 47.3 47.3 47.3h293.6c26.2 0 47.4-21.2 47.4-47.4V275M175.6 169.8v-57.3c0-3.3 2.7-5.9 5.9-5.9 1 0 2 .3 2.9.8l50.5 28.6c2.8 1.6 3.8 5.2 2.2 8.1-.5.9-1.3 1.7-2.2 2.2l-50.5 28.6c-2.8 1.6-6.4.6-8.1-2.2-.4-.9-.7-1.9-.7-2.9z"/><path class="lineal-stroke" d="M181.5 186.4c-9.2 0-16.6-7.4-16.6-16.6v-57.3c0-9.2 7.4-16.6 16.5-16.6 2.9 0 5.7.7 8.2 2.2l50.5 28.6c8 4.5 10.8 14.6 6.2 22.6-1.5 2.6-3.6 4.8-6.2 6.2l-50.5 28.6c-2.4 1.5-5.2 2.3-8.1 2.3zm4.8-65.7v40.9l36.1-20.5-36.1-20.4z"/><path class="lineal-stroke" d="M204.8 232.8c-49.5-.1-89.6-40.2-89.7-89.6.2-5.9 5.1-10.5 11-10.3 5.6.2 10.2 4.7 10.3 10.3 0 37.7 30.6 68.3 68.3 68.3s68.3-30.6 68.3-68.3-30.6-68.3-68.3-68.3c-5.9 0-10.7-4.8-10.7-10.7s4.8-10.7 10.7-10.7c49.5 0 89.7 40.1 89.7 89.6s-40.1 89.7-89.6 89.7z"/><path class="lineal-stroke" d="M351.6 0H58C26 .1.1 26 0 58v234.3c.1 32 26 57.9 58 58h293.6c32 0 57.9-26 58-58V58c-.1-32-26-57.9-58-58zM58 329c-20.3 0-36.7-16.5-36.7-36.7v-6.6h60.9v10c0 5.9 4.8 10.7 10.7 10.7 5.9 0 10.7-4.8 10.7-10.7v-10h209.2c5.9 0 10.7-4.8 10.7-10.7s-4.8-10.7-10.7-10.7H103.6v-10.9c0-5.9-4.8-10.7-10.7-10.7-5.9 0-10.7 4.8-10.7 10.7v10.9H21.3V58c.1-20.3 16.5-36.7 36.7-36.7h293.6c20.3 0 36.7 16.4 36.7 36.7v234.3c0 7.6-2.3 14.7-6.3 20.5-1.3 2-2.8 3.8-4.5 5.4-.8.8-1.7 1.6-2.6 2.4-1.8 1.5-3.8 2.8-5.9 3.9-5.2 2.8-11.2 4.4-17.5 4.4H58z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">Psycho-educatie</h3>
                    <p>Psycho-educatie is meestal onderdeel van een geïntegreerde behandeling waarin de cliënt kennis en inzicht krijgt over zijn/haar klachten en de factoren die verantwoordelijk zijn voor het aanhouden van psychische klachten.
                      <span class="extraText p">De behandelaar geeft voorlichting en advies. Psycho-educatie kan zowel individueel met de client worden gedaan als samen met zijn systeem (naasten). De behandelaar en de cliënt doorlopen in veel gevallen een werkboek, bijvoorbeeld het werkboek ‘Weet wat je kan’ of het werkboek ‘Ouders met psychiatrische problemen’.</span>
                      <span class="leesMeer" onclick="this.parentElement.parentElement.classList.add('techniekenInfoOpen')">Lees meer</span>
                    </p>
                    <p class="leesMinder" onclick="this.parentElement.classList.remove('techniekenInfoOpen')">Lees minder</p>
                  </div>
                </div>
              </div>
              <div class="card bg-soft-leaf mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-leaf me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 356.2"><path class="lineal-fill" d="M265.2 180.7H144.4v-17.6c0-33.3 27-60.4 60.4-60.4s60.4 27 60.4 60.4v17.6z"/><path class="lineal-stroke" d="M265.2 191.7H144.4c-6.1 0-11.1-5-11.1-11.1V163c-.5-39.5 31.1-71.8 70.6-72.3s71.8 31.1 72.3 70.6v19.3c0 6.2-4.9 11.1-11 11.1zm-109.7-22.1h98.6v-6.5c.4-27.2-21.4-49.6-48.6-50s-49.6 21.4-50 48.6v7.9z"/><path class="lineal-fill" d="M250.4 56.7c0 25.2-20.4 45.6-45.6 45.6s-45.6-20.4-45.6-45.6 20.4-45.6 45.6-45.6c25.2 0 45.6 20.4 45.6 45.6z"/><path class="lineal-stroke" d="M204.8 113.3c-31.3 0-56.7-25.4-56.7-56.7S173.5-.1 204.8-.1s56.7 25.4 56.7 56.7c-.1 31.3-25.4 56.7-56.7 56.7zm0-91.2c-19.1 0-34.5 15.4-34.5 34.5s15.4 34.5 34.5 34.5 34.5-15.4 34.5-34.5c0-19-15.5-34.4-34.5-34.5zm193.7 334.1H296.8c-6.1 0-11.1-5-11.1-11.1v-14.8c0-34.2 27.8-62 62-62 6.1-.2 11.2 4.6 11.4 10.7s-4.6 11.2-10.7 11.4h-.7c-22 0-39.8 17.8-39.8 39.8v3.8h79.6v-3.7c0-3.2-.4-6.5-1.2-9.6-1.4-6 2.3-11.9 8.3-13.3 5.8-1.4 11.7 2.2 13.2 8 1.2 4.9 1.8 9.9 1.8 14.9v14.8c0 6.1-4.9 11.1-11.1 11.1z"/><path class="lineal-stroke" d="M347.6 290.5c-27.3 0-49.5-22.2-49.5-49.5s22.2-49.5 49.5-49.5 49.5 22.2 49.5 49.5-22.2 49.5-49.5 49.5zm0-76.9c-15.1 0-27.3 12.3-27.3 27.4 0 15.1 12.3 27.3 27.4 27.3S375 256 375 241c0-15.1-12.3-27.3-27.4-27.4zM112.8 356.2H11.1c-6.1 0-11.1-5-11.1-11.1v-14.8c0-34.2 27.8-62 62-62 6.1.2 10.9 5.3 10.7 11.4-.2 5.9-4.9 10.6-10.7 10.7-22 0-39.8 17.8-39.8 39.8v3.8h79.6v-3.7c0-3.2-.4-6.5-1.2-9.6-1.5-5.9 2.2-11.9 8.1-13.4s11.9 2.2 13.4 8.1c1.2 4.9 1.8 9.9 1.8 14.9v14.8c.1 6.1-4.9 11.1-11.1 11.1.1 0 .1 0 0 0z"/><path class="lineal-stroke" d="M61.9 290.5c-27.3 0-49.5-22.2-49.5-49.5s22.2-49.5 49.5-49.5 49.5 22.2 49.5 49.5-22.1 49.5-49.5 49.5zm0-76.9c-15.1 0-27.3 12.2-27.3 27.4 0 15.1 12.2 27.4 27.4 27.4 15.1 0 27.3-12.2 27.3-27.3 0-15.2-12.3-27.4-27.4-27.5zm142.9 72.1c-6.1 0-11.1-5-11.1-11.1v-56.4c-.2-6.1 4.6-11.2 10.7-11.4 6.1-.2 11.2 4.6 11.4 10.7v57.1c.1 6.2-4.9 11.1-11 11.1z"/><path class="lineal-stroke" d="M279.5 285.7H130.1c-6.1.2-11.2-4.6-11.4-10.7s4.6-11.2 10.7-11.4h150.2c6.1-.2 11.2 4.6 11.4 10.7s-4.6 11.2-10.7 11.4h-.8z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">Systeemtherapie</h3>
                    <p>Er zijn verschillende vormen van systeemtherapie, waaronder: gezinstherapie, partnerrelatietherapie (als in de context van ouders van jongeren binnen Lojal) & ouder-kind therapie.
                      <span class="extraText p">Systeemtherapie kan klachten wegnemen die betrekking hebben op het gebied van relaties en onderlinge interacties. Het draagt bij aan het doorbreken van patronen, een beter begrip van zichzelf en de ander, en verbetering van onderlinge communicatie. De systeem therapeutische aanpak heeft meerwaarde bij een breed scala aan problemen. Bijvoorbeeld bij psychische problemen en klachten, relatie- en gezinsproblematiek, huiselijk geweld en lichamelijke aandoeningen.  De systeemtherapeut biedt de cliënt mogelijkheden aan om het probleem of de problemen op te lossen.</span>
                      <span class="extraText p"><br> <br> Wat zich tussen mensen afspeelt, krijgt slechts betekenis in een context. In iedere interactie resoneren vele contexten mee. Het op een contextuele en relationele wijze kunnen kijken naar problemen en oplossingen is de kerncompetentie van systeemtherapeuten. In het systeemtheoretisch denken en handelen krijgt het functioneren van mensen en dus ook kinderen en jeugdigen betekenis, en kan begrepen worden wat zich tussen mensen afspeelt: door hun interacties en relaties. Door aandacht en beïnvloeding van meerdere individuen binnen het systeem en hun onderlinge interactiepatronen, kom je sneller tot de kern van het probleem. Als gezinsleden elkaar beter begrijpen en ondersteunen, wordt bovendien het risico op verergering of terugkeer van het probleem kleiner.</span>
                      <span class="extraText p"><br> <br> Binnen de sessies wordt gewerkt vanuit verschillende perspectieven, passend bij de cliënt en zijn probleem. Als voorbeeld het ‘narratieve perspectief’ waarbij tijdens een sessie gewerkt wordt met externaliserende gesprekken, deze objectiveren het probleem. Binnen de therapie kunnen cliënten gaan ervaren dat ze een identiteit hebben die losstaat van het probleem: het probleem wordt hét probleem en niet de persoon. In de context van externaliserende gesprekken staat het probleem dan niet meer voor de ‘waarheid’ over de identiteit van de mensen.</span>
                      <span class="leesMeer" onclick="this.parentElement.parentElement.classList.add('techniekenInfoOpen')">Lees meer</span>
                    </p>
                    <p class="leesMinder" onclick="this.parentElement.classList.remove('techniekenInfoOpen')">Lees minder</p>
                  </div>
                </div>
              </div>
              <div class="card bg-soft-orange mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-orange me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 332"><path class="lineal-stroke" d="M318 0H53.9C24.2.1.1 24.2 0 53.9v210.8c0 29.8 24.2 53.9 53.9 53.9H318c29.8 0 54-24.1 54-53.9V53.9C371.9 24.1 347.8 0 318 0zm31.3 264.7c0 17.3-14 31.3-31.3 31.3H54c-17.3 0-31.3-14-31.3-31.3V53.9c0-17.3 13.9-31.3 31.2-31.3H318c17.3 0 31.3 14 31.3 31.3v210.8z"/><path class="lineal-fill" d="M152.5 189.9v-65.7c0-3.8 3-6.8 6.8-6.8 1.2 0 2.3.3 3.3.9l57.9 32.8c3.3 1.9 4.4 6 2.6 9.3-.6 1.1-1.5 1.9-2.6 2.6l-57.9 32.8c-3.3 1.9-7.4.7-9.3-2.6-.5-1-.8-2.1-.8-3.3z"/><path class="lineal-stroke" d="M159.3 208c-10 0-18.1-8.1-18.1-18.1v-65.7c0-10 8.1-18.1 18.1-18.1 3.1 0 6.2.8 8.9 2.3l57.9 32.9c8.7 4.9 11.8 16 6.8 24.7-1.6 2.9-4 5.2-6.8 6.8l-57.9 32.8c-2.7 1.6-5.8 2.4-8.9 2.4zm4.5-76v50.1L208 157l-44.2-25z"/><path class="lineal-stroke" d="M186 261.2c-56.3 0-101.9-45.7-101.9-101.9.2-6.3 5.4-11.2 11.7-11 6 .2 10.8 5 11 11 0 43.8 35.5 79.3 79.3 79.3s79.3-35.5 79.3-79.3S229.8 80 186 80c-6.3-.2-11.2-5.4-11-11.7.2-6 5-10.8 11-11 56.3.6 101.5 46.6 100.9 102.9-.5 55.6-45.4 100.5-100.9 101z"/><path class="lineal-fill" d="M201.7 314.2l-30.6 6.3c-2.2.5-4.3-1-4.8-3.2-.1-.5-.1-1.1 0-1.6l6.3-30.6c.4-1.9 1.3-3.6 2.7-5L362.2 93.2c6.2-6.2 16.3-6.2 22.5 0l8.9 8.9c6.2 6.2 6.2 16.3 0 22.5L206.7 311.5c-1.3 1.4-3.1 2.3-5 2.7z"/><path class="lineal-stroke" d="M401.6 94.1l-8.9-8.9c-10.6-10.6-27.9-10.6-38.5 0l-20.5 20.5c-.8.5-1.6 1.1-2.3 1.9-.5.6-1 1.2-1.4 1.8L167.3 272.2c-3 2.9-5 6.6-5.8 10.7l-6.3 30.6c-.2 1-.3 2.1-.3 3.1 0 8.5 6.9 15.4 15.4 15.4 1 0 2.1-.1 3.1-.4l30.6-6.3c4-.9 7.8-2.9 10.7-5.8l163.8-163.8c.3-.2.5-.4.8-.7s.6-.6.8-.9l21.5-21.5c10.6-10.6 10.6-27.9 0-38.5zM199.1 303.3l-19.4 4 4-19.4L340 131.7l15.4 15.4-156.3 156.2zm186.6-186.6L371.3 131 356 115.7l14.4-14.4c.8-.8 2-1.3 3.2-1.3s2.3.4 3.2 1.3l8.9 8.9c1.8 1.8 1.8 4.7 0 6.5z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">Psychomotorische therapie</h3>
                    <p>Psychomotorische therapie is een effectieve therapie bij psychische klachten. Door beweging en lichaamsbeleving leert men anders omgaan met klachten.
                      <span class="extraText p">Psychomotorische therapie kan worden gebruikt om cliënten te helpen hun aandacht, gedrag en emoties beter te hanteren. Zij leren ook dat lichaamssignalen een betekenis hebben Er worden bewegingsactiviteiten gedaan waarin kinderen op een speelse manier uitgedaagd worden om te ontdekken wat ze kunnen en waar hun grenzen liggen. Ze leren hun grenzen herkennen, erkennen en/of verleggen. In het samen bezig tijdens sociale bewegingsactiviteiten, leren ze ook de grenzen van een ander beter herkennen en respecteren. De psychomotorisch therapeut helpt de cliënten om door middel van lichaamsgerichte oefeningen en bewegingsactiviteiten hun lichaam anders, positiever te ervaren en weer vertrouwen en plezier in hun eigen lichaam te krijgen. Door op speelse wijze samen met andere kinderen bezig te zijn, kan het kind oefenen met vaardigheden als op de beurt wachten, kiezen, mening geven, onderhandelen, iets zeggen of samenwerken in een groep. Psychomotorisch therapeuten kunnen door middel van lichaamsgerichte oefeningen cliënten helpen deze stressvolle ervaringen beter te hanteren.</span>
                      <span class="leesMeer" onclick="this.parentElement.parentElement.classList.add('techniekenInfoOpen')">Lees meer</span>
                    </p>
                    <p class="leesMinder" onclick="this.parentElement.classList.remove('techniekenInfoOpen')">Lees minder</p>
                  </div>
                </div>
              </div>
              <div class="card bg-soft-grape mb-6">
                <div class="card-body d-flex flex-row">
                  <div>
                    <svg class="svg-inject icon-svg icon-svg-md text-grape me-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 442.8"><path class="lineal-stroke" d="M464.2 442.8H47.7C21.4 442.8 0 421.4 0 395.1V47.7C0 21.4 21.4 0 47.7 0h416.5C490.6 0 512 21.4 512 47.7c0 7.6-6.2 13.8-13.8 13.9-7.6 0-13.8-6.2-13.9-13.8 0-11.1-9-20-20.1-20.1H47.7c-11.1 0-20 9-20.1 20.1v347.3c0 11.1 9 20.1 20.1 20.1h416.5c11.1 0 20.1-9 20.1-20.1V209.4c0-7.6 6.2-13.8 13.8-13.9 7.6 0 13.8 6.2 13.9 13.8V395c0 26.4-21.4 47.8-47.8 47.8z"/><path class="lineal-fill" d="M13.8 47.7v69.9h484.3V47.7c0-18.7-15.2-33.9-33.9-33.9H47.7C29 13.8 13.8 29 13.8 47.7z"/><path class="lineal-stroke" d="M498.2 131.5H13.8c-7.6 0-13.8-6.2-13.8-13.8v-70C0 21.4 21.4 0 47.7 0h416.5C490.6 0 512 21.4 512 47.7v69.9c0 7.7-6.2 13.9-13.8 13.9zM27.7 103.8h456.6v-56c0-11.1-9-20.1-20.1-20.1H47.8c-11.1 0-20 9-20.1 20v56.1z"/><path class="lineal-stroke" d="M294.7 79.6h-26.3c-7.6 0-13.8-6.2-13.8-13.8S260.8 52 268.4 52h26.3c7.6 0 13.8 6.2 13.8 13.8.1 7.6-6.1 13.8-13.8 13.8zm73.4 0h-26.3c-7.6 0-13.8-6.2-13.8-13.8 0-7.6 6.2-13.8 13.8-13.8h26.3c7.6 0 13.8 6.2 13.8 13.8 0 7.6-6.2 13.8-13.8 13.8zm73.3 0h-26.3c-7.6 0-13.8-6.2-13.8-13.8 0-7.6 6.2-13.8 13.8-13.8h26.3c7.6 0 13.8 6.2 13.8 13.8.1 7.6-6.1 13.8-13.8 13.8z"/><path class="lineal-fill" d="M112.8 268.5h286.4v63.6H112.8z"/><path class="lineal-stroke" d="M399.2 345.9H112.8c-7.6 0-13.8-6.2-13.8-13.8v-63.7c0-7.6 6.2-13.8 13.8-13.8h286.4c7.6 0 13.8 6.2 13.8 13.8v63.7c.1 7.6-6.1 13.8-13.8 13.8zm-272.6-27.6h258.8v-36H126.6v36zm230.9-95.5h-203c-7.6.2-14-5.8-14.2-13.5s5.8-14 13.5-14.2h203.8c7.6-.2 14 5.8 14.2 13.5s-5.8 14-13.5 14.2h-.8z"/></svg>
                  </div>
                  <div style="margin-bottom: -1rem;">
                    <h3 class="fs-21 mb-2">HouVast Gezinsbegeleiding</h3>
                    <p>Er zijn we binnen Stichting Woonzorg Lojal verschillende begeleiders geschoold om de gezinsbegeleiding aan te bieden middels de HouVast interventie. Meer hierover lees je <a href="ambulante-begeleiding.php#houVastGezinsbegeleiding" class="text-decoration-underline offset-2 primary pointer text-primary-light">hier</a></p>
                  </div>
                </div>
              </div>
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
        if(selectForm[i]['label'] == 'Behandeling'){
          selectForm[i].selected = 'selected'
        }
      }
    }
  </script>
  <style>
    .extraText{
      display: none;
    }
    .techniekenInfoOpen .extraText{
      display: inline;
    }
    .leesMeer, .leesMinder {
      text-decoration: underline;
      offset: 2px;
      color: var(--bs-primary-light);
      cursor: pointer;
    }
    .techniekenInfoOpen .leesMeer{
      display: none;
    }
    .leesMinder{
      display: none;
    }
    .techniekenInfoOpen .leesMinder{
      display: block;
    }
  </style>
</body>
</html>