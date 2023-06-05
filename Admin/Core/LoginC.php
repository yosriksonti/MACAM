<?php
require_once "config.php";
class LoginC
{
	function GetList()
	{
	$sql="SElECT * From Login";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


    
    function GetLogin($Email)
    {
        $sql="SElECT * From Login where Email='$Email'";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

	function AddLogin($Email,$PSWD,$Role)
	{
		$sql="insert into Login values (:Email,:PSWD,:Role)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$req->bindValue(':Role',$Role);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':PSWD',$PSWD);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function DeleteLogin($ID)
	{

		$sql="DELETE FROM Login WHERE ID=:ID";
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
