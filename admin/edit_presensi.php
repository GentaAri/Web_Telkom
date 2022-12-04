<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_presensi WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Presensi</h1>
    </div>
    <div class="col-md-auto">
    	<form action="proses_presensi.php?act=updatePresensi" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
		  <div class="form-group">
		    <label class="col-form-label">NIK:</label>
		    <input type="text" class="form-control" id="nikPresensi" name="nik" readonly value="<?php echo $data["nik"];?>" >
		  </div>
		  <div class="form-group">
		    <label class="col-form-label">Nama:</label>
		    <input class="form-control" id="namaPresensi" name="nama" required value="<?php echo $data["nama"];?>">
		    <script>
          $(function() {
              $( "#namaPresensi" ).autocomplete({
                  source: "ajax_presensi.php",
                  minLength: 1,
                  select: function( event, data ) {
                  $('input[name=nik]').val(data.item.nik);
                  $('input[name=position_name]').val(data.item.position_name);
                  $('input[name=position_title]').val(data.item.position_title);
                  $('input[name=lokasi]').val(data.item.lokasi);
                  $('input[name=loker]').val(data.item.loker);
                  $('input[name=sto]').val(data.item.sto);
                  $('input[name=level]').val(data.item.level);
                  $('input[name=sub_unit]').val(data.item.sub_unit);
                  }
              });
          });
      </script>
		  </div>
		  <div class="form-group">
		      <label class="col-form-label">Position Name:</label>
		      <input name="position_name" id="position_name" class="form-control" readonly value="<?php echo $data["position_name"];?>">
		  </div>

		  <div class="form-group">
		      <label class="col-form-label">Position Title:</label>
		      <input type="text" name="position_title" id="position_title" class="form-control" readonly value="<?php echo $data["position_title"];?>">
		  </div>
		  
		  <div class="form-group">
		    <label class="col-form-label">Witel:</label>
		     <input class="form-control"id="witel" name="witel" readonly value="WITEL LAMPUNG">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Lokasi:</label>
		     <input class="form-control"id="lokasi" name="lokasi" readonly value="<?php echo $data["lokasi"];?>">
		  </div>
		  <!-- loker -->
		  <div class="form-group">
		      <label class="col-form-label">Loker:</label>
		      <input name="loker" id="loker" class="form-control" readonly value="<?php echo $data["loker"];?>">
		  </div>

		    <div class="form-group">
		      <label class="col-form-label">STO:</label>
		      <input type="text" name="sto" id="sto" class="form-control" readonly value="<?php echo $data["sto"];?>">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Level:</label>
		    <input type="text" name="level" id="level" class="form-control" readonly value="<?php echo $data["level"];?>">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Sub Unit:</label>
		    <input type="text" name="sub_unit" id="sub_unit" class="form-control" readonly value="<?php echo $data["sub_unit"];?>">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Waktu:</label>
		    <input class="form-control" type="date" name="waktu" id="waktu" required value="<?php echo $data["waktu"];?>">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Cek Kehadiran:</label>
		     <select class="form-control"id="cek_kehadiran" name="cek_kehadiran" required>
		        <?php
                if ($data['cek_kehadiran']== "Belum Hadir") echo "<option value='Belum Hadir' selected>Belum Hadir</option>";
                else echo "<option value='Belum Hadir'>Belum Hadir</option>";
                if ($data['cek_kehadiran']== "Cuti") echo "<option value='Cuti' selected>Cuti</option>";
                else echo "<option value='Cuti'>Cuti</option>";
                if ($data['cek_kehadiran']== "Hadir") echo "<option value='Hadir' selected>Hadir</option>";
                else echo "<option value='Hadir'>Hadir</option>";
                if ($data['cek_kehadiran']== "Ijin Terlambat") echo "<option value='Ijin Terlambat' selected>Ijin Terlambat</option>";
                else echo "<option value='Ijin Terlambat'>Ijin Terlambat</option>";
                if ($data['cek_kehadiran']== "Ijin Pulang lebih Awal") echo "<option value='Ijin Pulang lebih Awal' selected>Ijin Pulang lebih Awal</option>";
                else echo "<option value='Ijin Pulang lebih Awal'>Ijin Pulang lebih Awal</option>";
                if ($data['cek_kehadiran']== "Off") echo "<option value='Off' selected>Off</option>";
                else echo "<option value='Off'>Off</option>";
                if ($data['cek_kehadiran']== "Progress Pekerjaan Malam") echo "<option value='Progress Pekerjaan Malam' selected>Progress Pekerjaan Malam</option>";
                else echo "<option value='Progress Pekerjaan Malam'>Progress Pekerjaan Malam</option>";
                if ($data['cek_kehadiran']== "Sakit") echo "<option value='Sakit' selected>Sakit</option>";
                else echo "<option value='Sakit'>Sakit</option>";
                if ($data['cek_kehadiran']== "Shift Siang") echo "<option value='Shift Siang' selected>Shift Siang</option>";
                else echo "<option value='Shift Siang'>Shift Siang</option>";
                if ($data['cek_kehadiran']== "SPPD") echo "<option value='SPPD' selected>SPPD</option>";
                else echo "<option value='SPPD'>SPPD</option>";
                if ($data['cek_kehadiran']== "Terlambat") echo "<option value='Terlambat' selected>Terlambat</option>";
                else echo "<option value='Terlambat'>Terlambat</option>";
                if ($data['cek_kehadiran']== "Tidak Ada Keterangan") echo "<option value='Tidak Ada Keterangan' selected>Tidak Ada Keterangan</option>";
                else echo "<option value='Tidak Ada Keterangan'>Tidak Ada Keterangan</option>";
                if ($data['cek_kehadiran']== "Tidak Ada Report Dari TL/SM") echo "<option value='Tidak Ada Report Dari TL/SM' selected>Tidak Ada Report Dari TL/SM</option>";
                else echo "<option value='Tidak Ada Report Dari TL/SM'>Tidak Ada Report Dari TL/SM</option>"; 
                ?>
		    </select>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Keterangan:</label>
		     <textarea class="form-control" name="keterangan" id="keterangan" required><?php echo $data["keterangan"];?></textarea> 
		  </div>
		  <br>


		    <div>
		      <a href="presensi.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		      <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		    </div>

		</form>
		</div>

<?php 
include '../template/footer_edit.php';
?>