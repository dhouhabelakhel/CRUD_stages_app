<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'un étudiant</title>
</head>
<body>
@include('adminNavbar')
    <h1>Création d'un étudiant</h1>
    <form action="{{ route('add') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="NCE">NCE :</label>
            <input type="text" id="NCE" name="NCE">
        </div>
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div>
            <label for="classe">Classe :</label>
            <input type="text" id="classe" name="classe">
        </div>
        <div>
            <input type="submit" value="Ajouter">
        </div>
    </form>
</body>
</html>
