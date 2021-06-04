<?php session_start();

    if(isset($_SESSION['user'])){ // Si hay sesión iniciada se va a la página principal.

        header('Location: ../views/main.page.views.php');

    }else{ // Si no hay sesión iniciada se va por aquí al login

        header('Location: login.php');

    }


?>