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
            padding: 16px 90px;
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
 
    <h1>Petit Quiz !</h1>
 
    <form action="result.php" method="post" id="quiz">
 
    <ol>
            
    <li>
                
    <h3>Que signifie l’expression :  « Tenter le coup » ?</h3>
                    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
        <label for="question-1-answers-A">A) Abandonner </label>
    </div>
                    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
        <label for="question-1-answers-B">B) Boire un verre</label>
    </div>
                    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
        <label for="question-1-answers-C">C) Essayer</label>
    </div>
                    
    <div>
        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
        <label for="question-1-answers-D">D) Aider une personne</label>
    </div>
                
    </li>
                
    <li>
                
    <h3>… de te plaindre !</h3>
                    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
        <label for="question-2-answers-A">A) Arrête</label>
    </div>
                    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
        <label for="question-2-answers-B">B) Arrêtes</label>
    </div>
                    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
        <label for="question-2-answers-C">C) Arrêt</label>
    </div>
                    
    <div>
        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
        <label for="question-2-answers-D">D) arrêts</label>
    </div>
                
    </li>
                
    <li>
                
        <h3>À quel temps est la forme : “Je courrais” ?</h3>
                    
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
            <label for="question-3-answers-A">A) Imparfait</label>
        </div>
                    
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
            <label for="question-3-answers-B">B) Conditionnel</label>
        </div>
                    
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
            <label for="question-3-answers-C">C) Future</label>
        </div>
                    
        <div>
            <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
            <label for="question-3-answers-D">D) Subjonctif</label>
        </div>
                
        </li>
                
        <li>
                
            <h3>Quelle forme est correcte ?</h3>
                    
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
            <label for="question-4-answers-A">A) J'envoierai</label>
        </div>
                    
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
            <label for="question-4-answers-B">B) J'enverrai</label>
        </div>
                    
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
            <label for="question-4-answers-C">C) J'enverai</label>
        </div>
                    
        <div>
            <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
            <label for="question-4-answers-D">D) J'envoyerai</label>
        </div>
                
        </li>
                
        <li>
                
        <h3>Quelle est la mauvaise réponse ?</h3>
                    
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
            <label for="question-5-answers-A">A) Elles se sont disputées</label>
        </div>
                    
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
            <label for="question-5-answers-B">B) Elles se sont photographié</label>
        </div>
                
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
            <label for="question-5-answers-C">C) Elles se sont téléphoné</label>
        </div>
                    
        <div>
            <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
            <label for="question-5-answers-D">D) Elles se sont lavé les cheveux</label>
        </div>
                
        </li>
            
        </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
 
    </form>
 
    </div>

        
</body>
</html>
<?php
else :
    header("Location: Login.php");
    exit;
endif;
?>
