<?php 
require_once '../../koneksi/conn.php';
$tgl_awal=$_GET['tgl_awal'];
$tgl_akhir=$_GET['tgl_akhir'];
$query = $conn->query("SELECT * FROM kas_masuk WHERE DATE_FORMAT(tanggal, '%Y-%m-%d') >= '$tgl_awal' 
AND DATE_FORMAT(tanggal, '%Y-%m-%d') <= '$tgl_akhir' ");
?>
<div id="tes">
<h2>Laporan Dana Masuk Tanggal <?= $tgl_awal. ' s/d '.$tgl_akhir ?> </h2>
<table class="table" id="printed">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jumlah</th>                     
        </tr>
    </thead>
<tbody>
	<?php
$no=1;
while ($row = $query->fetch_assoc()) { ?>
	<tr>
		<td><?=$no++; ?></td>
        <td><?=$row['nama'] ?></td>
        <td><?= "Rp. ".number_format($row['jumlah']); ?></td>
    </tr>
   
    <?php 
    $total=$total+$row['jumlah'];
    }

?>

</tbody>
<tr>
    <th></th>
    <th>Total Dana Masuk</th>
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
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        pdf.save('Test.pdf');
    }, margins);
}	
</script>