<?php


if (isset($_POST['submit'])){

    $user='root';
    $password='';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=school', $user, $password);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
    $stmt = $dbh->prepare("
         INSERT INTO etudiant (name, lastname, date_naissance, mobile) VALUES (:name, :lastname, :date_naissance, :mobile)");
     $name=$_POST['name'];
     $prenom=$_POST['prenom'];
     $date_naissance= $_POST['date_naissance'];
     $mobile=$_POST['mobile'];
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':lastname', $prenom);
    $stmt->bindParam(':date_naissance', $date_naissance);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->execute();


echo 'etudiant : '.$name.' '.$prenom.' ajouté avec succes !';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projet</title>
</head>
<body>
	<h3> Ajout 	étudiant </h3>
	<p>Ce formulaire pour ajouter un etudiant !</p>
  <a href="liste_etudiant.php">Liste des etudiants </a>
  <a href="classe.php">classe </a>
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
<style type="text/css">
  a {
    padding: 20px;
    background: white;
    color: red;
    margin: 20px;
    float: right;
  }
</style>