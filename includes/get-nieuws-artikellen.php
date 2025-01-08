<?php 
foreach( $files as $file) {
  $filesTime[$file] = filectime($file);
}
arsort($filesTime);
foreach ($filesTime as $key => $value) {
  if(!str_contains($key, 'nieuws-artikel-base.php')){
    $newFiles[] = $key;
  }
}
if(isset($newFiles) && count($newFiles) != 0){
  $filesInOrder = [];
  foreach ($newFiles as $file) {
    include $file;
    $datum = date("Y-m-d", strtotime($datum));
    $filesInOrder[$datum . "-" . $file] = $file;

    $title = '';
    $schrijver = '';
    $datum = '';
    $headerFotoType = '';
    $headerFoto = '';
    $headerVideoPoster = '';
    $headerVideo = '';
    $blog = [];
  }
  krsort($filesInOrder);

  $newFiles = [];
  foreach ($filesInOrder as $file) {
    $newFiles[] = $file;
  }
}
?>