<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title> Aufgabe 5 </title>


    <?php
      function zufzahl($max, $anzahl, $stellenn){
        echo "<table>";
        echo "<thead><th>Zufallszahlen</th><th>erste Stelle</th><th>ersten 2 Stellen</th><th>ersten 3 Stellen</th><th>ersten 4 Stellen</th></thead>";
        echo "<tbody>";

        for ($i=1; $i<=$anzahl ; $i++) {

            $zzahl = rand(1,$max);
            $gerundet1 = abschneiden($zzahl,$stellenn);
            $gerundet2 = abschneiden($zzahl,$stellenn-1);
            $gerundet3 = abschneiden($zzahl,$stellenn-2);
            $gerundet4 = abschneiden($zzahl,$stellenn-3);
            echo "<tr><td>$zzahl</td><td>$gerundet1</td><td>$gerundet2</td><td>$gerundet3</td><td>$gerundet4</td></tr><br/>";
        }
         echo "</tbody></table>";
      }

      function abschneiden($zahl,$stellen=2){
            $base = pow(10,$stellen);
            return $zahl - ($zahl % $base);
      }
       ?>

       <style>

       body{
         background-color: #0489B1;
       }


       h1 {
         text-align: center;
         font-size: 50px;
         font-style:
       }

       header {
         background-color: #81BEF7
       }

       table {
         width: 80%;
         margin: auto;
       }

       table, th, td{
         border: 1px solid black;
         text-align: center;
         font-size: 20px;
       }

       th {
         background-color: #81BEF7;
       }

       td {
         background-color: #81BEF7;
       }

       footer {
         text-align: center;
         background-color: #D8D8D8;

       }

       </style>


   </head>
   <header>
     <div class="container">
     <h1> Zufallszahlen</h1>
   </div>
   </header>
   <body>
      <div class="container">
        <?php zufzahl(20000, 20, 4); ?>
      </div>

   </body><br>
    <footer> Melanie Hoffmann</footer>
    </html>