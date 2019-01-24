<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Titel</title>
  </head>
  <body>
    <form data-toggle="validator"role="form">
      <div class="container">

      <?php
      if($_POST)
      {
          $vorname= filter_var($POST['vorname'], FILTER_SANITIZE_STRING);
          $nachname= filter_var($POST['nachname'], FILTER_SANITIZE_STRING);
          $email= filter_var($POST['email'], FILTER_SANITIZE_STRING);
          $studiengang= filter_var($POST['studiengang'], FILTER_SANITIZE_STRING);

          $fehler=false;

        if(!$vorname || !$nachname || !$email || !$studiengang) $fehler =true;
        if(!$fehler)
        {
          echo "<p> Herzlichen Dank" . $vorname . $nachname . " vom Studiengang "
          . $studiengang . "!</br>
          Wir haben eine Email am " . $email . "gesendet. </br>
          <a href='.aufgabe7final.php'>Zurück</a>
          </p>
          ";
        }
      }
      if(($_POST && $fehler) || empty ($_POST)) :
       ?>

       <h1> Anmeldung</h1>
       <form action=".aufgabe7final.php" method="post" class="form-horizontal" autocomplete="off">
         <div class="form-group row">
           <label for="vorname" class="col-3">Vorname:</label>

      <?php
      if(isset($vorname) && !$vorname)
      {
        echo "<input type="'text' name='vorname' placeholder='Vorname' class="form control col-9 is-invalid'>
        <div class='invalid-feedback'> Bitte Vorname eintragen!
        </div>
        ";
      }

      if(isset($nachname) && !$nachname)
      {
        echo "<input type="'text' name='nachname' placeholder='Nachname' class="form control col-9 is-invalid'>
        <div class='invalid-feedback'> Bitte Nachname eintragen!
        </div>
        ";
      }
      if(isset($email) && !$email)
      {
        echo "<input type="'text' name='email' placeholder='Email' class="form control col-9 is-invalid'>
        <div class='invalid-feedback'> Bitte Email eintragen!
        </div>
        ";
      }

      if(isset($studiengang) && !$studiengang)
      {
        echo "<input type="'text' name='studiengang' placeholder='Studiengang' class="form control col-9 is-invalid'>
        <div class='invalid-feedback'> Bitte Studiengangn eintragen!
        </div>
        ";
      }
      ?>


      </div>

    </form>

</body>
</html>
