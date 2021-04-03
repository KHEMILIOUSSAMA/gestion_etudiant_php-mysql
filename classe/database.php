<?php
class DataBase{

	public $dbh;

	public static function connexion()
	{   
		$user='root';
		$password='';
		try {
		    $dbh = new PDO('mysql:host=localhost;dbname=school', $user, $password);
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}

		return $dbh;
	}
}
?>