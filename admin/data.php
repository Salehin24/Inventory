<?php 
	require 'dbconn.php';

	if(isset($_POST['did'])) {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM customer WHERE district_id = " . $_POST['did']);
		$stmt->execute();
		$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($customers);
	}

	function loadDistricts() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM district");
		$stmt->execute();
		$districts = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $districts;
	}

	function loadInfo() {
		$db = new DbConnect;
		$conn = $db->connect();

		$stmt = $conn->prepare("SELECT * FROM sales");
		$stmt->execute();
		$info = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $info;
	}


 ?>