<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){

	$conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connection failed:" .mysqli_connect_error());

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['bgroup'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$bgroup = $_POST['bgroup'];

		$sql = "INSERT INTO `users` (`name`, `email`, `phone`, `bgroup`) VALUES
		 ('$name','$email','$phone', '$bgroup')";


		$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));

		if($query){
			echo 'Entry Successfull';
		}
		else{
			echo 'Error Occurred';
		}
	}
} 
/*
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test1', 'root', '');
}
	catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}
// Insertion du message à l'aide d'une requête préparée
	$req = $bdd->prepare('INSERT INTO users (name, email, phone, bgroup)
	 VALUES(?, ?, ?, ?)');
	$req->execute(array($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['bgroup']));
	if($req){
		echo 'Insertion reussie !';
	}else{
		echo 'Insertion non reussie !';
	}

// Redirection du visiteur vers la page du index
	header('Location: index.php');*/
?>