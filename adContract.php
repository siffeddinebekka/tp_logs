

<?php

//if (isset($_SESSION['represantants'])AND !empty($_SESSION['represantants'])){
    if(isset($_POST['submit'])){
       // if(isset($_SESSION['represantants']))
       // {
        extract($_POST);    
            $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","root");
            $req = $bdd->query('SELECT * FROM intervention WHERE codei ='.$_POST['codei']);
            //$numcontrats = $req->fetch();
            
      //  if($numcontrats){
            $req = $bdd->prepare("INSERT INTO contratsgestionlocation(NUMCONTRAT,NUMAPPARTEMENT,NUMTIERS,DATEDEBUT,DATEFIN) VALUES(:numcontrat, :numappartement, :numtiers, :datedebut, :datefin)");
        $req -> bindValue(':numcontrat',$numcontrat,PDO::PARAM_INT);
        $req -> bindValue(':numappartement',$numappartement,PDO::PARAM_INT);
        $req -> bindValue(':numtiers',$numtiers,PDO::PARAM_INT);
        $req -> bindValue(':datedebut',$datedebut,PDO::PARAM_STR);
        $req -> bindValue(':datefin',$datefin,PDO::PARAM_STR);
        
        $req -> execute();
            header('location:index.php?p=contract.php');
                    }
      //  else{
     //       header('location:index.php');
        //    }
     //   }
  //  }
//}
    else{
// header('location:index.php');
}
                 
?>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
    <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
    <div class="tm-right-inner-container">
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <a href="index.php?p=contract.php" type="button" class="form-control">Voir les contrats</a>
    <div class="row">
  <div class="col-sm-12 ">
  <h2><center>Créer un contrat</center></h2>
  <form id="RegisterUserForm" action="" method="post">
  <fieldset>
  <center><label for="numcontrat">Numéro de contrat :</label> <input style="color: #000"; type="text" class="form-control" name="numcontrat" required/><br></center><br>
  <center><label for="datedebut">Date de début :</label> <input style="color: #000"; type="date" class="form-control" name="datedebut" required/><br></center><br>
  <center><label for="datefin">Date de fin :</label> <input style="color: #000"; type="date" class="form-control" name="datefin" required/><br></center><br>
  <center><input style="color: #000;margin-right: 30px"; type="submit" class="form-control" name="submit"/><br>
  </form></div>
</div>
</div>
<!--INSERT INTO contratsgestionlocation(NUMCONTRAT,NUMAPPARTEMENT,NUMTIERS,PRIXGESTTRIMESTRE,TARIFTRIMESTRE,DATEDEBUT,DATEFIN) VALUES ( 5 , 265, 5, 5000, 6522, '2016-03-05', '2016-05-07')-->