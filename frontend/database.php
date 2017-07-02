<?php

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=wp634','codehub','codehub');
	
}catch (PDOException $e) {
	die($e->getMessage());
}

$statement =  $pdo -> prepare('select * from  wp_commentmeta');

$statement->execute();

$data = $statement->fetchAll(PDO::FETCH_OBJ);

var_dump($data);