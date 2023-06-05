<?php
    session_start();
    if($_SESSION['Role']!="SAd")
    header('Location: index.php');
    
    
?>
