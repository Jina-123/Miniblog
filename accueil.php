<?php
session_start(); 
if (isset($_SESSION['token']) && $_SESSION['token'] == true) :
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=4, initial-scale=1.0">
    <title>Page d'accueil</title>
    <style>
        * {
            background-color: antiquewhite;
            box-sizing: border-box;
        }
        body {
            margin: 35px;
        }
        a {
            padding: 15px 40px;
            text-decoration: none;
            font-family: Footlight MT;
            color: white;
            background-color: pink;
            margin: 20px;
            border: 1px solid black;
            transition: 0.5s;
        }
        a:hover {
            background-color: transparent;
            color: black;
        }
        .Box {
            text-align: center;
            background-color: darkred;
            object-fit: none;
        }
        .cat {
            margin: 30px;
        }
        #table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 35%;
        }

        #table td, #table th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #table tr:nth-child(even){background-color: #f2f2f2;}

        #table tr:hover {background-color: #ddd;}

        #table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
        }
        ul {
            font-size: 1.5em;
        }
        .time {
            text-align: right;
        }
    </style>
</head>
<body>
    <a href="#cat"><img src="https://i.pinimg.com/originals/b6/fd/1b/b6fd1bf0d92d849b9007d160c4e7497f.jpg" alt="Cat photo" width="200px" height="100px">
    <div class="Box">
        <a href="accueil.php">Accueil</a>
        <a href="journal.php">Journal</a>
        <a href="photos.php">Photos</a>
        <a href="Jeux.php">Jeux</a>
        <a href="question.php">Q/A</a>
        <a href="login.php">Se connecter</a>
    </div>
    
    <div class="time">
    <?php 
    echo "Today is " . date("d-m-Y") . "<br>";
    echo "Today is " . date("l");
    ?>
    </div>
        
    <div class="cat">
    <img src="https://i.ytimg.com/vi/jHWKtQHXVJg/maxresdefault.jpg" alt="Cataussi" width="500" height="280">
    <img src="https://api.time.com/wp-content/uploads/2015/02/cats.jpg?quality=85&w=1024&h=512&crop=1" alt="CATCAT" width="500" height="280">
    <img src="https://imgscf.slidemembers.com/docs/1/1/275/cat_presentation_powerpoint_templates_design_274007.jpg" alt="Cat photo" width="500">
    </div>
    <h2>Je me présente !</h2>
    <table id="table">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Lieu de naissance</th>
        </tr>
        <tr>
            <td>Yang</td>
            <td>Luna</td>
            <td>3 ans et demi</td>
            <td>France</td>
        </tr>
    </table>

    <ul><strong>Ce que j'aime c'est :</strong>
        <li>BARF</li>
        <li>Fraise</li>
        <li>FRISKIES Chat</li>
        <li>Les croquettes</li>
    </ul>
</body>
</html>
<?php
else :
    header("Location: Login.php");
    exit;
endif;
?>
