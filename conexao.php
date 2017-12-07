<?php

function getConnection() {
	$host = "localhost";
	$banco = "video";
	$usr = "root";
	$pwd = "";

	try {
		$conn = new PDO("mysql:host=$host; dbname=$banco", $usr, $pwd);
		return array("conxexao" => $conn, "mensagem" => "Sucesso");
	} catch (PDOException $e) {
		return array("conxexao" => null, "mensagem" => "Ocorreu o seguinte erro:<br>" . $e->getMessage());
	}
}

$teste = getConnection();
print_r($teste["mensagem"]);

?>
