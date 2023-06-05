<?php


if(isset($_POST['ID']))
{

    include_once "Core/ArtistC.php";
    include_once "Core/OeuvreC.php";
    $Ouv=new OeuvreC();
    $data=$Ouv->GetByArtist($_POST['ID']);
    foreach($data as $row)
    $Ouv->DeleteOuv($row['ID']);
    $Art=new ArtistC();
    $Sal->DeleteArtist($_POST['ID']);
    header('Location: Artists.php');


}
else
header('Location: index.php');



?>
