<?php 
$conn=mysqli_connect("localhost", "root", "","esp"); 
if (!$conn) {
	echo "<p>Erreur de connexion a la base de donnees</p>"; 
	exit();
}
?>
