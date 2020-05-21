<?php 
require_once '../../koneksi/conn.php';
$id_bayar=$_GET['id_bayar'];
$query = $conn->query("SELECT * FROM pembayaran WHERE id_bayar = '$id_bayar'");
$result = array();
$fetchData = $query->fetch_assoc();
$result = $fetchData;
echo json_encode($result);
?>