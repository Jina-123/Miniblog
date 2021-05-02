<?php

    session_start();

    if(isset($_POST['login']) && isset($_POST['password'])) && ($_POST['login'] == 'toto123' && $_POST['password'] == 'goku123'):
        $_SESSION['token'] == true;
        header("Location: Home.php");

    else:
        header("Location: Login.php");
        exit;
    endif;
    ?>
