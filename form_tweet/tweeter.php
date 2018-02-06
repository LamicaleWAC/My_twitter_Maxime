<?php

if (!empty($_POST["textTweet"])) {
	require_once "bdd.php";
	$bdd = new Bdd;
	$pdo = $bdd->getBdd();
	$req = $pdo->prepare("INSERT INTO tweet SET content = ?");
	// $req = $pdo->prepare("INSERT INTO tweet SET id_user = ?");
	$req->execute([$_POST["textTweet"]]);
	die("Réussi");
}
?>