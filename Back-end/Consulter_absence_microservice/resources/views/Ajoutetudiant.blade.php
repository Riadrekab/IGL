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

<div id="app" class="container">
        <form method="POST" action="http://localhost/IGL/TP_IGL/public/index.php/ajouter_etudiant" accept-charset="UTF-8">
            {{csrf_field()}}
        <legend><span class="titre"></span>Ajouter Etudiant</legend>
        <hr>
        <fieldset>
                <label for="matricule">Matricule: </label>
                <input name="matricule" v-model="matricule" @input="slash" type="text" id="matricule" placeholder="Matricule*" required>
                <label for="nom">Nom: </label>
                <input name="nom" type="text" id="nom" placeholder="Nom*" required>
                <label for="prenom">Prenom: </label>
                <input name="prenom" type="text" id="prenom" placeholder="Prenom*" required>
            <label for="NomUtil">Nom d'utilisateur: </label>
            <input name="NomUtil" type="text" id="NomUtil" placeholder="Nom d'utilisateur">
            <label for="Mdp">Mot de passe: </label>
            <input name="Mdp" type="password" id="Mdp" placeholder="Mot de passes">
        </fieldset>
        <input type="submit"/>
        </form>
        </div></body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
