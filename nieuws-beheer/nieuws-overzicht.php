<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Nieuws Overzicht</title>
  <link rel="shortcut icon" href="../assets/logos/logoLojal.png">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php 
  session_start();
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojalNieuwsBeheer') {}else {
    header("Location: login.php");
  }
?>
<body>
  <div class="page-loader"></div>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <?php include '../includes/navbar-one-folder-back.html'; ?>
    </header>
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="position-fixed left-0 right-0 mx-auto w-fit" style="top: 70px; z-index: 1025;">
            <?php 
              if(!empty($_GET['message'])){
                if($_GET['message'] == "succes"){
                  echo '<div class="bg-green bg-opacity-75 text-white w-100 h-100 rounded px-10 py-5">Artikel succesvol verwijdert</div>';
                }else if($_GET['message'] == "error"){
                  echo '<div class="bg-red bg-opacity-75 text-white w-100 h-100 rounded px-10 py-5">Er ging iets mis</div>';
                }
              }
            ?>
          </div>
          <button onclick="location.href='nieuws-maken.php'" class="btn btn-sm btn-primary-light rounded-pill btn-icon btn-icon-start mb-0 mx-auto mt-10 d-flex"><i style="font-size: xxx-large;" class="uil uil-plus"></i> <p class="fs-20 alert-heading mb-0">Nieuw nieuwsartikel</p></button>
          <div id="artikelGrid" class="d-grid gap-5 mt-10">
            <?php 
                $files = glob('../nieuws-artikelen/*.*');
                include '../includes/get-nieuws-artikellen.php';

                if(isset($newFiles) && count($newFiles) != 0){
                  foreach ($newFiles as $file) {
                    include $file;
                    echo '<div class="card-img-top card">
                      <a href="'; echo $file; echo'"> ';
                        if($headerFotoType == 'video'){ 
                          //Video
                          if(isset($headerVideoPoster) && $headerVideoPoster != ''){
                            echo'<img style="height: 200px;" class="w-100 object-fit-cover" src="../nieuws-artikelen/uploads/'; echo $headerVideoPoster; echo'" alt="" />';
                          }else{
                            echo '<div style="height: 200px;" class="w-100 object-fit-cover unplayableVideo card-img-top">
                              <video class="player" width="320" height="240" controls>
                                <source src="../nieuws-artikelen/uploads-video/'; echo $headerVideo; echo'" type="video/mp4">
                                Your browser does not support the video tag.
                              </video>
                            </div>';
                          }
                          }else{
                          //Foto
                          if(isset($headerFoto) && $headerFoto !== ''){
                            echo '<img style="height: 200px;" class="w-100 object-fit-cover" src="../nieuws-artikelen/uploads/' .$headerFoto.'" alt="" />';
                          }else{
                            echo '<img style="height: 200px;" class="w-100 object-fit-cover" src="../nieuws-artikelen/uploads/lojalImgPlaceholder.png" alt="" />';
                          }
                        }
                      echo '</a>
                      <h3 class="px-2"><a class="text-primary" href="'; echo $file; echo'">'; echo $title; echo'</a></h3>';
                      echo '<div class="ms-auto mt-auto">
                        <i class="crudIcons uil uil-edit fs-28 pointer" onclick="location.href=';echo "'"; echo $file; echo "?edit=true'"; echo'"></i>
                        <i class="crudIcons uil uil-trash fs-28 text-red mx-1 pointer" onclick="showRemovePopUp(';echo "'"; echo $file; echo "'"; echo', '; echo "'"; echo $title; echo "'"; echo')"></i>
                      </div>
                    </div>';
                    $title = '';
                    $schrijver = '';
                    $datum = '';
                    $headerFotoType = '';
                    $headerFoto = '';
                    $headerVideoPoster = '';
                    $headerVideo = '';
                    $blog = [];
                  }
                }else{
                  echo "Geen nieuwsartikelen gevonden";
                }
              ?>
          </div>
          <div id="removePopUp" class="display-none position-fixed tblr-0" style="z-index: 1030;">
            <div class="h-screen w-screen position-fixed tblr-0 opacity-50" style="background: gray;" onclick="this.parentElement.classList.add('display-none')"></div>
            <div class="m-auto bg-white rounded p-5 w-fit h-fit position-fixed tblr-0" style="max-width: 400px; border: solid #e2626b 2px;">
              <div class="d-flex align-items-center">
                <i class="uil uil-trash fs-52 text-red"></i>
                <h3 class="fw-normal my-0 mx-3">Weet je zeker dat je <span id="removePopUpSpan" class="text-primary fw-bolder underline-4" style="cursor: text;">(file)</span> wilt verwijderen?</h3>
              </div>
              <form class="d-flex justify-content-center gap-4 mt-4" action="remove-nieuws-artikel.php" method="post">
                <button type="submit" class="btn bg-red text-white">Ja</button>
                <button type="button" class="btn text-white" style="background: var(--bs-gray-500);" onclick="this.parentElement.parentElement.parentElement.classList.add('display-none')">Nee</button>
                <input id="invisableInputRemoveFile" name="file" value="" class="display-none" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php include '../includes/footer-one-folder-back.html'; ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <style>
    #artikelGrid {
      grid-template-columns: auto auto auto auto;
    }
    @media (max-width: 768px) {
      #artikelGrid {
        grid-template-columns: auto auto;
      }
      .crudIcons {
        font-size: calc(1.325rem + 0.9vw) !important;
        margin-left: 10px !important;
      }
    }
    @media (max-width: 576px) {
      #artikelGrid {
        grid-template-columns: auto;
      }
      .crudIcons {
        font-size: calc(1.375rem + 1.5vw) !important;
        margin-left: 10px !important;
      }
    }
  </style>
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/theme.js"></script>
  <script>
    const tx = document.getElementsByTagName("textarea");
    for (let i = 0; i < tx.length; i++) {
      tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
      tx[i].addEventListener("input", OnInput, false);
    }

    function OnInput() {
      this.style.height = 0;
      this.style.height = (this.scrollHeight) + "px";
    }
    if(document.getElementsByTagName("textarea").length > 0){
      document.getElementsByTagName("textarea")[0].dispatchEvent(new Event('input', { bubbles: true }));
    }
    function setTextareas(){
      const tx = document.getElementsByTagName("textarea");
      for (let i = 0; i < tx.length; i++) {
        tx[i].setAttribute("style", "height: 0px;overflow-y:hidden;");
        tx[i].setAttribute("style", "height:" + (tx[i].scrollHeight) + "px;overflow-y:hidden;");
        tx[i].addEventListener("input", OnInput, false);
      }

      function OnInput() {
        this.style.height = 0;
        this.style.height = (this.scrollHeight) + "px";
      }
      if(document.getElementsByTagName("textarea").length > 0){
        document.getElementsByTagName("textarea")[0].dispatchEvent(new Event('input', { bubbles: true }));
      }
    }
  </script>
  <script>
    function showRemovePopUp(file, title){
      document.getElementById("removePopUp").classList.remove('display-none');
      document.getElementById("removePopUpSpan").innerHTML = title;
      document.getElementById("invisableInputRemoveFile").value = file;
    }
  </script>
</body>
</html>
