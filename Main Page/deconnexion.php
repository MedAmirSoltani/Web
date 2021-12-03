<?php
session_start();
session_destroy();
echo 'you have been disconnected. <a href="./login.php">Se connecter ?</a> ';
header('Location:index.php');
?>