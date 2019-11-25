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
  echo "<th>Module</th>";
  echo "<th>Date</th>";
  echo "<th>Justifié</th>";
  echo "</tr>";

  foreach ($tab_abs as $etudiant)
  {
      echo "<tr>";

      echo "<td>".$etudiant->getMatricule()."</td>";
      echo "<td>".$etudiant->getModule()."</td>";
      echo "<td>".$etudiant->getDate()."</td>";
     // echo "<td>".$etudiant->getJustifie()."</td>";
      if ($etudiant->getJustifie()=='1')
      {
          echo  "<td> <input type='checkbox' checked id='Chx_abs' onclick='return false;'></td>";
      }
      else
      {
       echo  "<td> <input type='checkbox'   id='Chx_abs' onclick='return false;'></td>";
      }


      echo "</tr>";

  }
  echo "</table>";
  echo 'yo';
  ?>

    </body>
</html>
