

  <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
  <div class="tm-right-inner-container">
<?php
			
			try
			{
				$bdd = new PDO("localhost:8890","mlr1","root","root");
			}
			catch(Exception $e)
			{
				die("erreur de connexion");
			}
			if(isset($_POST['submit']))
			{
				$mail = $_POST['mail'];
				$pass = sha1($_POST['pass']);

				$requete = $bdd->query("SELECT * FROM tiers WHERE mail = '".$mail."' AND pass = '".$pass."'");
			if($reponse = $requete->fetch())
				{
					$_SESSION['connecte'] = true;
					$_SESSION['id'] = $reponse['NUMTIERS'];
                
					header("Location:index.php");
                    
					}else{
					?><?php echo "<script>alert('Identifiants faux');</script>";
				}
		}
?>
      
<div class="row">
  <div class="col-sm-12 ">
  <h2><center>Se Connecter</center></h2>
  <form id="RegisterUserForm" action="" method="post" >
  <fieldset>
  <center><label for="mail">Email :</label> <input style="color: #000;" type="text" class="form-control" name="mail" required/><br></center><br>
  <center><label for="pass">Mot de passe :</label> <input style="color: #000;" type="password" class="form-control" name="pass" required/><br></center><br>
      <br><center><input style="color: #000;margin-right: 30px;     background: orange;"type="submit" class="form-control" name="submit" /><a href="index.php?p=register.php">
      <br><input type="button" name="Répondre " class="form-control" style="    background: aliceblue;" value="Inscription"/></a></center></fieldset>
  </form></div>
</div>
</div>
