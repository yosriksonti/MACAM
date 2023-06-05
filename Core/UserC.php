<?php
require_once "config.php";
class UserC
{
	function GetList()
	{
	$sql="SElECT * From User";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetUser($ID)
	{
	$sql="SElECT * From User where ID='$ID'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    function GetUser_Email($Email)
    {
        $sql="SElECT * From User where Email='$Email'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function AddUser($STT_UP,$Supervisor,$Email,$PSWD,$WebSite,$date_e,$date_d,$image)
	{
		$sql="insert into User (Startup_Name,Supervisor,Email,PSWD,WebSite,Date_e,Date_d,image) values (:STT_UP,:Supervisor,:Email,:PSWD,:WebSite,:Date_e,:Date_d,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':STT_UP',$STT_UP);
		$req->bindValue(':Supervisor',$Supervisor);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':PSWD',$PSWD);
		$req->bindValue(':WebSite',$WebSite);
		$req->bindValue(':Date_e',$date_e);
		$req->bindValue(':Date_d',$date_d);
		$req->bindValue(':image',$image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function DeleteUser($ID)
	{

		$sql="DELETE FROM User WHERE ID=:ID";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		      $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}

	function setImage($ID,$image)
	{

		$sql="UPDATE User SET image=:image WHERE ID=:ID";
		$db = config::getConnexion();
		try{
		$req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':image',$image);
		      $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
}

?>
