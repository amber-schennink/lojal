<?php 
  session_start();
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojalNieuwsBeheer') {}else {
    header("Location: login.php");
  }
  
  $file = $_POST['file'];
  if(file_exists($file)){
    include $file;
    foreach ($blog as $value) {
      if ($value['Type'] == 'Fotos'){
        foreach ($value['Fotos'] as $foto) {
          $foto = '../nieuws-artikelen/uploads/'.$foto;
          if(file_exists($foto)){
            unlink($foto);
          }
        }
      }elseif ($value['Type'] == 'Foto'){
        $foto = '../nieuws-artikelen/uploads/'.$value['Foto'];
        if(file_exists($foto)){
          unlink($foto);
        }
      }
    }
    unlink($file);
    header("Location: nieuws-overzicht.php?message=succes");
  }else{
    header("Location: nieuws-overzicht.php?message=error");
  }
  exit();
  
?>