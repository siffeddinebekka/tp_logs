
<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>		
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
			<h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
			<div class="tm-right-inner-container">
				<h1 class="templatemo-header">Contact</h1>
				<div class="row">
                    <div class="col-sm-12 col-md-12">
                        <div id="map-canvas"></div>
                        <address>
						  <strong><center>Compagnie Immobillière</center></strong><br>
						  <center>05 rue du port</center><br>
						  <center>Paris, 16ème Arrondissement 75016</center><br><br>
						  <center>Phone: 06-12-34-56-78</center><br>
                          <center>Email: info@agenceimmo.com</center><br><br>
						</address>
                    </div>

                    <div class="col-sm-12 col-md-12">
                        <form action="index.php?p=contact_resultat.php" method="post">

                            <div class="form-group">
                                <input type="text" id="contact_name" class="form-control" placeholder="Nom" name="nom" />
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_email" class="form-control" placeholder="Adresse Email" name="email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" id="contact_subject" class="form-control" placeholder="Sujet" name="objet" />
                            </div>
                            <!-- <div class="form-group">
                                <input type="text"  class="form-control" id="datepicker" placeholder="Date"/>
                            </div> -->
                            <div class="form-group">
                                <textarea id="contact_message" class="form-control" rows="9" placeholder="Votre message" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-warning" name="envoi">Envoyer</button>

                        </form>
                    </div>

                    <div class="clearfix"></div>
                </div>

	</div>
