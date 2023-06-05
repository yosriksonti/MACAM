<?php


if(isset($_POST['ID']))
{

    include_once "Core/SalonC.php";
    include_once "Core/OeuvreC.php";
    $Ouv=new OeuvreC();
    $data=$Ouv->GetBySalon($_POST['ID']);
    foreach($data as $row)
    $Ouv->DeleteOuv($row['ID']);
    $Salon=new SalonC();
    $Salon->DeleteSalon($_POST['ID']);
    header('Location: Salons.php');


}
else
header('Location: index.php');



?>
