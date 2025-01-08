<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lojal - Nieuws Maken</title>
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
    <form id="form" onsubmit="return submitForm(this)" action="check-nieuws-artikel.php" method="post" enctype="multipart/form-data">
      <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-19 pt-md-14 pb-md-20 text-center">
          <div class="row">
            <div class="col-md-10 col-xl-8 mx-auto">
              <div class="post-header">
                <input class="form-control primary display-1 mb-4 w-fit mx-auto" style="max-width: 90%;" type="text" name="titel" placeholder="Titel*" required>
                <ul class="post-meta mb-5">
                  <li class="post-date">
                    <input class="form-control primary-light" type="text" name="schrijver" placeholder="Schrijver*" required>
                  </li>
                  <li class="post-date">
                    <input class="form-control primary-light" type="date" name="datum" value="<?php echo date("Y-m-d") ?>" required>
                  </li>
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
                  <div class="position-absolute right-0 flex gap-4" style="top: -40px;">
                    <p>Foto</p>
                    <label class="switch">
                      <input name="headerType" onClick="switchFotoVideo(this)" value="Video" type="checkbox">
                      <span class="slider round"></span>
                    </label>
                    <p>Video</p>
                  </div>
                  
                  <figure class="card-img-top">
                    <div class="image-upload bg-soft-primary position-relative" style="min-height: 600px;">
                      <label for="file-input" style="min-height: 600px;" class="display-block h-fit w-100 z-3 pointer">
                        <svg id="inputPlaceholderSvg" height="200px" class="m-auto position-absolute tblr-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 412.3"><circle class="lineal-fill" cx="316.6" cy="102.2" r="51.5"/><path class="lineal-stroke" d="M316.6 167.9c-36.3 0-65.7-29.4-65.7-65.7s29.4-65.7 65.7-65.7 65.7 29.4 65.7 65.7c0 36.3-29.4 65.7-65.7 65.7zm0-102.9c-20.6 0-37.2 16.7-37.2 37.2s16.7 37.2 37.2 37.2 37.2-16.7 37.2-37.2c0-20.5-16.6-37.2-37.2-37.2z"/><path class="lineal-fill" d="M319 397.1L192.9 164.3 38.3 397.1z"/><path class="lineal-stroke" d="M319 411.3H38.3c-7.9 0-14.2-6.4-14.2-14.2 0-2.8.8-5.5 2.4-7.9L181 156.4c4.3-6.5 13.2-8.3 19.7-4 1.9 1.3 3.5 3 4.6 5.1l126.2 232.8c3.7 6.9 1.2 15.5-5.7 19.3-2.1 1.1-4.4 1.7-6.8 1.7zM64.8 382.9h230.3l-103.5-191-126.8 191z"/><path class="lineal-fill" d="M473.7 397.1L347.6 243 221.4 397.1z"/><path class="lineal-stroke" d="M473.7 411.3H221.4c-7.9 0-14.2-6.4-14.2-14.2 0-3.3 1.1-6.5 3.2-9L336.6 234c5-6.1 13.9-7 20-2 .7.6 1.4 1.3 2 2l126.2 154.1c5 6.1 4.1 15-2 20-2.6 2.1-5.8 3.2-9.1 3.2zm-222.2-28.4h192.2l-96.1-117.4-96.1 117.4z"/><path class="lineal-stroke" d="M472.8 412.3H39.2C17.6 412.2 0 394.7 0 373.1V39.2C0 17.6 17.6 0 39.2 0h433.6C494.4 0 512 17.6 512 39.2v333.9c0 21.6-17.6 39.1-39.2 39.2zM39.2 28.5c-5.9 0-10.7 4.8-10.8 10.8v333.9c0 5.9 4.8 10.7 10.8 10.7h433.6c5.9 0 10.7-4.8 10.8-10.7v-334c0-5.9-4.8-10.7-10.8-10.8H39.2z"/><path class="lineal-stroke" d="M123.7 87.6H14.2c-7.9.2-14.4-6-14.6-13.8s6-14.4 13.8-14.6h110.3c7.9-.2 14.4 6 14.6 13.8.2 7.9-6 14.4-13.8 14.6h-.8zm-27 57.8H14.2C6.3 145.4 0 139 0 131.2c0-7.9 6.4-14.2 14.2-14.2h82.4c7.9 0 14.2 6.4 14.2 14.2.1 7.9-6.3 14.2-14.1 14.2z"/></svg>
                        <img id="blah" src="#" class="display-none pointer w-100 h-100"/>
                        <input id="file-input" type="file" name="headerFoto" class="display-none" onclick="emptyURL(this)" onchange="readURL(this)" accept="image/*"/> 
                      </label>
                      <label id="videoLabel" for="file-inputVideo" style="min-height: 100%;" class="h-fit w-100 display-none pointer position-absolute">
                        <svg id="inputPlaceholderSvgVideo" height="200px" class="m-auto position-absolute tblr-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 409.6 350.3"><path class="lineal-fill" d="M312.8 275H10.7v17.3c0 26.1 21.2 47.3 47.3 47.3h293.6c26.2 0 47.4-21.2 47.4-47.4V275M175.6 169.8v-57.3c0-3.3 2.7-5.9 5.9-5.9 1 0 2 .3 2.9.8l50.5 28.6c2.8 1.6 3.8 5.2 2.2 8.1-.5.9-1.3 1.7-2.2 2.2l-50.5 28.6c-2.8 1.6-6.4.6-8.1-2.2-.4-.9-.7-1.9-.7-2.9z"/><path class="lineal-stroke" d="M181.5 186.4c-9.2 0-16.6-7.4-16.6-16.6v-57.3c0-9.2 7.4-16.6 16.5-16.6 2.9 0 5.7.7 8.2 2.2l50.5 28.6c8 4.5 10.8 14.6 6.2 22.6-1.5 2.6-3.6 4.8-6.2 6.2l-50.5 28.6c-2.4 1.5-5.2 2.3-8.1 2.3zm4.8-65.7v40.9l36.1-20.5-36.1-20.4z"/><path class="lineal-stroke" d="M204.8 232.8c-49.5-.1-89.6-40.2-89.7-89.6.2-5.9 5.1-10.5 11-10.3 5.6.2 10.2 4.7 10.3 10.3 0 37.7 30.6 68.3 68.3 68.3s68.3-30.6 68.3-68.3-30.6-68.3-68.3-68.3c-5.9 0-10.7-4.8-10.7-10.7s4.8-10.7 10.7-10.7c49.5 0 89.7 40.1 89.7 89.6s-40.1 89.7-89.6 89.7z"/><path class="lineal-stroke" d="M351.6 0H58C26 .1.1 26 0 58v234.3c.1 32 26 57.9 58 58h293.6c32 0 57.9-26 58-58V58c-.1-32-26-57.9-58-58zM58 329c-20.3 0-36.7-16.5-36.7-36.7v-6.6h60.9v10c0 5.9 4.8 10.7 10.7 10.7 5.9 0 10.7-4.8 10.7-10.7v-10h209.2c5.9 0 10.7-4.8 10.7-10.7s-4.8-10.7-10.7-10.7H103.6v-10.9c0-5.9-4.8-10.7-10.7-10.7-5.9 0-10.7 4.8-10.7 10.7v10.9H21.3V58c.1-20.3 16.5-36.7 36.7-36.7h293.6c20.3 0 36.7 16.4 36.7 36.7v234.3c0 7.6-2.3 14.7-6.3 20.5-1.3 2-2.8 3.8-4.5 5.4-.8.8-1.7 1.6-2.6 2.4-1.8 1.5-3.8 2.8-5.9 3.9-5.2 2.8-11.2 4.4-17.5 4.4H58z"/></svg>
                        <video class="player display-none pointer" width="320" height="240" controls>
                          <source id="blahVideo" src="#" type="video/mp4">
                          Your browser does not support the video tag.
                        </video>
                        <input id="file-inputVideo" type="file" name="headerVideo" class="display-none" onclick="emptyURLVideo(this)" onchange="readURLVideo(this)" accept="video/*"/>
                      </label>
                    </div>
                  </figure>
                  <style>
                    .inputFotoMini{
                      max-width: 248px;
                      width: 248px !important;
                      position: absolute;
                      z-index: 3;
                      object-fit: contain;
                      height: fit-content !important;
                    }
                    .inputFotoMiniLabel{
                      min-height: 0 !important;
                      height: fit-content !important;
                      width: fit-content !important;
                      position: absolute !important;
                    }
                  </style>
                  <div class="card-body">
                    <div class="classic-view">
                      <article class="post">
                        <div id="blog" class="post-content mb-5">
                          
                        </div>
                        <div id="addImgInput-1" onclick="document.getElementById('addPopUp').classList.remove('display-none')" class="bg-soft-primary flex justify-content-center align-content-center flex-wrap h-20 pointer">
                          <i style="font-size: xxx-large;" class="uil uil-plus-circle"></i>
                        </div>
                        <style>
                          .imgInputLabel{
                            border-radius: 0.4rem !important;
                            height: 100% !important;
                            display: flex !important;
                          }
                          .imgInputImg{
                            -o-object-fit: contain !important;
                            object-fit: contain !important;
                            height: fit-content !important;
                            margin: auto !important;
                            cursor: pointer !important;
                            border-radius: 0.4rem;
                          }
                        </style>
                        <div class="post-footer d-md-flex flex-md-column align-content-end flex-wrap justify-content-md-end align-items-end mt-8">
                          <div id="sendErrorNotification" class="display-none text-red">Niet alle velden zijn ingevuld</div>
                          <div class="mb-0 mb-md-2">
                            <button class="btn btn-sm btn-primary-light rounded-pill btn-icon btn-icon-start mb-0 me-0">
                                Opslaan 
                            </button>
                          </div>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
  </div>
  <div id="addPopUp" onclick="this.classList.add('display-none')" class="display-none position-fixed w-screen h-screen bg-half-gray top-0 left-0 z-full">
    <div onclick="event.stopPropagation()" class="bg-soft-primary w-fit h-90 m-auto position-absolute tblr-0 border-radius-04 p-5">
      <h2 class="mb-5">Nieuw nieuws onderdeel</h2>
      <div class="display-grid grid-auto-auto column-gap-10 row-gap-2">
        <button class="addButton btn btn-primary-light" onclick="addTextBlockInput(); document.getElementById('addPopUp').classList.add('display-none')">Nieuw tekst blok</button>
        <img class="addImgs" onclick="addTextBlockInput(); document.getElementById('addPopUp').classList.add('display-none')" src="../assets/imgs/nieuwsTekst.png">
        <button class="addButton btn btn-primary-light" onclick="addImagesInput(); document.getElementById('addPopUp').classList.add('display-none')">Nieuw fotos blok</button>
        <img class="addImgs" onclick="addImagesInput(); document.getElementById('addPopUp').classList.add('display-none')" src="../assets/imgs/nieuwsFotos.png">
        <button class="addButton btn btn-primary-light" onclick="addSingleImgInput(); document.getElementById('addPopUp').classList.add('display-none')">Nieuw foto blok</button>
        <img class="addImgs" onclick="addSingleImgInput(); document.getElementById('addPopUp').classList.add('display-none')" src="../assets/imgs/nieuwsFoto.png">
      </div>
    </div>
  </div>
  <style>
    .addButton{
      height: fit-content;
      margin-top: auto;
      margin-bottom: auto;
    }
    .addImgs{
      width: 383px;
      object-fit: contain;
      cursor: pointer;
    }
  </style>
  <?php include '../includes/footer-one-folder-back.html'; ?>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
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
  <script type="text/javascript">
    var hasVideo = false
    var isVideo = false
    var blah = document.getElementById('blah')
    var blahVideo = document.getElementById('blahVideo')
    var video = blahVideo.parentElement
    var svgFoto = document.getElementById('inputPlaceholderSvg')
    var svgVideo = document.getElementById('inputPlaceholderSvgVideo')
    var videoLabel = document.getElementById('videoLabel')
    var inputFoto = document.getElementById('file-input')
    var inputVideo = document.getElementById('file-inputVideo')
    var sendErrorNotification = document.getElementById('sendErrorNotification')

    function switchFotoVideo(input){
      isVideo = input.checked
      
      svgVideo.parentElement.parentElement.style.minHeight = '600px'

      inputFoto.value=null;
      inputVideo.value=null;

      if(isVideo == true){
        svgFoto.classList.remove('tblr-0')
        svgFoto.classList.remove('position-absolute')
        svgVideo.parentElement.classList.remove('display-none')
        blah.classList.add('inputFotoMini')
        svgFoto.parentElement.classList.add('inputFotoMiniLabel')
      }else{
        svgFoto.classList.add('tblr-0')
        svgFoto.classList.add('position-absolute')
        svgVideo.parentElement.classList.add('display-none')
        blah.classList.remove('inputFotoMini')
        svgFoto.parentElement.classList.remove('inputFotoMiniLabel')

        svgVideo.parentElement.classList.add('position-absolute')

        video.pause();
        blahVideo.src = '#';
        video.poster = '#';
        video.load();
        if (!video.classList.contains("display-none")) {
          video.classList.add('display-none')
          svgVideo.classList.remove('display-none')
          videoLabel.style.display = 'inline-block'
        }
      }
      blah.src = '#';
      if (!blah.classList.contains("display-none")) {
        blah.classList.add('display-none')
        svgFoto.classList.remove('display-none')
      }
    }
    function readURL(input) {
      const [file] = input.files
      if (file) {
        blah.src = URL.createObjectURL(file)
        svgFoto.classList.add('display-none')
        blah.classList.remove('display-none')

        if(isVideo == true){
          video.pause();
          video.poster = URL.createObjectURL(file)
          video.load();
        }else{
          svgFoto.parentElement.parentElement.style.minHeight = '0px'
          svgFoto.parentElement.style.minHeight = '0px'
        }
      }
    }
    function readURLVideo(input) {
      const [file] = input.files
      if (file) {
        svgVideo.parentElement.classList.remove('position-absolute')
        svgVideo.parentElement.parentElement.style.minHeight = '0px'
        svgVideo.classList.add('display-none')
        video.classList.remove('display-none')
        video.pause();
        blahVideo.src = URL.createObjectURL(file);
        video.load();

        videoLabel.style.display = 'contents'
      }
    }
    function emptyURL(input) {
      input.value=null;
      svgFoto.classList.remove('display-none')
      blah.classList.add('display-none')
      if(isVideo == true){
        video.pause();
        video.poster = ''
        video.load();
      }else{
        svgFoto.parentElement.parentElement.style.minHeight = '600px'
        svgFoto.parentElement.style.minHeight = '600px'
      }
    }
    function emptyURLVideo(input) {
      input.value=null;
      svgVideo.parentElement.classList.add('position-absolute')
      svgVideo.parentElement.parentElement.style.minHeight = '600px'
      svgVideo.classList.remove('display-none')
      video.classList.add('display-none')

      video.pause();
      blahVideo.src = '#';
      video.poster = '#';
      video.load();
      if (!video.classList.contains("display-none")) {
        video.classList.add('display-none')
        svgVideo.classList.remove('display-none')
        videoLabel.style.display = 'inline-block'
      }
    }
    function emptyInputImg(input){
      input.value=null; 
      input.parentElement.getElementsByTagName("img")[0].classList.add("display-none"); 
      input.parentElement.getElementsByTagName("svg")[0].classList.remove("display-none");
    }
    function fillImgInput(input) {
      const [file] = input.files
      if (file && file.type.includes('image')) {
        var id = input.id.replace('img-input', '')
        var svg = document.getElementById('inputPlaceholderSvg' + id)
        var blahImg = document.getElementById('blah' + id)
        blahImg.src = URL.createObjectURL(file)
        blahImg.classList.remove('display-none')
        if(!svg.classList.contains('display-none')){
          svg.classList.add('display-none')
        }
      }
    }
    function addImgInput(input) {
      var groupNumber = input.id.replace('addImgInput-', '')
      var figures = input.parentElement.getElementsByTagName('figure')
      var length = figures.length + 1
      var number = 1

      if (figures[figures.length - 1]) {
        lastId = figures[figures.length - 1].id
        lastId = lastId.replace('inputFigure-', '')
        lastId = lastId.replace(groupNumber, '')
        lastId = lastId.replace('-', '')
        number = +lastId + 1
      }

      if(length == 2){
        var classList = input.parentElement.getElementsByTagName('figure')[0].getElementsByTagName('i')[0].classList
        if(classList.contains('display-none')){
          classList.remove('display-none')
        }
      }
      if(length >= 10){
        input.classList.add('display-none')
      }

      var figure = document.createElement('figure');
      figure.setAttribute('class', 'col-md-6 position-relative');
      figure.setAttribute('id', 'inputFigure-' + groupNumber + '-'+ number);

      var label = document.createElement('label');
      label.setAttribute('class', 'imgInputLabel');

      var div=document.createElement("div");
      div.innerHTML= '<svg height="200px" class="m-auto z-3 pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 412.3"><circle class="lineal-fill" cx="316.6" cy="102.2" r="51.5"/><path class="lineal-stroke" d="M316.6 167.9c-36.3 0-65.7-29.4-65.7-65.7s29.4-65.7 65.7-65.7 65.7 29.4 65.7 65.7c0 36.3-29.4 65.7-65.7 65.7zm0-102.9c-20.6 0-37.2 16.7-37.2 37.2s16.7 37.2 37.2 37.2 37.2-16.7 37.2-37.2c0-20.5-16.6-37.2-37.2-37.2z"/><path class="lineal-fill" d="M319 397.1L192.9 164.3 38.3 397.1z"/><path class="lineal-stroke" d="M319 411.3H38.3c-7.9 0-14.2-6.4-14.2-14.2 0-2.8.8-5.5 2.4-7.9L181 156.4c4.3-6.5 13.2-8.3 19.7-4 1.9 1.3 3.5 3 4.6 5.1l126.2 232.8c3.7 6.9 1.2 15.5-5.7 19.3-2.1 1.1-4.4 1.7-6.8 1.7zM64.8 382.9h230.3l-103.5-191-126.8 191z"/><path class="lineal-fill" d="M473.7 397.1L347.6 243 221.4 397.1z"/><path class="lineal-stroke" d="M473.7 411.3H221.4c-7.9 0-14.2-6.4-14.2-14.2 0-3.3 1.1-6.5 3.2-9L336.6 234c5-6.1 13.9-7 20-2 .7.6 1.4 1.3 2 2l126.2 154.1c5 6.1 4.1 15-2 20-2.6 2.1-5.8 3.2-9.1 3.2zm-222.2-28.4h192.2l-96.1-117.4-96.1 117.4z"/><path class="lineal-stroke" d="M472.8 412.3H39.2C17.6 412.2 0 394.7 0 373.1V39.2C0 17.6 17.6 0 39.2 0h433.6C494.4 0 512 17.6 512 39.2v333.9c0 21.6-17.6 39.1-39.2 39.2zM39.2 28.5c-5.9 0-10.7 4.8-10.8 10.8v333.9c0 5.9 4.8 10.7 10.8 10.7h433.6c5.9 0 10.7-4.8 10.8-10.7v-334c0-5.9-4.8-10.7-10.8-10.8H39.2z"/><path class="lineal-stroke" d="M123.7 87.6H14.2c-7.9.2-14.4-6-14.6-13.8s6-14.4 13.8-14.6h110.3c7.9-.2 14.4 6 14.6 13.8.2 7.9-6 14.4-13.8 14.6h-.8zm-27 57.8H14.2C6.3 145.4 0 139 0 131.2c0-7.9 6.4-14.2 14.2-14.2h82.4c7.9 0 14.2 6.4 14.2 14.2.1 7.9-6.3 14.2-14.1 14.2z"/></svg>';
      svg=div.children[0];
      svg.setAttribute('id', 'inputPlaceholderSvg-' + groupNumber + '-'+ number);

      var img = document.createElement('img');
      img.setAttribute('id', 'blah-' + groupNumber + '-'+ number);
      img.setAttribute('src', '#');
      img.setAttribute('class', 'imgInputImg display-none');

      var imgInput = document.createElement('input');
      imgInput.setAttribute('id', 'img-input-' + groupNumber + '-'+ number);
      imgInput.setAttribute('name', 'blog[imgInput-' + groupNumber + '][]');
      imgInput.setAttribute('type', 'file');
      imgInput.setAttribute('class', 'display-none');
      imgInput.setAttribute('onchange', 'fillImgInput(this)');
      imgInput.setAttribute('onclick', 'emptyInputImg(this)');
      imgInput.setAttribute('accept', 'image/*');
      
      var i = document.createElement('i');
      i.setAttribute('onclick', 'removeImgInput(this);');
      i.setAttribute('class', 'uil uil-times-circle position-absolute top-0 right-0 h-fit pointer');
      i.setAttribute('style', 'font-size: xx-large;');
      figure.appendChild(i)

      figure.appendChild(label)
      label.appendChild(svg)
      label.appendChild(img)
      label.appendChild(imgInput)
      input.parentElement.insertBefore(figure, input);
    }
    function removeImgInput(input){
      var parent = input.parentElement
      var grandParent = parent.parentElement
      var figures = grandParent.getElementsByTagName('figure')
      var length = figures.length - 1
      parent.remove()
      if(length <= 1){
        figures[0].getElementsByTagName('i')[0].classList.add('display-none')
      }
      if(length == 9){
        var classList = grandParent.getElementsByClassName('imgAddButton')[0].classList
        if(classList.contains('display-none')){
          classList.remove('display-none')
        }
      }
    }
    function addTextInput(input) { 
      var groupNumber = input.id.replace('addTextInput-', '')
      var length = input.parentElement.children.length - 3
      var textareas = input.parentElement.getElementsByClassName('inputTextTextarea')
      var number = 1

      if(length == 2){
        var classList = input.parentElement.getElementsByClassName('inputTextTextarea')[0].getElementsByTagName('i')[0].classList
        if(classList.contains('display-none')){
          classList.remove('display-none')
        }
      }
      if(length >= 10){
        input.classList.add('display-none')
      }

      if (textareas[textareas.length - 1]) {
        lastId = textareas[textareas.length - 1].id
        lastId = lastId.replace('inputTextarea-', '')
        lastId = lastId.replace(groupNumber, '')
        lastId = lastId.replace('-', '')
        number = + lastId + 1
      }

      var div = document.createElement('div');
      div.setAttribute('id', 'inputTextarea-' + groupNumber + '-' + number);
      div.setAttribute('class', 'inputTextTextarea position-relative');

      var textarea = document.createElement('textarea');
      textarea.setAttribute('class', 'form-control p h-0-unimportant pe-10');
      textarea.setAttribute('placeholder', 'Tekst');
      textarea.setAttribute('name', 'blog[textInput-' + groupNumber + '][text]['+ number +']');
      textarea.setAttribute('required', 'true');
      div.appendChild(textarea)

      var i = document.createElement('i');
      i.setAttribute('onclick', 'removeTextInput(this)');
      i.setAttribute('class', 'uil uil-times-circle position-absolute top-0 bottom-0 my-auto h-fit pointer');
      i.setAttribute('style', 'right: 10px; font-size: x-large;');
      div.appendChild(i)
      
      input.parentElement.insertBefore(div, input);
      setTextareas()
    }
    function removeTextInput(input){
      var grandParent = input.parentElement.parentElement
      var textareas = grandParent.getElementsByClassName('inputTextTextarea')
      var length = textareas.length - 1
      input.parentElement.remove()
      if(length <= 1){
        textareas[0].getElementsByTagName('i')[0].classList.add('display-none')
      }
      if(length == 9){
        var classList = grandParent.getElementsByClassName('textAddButton')[0].classList
        if(classList.contains('display-none')){
          classList.remove('display-none')
        }
      }
    }
    var numberImg = 0
    function addImagesInput() {
      var blog = document.getElementById('blog');
      var imgElements = blog.getElementsByClassName('elementImages');
      numberImg = numberImg + 1;

      var newGroup = document.createElement('div');
      newGroup.setAttribute('class', 'elementImages row g-6 my-10 position-relative');

      var addButton = document.createElement('div');
      addButton.setAttribute('id', 'addImgInput-' + numberImg)
      addButton.setAttribute('onclick', 'addImgInput(this)')
      addButton.setAttribute('class', 'imgAddButton col-md-6 bg-soft-primary flex justify-content-center align-content-center flex-wrap h-20 pointer');

      var addButtonLogo = document.createElement('i');
      addButtonLogo.setAttribute('style', 'font-size: xxx-large;')
      addButtonLogo.setAttribute('class', 'uil uil-plus-circle')

      var removeButton = document.createElement('i');
      removeButton.setAttribute('onclick', 'removeBlockInput(this)')
      removeButton.setAttribute('style', 'font-size: xxx-large; top: -52px;')
      removeButton.setAttribute('class', 'uil uil-times position-absolute right-0 w-fit m-0 p-0 pointer')

      var invisibleInput = document.createElement('input');
      invisibleInput.setAttribute('name', 'blog[imgInput-' + numberImg + '][type]');
      invisibleInput.setAttribute('type', 'text');
      invisibleInput.setAttribute('class', 'display-none');
      invisibleInput.setAttribute('value', 'Fotos');

      addButton.appendChild(addButtonLogo);
      newGroup.appendChild(invisibleInput);
      newGroup.appendChild(addButton);
      newGroup.appendChild(removeButton);
      addImgInput(addButton);
      addImgInput(addButton);
      addImgInput(addButton);
      addImgInput(addButton);
      blog.appendChild(newGroup);
    }
    var numberSingleImg = 0
    function addSingleImgInput() {
      var blog = document.getElementById('blog');
      numberSingleImg = numberSingleImg + 1;

      var newGroup = document.createElement('div');
      newGroup.setAttribute('class', 'elementImgs fs-lg mb-8 mt-10 position-relative');

      var removeButton = document.createElement('i');
      removeButton.setAttribute('onclick', 'removeBlockInput(this)')
      removeButton.setAttribute('style', 'font-size: xxx-large; top: -52px;')
      removeButton.setAttribute('class', 'uil uil-times position-absolute right-0 w-fit m-0 p-0 pointer')

      var figure = document.createElement('figure');
      figure.setAttribute('class', 'position-relative rounded');
      figure.setAttribute('id', 'inputFigure-' + numberSingleImg);

      var label = document.createElement('label');
      label.setAttribute('class', 'singleImgInputLabel flex justify-content-center w-100');

      var div=document.createElement("div");
      div.innerHTML= '<svg height="200px" class="m-auto z-3 pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 412.3"><circle class="lineal-fill" cx="316.6" cy="102.2" r="51.5"/><path class="lineal-stroke" d="M316.6 167.9c-36.3 0-65.7-29.4-65.7-65.7s29.4-65.7 65.7-65.7 65.7 29.4 65.7 65.7c0 36.3-29.4 65.7-65.7 65.7zm0-102.9c-20.6 0-37.2 16.7-37.2 37.2s16.7 37.2 37.2 37.2 37.2-16.7 37.2-37.2c0-20.5-16.6-37.2-37.2-37.2z"/><path class="lineal-fill" d="M319 397.1L192.9 164.3 38.3 397.1z"/><path class="lineal-stroke" d="M319 411.3H38.3c-7.9 0-14.2-6.4-14.2-14.2 0-2.8.8-5.5 2.4-7.9L181 156.4c4.3-6.5 13.2-8.3 19.7-4 1.9 1.3 3.5 3 4.6 5.1l126.2 232.8c3.7 6.9 1.2 15.5-5.7 19.3-2.1 1.1-4.4 1.7-6.8 1.7zM64.8 382.9h230.3l-103.5-191-126.8 191z"/><path class="lineal-fill" d="M473.7 397.1L347.6 243 221.4 397.1z"/><path class="lineal-stroke" d="M473.7 411.3H221.4c-7.9 0-14.2-6.4-14.2-14.2 0-3.3 1.1-6.5 3.2-9L336.6 234c5-6.1 13.9-7 20-2 .7.6 1.4 1.3 2 2l126.2 154.1c5 6.1 4.1 15-2 20-2.6 2.1-5.8 3.2-9.1 3.2zm-222.2-28.4h192.2l-96.1-117.4-96.1 117.4z"/><path class="lineal-stroke" d="M472.8 412.3H39.2C17.6 412.2 0 394.7 0 373.1V39.2C0 17.6 17.6 0 39.2 0h433.6C494.4 0 512 17.6 512 39.2v333.9c0 21.6-17.6 39.1-39.2 39.2zM39.2 28.5c-5.9 0-10.7 4.8-10.8 10.8v333.9c0 5.9 4.8 10.7 10.8 10.7h433.6c5.9 0 10.7-4.8 10.8-10.7v-334c0-5.9-4.8-10.7-10.8-10.8H39.2z"/><path class="lineal-stroke" d="M123.7 87.6H14.2c-7.9.2-14.4-6-14.6-13.8s6-14.4 13.8-14.6h110.3c7.9-.2 14.4 6 14.6 13.8.2 7.9-6 14.4-13.8 14.6h-.8zm-27 57.8H14.2C6.3 145.4 0 139 0 131.2c0-7.9 6.4-14.2 14.2-14.2h82.4c7.9 0 14.2 6.4 14.2 14.2.1 7.9-6.3 14.2-14.1 14.2z"/></svg>';
      svg=div.children[0];
      svg.setAttribute('id', 'inputPlaceholderSvg-' + numberSingleImg);

      var img = document.createElement('img');
      img.setAttribute('id', 'blah-' + numberSingleImg);
      img.setAttribute('src', '#');
      img.setAttribute('class', 'singleImgInputImg display-none');

      var imgInput = document.createElement('input');
      imgInput.setAttribute('id', 'img-input-' + numberSingleImg);
      imgInput.setAttribute('name', 'blog[singleImgInput-' + numberSingleImg + ']');
      imgInput.setAttribute('type', 'file');
      imgInput.setAttribute('class', 'display-none');
      imgInput.setAttribute('onchange', 'fillImgInput(this)');
      imgInput.setAttribute('onclick', 'emptyInputImg(this)');
      imgInput.setAttribute('accept', 'image/*');

      var invisibleInput = document.createElement('input');
      invisibleInput.setAttribute('name', 'blog[singleImgInput-' + numberSingleImg + '][type]');
      invisibleInput.setAttribute('type', 'text');
      invisibleInput.setAttribute('class', 'display-none');
      invisibleInput.setAttribute('value', 'Foto');

      newGroup.appendChild(invisibleInput);
      newGroup.appendChild(removeButton);
      figure.appendChild(label)
      label.appendChild(svg)
      label.appendChild(img)
      label.appendChild(imgInput)
      newGroup.appendChild(figure)

      blog.appendChild(newGroup);
    }
    var numberText = 0
    function addTextBlockInput() {
      var blog = document.getElementById('blog');
      numberText = numberText + 1;

      var newGroup = document.createElement('div');
      newGroup.setAttribute('class', 'elementText position-relative mt-10');

      var input = document.createElement('input');
      input.setAttribute('name', 'blog[textInput-' + numberText + '][kop]');
      input.setAttribute('class', 'form-control h1 mb-4');
      input.setAttribute('type', 'text');
      input.setAttribute('placeholder', 'Kop');
      input.setAttribute('required', 'true');
      newGroup.appendChild(input);

      var addButton = document.createElement('div');
      addButton.setAttribute('onclick', 'addTextInput(this)')
      addButton.setAttribute('class', 'textAddButton bg-soft-primary flex justify-content-center align-content-center flex-wrap h-10 pointer');
      addButton.setAttribute('id', 'addTextInput-' + numberText)
      newGroup.appendChild(addButton);

      var addButtonLogo = document.createElement('i');
      addButtonLogo.setAttribute('style', 'font-size: xx-large;')
      addButtonLogo.setAttribute('class', 'uil uil-plus-circle') 
      addButton.appendChild(addButtonLogo);

      var removeButton = document.createElement('i');
      removeButton.setAttribute('onclick', 'removeBlockInput(this)')
      removeButton.setAttribute('style', 'font-size: xxx-large; top: -60px;')
      removeButton.setAttribute('class', 'uil uil-times position-absolute right-0 w-fit m-0 p-0 pointer')
      newGroup.appendChild(removeButton);

      var invisibleInput = document.createElement('input');
      invisibleInput.setAttribute('name', 'blog[textInput-' + numberText + '][type]');
      invisibleInput.setAttribute('type', 'text');
      invisibleInput.setAttribute('class', 'display-none');
      invisibleInput.setAttribute('value', 'Text');
      newGroup.appendChild(invisibleInput);

      addTextInput(addButton);
      addTextInput(addButton);

      blog.appendChild(newGroup);
      setTextareas()
    }
    function removeBlockInput(input) {
      input.parentElement.remove()
    }

    function submitForm(input) {
      if(input.headerType.checked == true){
        if(!input.headerVideo.value){
          sendErrorNotification.innerHTML = 'Vul een Video in';
          sendErrorNotification.classList.remove('display-none');
          return false;
        }
      }
      var blogElements = document.getElementById('blog').children;
      for (let i = 0; i < blogElements.length; i++) {
        var blogPart = blogElements[i];
        inputs = blogPart.getElementsByTagName('input');
        for (let j = 0; j < inputs.length; j++) {
          if(inputs[j].value == "Foto"){
            var figure = blogPart.getElementsByTagName('figure')[0];
            var files = figure.getElementsByTagName('input')[0].files
            if(!files || files.length == 0){
              sendErrorNotification.innerHTML = 'Vul alle Fotos in';
              sendErrorNotification.classList.remove('display-none');
              return false;
            }
          }
          if(inputs[j].value == "Fotos"){
            var figures = blogPart.getElementsByTagName('figure');
            for (let n = 0; n < figures.length; n++) {
              var files = figures[n].getElementsByTagName('input')[0].files
              if(!files || files.length == 0){
                sendErrorNotification.innerHTML = 'Vul alle Fotos in';
                sendErrorNotification.classList.remove('display-none');
                return false;
              }
            }
          }
        }
      }
    }
  </script>
</body>
</html>
