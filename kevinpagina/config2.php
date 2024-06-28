<?php 
session_start();

unset($_SESSION['welcome_usuario']);
unset($_SESSION['id']);

session_destroy();

header('location: index.php');
?>
