
    <?php
      $title = 'Lojal maakt deel uit van I Nova Zorg';
      $schrijver = 'persoon';
      $datum = '20-02-2024';
    
      $headerFotoType = 'video';
        $headerVideoPoster = 'videoPostI-Nova.png';
      $headerVideo = 'I-Novafilmpje.mp4';
      $blog = array (
  0 => 
  array (
    'Type' => 'Text',
    'Title' => 'I-Nova Zorg: Een krachtig samenwerkingsverband',
    'Text' => 
    array (
      0 => 'I-Nova Zorg is een nieuwe coöperatie bestaande uit 5 leden en 12 samenwerkende zorgorganisaties uit de Achterhoek die op een integrale manier samenwerken. Samen bundelen zij hun expertise op het gebied van begeleiding, behandeling, ambulante spoedhulp en wonen. Vanaf 1 juli is deze coöperatie een gegunde aanbieder in de Achterhoek actief voor ambulante spoedhulp, jeugdhulp, WMO en wonen.',
      1 => 'De unieke mix van verschillende organisaties zorgt ervoor dat er een snelle overgang mogelijk is op verschillende disciplines. Denk hierbij aan de inzet van begeleiding na een spoedhulptraject of het afschalen van behandeling naar begeleiding. Er is sneller toegang tot elkaars kennis en er kan sneller geschakeld worden als het gaat om passende hulp en betere dienstverlening voor de cliënt.',
    ),
  ),
  1 => 
  array (
    'Type' => 'Text',
    'Title' => 'Wat biedt I-Nova Zorg?',
    'Text' => 
    array (
      0 => 'I-Nova Zorg is er voor complexe opvoed vraagstukken, ambulante begeleiding en behandeling, arbeidsmatige dagbesteding, basis- en specialistische GGZ en beschermd wonen. Dit doen we samen met onderwijs, sociale dienst, het UWV, jeugdbescherming en huisvesting coöperaties. Verwijzers kunnen met cliënten en hun omgeving terecht bij één loket voor jeugdhulp, WMO en Wonen. Daarnaast biedt I-Nova Zorg ook een breed aanbod als het gaat om de jeugdigen en hun ouders of het hele gezin. Denk hierbij aan ambulante gezinsbegeleiding, gezins-PMT, gezinsdramatherapie, diagnostiek, ouder-kindspelbehandeling, hulp bij complexe gezinsproblematiek en hulp aan ouders, kinderen en professionals die te maken hebben met scheiding of familieconflicten.',
      1 => 'Wanneer blijkt dat bij aanvang of gaandeweg aanvullende expertise gewenst is, wordt er gekeken naar andere samenwerkingspartners zodat er alsnog aan de zorgvraag kan worden voldaan. Voor verslavingsproblematiek werkt I-Nova Zorg al samen met organisaties die hierin zijn gespecialiseerd.',
    ),
  ),
  2 => 
  array (
    'Type' => 'Text',
    'Title' => 'Samenwerking',
    'Text' => 
    array (
      0 => 'Om te weten wat er echt toe doet, wordt er naar de cliënt geluisterd en passende ondersteuning geboden. De vraag van de cliënt bepaalt de richting. Hun situatie, kracht en talent staan bij ons centraal. Samen met de cliënt en nauwe betrokkenen helpen wij hun veerkracht versterken, hen om te gaan met hun dagelijkse belemmeringen, eigen regie te nemen en hun aanpassingsvermogen te vergroten om de uitdagingen van het dagelijks leven aan te gaan, zo zelfstandig mogelijk.',
      1 => 'Wij zijn specifiek gericht op het bieden van een sluitende keten, waarin samenwerken, afstemmen, op- en afschalen en verbinden centraal staat. Denk hierbij aan bijvoorbeeld de overdracht van 18- naar 18+ tijdig in gang zetten, met een toekomstplan en zo nodig een warme overdracht. Samen met de partners uit de sociale basisvoorzieningen wordt er gekeken naar oplossingen die passen bij de belevingswereld van de cliënten. Daarbij wordt er op casus- en pilotniveau efficiënt gewerkt en expertise gedeeld om zo een hoge cliënttevredenheid te bereiken.',
      2 => 'Vanaf 1 juli 2022 staat I-Nova Zorg klaar om zorg te leveren. Kijk binnenkort op www.i-novazorg.nl voor meer informatie.',
    ),
  ),
);
    if (preg_match('/\b'.basename(__FILE__).'\b/', basename($_SERVER['REQUEST_URI']))) {
      session_start();
      if(isset($_GET['edit']) && $_GET['edit'] == 'true'){
        include '../nieuws-beheer/nieuws-aanpassen.php';
      }else{
        include 'nieuws-artikel-base.php';
      }
    }
    ?>