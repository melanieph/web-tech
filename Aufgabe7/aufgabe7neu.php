<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Aufgabe7</title>
    
    
</head>
<body>
<div class="container">
    <h1>Anmeldung</h1>

    <?php
        if($_POST){

        

        $vorname=filter_var($_POST['vorname'], FILTER_SANITIZE_STRING);
        $nachname=filter_var($_POST['nachname'], FILTER_SANITIZE_STRING);
        $email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $studiengang=filter_var($_POST['studiengang'], FILTER_SANITIZE_STRING);

        $fehler=false;

        if(!$vorname || !$nachname || !$email || !$studiengang) $fehler=true;
        

            if(!$fehler)
                {   
                    echo "<h1>Anmeldung</h1>";
                    echo    "<p> Herzlichen Dank" . $vorname ." " . $nachname . " vom Studiengang " . $studiengang . "!
                    Wir haben eine Bestätigung Ihrer Anmeldung an die Email-Adresse ". $email . "versendet. <br />" .
                    "<a href='.aufgabe7neu.php'>Zurück</a></p>";
                }
        

   
    }
    if(($_POST && $fehler) || empty($_POST)) :
        
?>

    <div class="row">
    <div class="col-md-6">
        <form action="aufgabe7neu.php" method="POST">
            <div class="form-group row" >
                <label for="vorname" class="col-3">Vorname: </label>
                <input type="text" class="form-control is-invalid" id="vorname" placeholder="Bitte Vornamen eintragen" aria-descibedby="inputGroupPrepend3" required>
                <div class ="invalid-feedback">Bitte Namen eintragen.</div>
            </div>

            <div class="form-group">
                <label for="nachname" class="control-label"> Nachname: </label>
                <input type="text" class="form-control" id ="nachname"placeholder="Bitte Nachnamen eintragen"/> <br />
            </div>

             <div class="form-group">
                <label for="email" class="control-label"> Email: </label>
                <input type="email" class="form-control" id="email" placeholder="Bitte Email eintragen"/> <br />
            </div>
            
            <div class="form-group">
            <label for="studiengang" class="control-label">Studiengang: </label>
            <select name="studiengang"class="form-control" placeholder="Bitte auswählen"> <br />
                <option value="fiw">Informatik und Wirtschaft</option>
                <option value="ai">Angewandte Informatik</option> 
            </select> 
            </div>

            
            <div class="form-group">
                <label for="paswort" class="control-label"> Passwort: </label>
                <input type="text" class="form-control" id="passwort" placeholder="Bitte Passwort eintragen"/> <br />
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Anmelden</button>
            </div>
        </form>
        
    </div>
    </div>

    </div>
    <?php
      endif;
     ?>
</div>


    
</body>
</html>