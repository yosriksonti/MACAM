<?php
require_once "config.php";
class OeuvreC
{
	function GetList()
	{
	$sql="SElECT * From Oeuvre";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetBySalon($ID)
	{
	$sql="SElECT * From Oeuvre WHERE ID_Salon='$ID' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function GetByArtist($ID)
	{
	$sql="SElECT * From Oeuvre WHERE ID_Art='$ID' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetOuv($ID)
	{
	$sql="SElECT * From Oeuvre where ID='$ID'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function AddOuv($ID_Salon,$ID_Art,$Nom,$Des,$Image)
	{
		$sql="insert into Oeuvre (ID_Salon,ID_Art,Nom,Des,Image) values (:ID_Salon,:ID_Art,:Nom, :Des,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->bindValue(':ID_Salon',$ID_Salon);
		$req->bindValue(':ID_Art',$ID_Art);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Des',$Des);
		$req->bindValue(':Image',$Image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function DeleteOuv($ID)
	{

		$sql="DELETE FROM Oeuvre WHERE ID=:ID";
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
