<?php
require __DIR__.'/../../Pageabsencem.php';

function affichieretudiant($username)
{
    $tab_abs = getétudiant($username);



    return  $tab_abs;

   // require __DIR__.'/../../../resources/views/Consulterabsences.php';
}
