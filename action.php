<?php

if (isset($_POST['action']) && $_POST['action'] == 'submit') {
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	if (false == $name) {
		echo "Enter valid name, ";
		exit;
	}

	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
	if (false == $phone) {
		echo "Enter valid Phone number, ";
		exit;
	}

	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	if (false == $email) {
		echo "Enter valid email ";
		exit;
	}
}

$host = 'localhost';
$dbName = 'peervest_db';
$user = 'root';
$pass = '';

try {
	$conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbName, $user, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$statement = $conn->prepare('SELECT * FROM persons WHERE email = :email');
	if ($statement) {
		$statement->execute([
			':email' => $email
		]);

		$result = $statement->fetchAll(PDO::FETCH_ASSOC);

		if (!empty($result)) {
			echo 'Thank you, you already submited your email';
			exit;
		}
	}
	$statement = $conn->prepare('INSERT INTO persons (name, phone, email) VALUES (?, ?, ?)');
	if ($statement->execute(array($name, $phone, $email))) {
		$lastId = $conn->lastInsertId();
		echo "Contact submitted!";
		return true;
	} else {
		echo "Something went wrong!";
		return false;
	}
	// echo 'Database Success';
} catch (PDOException $e) {
	echo 'Database Error: ' . $e->getMessage();
}
