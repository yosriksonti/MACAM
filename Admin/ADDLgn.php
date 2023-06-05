<?php


if(isset($_POST['Email']) and isset($_POST['Password']) )
{
    include_once "core/LoginC.php";
    $lgnC=new LoginC();
    $lgnC->AddLogin($_POST['Email'],$_POST['Password'],'Ad');
    header('Location: index.php');
}
else
header('Location: index.php');



?>
