<?php

	// Connexion à la base de données
	try{
	    $bdd = new PDO('mysql:host=localhost;dbname=salon_de_chat;charset=utf8', 'root', 'localhost');
	}

	catch(Exception $e){
	    die('Erreur : '.$e->getMessage());
	}

?>