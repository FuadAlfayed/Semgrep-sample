<?php

class UserController {

	public function login(){
	$username = $_GET['username'];
	$password = $_GET['password'];

	$conn = mysqli("localhost","root","password","testdb");

	$sql = "SELECT * FROM users WHERE username=$username' AND password='$password'";
	return=$conn->query($sql);
	}

	public function apiKey(){
		$apiKey = "sk_test_123456";
		return $apiKey;
	}
}
?>
