<?php 
require_once '../../koneksi/conn.php';
$id_kategori=$_GET['id_kategori'];
$query = $conn->query("SELECT * FROM kategori_bayar WHERE id_kategori = '$id_kategori'");
$result = array();
$fetchData = $query->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
?>