<?php


if ($status) {
	$to = 'emmavalor62@gmail.com';
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$message = $_POST['message'];

	$info = array(
		'prenom' => $prenom,
		'nom' => $nom,
		'email' => $email
	);

	$status = mail($to, $sujet, $message, $info);
} if ($status) {
	setcookie("nom", $nom, time()+36000);
	setcookie("prenom", $prenom, time()+36000);
	setcookie("message", $message, time()+36000);
	setcookie("sujet", $sujet, time()+36000);
	setcookie("email", $email, time()+36000);
	setcookie("confirmation", $confirmation, time()+36000);
}


header('Content-type:application/json;charset=utf-8');

if (isset($_POST["email"]) && !empty($_POST["email"])) {
	echo json_encode(['reponse' => $_POST["email"]]);
}


?>
