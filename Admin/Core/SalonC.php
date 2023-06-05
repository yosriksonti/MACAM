<?php
require_once "config.php";
class SalonC
{
	function GetList()
	{
	$sql="SElECT * From Salon";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetByExpo($ID)
	{
	$sql="SElECT * From Salon WHERE ID_Expo='$ID'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetSalon($ID)
	{
	$sql="SElECT * From Salon where ID='$ID'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function AddSalon($ID_Expo,$Nom,$Des,$Image)
	{
		$sql="insert into Salon (ID_Expo,Nom,Des,Image) values (:ID_Expo,:Nom,:Des, :Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->bindValue(':ID_Expo',$ID_Expo);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Des',$Des);
		$req->bindValue(':Image',$Image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function DeleteSalon($ID)
	{

		$sql="DELETE FROM Salon WHERE ID=:ID";
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
}

?>
