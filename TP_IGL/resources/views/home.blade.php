<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

    </head>
    <body>
   <h1>Home page test</h1>
  Var1:{{$test1}}
  Var2:{{$test2}}
  <?php
  //include ('Views');
//require('app/Pageabsencem.php');

  echo "<table border=1>";
  echo  "<tr>";
  echo "<th>Matricule</th>";
  echo "<th>Nom</th>";
  echo "<th>Prénom</th>";
  echo "<th>Abs</th>";
  echo "</tr>";
  foreach ($tab_abs as $etudiant)
  {
      echo "<tr>";
      echo  "<td>".$etudiant['Matricule']."</td>" ;
    //  echo  "<td>".$etudiant['NomEtud']."</td>" ;
     // echo  "<td>".$etudiant['Prenoms']."</td>" ;
     // echo  "<td> <input type='checkbox' id='Chx_abs'></td>";
      echo "</tr>";

  }
  echo "</table>";
  echo 'yo';
  ?>

    </body>
</html>
