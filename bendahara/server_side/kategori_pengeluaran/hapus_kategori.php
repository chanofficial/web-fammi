<?php 
require_once '../../koneksi/conn.php';
$id_kategori = $conn->real_escape_string($_GET['id_kategori']);

$sql=$conn->query("DELETE FROM kategori_bayar WHERE id_kategori='$id_kategori' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>