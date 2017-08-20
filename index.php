<?php
try {
	$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");

	$query = "select * from products";
	//$query = "insert into `products` (`name`, `desc`) values ('eBook','Learn Javascript')";
	//$ret = $conn->exec($query);
	$stmt = $conn->query($query);
	$list = $stmt->fetchAll();

	echo $list[0][1];

	//print_r($list);

} catch (\PDOException $e) {
	echo 'Erro! Message: ' . $e->getMessage() . ' Code: ' . $e->getCode();
}
