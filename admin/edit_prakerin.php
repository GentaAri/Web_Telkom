<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_prakerin WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Prakerin</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_prakerin.php?act=updatePrakerin" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
      <div class="form-group">
        <label class="col-form-label">Nama Sekolah:</label>
        <input class="form-control" id="nama_sekolah" name="nama_sekolah" required value="<?php echo $data['nama_sekolah']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Level:</label>
         <select class="form-control"id="level" name="level" required >
		<?php
		if ($data['level']== "SMK") echo "<option value='SMK' selected>SMK</option>";
		else echo "<option value='SMK'>SMK</option>";
		if ($data['level']== "Perguruan Tinggi") echo "<option value='Perguruan Tinggi' selected>Perguruan Tinggi</option>";
		else echo "<option value='Perguruan Tinggi'>Perguruan Tinggi</option>";    
		?>
        </select>
    </div>

    <div class="form-group">
        <label class="col-form-label">Jumlah Prakerin:</label>
        <input class="form-control" id="jumlah_prakerin" name="jumlah_prakerin" required value="<?php echo $data['jumlah_prakerin']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Nama Prakerin:</label>
        <input class="form-control" id="nama_prakerin" name="nama_prakerin" required value="<?php echo $data['nama_prakerin']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Jenis Kelamin:</label>
         <select class="form-control"id="jenis_kelamin" name="jenis_kelamin" required >
		<?php
		if ($data['jenis_kelamin']== "Laki - Laki") echo "<option value='Laki - Laki' selected>Laki - Laki</option>";
		else echo "<option value='Laki - Laki'>Laki - Laki</option>";
		if ($data['jenis_kelamin']== "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
		else echo "<option value='Perempuan'>Perempuan</option>";    
		?>
        </select>
    </div>

    <div class="form-group">
        <label class="col-form-label">Tanggal Mulai:</label>
        <input class="form-control" id="tanggal_mulai" name="tanggal_mulai" required value="<?php echo $data['tanggal_mulai']; ?>">
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
        <input class="form-control" id="tanggal_selesai" name="tanggal_selesai" required value="<?php echo $data['tanggal_selesai']; ?>">
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
	         <?php
			if ($data['status']== "Sedang Berjalan") echo "<option value='Sedang Berjalan' selected>Sedang Berjalan</option>";
			else echo "<option value='Sedang Berjalan'>Sedang Berjalan</option>";
			if ($data['status']== "Selesai") echo "<option value='Selesai' selected>Selesai</option>";
			else echo "<option value='Selesai'>Selesai</option>";
			if ($data['status']== "Cancel") echo "<option value='Cancel' selected>Cancel</option>";
			else echo "<option value='Cancel'>Cancel</option>"; 
			?>
        </select>
    </div>

    <div class="form-group">
        <label class="col-form-label">PIC:</label>
        <input class="form-control" id="pic" name="pic" required value="<?php echo $data['pic']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Alokasi:</label>
        <input class="form-control" id="alokasi" name="alokasi" required value="<?php echo $data['alokasi']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Penilaian PIC:</label>
        <input class="form-control" id="penilaian_pic" name="penilaian_pic" required value="<?php echo $data['penilaian_pic']; ?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Keterangan Sekolah:</label>
         <select class="form-control"id="ket_sekolah" name="ket_sekolah" required >
		<?php
		if ($data['ket_sekolah']== "Rekomendasi") echo "<option value='Rekomendasi' selected>Rekomendasi</option>";
		else echo "<option value='Rekomendasi'>Rekomendasi</option>";
		if ($data['ket_sekolah']== "Tidak Rekomendasi") echo "<option value='Tidak Rekomendasi' selected>Tidak Rekomendasi</option>";
		else echo "<option value='Tidak Rekomendasi'>Tidak Rekomendasi</option>";    
		?>
        </select>
    </div>
        
<br>
	<div>
	  <a href="prakerin.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
	  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
	</div> 
      </form>

</div>
</div>
<?php 
include '../template/footer_edit.php';
?>