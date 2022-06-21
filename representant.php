<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
  <div class="tm-right-inner-container">
  <div class="row">
  <div class="col-sm-12 ">
  <h2><center>Se Connecter en tant que représentant</center></h2>
  <form id="RegisterUserForm" action="" method="post" >
	  <fieldset>
	  <center><label for="email">Email :</label> <input style="color: #000;" type="text" class="form-control" name="email" required/><br></center><br>
	  <center><label for="password">Mot de passe :</label> <input style="color: #000;" type="password" class="form-control" name="password" required/><br></center><br>
	  <br><center><input style="color: #000; margin-right: 30px;    background: orange;" type="submit" class="form-control" name="submit" /></center></fieldset>
  </form></div>
</div>
</div>
  

<?php
			
			try
			{
				$bdd = new PDO("mysql:host=127.0.0.1;dbname=commande","root","");
			}
			catch(Exception $e)
			{
				die("erreur de connexion");
			}
			if(isset($_POST['submit']))
			{
				$email = $_POST['email'];
				$password = sha1($_POST['password']);

				$requete = $bdd->query("SELECT * FROM represantants WHERE email = '".$email."' AND password = '".$password."'");
			if($reponse = $requete->fetch())
				{
                
					$_SESSION['connecte'] = true;
					$_SESSION['id'] = $reponse['id_u'];
					header("Location:index.php?p=contract.php");
                    echo "<script>alert('Vous êtes maintenant déconnecté');</script>";
					}else{
					?><?php echo "<script>alert('Identifiants faux');</script>";
				}
		}
?>
