<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
  <div class="tm-right-inner-container">
<?php
	
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mlr1;charset=utf8', 'root', 'root');
	}
	catch(Exception $e)
	{
		die("erreur de connexion");
	}

  if(isset($_POST['submit']))
	{
		$i = 0;
		$message = "";
		extract($_POST);

      if(!preg_match("#^[A-Za-z0-9._-]{2,20}$#",$nomtiers))
        {
          $i++;
          $message.="Votre nom n'est pas valide</br>";
        }
      if(!preg_match("#^[A-Za-z0-9._-]{2,20}$#",$prenomtiers))
				{
					$i++;
					$message.="Votre prenom n'est pas valide</br>";
				}
      if(!preg_match("#^[a-z0-9._-]{2,20}@[a-z0-9._-]{2,20}\.[a-z]{2,6}$#",$mail))
  			{
  				$i++;
  				$message.="Votre email n'est pas valide</br>";
  			}
			if(!preg_replace("/[^_A-Za-z0-9-\.&=]/i",'',$pass))
				{
					$i++;
					$message.="Votre mdp n'est pas valide</br>";
				}
			if($pass != $confirm)
				{
					$i++;
					$message.="Votre mdp ne correspondent pas</br>";
				}
        if(empty($datenaisstiers))
  				{
  					$i++;
  					$message.="Votre date de naissance n'est pas valide</br>";
  				}
			
			if($i>0)
			{
					?> <br><br><br><br><br><br><br> <?php echo "Vous avez ".$i." erreur(s)</br>";
					echo $message;
			}

			else
			{
				$requete = $bdd->prepare("INSERT INTO tiers (PRENOMTIERS,NOMTIERS,DATENAISSTIERS,VILLE,CODEPOSTAL,ADRESSE,TELEPHONE,MAIL,PASS) VALUES (:prenomtiers,:nomtiers,:datenaisstiers,:ville,:codepostal,:adresse,:telephone,:mail,:pass)");
				
                $requete->bindValue(":prenomtiers",$prenomtiers,PDO::PARAM_STR);
                $requete->bindValue(":nomtiers",$nomtiers,PDO::PARAM_STR);
                $requete->bindValue(":datenaisstiers",$datenaisstiers,PDO::PARAM_STR);
                $requete->bindValue(":ville",$ville,PDO::PARAM_STR);
				$requete->bindValue(":codepostal",$codepostal,PDO::PARAM_STR);
				$requete->bindValue(":adresse",$adresse,PDO::PARAM_STR);
				$requete->bindValue(":telephone",$telephone,PDO::PARAM_STR);
                $requete->bindValue(":mail",$mail,PDO::PARAM_STR);
				$requete->bindValue(":pass",sha1($pass),PDO::PARAM_STR);
                
				
				$requete->execute();
                
               

			?> <br><br><br><br><br><br><br> <?php
                echo "<script>alert('Vous êtes inscrit');</script>";
			$_SESSION['connecte']=true;
			}
	}
	//  mail($email,'Inscription','vous êtes bien inscrit');
?>
<div class="row">
  <div class="col-sm-12 ">
  <h2><center>Inscription</center></h2>
  <form id="RegisterUserForm" action="" method="post">
  <fieldset>
  <center><label for="prenomtiers">Prénom :</label> <input style="color: #000;"type="text" class="form-control" name="prenomtiers" require=""/><br></center><br>
  <center><label for="nomtiers">Nom :</label> <input style="color: #000;"type="text" class="form-control" name="nomtiers" require=""/><br></center><br>
  <center><label for="datenaisstiers">Date de naissance :</label> <input style="color: #000;"type="text" id="datepicker" class="form-control" name="datenaisstiers" require=""/><br></center><br>
  <center><label for="ville">Ville :</label> <input style="color: #000;"type="text" class="form-control" name="ville" require=""/><br></center><br>
  <center><label for="codepostal">Code postal :</label> <input style="color: #000;"type="text" class="form-control" name="codepostal" require=""/><br></center><br>
  <center><label for="adresse">Adresse :</label> <input style="color: #000;"type="text" class="form-control" name="adresse" require=""/><br></center><br>
  <center><label for="telephone">Téléphone :</label> <input style="color: #000;"type="text" class="form-control" name="telephone" require=""/><br></center><br>
  <center><label for="mail">Email :</label> <input style="color: #000;"type="mail" class="form-control" name="mail" required=""/><br></center><br>
  <center><label for="pass">Mot de passe :</label> <input style="color: #000;"type="password" class="form-control" name="pass" required=""/><br></center><br>
  <center><label for="pass">Mot de passe :</label> <input style="color: #000;"type="password" class="form-control" name="confirm" required=""/><br></center><br>
  
  
  
  <br>
      <center><input style="color: #000;margin-right: 30px; background: orange;" type="submit" class="form-control" name="submit"/><a href="index.php?p=login.php" style="margin-right='30px'"><br>
        <input type="button" class="form-control" name="Répondre " style=" background: aliceblue;" value="Page Connexion"/></a></center></fieldset>
  </form></div>
</div>
</div>
