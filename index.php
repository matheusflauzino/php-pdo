<?php
try {
	$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");
} catch (\PDOException $e) {
	echo 'Erro! Message: ' . $e->getMessage() . ' Code: ' . $e->getCode();
}
