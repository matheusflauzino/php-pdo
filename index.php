<?php
try {
	$conn = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root");

	$query = "select * from products where id = {$_GET['id']}";
	//$query = "insert into `products` (`name`, `desc`) values ('eBook','Learn Javascript')";
	//$ret = $conn->exec($query);

	//$stmt = $conn->query($query);
	//$list = $stmt->fetchAll();

	//$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//$list = $stmt->fetchAll(PDO::FETCH_OBJ);

	//print_r($list);

	//echo $list[0]->name;

	//$list = $stmt->fetch(PDO::FETCH_OBJ);

	//print_r($list);

	//echo $list->name;

	foreach ($conn->query($query) as $product) {
		echo $product['id'] . ' ' . $product['name'];
		echo '<br />';
	}

} catch (\PDOException $e) {
	echo 'Erro! Message: ' . $e->getMessage() . ' Code: ' . $e->getCode();
}
