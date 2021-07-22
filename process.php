<?php

	$to = 'emmavalor62@gmail.com';
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$sujet = $_POST['sujet'];
	$message = "Tu viens de recevoir un mail de " . $nom . " " . $prenom . ".\r\n L' email du correspondant est " . $email . ". Voici son message : \r\n";
	$message .= $_POST['message'];
	
	$headers = array(
		'From' => $email,
		'Reply-To' => $email,
		'X-Mailer' => 'PHP/' . phpversion()
	);

mail($to, $sujet, $message, $headers);



header('Content-type:application/json;charset=utf-8');

if (isset($_POST["email"]) && !empty($_POST["email"])) {
	echo json_encode(['reponse' => $_POST["email"]]);
}


?>
