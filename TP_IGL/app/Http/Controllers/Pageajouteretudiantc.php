<?php
require __DIR__.'/../../Pageajouteretudiantm.php';
function Ajouteretudiant()
{
    $ok=AjoutEtuP();
    require __DIR__.'/../../../resources/views/Ajoutetudiant.blade.php';
}
