<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Aufgabe 7</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<form action="register.php" method="post">
    <label for="vorname">Vorname: </label>
    <input type="text" name="vorname"placeholder="Vorname" class="form control col-9">

    <label for="nachname">Nachname: </label>
    <input type="text" name="nachname" placeholder="Nachname" class="form control col-9">

    <label for="email">Email: </label>
    <input type="email" name="email" placeholder="Email" class="form control col-9">

    <!-- STUDIENGANG AUSWAHLLISTE -->
    <label>Studiengang:
        <select name="studiengang">
            <option value="AI">Angewandte Informatik</option>
            <option value="UI">Umwelt Informatik</option>
            <option value="FIW">Informatik und Wirtschaft</option>
            <option value="WI">Wirtschaftsinformatik</option>
            <option value="MI">Medien Informatik</option>
        </select>

    <!--  PASSWORT -->
    <label for="pwd" class="col-3"> Passwort: </label>
    <input type="password" name="pwd" placeholder="Passwort" autocomplet="new-password" class="form control col-9">

    <button type="submit"> Anmelden</button>

</form>
</head>
<body>  
    <p> Vorname : <?php echo $_POST["vorname"];?> </p>
    <p> Nachname : <?php echo $_POST["nachname"];?> </p>
    <p> Email: : <?php echo $_POST["email"];?> </p>
    <p> Studiegang : <?php echo $_POST["studiemgang"];?> </p>
    <p> Passwort : <?php echo $_POST["passwd"];?> </p>

    <?php 

    $vorname= $_POST["vorname"];
    $1= filter_var($vorname, FILTER_SANITIZE_STRING)
    if()
    
    ?>
    
</body>
</html>



















<?php



if($_POST)
{

    $vorname = filter_var($_POST["vorname"], FILTER_SANITIZE_STRING);
    $nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_STRING);
    $nachname = filter_var($_POST["nachname"], FILTER_SANITIZE_EMAIL);
    $studiengang = filter_var($_POST["studiengang"], FILTER_SANITIZE_STRING);

    $fail = false;

    if ( !$vorname ||  !$nachname || !$email || !$studiengang ) $fail = true;

    if(!$fail) 
   {
       echo "<p> Herzlichen Dank " . $vorname . $nachname . " vom Studiengang " . $studiengang . "!<br>
       Wir haben eine Email an" . $email . " gesendet. </br>
       </p>"
       ;
   } 

}
   

    if(($_POST && $fail) || empty($_POST)) :

?>

