<?php 
  session_start();
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojalNieuwsBeheer') {}else {
    header("Location: login.php");
  }
?>

<html> 
  <head>
    <link rel="stylesheet" href="../assets/css/plugins.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
</html>
<?php

  $oldImgs = array();
  $newImgs = array();
  $oldVideo = '';
  if(file_exists('../nieuws-artikelen/'.$_POST['nameFile'])){
    include '../nieuws-artikelen/'.$_POST['nameFile'];
    $oldBlog = $blog;
    if(isset($headerFoto)){
      $oldImgs[] = $headerFoto;
    }
    foreach ($oldBlog as $oldBlogPart) {
      if($oldBlogPart['Type'] == "Foto"){
        $oldImgs[] = $oldBlogPart['Foto'];
      }else if($oldBlogPart['Type'] == "Fotos"){
        foreach ($oldBlogPart['Fotos'] as $foto) {
          $oldImgs[] = $foto;
        }
      }
    }
    if(isset($headerVideo)){
      $oldVideo = $headerVideo;
    }
    $title = '';
    $schrijver = '';
    $datum = '';
    $headerFotoType = '';
    $headerFoto = '';
    $headerVideoPoster = '';
    $headerVideo = '';
    $blog = [];
  }

  if (isset($_POST['headerType'])) {
    if (isset($_FILES["headerFoto"]) && $_FILES["headerFoto"]['error'] == 0){ 
      if(!in_array($_FILES["headerFoto"]['name'], $oldImgs)) {
        $newName = checkImg($_FILES["headerFoto"]);
        if(isset($newName) && !$newName == ''){
          $_FILES["headerFoto"]['name'] = $newName;
        };
        $newName = '';
      }
      $newImgs[] = $_FILES["headerFoto"]['name'];
    }
    if(!file_exists('../nieuws-artikelen/' . $_FILES["headerVideo"]["full_path"])){
      $newName = checkVideo($_FILES["headerVideo"]);
      if(isset($newName) && !$newName == ''){
        $_FILES["headerVideo"]['name'] = $newName;
      };
      $newName = '';
    }
  } else if(isset($_FILES["headerFoto"]) && $_FILES["headerFoto"]['error'] == 0){ 
    if(!in_array($_FILES["headerFoto"]['name'], $oldImgs)){
      $newName = checkImg($_FILES["headerFoto"]);
      if(isset($newName) && !$newName == ''){
        $_FILES["headerFoto"]['name'] = $newName;
      };
      $newName = '';
    }
    $newImgs[] = $_FILES["headerFoto"]['name'];
  }

  if(isset($_POST['blog'])){
    $blogPartsPost = $_POST['blog'];
    $blogPartsPostImg = [];
    foreach ($blogPartsPost as $post => $info) {
      if ($info['type'] == 'Fotos') {
        $blogPartsPostImg[$post] = $info;
      }
    }
  }
  if(isset($_FILES['blog'])){
    $blogPartsFile = $_FILES['blog'];
    foreach ($blogPartsPostImg as $key => $blogPartPost) {
      $blogPartsPost[$key]['fotos'] = [];
      for ($i=0; $i < count($blogPartsFile['name'][$key]); $i++) { 
        $file = [
          'name' => $blogPartsFile['name'][$key][$i], 
          'full_path' => $blogPartsFile['full_path'][$key][$i], 
          'type' => $blogPartsFile['type'][$key][$i],
          'tmp_name' => $blogPartsFile['tmp_name'][$key][$i],
          'error' => $blogPartsFile['error'][$key][$i],
          'size' => $blogPartsFile['size'][$key][$i]
        ];
        if(!file_exists('../nieuws-artikelen/' . $file["full_path"])){
          $newName = checkImg($file);
          if(isset($newName) && !$newName == ''){
            $file['name'] = $newName;
          };
          $newName = '';
          }
          array_push($blogPartsPost[$key]['fotos'], $file); 
      }
    }
  }
  if(isset($_FILES['blog'])){
    $blog = $_POST['blog'];
    $blogPartsFile = $_FILES['blog'];
    foreach ($blog as $key => $info) {
      if ($info['type'] == 'Foto') {
        if(!file_exists('uploads/' . $blogPartsFile['name'][$key])){
          $file = [
            'name' => $blogPartsFile['name'][$key], 
            'full_path' => $blogPartsFile['full_path'][$key], 
            'type' => $blogPartsFile['type'][$key],
            'tmp_name' => $blogPartsFile['tmp_name'][$key],
            'error' => $blogPartsFile['error'][$key],
            'size' => $blogPartsFile['size'][$key]
          ];
          if(!file_exists('../nieuws-artikelen/' . $file["full_path"])){
            $newName = checkImg($file);
          if(isset($newName) && !$newName == ''){
            $file['name'] = $newName;
          };
          $newName = '';
          }
          $blogPartsPost[$key]['foto'] = $file; 
        }
      }
    }
  }

  $blog = array ();

  function checkImg($file){
    $name = $file['name'];
    $target_dir = "../nieuws-artikelen/uploads/";
    $target_file = $target_dir . basename($name);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if($check !== false) {
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      echo  '<br>';
      $uploadOk = 0;
    }
    // Check file size
    if ($file["size"] > 1280000) {
      echo "Sorry, your file is too large.";
      echo  '<br>';
      $uploadOk = 0;
    }
    // Check if file already exists
    if(file_exists($target_file)){
      $newName = pathinfo($target_file)['filename'] . '-' . date('d-m-Y', strtotime($_POST['datum'])) . '.' . pathinfo($target_file)['extension'];
      $target_file = $target_dir . '/'  . $newName;
      if(file_exists($target_file)){
        $newName = pathinfo($target_file)['filename'] . '(' . rand(0, 100) . ').' . pathinfo($target_file)['extension'];
        $target_file = $target_dir . '/'  . $newName;
      } 
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      echo  '<br>';
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo "Het bestand ". htmlspecialchars( pathinfo($target_file)['basename']). " is geüploaded.";
        echo  '<br>';
      } else {
        echo "Sorry, there was an error uploading your file.";
        echo  '<br>';
      }
    }
    if(isset($newName)){
      return $newName;
    }
  }
  function checkVideo($file){
    $name = $file['name'];
    $target_dir = "../nieuws-artikelen/uploads-video/";
    $target_file = $target_dir . basename($name);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(file_exists($target_file)){
      $newName = pathinfo($target_file)['filename'] . '-' . date('d-m-Y', strtotime($_POST['datum'])) . '.' . pathinfo($target_file)['extension'];
      $target_file = $target_dir . '/'  . $newName;
      if(file_exists($target_file)){
        $newName = pathinfo($target_file)['filename'] . '(' . rand(0, 100) . ').' . pathinfo($target_file)['extension'];
        $target_file = $target_dir . '/'  . $newName;
      } 
    }
    // Check file size
    if ($file["size"] > 12800000) {
      echo "Sorry, your file is too large.";
      echo  '<br>';
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      echo  '<br>';
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($file["tmp_name"], $target_file)) {
        echo "Het bestand ". htmlspecialchars( pathinfo($target_file)['basename']). " is geüploaded.";
        echo  '<br>';
      } else {
        echo "Sorry, there was an error uploading your file.";
        echo  '<br>';
      }
    }
    if(isset($newName)){
      return $newName;
    }
  }
  if(isset($blogPartsPost)){
    foreach ($blogPartsPost as $blogPart) {
      if($blogPart['type'] == 'Text'){
        $text = [];
        foreach ($blogPart['text'] as $textPart) {
          array_push($text, $textPart);
        }
        array_push($blog, ["Type"=> $blogPart['type'], "Title"=> $blogPart['kop'], "Text"=> $text]);
      }else if($blogPart['type'] == 'Fotos'){
        $fotos = [];
        foreach ($blogPart['fotos'] as $foto) {
          array_push($fotos, $foto['name']);
          $newImgs[] = $foto['name'];
        }
        array_push($blog, ["Type"=> $blogPart['type'], "Fotos"=> $fotos]);
      }else if($blogPart['type'] == 'Foto'){
        array_push($blog, ["Type"=> $blogPart['type'], "Foto"=> $blogPart['foto']['name']]);
        $newImgs[] = $blogPart['foto']['name'];
      }
    }
  }
  
  foreach ($oldImgs as $oldImg) {
    if(!in_array($oldImg, $newImgs) && file_exists('../nieuws-artikelen/uploads/'.$oldImg)){
      unlink('../nieuws-artikelen/uploads/'.$oldImg);
    }
  }

  writeFile($_POST['nameFile'], $blog);

  function writeFile($nameFile, $blog){
    if(!file_exists('../nieuws-artikelen/'.$nameFile)){
      header("Location: nieuws-overzicht.php?message=error");
      return ;
    }
    rename('../nieuws-artikelen/'.$nameFile, '../nieuws-artikelen/backup/'.$nameFile);
    $myfile = fopen( '../nieuws-artikelen/' . $nameFile , "w") or die("Unable to open file!");
    $written =  "
    <?php
      \$title = '" .$_POST['titel']. "';
      \$schrijver = '" .$_POST['schrijver']. "';
      \$datum = '" .date('d-m-Y', strtotime($_POST['datum'])). "';
    ";
    fwrite($myfile, $written);

    if (isset($_POST['headerType'])) {
      fwrite($myfile, "
      \$headerFotoType = 'video';");
      if ($_FILES["headerFoto"]['error'] == 0) {
        fwrite($myfile, "
        \$headerVideoPoster = '" .$_FILES["headerFoto"]['name']. "';");
      }
      fwrite($myfile, "
      \$headerVideo = '" .$_FILES["headerVideo"]['name']. "';");
    } else {
      fwrite($myfile, "
      \$headerFotoType = 'foto';");
      fwrite($myfile, "
      \$headerFoto = '" .$_FILES["headerFoto"]['name']. "';");
    }

    if (isset($blog)) {
      fwrite($myfile, "
      \$blog = " .var_export($blog, true). ";");
    }else{
      fwrite($myfile, "
      \$blog = [];");
    }
    fwrite($myfile, "
    if (preg_match('/\b'.basename(__FILE__).'\b/', basename(\$_SERVER['REQUEST_URI']))) {
      session_start();
      if(isset(\$_GET['edit']) && \$_GET['edit'] == 'true'){
        include '../nieuws-beheer/nieuws-aanpassen.php';
      }else{
        include 'nieuws-artikel-base.php';
      }
    }
    ?>");
    fclose($myfile);
    echo  '<br>';
    echo "Het bestand " . $nameFile . " is geüploaded";
    unlink('../nieuws-artikelen/backup/' . $nameFile);
    if (headers_sent()) {
      echo  '<br>';
      echo  '<br>';
      die("Er ging iets mis met de redirect. Gebruik deze link om naar het artikel te gaan: <a href='../nieuws-artikelen/" . $titelUrl . ".php'>" . $titelUrl . ".php</a>");
    }
    else{
      exit(header('Location: ../nieuws-artikelen/' . $nameFile));
    }
    die();
  }
?>
