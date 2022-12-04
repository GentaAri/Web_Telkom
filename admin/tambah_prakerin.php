<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Prakerin</h1>
    </div>
<div class="col-md-auto">
<form action="proses_prakerin.php?act=tambahPrakerin" method="POST" enctype="multipart/form-data">
	                <div class="form-group">
	                    <label class="col-form-label">Nama Sekolah:</label>
	                    <input class="form-control" id="nama_sekolah" name="nama_sekolah" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Level:</label>
	                     <select class="form-control"id="level" name="level" required >
	                        <option value='' selected>- Pilih -</option>
	                        <option value="SMK">SMK</option>
	                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
	                    </select>
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Jumlah Prakerin:</label>
	                    <input class="form-control" id="jumlah_prakerin" name="jumlah_prakerin" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Nama Prakerin:</label>
	                    <input class="form-control" id="nama_prakerin" name="nama_prakerin" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Jenis Kelamin:</label>
	                     <select class="form-control"id="jenis_kelamin" name="jenis_kelamin" required >
	                        <option value='' selected>- Pilih -</option>
	                        <option value="Laki - Laki">Laki - Laki</option>
	                        <option value="Perempuan">Perempuan</option>
	                    </select>
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Tanggal Mulai:</label>
	                    <input class="form-control" id="tanggal_mulai" name="tanggal_mulai" required >
	                <script>
		            $(function(){
		                $("#tanggal_mulai").datepicker({
		                  changeMonth: true,
		                  changeYear: true,
		                  dateFormat: 'yy-mm-dd'
		                });
		                    });
		            </script>
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Tanggal Selesai:</label>
	                    <input class="form-control" id="tanggal_selesai" name="tanggal_selesai" required >
	                <script>
		            $(function(){
		                $("#tanggal_selesai").datepicker({
		                  changeMonth: true,
		                  changeYear: true,
		                  dateFormat: 'yy-mm-dd'
		                });
		                    });
		            </script>	                    
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Status:</label>
	                     <select class="form-control"id="status" name="status" required >
	                        <option value='' selected>- Pilih -</option>
	                        <option value="Sedang Berjalan">Sedang Berjalan</option>
	                        <option value="Selesai">Selesai</option>
	                        <option value="Cancel">Cancel</option>
	                    </select>
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">PIC:</label>
	                    <input class="form-control" id="pic" name="pic" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Alokasi:</label>
	                    <input class="form-control" id="alokasi" name="alokasi" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Penilaian PIC:</label>
	                    <input class="form-control" id="penilaian_pic" name="penilaian_pic" required >
	                </div>

	                <div class="form-group">
	                    <label class="col-form-label">Keterngan Sekolah:</label>
	                     <select class="form-control"id="ket_sekolah" name="ket_sekolah" required >
	                        <option value='' selected>- Pilih -</option>
	                        <option value="Rekomendasi">Rekomendasi</option>
	                        <option value="Tidak Rekomendasi">Tidak Rekomendasi</option>
	                    </select>
	                </div>
					<br>
					<div>
					  <a href="prakerin.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
					  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
					</div> 

                </form>
              

                </div>
                                 
<?php 
include '../template/footer_edit.php';
?>