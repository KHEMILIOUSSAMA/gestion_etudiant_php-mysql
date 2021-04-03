<?php


 $user='root';
    $password='';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=school', $user, $password);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

if (isset($_GET['id'])) {
    $stmt = $dbh->prepare(' DELETE FROM classe WHERE ID = :id ');
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute(); 
}

$sth = $dbh->query('SELECT * FROM classe ORDER BY name');
$rows = $sth->fetchAll();



?>

<h1>Liste des classes</h1>
<a href="classe.php">  Ajouter classe </a>
<table>
    <thead>
        <tr>
            <th >ID</th>
            <th >NAME</th>
            <th >DESCRIPTION</th>
            
           
        </tr>
    </thead>
    <tbody>
       <?php foreach  ($rows as $row) {
            print '<tr><td>'.$row['ID'] . "</td>";
            print  '<td>'.$row['NAME'] . "</td>";
            print  '<td>'.$row['DESCRIPTION'] . "</td>";
            print  '<td> <a href="liste_classe.php?id='.$row['ID'] .'"> Supprimer</a></td>';
    
            echo '</tr>';
        }
        ?>
      
         
    </tbody>
</table>


<style type="text/css">
    table,
td {
    border: 1px solid #333;
}

thead,
tfoot {
    background-color: #333;
    color: #fff;
}
a {
    padding: 10px;
    background: white;
    color: red;
    margin: 10px;
    float: right;
    font-size: 15px;
    font-family: cursive;
  }

</style>