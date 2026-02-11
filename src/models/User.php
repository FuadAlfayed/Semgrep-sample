<?php

class user{
	public function finduser($id){
		$db = new POD("mysql:host=localhost;dbname=test", "root", "");

		$query = "SELECT * FROM users WHERE id = $id";
		return $db->query($query);
	}
}
?>
