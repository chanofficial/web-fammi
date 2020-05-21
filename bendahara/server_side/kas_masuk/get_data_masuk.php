<?php 
require_once '../../koneksi/conn.php';
$id=$_GET['id'];
$query = $conn->query("SELECT * FROM kas_masuk WHERE id = '$id'");
$result = array();
$fetchData = $query->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
?>