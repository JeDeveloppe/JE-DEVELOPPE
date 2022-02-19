<?php
@session_start ();

if($_SERVER['SERVER_NAME'] == "localhost"){ // CONNEXION BDD EN LOCAL
        try
        {
                $bdd = new PDO('mysql:host='.$GLOBALS['serveur'].';dbname='.$GLOBALS['database'].';charset=utf8', $GLOBALS['utilisateur'], $GLOBALS['utilisateur']);
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
}else{ // CONNEXION BDD EN LIGNE
        try 
        {
                $bdd = new PDO("mysql:host=".$GLOBALS['serveur']."; dbname=".$GLOBALS['database'].";", $GLOBALS['utilisateur'], $GLOBALS['password']);
        } catch (PDOException $e) {
                echo "Erreur!: " . $e->getMessage() . "<br/>";
                die();
        }  
}
?>