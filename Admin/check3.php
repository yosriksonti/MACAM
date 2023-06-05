<?php
    session_start();
    if(isset($_SESSION['Role']))
    header('Location: index.php');
    
    
?>
