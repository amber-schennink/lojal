<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


?>



<div id="contact" class="container py-14 py-md-16 ">
  <div class="row">
    <div class="col-xl-10 mx-auto position-relative">
      <div class="position-absolute" style="bottom: 105%; z-index: 100; width: calc(100% - 30px);">
        <div id="succesAlert" class="alert alert-success alert-icon alert-dismissible fade display-none m-0" role="alert">
          <i class="uil uil-check-circle"></i> Formulier succesvol verstuurd
          <button type="button" class="btn-close" aria-label="Close" onclick="closeAlert(this)"></button> 
        </div>
        <div id="failedAlert" class="alert alert-danger alert-icon alert-dismissible fade display-none m-0" role="alert">
          <i class="uil uil-times-circle"></i> Er ging iets mis
          <button type="button" class="btn-close" aria-label="Close" onclick="closeAlert(this)"></button>
        </div>
      </div>
      <h2 class="display-4 mb-3">Kom in contact</h2>
      <div class="row gy-10 gx-lg-8 gx-xl-12">
        <div class="col-lg-8">
          <form class="contact-form needs-validation" method="post" action="#">
            <div class="messages"></div>
            <div class="row gx-4">
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_name" type="text" name="name" class="form-control" placeholder="Jane" autocomplete="given-name" required>
                  <label for="form_name">Voornaam *</label>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Vul alstublieft uw voornaam in.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Doe" autocomplete="family-name" required>
                  <label for="form_lastname">Achternaam *</label>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Vul alstublieft uw achternaam in.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" autocomplete="email" required>
                  <label for="form_email">Email *</label>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Vul alstublieft uw email adres in.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating mb-4">
                  <input id="form_telefoonnr" type="tel" name="telefoonnr" class="form-control" placeholder="06 12345678" autocomplete="tel">
                  <label for="form_telefoonnr">Telefoonnr.</label>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-floating mb-4">
                  <input id="form_regio" type="text" name="regio" placeholder=" " class="form-control">
                  <label for="form_regio">Regio</label>
                </div>
              </div>
              <div id="contactOptions" class="col-md-12">
                <div class="form-select-wrapper mb-4">
                  <select class="form-select" id="form-select" name="onderwerp" onchange="optionOverig(this.value)" required>
                    <option selected disabled value="">Onderwerp *</option>
                    <option value="Wonen">Wonen</option>
                    <option value="AmbulanteZorg">Ambulante zorg</option>
                    <option value="Dagbesteding">Dagbesteding</option>
                    <option value="Behandeling">Behandeling</option>
                    <option value="Overig">Overig</option>
                  </select>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Selecteer alstublieft een Onderwerp.
                  </div>
                </div>
              </div>
              <div id="contactOverig" class="col-md-6 d-none">
                <div class="form-floating mb-4">
                  <input id="form_overig" type="text" name="overig" placeholder=" " class="form-control">
                  <label for="form_overig">Onderwerp *</label>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Vul alstublieft een onderwerp in.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating mb-4">
                  <textarea id="form_message" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                  <label for="form_message">Bericht *</label>
                  <div class="valid-feedback">
                    Goed!
                  </div>
                  <div class="invalid-feedback">
                    Vul alstublieft uw bericht in.
                  </div>
                </div>
              </div>
              <div class="col-12">
                <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Verstuur bericht">
                <p class="text-muted"><strong>*</strong> Deze velden zijn verplicht.</p>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">Adres</h5>
              <address>Stichting Woonzorg Lojal <br> Postbus 123 <br> postcode plaats</address>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">Telefoonnummer</h5>
              <p>12345678</p>
            </div>
          </div>
          <div class="d-flex flex-row">
            <div>
              <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
            </div>
            <div>
              <h5 class="mb-1">E-mail</h5>
              <p class="mb-0"><a href="mailto:mail@mail.com" class="text-body">mail@mail.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var overigSelected = false
  var contactOptions = document.getElementById('contactOptions');
  var contactOverig = document.getElementById('contactOverig');
  var contactOverigInput = contactOverig.getElementsByTagName('input')[0];
  function optionOverig(value){
    if(value == "Overig"){
      contactOptions.classList.remove('col-md-12');
      contactOptions.classList.add('col-md-6');
      contactOverig.classList.remove('d-none');
      contactOverigInput.required = true;
      contactOverigInput.focus();
      overigSelected = true;
    }else if(overigSelected == true){
      contactOptions.classList.add('col-md-12');
      contactOptions.classList.remove('col-md-6');
      contactOverig.classList.add('d-none');
      contactOverigInput.required = false;
      overigSelected = false;
    }
  }
  function showAlert(elementName){
    var element = document.getElementById(elementName);
    element.classList.remove('display-none');
    element.classList.add('show'); 
  }
  function closeAlert(element){
    element.parentElement.classList.remove('show'); 
    setTimeout(() => {
      element.parentElement.classList.add('display-none');
    }, 1000)
  }
</script>
<?php 


if('POST' === $_SERVER['REQUEST_METHOD']){
  $voornaam = htmlspecialchars($_POST['name']);
  $achternaam = htmlspecialchars($_POST['surname']);
  $email = htmlspecialchars(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
  $telefoonNummer = htmlspecialchars($_POST['telefoonnr']);
  $regio = htmlspecialchars($_POST['regio']);
  $onderwerp = htmlspecialchars($_POST['onderwerp']);
  $overig = htmlspecialchars($_POST['overig']);
  $bericht = htmlspecialchars($_POST['message']);
    
  if($telefoonNummer){
    $telefoonNummer = "telefoonnummer: <b>$telefoonNummer</b><br>";
  }
  if($regio){
    $regio = "regio: <b>$regio</b><br>";
  }
  if($onderwerp == "Overig"){
    $onderwerp = $overig;
  }
    
  if($email){
    $mail = new PHPMailer(false);
    $mailLojal = new PHPMailer(false);
    try {
      $mail->isSMTP();
      $mailLojal->isSMTP();
      $mail->Host = $mailLojal->Host = 'mail@mail.com';
      $mail->SMTPAuth   = $mailLojal->SMTPAuth   = true;
      $mail->Username = $mailLojal->Username = 'mail@mail.com';
      $mail->Password = $mailLojal->Password = 'password';
      $mail->SMTPSecure = $mailLojal->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = $mailLojal->Port       = 000;
      $mail->isHTML(true);
      $mailLojal->isHTML(true);

      $mail->setFrom('mail@mail.com', 'Lojal');
      $mail->addAddress($email, $voornaam . ' ' . $achternaam);
      $mail->Subject = 'Contact formulier';

      $mailLojal->setFrom('mail@mail.com', 'Contact formulier');
      $mailLojal->addAddress('mail@mail.com', 'Lojal');
      $mailLojal->Subject = 'Contact formulier ' . ucfirst($onderwerp);
      
      include 'bericht-html-responsive.php';
      $mail->Body    = $berichtHtmlResponsive;
      include 'bericht-html-responsive-lojal.php';
      $mailLojal->Body    = $berichtHtmlResponsiveLojal;
            
      include 'bericht.php';
      $mail->AltBody = $berichtResponsive;
      $mailLojal->AltBody = $berichtResponsive;

      // throw new Exception;
      
      $mail->send();
      $mailLojal->send();
      echo '<script type="text/javascript">',
     'showAlert("succesAlert");',
     '</script>';
    } catch (Exception $e) {
      echo 'Mail could not be sent';
      echo '<script type="text/javascript">',
     'showAlert("failedAlert");',
     '</script>';
      // exit;
    }
  }
}

?>