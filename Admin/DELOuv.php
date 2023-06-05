<?php


if(isset($_POST['ID']))
{

    include_once "Core/OeuvreC.php";
    $Ouv=new OeuvreC()
    $Ouv->DeleteOuv($_POST['ID']);
    header('Location: Oeuvres.php');


}
else
header('Location: index.php');



?>
