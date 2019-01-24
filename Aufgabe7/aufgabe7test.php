<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <title>Aufgabe 7</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>


<style>
body    
{
    font-size:1rem;
    font-family: 'Times New Roman', sans-serif;
}

</style>


<?php
    if($_POST)

    {

        $vorname = filter_var($vorname, FILTER_SANITIZE_EMAIL);
        $nachname = filter_var($nachname, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $studiengang = filter_var($studiengang, FILTER_SANITIZE_EMAIL);
        $passwort = filter_var($vpasswort, FILTER_SANITIZE_EMAIL);

        $fehler=false;


        if(!$vorname || !$nachname || !$email || !$studiengang || !$passwort) $fehler=true;
    
          if(!fehler)  
          
          {
            echo  "<p> Herzlichen Dank ".$vorname. " ".$nachname." vom Studiengang ".$studiengang."!<br/>
            Wir haben eine Email an ".$email." gesendet. <br/>
            <a href='./aufgabe7.php'>Zurück</a>
            </p>";
          }

        
    }
            if(($_POST && $fehler) || empty($_POST)) :
            
    
?>



<h1>Anmeldung</h1>
    <div class="container mt-2">
    <div class="row">
    <div class="col-md-4 offset-md-4">
    <div class="card card-body">
        <form action="./aufgabe7test.php" method="post" class="form-horizontal" autocomplete="off">



<?php
    if(!$vorname)
    {
        echo "<input type= 'text' name='vorname' placeholder='Vorname' class= 'form control col-9 is-invalid'>
        <div class= 'invalid-feedback'>
        Bitte Vorname eintragen!
        </div>
        ";
    }

        else if(!$nachname)
        
        {
            echo "<input type='text' name='nachname' placeholder='Nachname' class='form control col-9 is invalid'>
            <div class='invalid-feedback'>
            Bitte Nachnamen eintragen!
            </div>
            ";

        }

         else if(!$email)
            {
                echo "<input type='text' name='email' placeholder='Email' class='form control col-9 is invalid'>
                <div class='invalid-feedback'>
                Bitte Email eintragen!
                </div>
                ";
            }

            else if(!$studiengang)
            {
                echo "<input type='text' name='studiengang' placeholder='Studiengang' class='form control col-9 is invalid'>
                <div class='invalid-feedback'>
                Bitte Studiengang eintragen!
                </div>
                ";
            }

                else if(!$passwort)
                {
                    echo "<input type='text' name='passwort' placeholder='Passwort' class='form control col-9 is invalid'>
                    <div class='invalid-feedback'>
                    Bitte Passwort eintragen!
                    </div>
                    ";
                }
?>

            <div class="form-group">
                <label for="vorname" > Vorname : </label>
                <input type="text" name="vorname"placeholder="Vorname" class="form control col-9">
            </div>

            <div class="form-group">
                <label for="nachname" > Nachname : </label>
                <input type="text" name="nachname" placeholder="nachname" class="form control col-9">
            </div>

            <div class="form-group">
                <label for="email" > Email: </label>
                <input type="email" name="email" placeholder="Email" class="form control col-9">
            </div>


            <div class="form-group">
                <label for="studiengang" > Studiengang : </label>
                    <select name="studiengang">
                        <option value="AI">Angewandte Informatik</option>
                        <option value="UI">Umwelt Informatik</option>
                        <option value="FIW">Informatik und Wirtschaft</option>
                        <option value="WI">Wirtschaftsinformatik</option>
                        <option value="MI">Medien Informatik</option>
                    </select>
            </div>
    

            <div class="form-group" >
                <label for="pwd"> Passwort: </label>
                <input type="password" name="pwd" placeholder="Passwort" autocomplet="new-password" class="form control col-9">
            </div>

            <div class="form-group>
                <button for="submit"> Anmelden </button>
            </div>

            <?php
         endif;
            ?>

</body>

</html>