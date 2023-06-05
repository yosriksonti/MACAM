<?php


if(isset($_POST['Email']) and isset($_POST['Password'])  )
{
  include_once "core/UserC.php";
  include_once "core/LoginC.php";
   

  $lgnC=new LoginC();
  $lgn=$lgnC->GetLogin($_POST['Email']);
  $psswd="";
  $role="";
    foreach($lgn as $row)
  {
    $psswd=$row['PSWD'];
    $role=$row['Role'];
  }
  

    if($psswd==$_POST['Password'])
  {
    session_start();
    $_SESSION['Role']=$role;
    if($role=="User")
    {
      $perC=new UserC();
      $per=$perC->GetUser_Email($_POST['Email']);
      $id=0;
      foreach($per as $rw)
        $id=$rw['ID'];
        $_SESSION['USR_ID']=$id;
    }

    
    header('Location: index.php');
  }
  else
    header('Location: login.php');


}
else
header('Location: login.php');

  

?>
