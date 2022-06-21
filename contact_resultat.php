<?php



	$destinataire = 'benjaminkapoor@orange.fr';
$copie = 'oui';

//message confirmation mail
$message_envoye = "Votre message nous est bien parvenu, nous vous recontacterons prochainement.";
$message_non_envoye = "L'envoi du mail a echoue, veuillez reessayer svp.";

//message erreur formulaire
$message_erreur_formulaire = "Vous devez d'abord envoyer le formulaire.";
$message_formulaire_invalide = "Verifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";


if (!isset($_POST['envoi']))
{
  // formulaire non envoyé
  echo '<p><h5>'.$message_erreur_formulaire.'<h5></p>'."\n";
}
else
{
  //fonction sert à nettoyer et enregistrer un texte
  function Rec($text)
  {
    $text = htmlspecialchars(trim($text), ENT_QUOTES);
    if (1 === get_magic_quotes_gpc())
    {
      $text = stripslashes($text);
    }
 
    $text = nl2br($text);
    return $text;
  };

  //fonction qui sert a verifier l'email
  function IsEmail($email)
  {
    $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    return (($value === 0) || ($value === false)) ? false : true;
  }

  //formualaire envoyer, on recupere les champs
  $nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
  $email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
  $objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
  $message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

  // On va vérifier les variables et l'email
  $email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré

  if (($nom != '') && ($email != '') && ($objet != '') && ($message != ''))
  {
    //si les champs ont bien ete remplis, on genere puis envoie le mail
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
        'Reply-To:'.$email. "\r\n" .
        'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
        'Content-Disposition: inline'. "\r\n" .
        'Content-Transfer-Encoding: 7bit'." \r\n" .
        'X-Mailer:PHP/'.phpversion();

    //on envoie la copie au visiteur
    if ($copie == 'oui')
    {
      $cible = $destinataire.';'.$email;
    }
    else
    {
      $cible = $destinataire;
    };

    //remplacement caractère spéciaux
    $message = str_replace("&#039;","'",$message);
    $message = str_replace("&#8217;","'",$message);
    $message = str_replace("&quot;",'"',$message);
    $message = str_replace('<br>','',$message);
    $message = str_replace('<br />','',$message);
    $message = str_replace("&lt;","<",$message);
    $message = str_replace("&gt;",">",$message);
    $message = str_replace("&amp;","&",$message);


    //Envoie du mail
    $num_emails = 0;
    $tmp = explode(';', $cible);
    foreach($tmp as $email_destinataire)
    {
      if (mail($email_destinataire, $objet, $message, $headers)) // le pb venait du script mail() il faut configurer php.ini
        $num_emails++;
    }
 
    if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
    {
      echo '<p><h5>'.$message_envoye.'</h5></p>';
    }
    else
    {
      echo '<p><h5>'.$message_non_envoye.'</h5></p>';
    };

  }
  else //si il y a au moins une variable qui n'est pas remplis
  {
    echo '<p><h5>'.$message_formulaire_invalide.' <a href="index-5.php">Retour au formulaire</a></h5></p>'."\n";
  };

}; //fin du gros if(!isset($_POST['envoi']))


?>