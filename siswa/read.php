<?php
require_once "../config/database.php";

$query = "SELECT * FROM siswa";
$stmt = $conn->prepare($query);
$stmt->execute();

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($data);
?>