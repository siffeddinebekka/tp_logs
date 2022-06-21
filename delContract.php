
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
  <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
  <div class="tm-right-inner-container">

			
                    
       
      

<?php

//if (isset($_SESSION['represantants'])AND !empty($_SESSION['represantants'])){
    if(isset($_POST['submit'])){
       // if(isset($_SESSION['represantants']))
       // {
            $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","root");
            $req = $bdd->query('SELECT * FROM intervention WHERE codei ='.$_POST['codei']);
            //$numcontrats = $req->fetch();
            
      //  if($numcontrats){
            $req = $bdd->query('DELETE  FROM intervention WHERE codei ='.$_POST['codei']);
            header('location:index.php?p=Contract.php');
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
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<a href="index.php?p=adContract.php" type="button" class="form-control">Ajouter un contrat</a>
<a href="index.php?p=contract.php" type="button" class="form-control">Voir les contrats</a>
      <div class="row">
        <div class="col-sm-12 ">
            <h2><center>Supprimer un contrat</center></h2>
                <form id="RegisterUserForm" action="" method="post" >
                <fieldset>
                <center><label for="numcontrat">Numéro du contrat :</label> <input style="color: #000;" type="text" class="form-control" name="numcontrat" require=""/><br></center><br>
  
                <br><center><input style="color: #000;margin-right: 30px;"type="submit" class="form-control" name="submit" />
                <br></center></fieldset>
                </form></div>
          </div>
    </div>
</div>