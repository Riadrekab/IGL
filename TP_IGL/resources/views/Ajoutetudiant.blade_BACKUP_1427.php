<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Ajouter</title>
    
</head>
<body>
<<<<<<< HEAD
<h1>Ajouter etudiant</h1>
<form method="POST" action="http://localhost/IGL/TP_IGL/public/index.php/ajouter_etudiant" accept-charset="UTF-8">
    {{csrf_field()}}
    <label for="matricule">Matricule: </label>
    <input name="matricule" type="text" id="matricule">
    <label for="nom">Nom: </label>
    <input name="nom" type="text" id="nom">
    <label for="prenom">Prenom: </label>
    <input name="prenom" type="text" id="prenom">
    <label for="NomUtil">Nom d'utilisateur: </label>
    <input name="NomUtil" type="text" id="NomUtil">
    <label for="Mdp">Mot de passe: </label>
    <input name="Mdp" type="text" id="Mdp">
    <input type="submit" value="Envoyer !">
</form>
</body>
=======

<div id="app" class="container">
        <form method="POST" action="http://localhost/IGL/TP_IGL/public/index.php/ajouter_etudiant" accept-charset="UTF-8">
        <legend><span class="titre"></span>Ajouter Etudiant</legend>
        <hr>
        <fieldset>
                <label for="matricule">Matricule: </label>
                <input name="matricule" type="text" id="matricule" placeholder="Matricule*">
                <label for="nom">Nom: </label>
                <input name="nom" type="text" id="nom" placeholder="Nom*">
                <label for="prenom">Prenom: </label>
                <input name="prenom" type="text" id="prenom" placeholder="Prenom*"> 
              
                
        </fieldset>
        <input type="submit"/>
        </form>
        </div></body>
<script src="{{ asset('js/app.js') }}"></script>
>>>>>>> df60be5844f0b0cd96a82dc5d82fd8f3d1690f71
</html>
