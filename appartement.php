
 

 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
			<h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">Nos </h1>
				
<!DOCTYPE html>
<html>
<head>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").slideToggle();
    });
});
</script>-->
</head>
<body>




</body>
</html>
<?php

    $bdd = new PDO("mysql:host=localhost;dbname=mlr1;charset=utf8","root","root");
    $req = $bdd->query('SELECT numappartement, adresse, ville, codepostal, coefprix, image, descriptif FROM appartements');
    $appartements = $req -> fetchAll();
    if (isset($_POST['button'])) {
        $requete = $bdd->prepare("INSERT INTO contratslocation(numsaison,datedebut,datefin,numappartement,numtiers) VALUES(1,:dateD,:dateF,:numappartement,:numtiers)");
        $requete->bindValue(":dateD",$_POST['dateD'],PDO::PARAM_STR);
        $requete->bindValue(":dateF",$_POST['dateF'],PDO::PARAM_STR);
        $requete->bindValue(":numappartement",$_POST['id'],PDO::PARAM_INT);
        $requete->bindValue(":numtiers",$_SESSION['id'],PDO::PARAM_INT);
              $requete->execute();
              $requete->closeCursor();
    }
                
    // Affichage des appartements
                
    foreach($appartements as $appart ){
		echo '<left><h2><b>'.$appart['ville'].' '.$appart['codepostal'].'</b></h2></left>';
                    
		//echo '<center><h2><b>'.$appart['coefprix'].'</b></h2></center><br/>';
    
        echo '<img class="image_article" src="'.$appart['image'].'" width="75%" />'; ?>

        <h3>Informations complémentaires </h3>
        <b>Adresse complète</b> <?php echo '<div><i>'.$appart['adresse'].' '.$appart['codepostal'].' '.$appart['ville'].'</i></div>' ; ?>
        
        <b>Caractéristiques de l'appartement ...</b>
       
        <!-- Calendrier de réservation -->     
               
                      <?php 
                    
                      echo '<p><i>'.$appart['descriptif'].'</i></p>';
                      //echo "<p><i>".$article = substr($appart['descriptif'],0,150)." ... </a></i></p>";
                      if(isset($_SESSION['connecte']) && $_SESSION['connecte'] === true)
                      {  
                     ?>
                      <p><b>Autres caractéristiques :</b></p><br>
                
                     <p><b>Dates de reservation :</b></p><br>
                     
                      <form method="POST" action="#">
                           <input type="date" name="dateD">
                          <input type="date" name="dateF">
                         <input type="hidden" name="id" <?php echo "value='".$appart['numappartement']."'"; ?>>
                        <input type="submit" name="button" value="Réserver">
                        
                      </form>
                      
                      <?php 
                    }
                    else{

                      echo "<button class='btn btn-info'><a href='index.php?p=login.php' style='color:white'>Connectez-vous pour réserver</a></button>";
                    }
                      ?>
                
                      <br><br><p>
                      <a href="index.php?p=appartement.php" class="btn btn-warning">Retour</a>
                     <a href="index.php?p=contact.php" class="btn btn-warning">Contacter l'agence</a>
                    </p> 
                
                
               
                
            <br>
            
            
          <hr>
          <?php } ?>
                	


  