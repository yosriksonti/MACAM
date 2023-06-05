<?php
    session_start();
    if(!isset($_SESSION['Role']) || empty($_SESSION['Role']))
    header('Location: login.php');
    
    
?>
