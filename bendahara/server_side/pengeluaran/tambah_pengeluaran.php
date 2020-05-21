<?php 
require_once '../../koneksi/conn.php';
$id_kategori = $conn->real_escape_string($_POST['id_kategori']);
$nama_bayar = $conn->real_escape_string($_POST['nama_bayar']);
$jumlah = $conn->real_escape_string($_POST['jumlah']);

$data = array();
$data['error_string'] = array();
$data['inputerror'] = array();
$data['status'] = TRUE;

if($id_kategori == ''){
	$data['inputerror'][] = 'id_kategori';
	$data['error_string'][] = 'Kategori silahkan dipilih dulu';
	$data['status'] = FALSE;
}


if($nama_bayar == ''){
	$data['inputerror'][] = 'nama_bayar';
	$data['error_string'][] = 'Nama Pembayaran di isi';
	$data['status'] = FALSE;
}

if($jumlah == ''){
	$data['inputerror'][] = 'jumlah';
	$data['error_string'][] = 'Jumlah wajib diisi';
	$data['status'] = FALSE;
}

if($data['status'] === FALSE){
	echo json_encode($data);
	exit();
}

$sql=$conn->query("INSERT INTO pembayaran VALUES ('','$id_kategori','$nama_bayar','$jumlah',NULL) ");
if ($sql) {
    echo json_encode(array("status" => TRUE));
}
?>