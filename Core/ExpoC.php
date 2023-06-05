<?php
require_once "config.php";
class ExpoC
{
	function GetList()
	{
	$sql="SElECT * From Expo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetExpo($ID)
	{
	$sql="SElECT * From Expo where ID='$ID'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function GetArtists($ID)
	{
		$sql="SElECT DISTINCT Oeuvre.ID_Art From Oeuvre INNER JOIN Salon ON Oeuvre.ID_Salon=Salon.ID WHERE Salon.ID_Expo='$ID' ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function AddExpo($Nom,$Des,$Date_d,$Date_f,$Image)
	{
		$sql="insert into Expo (Nom,Des,Date_d,Date_f,Image) values (:Nom,:Des,:Date_d, :Date_f,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->bindValue(':Nom',$Nom);
        $req->bindValue(':Des',$Des);
		$req->bindValue(':Date_d',$Date_d);
		$req->bindValue(':Date_f',$Date_f);
		$req->bindValue(':Image',$Image);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function DeleteExpo($ID)
	{

		$sql="DELETE FROM Expo WHERE ID=:ID";
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
