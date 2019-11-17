<?php
require __DIR__.'/../../Pageabsencem.php';
function affichieretudiant()
{
  //  $etudiants = getétudiant();
      $tab_abs=getétudiant();
    require __DIR__.'/../../../resources/views/home.blade.php';
}
