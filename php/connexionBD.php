<?php
// On définit les informations de connexion à la base de données
function connexionBD(){
    $bdd= "tcocheril001_bd"; // Nom de la base de données
    $host= "lakartxela.iutbayonne.univ-pau.fr"; // Hôte de la base de données
    $user= "tcocheril001_bd"; // Nom d'utilisateur de la base de données
    $pass= "tcocheril001_bd"; // Mot de passe de la base de données
// On se connecte à la base de données
    $link=mysqli_connect($host,$user,$pass,$bdd) or  die ( "Impossible de se connecter à la BD");
// on retourne la connexion
return $link;
}
?>