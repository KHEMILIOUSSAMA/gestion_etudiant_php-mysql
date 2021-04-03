<?php

class Etudiant{
	public $id;
	public $name;
	public $lastname;
	public $naissance;
	public $mobile;

	public function insert()
	{
		$stmt = DataBase::connexion()->prepare("
			   INSERT INTO etudiant (name, lastname, date_naissance, mobile) VALUES (:name, :lastname, :date_naissance, :mobile)");
		$stmt->bindParam(':name', $this->name);
		$stmt->bindParam(':lastname', $this->lastname);
		$stmt->bindParam(':date_naissance', $this->naissance);
		$stmt->bindParam(':mobile', $this->mobile);
		$stmt->execute();
		return $stmt;

	}

	public function update()
	{

	}

	public function get()
	{

	}

	public function delete()
	{

	}

}

?>