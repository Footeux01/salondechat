<?php

	$affichage_minichat = array('pseudo' => $pseudo, 'message' => $message);

		echo json_encode($affichage_minichat);

?>

<!-- $user_bdd = $reponse->fetchAll(PDO::FETCH_ASSOC);
		foreach($user_bdd as $r){

			$pseudo = $r['pseudo'];
		} -->