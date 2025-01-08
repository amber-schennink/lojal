
    <?php
      $title = 'Hotel Bi-j Ons is van start!';
      $schrijver = 'persoon';
      $datum = '02-04-2024';
    
      $headerFotoType = 'foto';
      $headerFoto = 'Logo Hotel BI-J ONS.png';
      $blog = array (
  0 => 
  array (
    'Type' => 'Text',
    'Title' => 'Hotel Bi-j Ons is van start!',
    'Text' => 
    array (
      0 => 'Op 2 april is de verbouwing bij Hotel Bi-j ons gestart. Het doel van het hotel is om een dagbestedingsplek te creëren waar onze cliënten horeca-ervaring kunnen opdoen. Het hotel wordt door Lojal gehuurd van Rensing Bouw. Samen ontwikkelen we nu een duurzame, hernieuwde hotellocatie. Het hotel beschikt ook over meerdere vergaderruimtes. We hopen deze zomer open te gaan voor gasten. Mocht u interesse hebben in dit project dan kunt u contact opnemen met Lojal.',
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