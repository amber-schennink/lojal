
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Nieuws - <?php echo $title ?></title>
  <link rel="shortcut icon" href="../assets/logos/logoLojal.png">
  <link rel="stylesheet" href="../assets/css/plugins.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<?php 
  if (isset($_SESSION['valid']) && $_SESSION['valid'] == true && $_SESSION['username'] == 'userLojal') {}else {
    header("Location: ../login.php");
  }
?>
<body>
  <div class="page-loader"></div>
  <div class="content-wrapper">
    <header class="wrapper bg-light">
      <?php include '../includes/navbar-one-folder-back.html'; ?>
    </header>
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
        <div class="row">
          <div class="col-md-10 col-xl-8 mx-auto">
            <div class="post-header">
              <h1 class="display-1 mb-4"><?php echo $title ?></h1>
              <ul class="post-meta mb-5">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?php echo $datum ?></span></li>
                <li class="post-author"><i class="uil uil-user"></i><span><?php echo $schrijver ?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="wrapper bg-light">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="blog single mt-n17">
              <div class="card">
                <?php 
                  if(isset($headerFotoType)) {
                    echo '<figure class="card-img-top">';
                    if($headerFotoType == 'foto'){
                      if(isset($headerFoto) && $headerFoto !== ''){
                        echo '<img src="uploads/' .$headerFoto.'" alt="" />';
                      }else{
                        echo '<img src="uploads/lojalImgPlaceholder.png" alt="" />';
                      }
                    }elseif($headerFotoType == 'video'){
                      if(isset($headerVideoPoster)){
                        echo '<video poster="uploads/' .$headerVideoPoster. '" class="player" width="320" height="240" controls>';
                      }else{
                        echo '<video class="player" width="320" height="240" controls>';
                      }
                      echo '<source src="uploads-video/' .$headerVideo. '" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>';
                    };
                    echo '</figure>';
                  }
                ?>
                <div class="card-body">
                  <div class="classic-view">
                    <article class="post">
                      <div class="post-content mb-5">
                        <?php 
                          foreach ($blog as $value) {
                            if ($value['Type'] == 'Text'){
                              echo "<div>";
                                echo '<h2 class="h1 mb-4">' .$value['Title']. '</h2>';
                                foreach ($value['Text'] as $text) {
                                  echo '<p class="text-pre-wrap">' .$text. '</p>';
                                }
                              echo "</div>";
                            }elseif ($value['Type'] == 'Fotos'){
                              echo '<div class="row g-6 mt-3 mb-10">';
                                foreach ($value['Fotos'] as $foto) {
                                  echo '<div class="col-md-6 flex">
                                    <figure class="hover-scale rounded cursor-dark m-auto w-100">
                                      <a href="uploads/' .$foto. '" data-glightbox data-gallery="post"> 
                                        <img src="uploads/' .$foto. '" alt="" />
                                      </a>
                                    </figure>
                                  </div>';
                                }
                              echo '</div>';
                            }elseif ($value['Type'] == 'Foto'){
                              echo '<div class="row g-6 mt-3 mb-10">';
                                echo '<div class="flex">
                                  <figure class="hover-scale rounded cursor-dark m-auto w-100">
                                    <a href="uploads/' .$value['Foto']. '" data-glightbox data-gallery="post"> 
                                      <img src="uploads/' .$value['Foto']. '" alt="" />
                                    </a>
                                  </figure>
                                </div>';
                              echo '</div>';
                            }
                          }
                        ?>
                      </div>
                      <div class="post-footer d-md-flex flex-md-row justify-content-md-end align-items-center mt-8">
                        <div class="mb-0 mb-md-2">
                          <div class="dropdown dropdown-share btn-group">
                            <button class="btn btn-sm btn-primary-light rounded-pill btn-icon btn-icon-start dropdown-toggle mb-0 me-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="uil uil-share-alt"></i> Share </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item"><i class="uil uil-twitter"></i>Twitter</a>
                              <a class="dropdown-item"><i class="uil uil-facebook-f"></i>Facebook</a>
                              <a class="dropdown-item"><i class="uil uil-linkedin"></i>Linkedin</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </article>
                  </div>
                  <hr />
                  <h3 class="mb-6">Misschien vindt je deze ook leuk</h3>
                  <div class="swiper-container blog grid-view mb-16" data-margin="30" data-dots="true" data-items-md="2" data-items-xs="1">
                    <div class="swiper">
                      <div class="swiper-wrapper">
                        <?php 
                          $files = glob('*.*');
                          foreach( $files as $file) {
                            $filesTime[$file] = filectime($file);
                          }
                          arsort($filesTime);
                          foreach ($filesTime as $key => $value) {
                            if(!str_contains($key, 'nieuws-artikel-base.php') && !str_contains( $_SERVER['REQUEST_URI'], $key)){
                              $newFiles[] = $key;
                            }
                          }

                          if(isset($newFiles) && count($newFiles) != 0){
                            $filesInOrder = [];
                            foreach ($newFiles as $file) {
                              include $file;
                              $datum = date("Y-m-d", strtotime($datum));
                              $filesInOrder[$datum . "-" . $title] = $file;
          
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

                          if(isset($newFiles) && count($newFiles) != 0){
                            foreach ($newFiles as $file) {
                              include $file;
                              echo '<div class="swiper-slide h-auto">
                                <article> 
                                  <figure class="overlay overlay-1 hover-scale rounded mb-6">
                                    <a href="'; echo $file; echo'"> ';
                                      if($headerFotoType == 'video'){ 
                                        //Video
                                        if(isset($headerVideoPoster) && $headerVideoPoster != ''){
                                          echo'<img class="imgNieuws" src="uploads/'; echo $headerVideoPoster; echo'" alt="" />';
                                        }else{
                                          echo '<div class="imgNieuws" class="unplayableVideo card-img-top">
                                            <video class="player" width="320" height="240" controls>
                                              <source src="uploads-video/'; echo $headerVideo; echo'" type="video/mp4">
                                              Your browser does not support the video tag.
                                            </video>
                                          </div>';
                                        }
                                      }else{
                                        //Foto
                                        if(isset($headerFoto) && $headerFoto !== ''){
                                          echo '<img class="imgNieuws" src="uploads/' .$headerFoto.'" alt="" />';
                                        }else{
                                          echo '<img class="imgNieuws" src="uploads/lojalImgPlaceholder.png" alt="" />';
                                        }
                                      }
                                    echo '</a>
                                    <figcaption>
                                      <h5 class="from-top mb-0">Lees meer</h5>
                                    </figcaption>
                                  </figure>
                                  <div class="post-header">
                                    <h2 class="text-truncate post-title h3 ls-sm mb-3"><a class="primary" href="'; echo $file; echo'">'; echo $title; echo'</a></h2>
                                  </div>
                                  <p class="position-relative post-footer overflow-hidden" style="white-space: normal; max-height: 163px;">'; 
                                    foreach ($blog as $value) {
                                      if($value['Type'] == 'Text'){
                                        echo $value['Text'][0];
                                        for ($i=1; $i < count($value['Text']); $i++) { 
                                          echo " " . $value['Text'][$i];
                                        } echo' 
                                        <span class="position-absolute bottom-0 right-0 ps-14 pe-10 text-decoration-underline offset-2 primary-light pointer" style="background: linear-gradient(to right, rgba(255,255,255,0) 0%,rgba(255,255,255,1) 45%);">
                                          <a class="primary-light" href="'; echo $file; echo'">lees meer</a>
                                        </span>'; 
                                        break;
                                      }
                                    }
                                  echo'</p>
                                  <div class="post-footer">
                                    <ul class="post-meta mb-0">
                                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>'; echo $datum; echo'</span></li>
                                      <li class="post-author"><i class="uil uil-user"></i><span>'; echo $schrijver; echo'</span></li>
                                    </ul>
                                  </div>
                                </article>
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
                    </div>
                  </div>
                </div>
              </div>
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
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>
</html>