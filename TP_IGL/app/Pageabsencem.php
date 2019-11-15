<?php
function getétudiant()
{
    $bdd = new PDO('mysql:host=localhost;dbname=scolaritébdd;charset=utf8', 'root', '');
    $etudiants_req= $bdd->query('SELECT * FROM etudiants');
    $etudiants=$etudiants_req->fetchAll();
    return  $etudiants;
}
