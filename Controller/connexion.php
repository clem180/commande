<?php

function connexion($Nom,$Password,$BDD){
  

	$connexion=$BDD;
        
	$verifNom=$connexion->query('SELECT * FROM ENTITE WHERE IDENTIFIANT=\'' . $Nom . '\' and PASSWORD=\'' . $Password . '\'');
	$verifNom->execute();
        
	$data = $verifNom->fetch(PDO::FETCH_ASSOC);
	if ($data!=0)
	{
		$_SESSION['password']=$Password;
		$_SESSION['user_login']=$Nom;
                header('Location:../Model/index.php?page=0');
	}


}
function isConnected(){
		//return true si $_SESSION['user_num'] et $_SESSION['user_login'] existent
     if(isset(  $_SESSION['user_login'],$_SESSION['password'])){
            return true;
          }
		//sinon return false 
         else{
            return false;
         }
    }