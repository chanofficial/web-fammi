<?php 
require_once '../../koneksi/conn.php';
$id_kategori = $conn->real_escape_string($_POST['id_kategori']);
$nama_kategori = $conn->real_escape_string($_POST['nama_kategori']);

$data = array();
$data['error_string'] = array();
$data['inputerror'] = array();
$data['status'] = TRUE;

if($nama_kategori == ''){
	$data['inputerror'][] = 'nama_kategori';
	$data['error_string'][] = 'Nama kategori wajib di isi';
	$data['status'] = FALSE;
}


if($data['status'] === FALSE){
	echo json_encode($data);
	exit();
}

$sql=$conn->query("UPDATE kategori_bayar SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori' ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>