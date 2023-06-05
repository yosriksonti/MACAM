<?php


if(isset($_POST['Name']) and isset($_POST['Des']) and isset($_POST['ID_Salon']) and isset($_POST['ID_Art']))
{

	include_once "Core/OeuvreC.php";
	$file_name=" ";
    if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
            $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
            move_uploaded_file($file_tmp,"images/".$file_name);
            echo "Success";
        }else{
            print_r($errors);
        }
        
    }
    $file_name="images/".$file_name;

    $Ouv=new OeuvreC();
    $Ouv->AddOuv($_POST['ID_Salon'],$_POST['ID_Art'],$_POST['Name'],$_POST['Des'],$file_name);
    header('Location: Salon.php?ID='.$_POST['ID_Salon']);


}
else
header('Location: index.php');



?>
