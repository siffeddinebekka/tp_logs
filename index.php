<?php 
        session_start(); 
    
	if(!isset($_GET['p']) || $_GET['p']=="")
	{
		$contenu = "accueil.php";
	}
	else
	{
		if(!file_exists($_GET['p']))
			$contenu = "404.php";
		else
			$contenu = $_GET['p'];
	}

	ob_start(); //arret de l'affichage
		require $contenu;
		$content = ob_get_contents();
	ob_end_clean(); //reprise de l'affichage

	require "layout.php";
?>