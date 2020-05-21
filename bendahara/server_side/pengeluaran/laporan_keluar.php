<?php 
require_once '../../koneksi/conn.php';
$tgl_awal=$_GET['tgl_awal'];
$tgl_akhir=$_GET['tgl_akhir'];
$query = $conn->query("
						SELECT 
						a.nama_bayar,
						b.nama_kategori,
						SUM(a.jumlah) as jumlah
						from pembayaran a
						INNER JOIN kategori_bayar b 
						ON (a.id_kategori=b.id_kategori)
						WHERE DATE_FORMAT(tanggal, '%Y-%m-%d') >= '$tgl_awal' 
						AND DATE_FORMAT(tanggal, '%Y-%m-%d') <= '$tgl_akhir'
						GROUP BY b.nama_kategori asc, a.nama_bayar asc
");
?>
<div id="tes">
<h2>Laporan Dana Pengeluaran Tanggal <?= $tgl_awal. ' s/d '.$tgl_akhir ?> </h2>
<table class="table" id="printed">
    <thead>
        <tr>
            <th>No</th>
            <th>Pembayaran</th>
            <th>Kategori</th>
            <th>Jumlah</th>                     
        </tr>
    </thead>
<tbody>
	<?php
$no=1;
while ($row = $query->fetch_assoc()) { ?>
	<tr>
		<td><?=$no++; ?></td>
        <td><?=$row['nama_bayar'] ?></td>
        <td><?=$row['nama_kategori'] ?></td>
        <td><?= "Rp. ".number_format($row['jumlah']); ?></td>
    </tr>
   
    <?php 
    $total=$total+$row['jumlah'];
    }

?>

</tbody>
<tr>
    <th></th>
    <th>Total Pengeluaran</th>
    <th></th>
    <td><b><?= "Rp. ".number_format($total); ?></b></td>
</tr>
</table>
	
</div>
<div class="row">
	<div class="col-sm-12">
	<button type="button" class="btn btn-success" onclick="print()">Print PDF</button>
	</div>
</div>

<script>
	


function print() {
   var pdf = new jsPDF('p', 'pt', 'letter');
    source = $('#tes')[0];
    specialElementHandlers = {
        '#bypassme': function (element, renderer) {
            return true
        }
    };
    margins = {
        top: 40,
        bottom: 40,
        left: 80,
        width: 700
    };
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        pdf.save('Laporan-pengeluaran.pdf');
    }, margins);
}	
</script>