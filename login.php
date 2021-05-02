<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Connectez sur mon site</h1>

    <form method="post" action="Validation.php">
        <label for="pseudo">Pseudo :</label><br />
        <input type="text" id="login" name="login"><br />
        <label for="motDePasse">Mot de passe :</label><br />
        <input type="motDePasse" id="motDePasse" name="motDepasse"><br />
        <input type="submit" value="Entrer">
    </form>
</body>
</html>
