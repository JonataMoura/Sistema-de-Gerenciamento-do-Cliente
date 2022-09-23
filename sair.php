<?php
    session_start();
    unset($_SESSION['loginP']);
    unset($_SESSION['senha']);
    unset($_SESSION['funcao']);
    header("Location: Tela de login.html");
?>