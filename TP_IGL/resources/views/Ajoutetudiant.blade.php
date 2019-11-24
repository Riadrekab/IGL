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
</html>
