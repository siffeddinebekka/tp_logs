<!DOCTYPE html>


    
    


				
			

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
    <h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
    <div class="tm-right-inner-container">
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    
    <center><h1>Liste des contrats</h1></center>

    <a href="index.php?p=adContract.php" type="button" class="form-control">Ajouter un contrat</a>
    <a href="index.php?p=delContract.php" type="button" class="form-control">Supprimer un contrat</a>
    <table class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th  style=" text-align : center ">Numéro de contrat</th>
                                        <th  style=" text-align : center ">Numéro du client</th>
                                        <th  style="text-align : center ">Date de début du contract</th>
                                        <th  style=" text-align : center ">Date de fin du contract</th>
                                    </tr>
                                    </thead>
    </table>
    <?php

   // echo "<script>alert('Vous êtes maintenant connecté en tant que représentant');</script>";

    $bdd = new PDO("mysql:host=127.0.0.1;dbname=mlr1","root","root");
    $req = $bdd->query('SELECT numcontrat, numappartement, numtiers, datedebut, datefin FROM contratsgestionlocation');
    $contratsgestionlocation = $req -> fetchAll();
    
    foreach($contratsgestionlocation as $contrats ): ?>
      

         
    
    
    <table class="table table-striped table-hover">
                                    <tbody >
                                            <tr>
                                                <td style=" text-align : center " width=20% ><?= $contrats['numcontrat']?></td>
                                                <td style=" text-align : center" width=20%><?= $contrats['numappartement']?></td>
                                                <td style=" text-align : center" width=10%><?= $contrats['numtiers']?></td>
                                                <td style=" text-align : center" width=25%><?= $contrats['datedebut']?></td>
                                                <td style=" text-align : center" width=25% ><?= $contrats['datefin']?></td>
                                            </tr>
                                             
                                    </tbody>
                                </table>
     
      
      <?php endforeach ?>