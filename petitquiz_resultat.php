<?php
session_start(); 
if (isset($_SESSION['token']) && $_SESSION['token'] == true) :
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jeux.css" />
    <title>Document</title>
    <style>
        * {
            background-color: antiquewhite;
            box-sizing: border-box;
        }
        body {
            margin: 30px;
            text-align: center;
            font-family: Arial;
            background-color: #eee;
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
        }.time {
            text-align: right;
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

    <div id="page-wrap">
 
    <h1>Résultat :</h1>
 
        <?php
            
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            
            $totalCorrect = 0;
            
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "B") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
 
 </div>

</body>
</html>
<?php
else :
    header("Location: Login.php");
    exit;
endif;
?>
