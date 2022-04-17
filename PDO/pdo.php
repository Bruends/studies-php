<?php
// -> PDO (PHP Data objects)
// is an interface to access databases in PHP

// configs
$dbHost = "localhost";
$dbName = "Phonebook";
$user = "root";
$password = "";

// connection uri with mysql driver
$dns = "mysql:host=$dbHost;dbname=$dbName";

// create an instance of the pdo 
$pdoCon = new PDO($dns, $user, $password);

// -> simple query
$query = "SELECT * FROM contacts";
// queries return a statement object
$stmt = $pdoCon->query($query);
// get the data from a statement obj by fetching 
$result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
print_r($result);

// -> Prepared statements
// prepare a query with placeholders for values 
// that will be executed by the 'execute' command
// placeholders can have 2 formats ':value' or '?'
$query = "SELECT * FROM contacts WHERE id = :id";
$stmt = $pdoCon->prepare($query);

// executing the query 
// passing all the values for the placeholders
$res = $stmt->execute([
  ":id" => 1
]);

print_r($stmt->fetch(PDO::FETCH_ASSOC));

echo $res;
