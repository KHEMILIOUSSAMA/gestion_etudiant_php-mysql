<?php
 $user='root';
    $password='';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=school', $user, $password);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

$sth = $dbh->query('SELECT * FROM Etudiant ORDER BY name');
$rows = $sth->fetchAll();


?>

<h1>Liste des étudiants</h1>
<a href="etudiant.php">  Ajouter étudiant </a>
<table>
    <thead>
        <tr>
            <th >ID</th>
            <th >NAME</th>
            <th >LAST NAME</th>
            <th >BIRTHDAY</th>
            <th >MOBILE</th>
           
        </tr>
    </thead>
    <tbody>
       <?php foreach  ($rows as $row) {
            print '<tr><td>'.$row['ID'] . "</td>";
            print  '<td>'.$row['NAME'] . "</td>";
            print  '<td>'.$row['LASTNAME'] . "</td>";
            print '<td>'.$row['DATE_NAISSANCE'] . "</td>";
            print  '<td>'.$row['MOBILE'] . "</td>";
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
    background: blue;
    color: white;
    margin: 10px;
    float: right;
    font-size: 22px;
    font-family: cursive;
  }

</style>