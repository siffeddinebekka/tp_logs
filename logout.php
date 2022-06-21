
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 white-bg right-container">
	<h1 class="logo-right hidden-xs margin-bottom-60">Soleil</h1>
	<div class="tm-right-inner-container">
	
	
<?php
    
	session_start() ;
	session_unset();
	session_destroy();
	header("Location:index.php?p=accueil.php");
    
?>
