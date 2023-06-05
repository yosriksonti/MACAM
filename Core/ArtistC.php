<?php
require_once "config.php";
class ArtistC
{
	function GetList()
	{
	$sql="SElECT * From Artist Order by Nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function GetArtist($ID)
	{
	$sql="SElECT * From Artist where ID='$ID' Order by Nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function AddArtist($Nom,$Bio,$Image)
	{
		$sql="insert into Artist (Nom,Bio,Image) values (:Nom,:Bio,:Image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $req->bindValue(':Nom',$Nom);
		$req->bindValue(':Bio',$Bio);
		$req->bindValue(':Image',$Image);
	
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function DeleteArtist($ID)
	{

		$sql="DELETE FROM Artist WHERE ID=:ID";
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
