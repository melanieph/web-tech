<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <title> Aufgabe 5 </title>


    <?php function zufzahl ($max, $anzahl, $stellen=5)
    {   
        
        echo "<table class='table table-bordered'>";
        echo "<tbody>";
        for($i=0; $i<=$stellen; $i++)
        {
            $zzahl = rand(1, $max);
            $gerundet1 = abschneiden($zzahl,$stellen);
            $gerundet2= abschneiden($zzahl,$stellen-1);
            $gerundet3=abschneiden($zzahl,stellen-2);

            echo "<tr><td>$zzahl</tr></td> <tr><td>$gerundet1</tr></td><tr><td>$gerundet2</tr></td> <tr><td>$gerundet3</tr></td>  <br/>";
        }
        echo "</tbody></table>";
    ?>
    <?php
        function abschneiden ($zahl, $stellen=2)
        {
            echo "<table class='table table-bordered'>";
            echo "<tbody>";
            $base = pow(10, $stellen);
            return $zahl - ($zahl % base);
        }
    }
    echo "</tbody></table>";
    ?>


    <style>
        body{
         background-color: #f1fcff
       }


       h1 {
         text-align: center;
         font-size: 50px;
         font-style:
       }

       header {
         background-color: #FFAEB9;
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
         background-color: #f7e2ff;
       }

       td {
         background-color: #C0C0C0;
       }

       footer {
         text-align: center;
         font-family: cursive;
         background-color: #CD8C95;

       }




    </style>
    </head>
    <body>
    <h1>Zufallszahlen</h1>
    <div>
        <?php zufzahl(20000, 20); ?>
    </div>
    </body>

    <footer> <i>Melanie Hoffmann</i></footer>
</html>
