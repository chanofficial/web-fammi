<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Laporan Dana Masuk</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="#">Laporan Dana Masuk</a></li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
     <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="tanggal_awal" data-date-format="yyyy-mm-dd" readonly id="tanggal_awal" placeholder="Tanggal Awal" class="form-control form-control-line tgl">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="Tanggal Akhir" data-date-format="yyyy-mm-dd" readonly name="tanggal akhir" id="tanggal_akhir" class="form-control form-control-line tgl"> 
                    </div>
                    <div class="col-sm-4">
                    	 <button type="button" class="btn btn-warning pull-right" onclick="back()">Kembali</button>
                        <button type="button" class="btn btn-primary pull-right" onclick="lihat_laporan()" style="margin-right: 5px;">Lihat</button>
                       
                    </div>
                </div>
                <br>
                
                
                <div class="table-responsive">
                	<div id="isi_tabel">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>                     
                            </tr>
                        </thead>                        
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>
<script>
	$('.tgl').datepicker();
	function back() {
		$('#kontenku').load('page/kas_masuk.php');
	}
	function lihat_laporan() {
        
		let tgl_awal = $('#tanggal_awal').val();
		let tgl_akhir = $('#tanggal_akhir').val();
		if (tgl_awal=='' || tgl_akhir=='' ) {
			alert('harap isi tanggal terlebih dulu');
		}else{
			$('#isi_tabel').load('server_side/kas_masuk/laporan_masuk.php?tgl_awal='+tgl_awal+'&tgl_akhir='+tgl_akhir);
		}
		
	}
</script>
      