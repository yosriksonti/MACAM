<?php


if(isset($_POST['ID']))
{

    include_once "Core/ExpoC.php";
    include_once "Core/SalonC.php";
    include_once "Core/OeuvreC.php";
    $Salon=new SalonC();
    $data1=$Salon->GetByExpo($_POST['ID']);
    $Ouv=new OeuvreC();
    foreach($data1 as $rw)
    {
    $data=$Ouv->GetBySalon($rw['ID']);
    foreach($data as $row)
        $Ouv->DeleteOuv($row['ID']);
    $Salon->DeleteSalon($rw['ID']);
    }
    $Expo=new ExpoC();
    $Expo->DeleteExpo($_POST['ID']);
    header('Location: Expositions.php');


}
else
header('Location: index.php');



?>
