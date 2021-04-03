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
         INSERT INTO classe (name, description) VALUES (:name, :description)");
     $name=$_POST['name'];
     $description=$_POST['description'];
     
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    
    $stmt->execute();
    echo 'classe : '.$name.'  ajouté avec succes !';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projet</title>
</head>
<body>
	<h3> les classes </h3>
	<p>Ce formulaire pour ajouter un classe !</p>
  <a href="etudiant.php">etudiant </a>
  
<form action="" method="post">

  
  
  <label for="nom">nom* :</label>
  <input id="nom_classe" type="text" name="name" placeholder="nom classe" required>
  <br>
  <label for="description">description* :</label>

  <TEXTAREA name="description" placeholder="description" required></TEXTAREA>
  
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