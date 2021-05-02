<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page sécurisée</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            text-align: center;
            font-family: Arial;
            background-color: #eee;
        }
        form {
            background-color: #fff;
            width: max-content;
            padding: 25px;
            margin: 45px auto;
            box-shadow: 5px 5px 15px black;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php

    if (isset($_POST['login']) && isset($_POST['password']) ) && 
        ($_POST['login'] == 'toto123' && $_POST['password'] == 'goku123' ):
        ?>
        
        <h1>Bienvenue sur mon site</h1>
        <p>Vous avez bien été connecté</p>
            
        <?php

    else : 
        echo "Vous n'avez pas réussi à vous connecter"
        ?>

        <h1>Page protégée</h1>

        <form method="post" action="motDePasse.php">
            <label for="pseudo">Pseudo :</label><br />
            <input type="text" id="pseudo" name="pseudo"><br />
            <label for="motDePasse">Mot de passe :</label><br />
            <input type="motDePasse" id="motDePasse" name="motDePasse"><br />
            <input type="submit" value="Entrer">
        </form>

        <?php
    endif;
    ?>  
</body>

</html>
