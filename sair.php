<?php
    session_start();
    unset($_SESSION['loginP']);
    unset($_SESSION['senha']);
    header("Location: Tela de login.html");
?>