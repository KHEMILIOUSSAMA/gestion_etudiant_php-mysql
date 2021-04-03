<?php
include 'classe/database.php';
include 'classe/etudiant.php';

if (isset($_POST['submit'])){

$etudiant = new Etudiant();
$etudiant->name = $_POST['name'];
$etudiant->lastname = $_POST['prenom'];
$etudiant->naissance = $_POST['date_naissance'];
$etudiant->mobile = $_POST['mobile'];
$etudiant->insert();
echo 'Etudiant : '.$etudiant->name.' '.$etudiant->lastname.' ajouté avec succes !';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projet</title>
</head>
<body>
	<h4> Ajout 	étudiant </h4>
	<p>Ce formulaire pour ajouter un etudiant !</p>
<form action="" method="post">

  <label for="POST-name">Nom* :</label>
  <input id="name" type="text" name="name" placeholder="Nom" required>
  <br>
  <label for="Prenom">Prenom* :</label>
  <input id="Prenom" type="text" name="prenom" placeholder="Prenom" required>
  <br>
  <label for="date_naissance">date_naissance* :</label>
  <input id="date_naissance" type="date" name="date_naissance" placeholder="Date naissance" required>
  <br>
  <label for="mobile">mobile :</label>
  <input id="mobile" type="text" name="mobile" placeholder="Mobile">
<br>
  <input type="submit" name="submit" value="Enregistrer">

</form>
<p>Les champs en (*) sont obligatoires ! </p>
</body>
</html>