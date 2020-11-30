<?php

// Fetching Values From URL
$name2 = $_POST['name1'];
$phone2 = $_POST['phone1'];
$email2 = $_POST['email1'];
$dbc = mysqli_connect('localhost', 'root', '', 'peervest_db'); // Establishing Connection with Server..
//$db = mysql_select_db("mydba", $dbc); // Selecting Database
if (isset($_POST['name1'])) {
	$query = "INSERT INTO form_element (name, phone, email) 
VALUES ('$name2', '$phone2', '$email2')";
	$result = mysqli_query($dbc, $query); //Insert Query
	echo "Form Submitted succesfully";
}
mysqli_close($dbc); // Connection Closed







// $error = false;

// $ref_id = strtoupper(uniqid());
// $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
// $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
// $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

// // establishing connection to server
// $database_connect = mysqli_connect("localhost", "root", "", "peervest_db")
// 	or die("Error connecting to MySQL server.");

// if (!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email'])) {
// 	$output = json_encode(array('type' => 'error', 'text' => 'inputfields are empty!'));
// 	die($output);
// } else {
// 	$query = "INSERT INTO persons (ref_id, name, phone, email) VALUES ('$ref_id', '$name', '$phone', '$email')";
// 	$result = mysqli_query($database_connect, $query)
// 		or die('Error quering result');
// 	echo "Thank you $name, your interest has been registered";
// 	mysqli_close($database_connect);
// }

// Close connection
// mysqli_close($link);
