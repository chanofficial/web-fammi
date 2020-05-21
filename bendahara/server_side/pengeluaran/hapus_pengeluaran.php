<?php 
require_once '../../koneksi/conn.php';
$id_bayar = $conn->real_escape_string($_GET['id_bayar']);

$sql=$conn->query("DELETE FROM pembayaran WHERE id_bayar='$id_bayar' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>