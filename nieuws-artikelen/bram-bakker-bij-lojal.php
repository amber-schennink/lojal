
    <?php
      $title = 'Bram Bakker bij Lojal';
      $schrijver = 'persoon';
      $datum = '03-04-2024';
    
      $headerFotoType = 'foto';
      $headerFoto = '0O4A6861.jpg';
      $blog = array (
  0 => 
  array (
    'Type' => 'Text',
    'Title' => 'Bram Bakker bij Lojal',
    'Text' => 
    array (
      0 => 'Op 3 april kwamen Bram Bakker, met zijn zoon, Fimme Bakker langs in het Hotel Bi-j Ons met hun voorstelling ‘Ben je bezopen?’. Alle medewerkers van Lojal en verschillende betrokken partners waren uitgenodigd. De avond was een groot succes. ',
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