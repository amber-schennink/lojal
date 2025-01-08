
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Nieuws</title>
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
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row position-relative">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="display-1 mb-3">Nieuws</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog classic-view mt-n17">
              <?php 
                $currentPage = 0;
                $nextPage = false;
                $files = glob('nieuws-artikelen/*.*');
                include 'includes/get-nieuws-artikellen.php';
                if (isset($_GET['pagina']) && $_GET['pagina'] > 0) {
                  $currentPage = $_GET['pagina'];
                  $newFiles = array_slice($newFiles, ($currentPage * 10));
                }
                if(isset($newFiles) && count($newFiles) != 0){
                  foreach ($newFiles as $key => $file) {
                    if($key >= 10){
                      $nextPage = true;
                      break;
                    }
                    include $file;
                    echo '<article class="post">
                      <div class="card"> '; 
                        if($headerFotoType == 'video'){ 
                          //Video
                          echo '<div class="card-img-top">'; 
                          if(isset($headerVideoPoster) && $headerVideoPoster != ''){
                            echo'<video poster="nieuws-artikelen/uploads/'; echo $headerVideoPoster; echo'" class="player" width="320" height="240" controls>'; 
                          }else{
                            echo'<video class="player" width="320" height="240" controls>'; 
                          }
                            echo'<source src="nieuws-artikelen/uploads-video/'; echo $headerVideo; echo'" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>
                          </div>';
                        }else{
                          //Foto
                          echo'<figure class="card-img-top overlay overlay-1 hover-scale">
                            <a class="link-dark" href="'; echo $file; echo'">';
                              if(isset($headerFoto) && $headerFoto !== ''){
                                echo '<img src="nieuws-artikelen/uploads/' .$headerFoto.'" alt="" />';
                              }else{
                                echo '<img src="nieuws-artikelen/uploads/lojalImgPlaceholder.png" alt="" />';
                              }echo'
                            </a>
                            <figcaption>
                              <h5 class="from-top mb-0">Lees meer</h5>
                            </figcaption>
                          </figure>';
                        }
                        echo'<div class="card-body">
                          <div class="post-header">
                            <h2 class="post-title mt-1 mb-0">
                              <a class="text-primary" href="'; echo $file; echo'">'; echo $title; echo '</a>
                            </h2>
                          </div>'; 
                          foreach ($blog as $value) {
                            if($value['Type'] == 'Text'){
                              echo'<div class="post-content">
                                <p class="text-pre-wrap">'; echo $value['Text'][0]; echo '...<a href="'; echo $file; echo'" class="text-decoration-underline offset-2 primary-light">Lees meer</a></p>
                              </div>'; 
                              break;
                            }
                          }
                        echo'</div>
                        <div class="card-footer">
                          <ul class="post-meta d-flex mb-0">
                            <li class="post-date"><i class="uil uil-calendar-alt"></i><span>'; echo $datum; echo'</span></li>
                            <li class="post-author"><i class="uil uil-user"></i><span>'; echo $schrijver; echo'</span></li>
                          </ul>
                        </div>
                      </div>
                    </article>';
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
                echo '<div style="margin: 0px 10%; display: flex;">';
                if($currentPage > 0){
                  echo '<a class="fw-bolder hover" style="font-size: larger;" href="?pagina=' . $currentPage - 1 . '"><- Vorige pagina</a>';
                }
                if($nextPage == true){
                  echo '<a class="fw-bolder hover" style="font-size: larger; margin-left: auto;" href="?pagina=' . $currentPage + 1 . '">Volgende pagina -></a>';
                }
                echo '</div>';
              ?>
            </div>
          </div>
          <?php include 'includes/contact-formulier.php' ?>
        </div>
      </div>
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