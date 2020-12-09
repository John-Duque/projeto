<?php
session_start();
//Destroi a seção
  unset($_SESSION['login_session']);
  unset($_SESSION['senha_session']);
  
  header('location:../Login/login.php');
?>