<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_surat_sakit WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Surat Sakit</h1>
    </div>
    <div class="col-md-auto">
    	<form action="proses_surat_sakit.php?act=updateSakit" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
		  <div class="form-group">
		    <label class="col-form-label">NIK:</label>
		    <input type="text" class="form-control" id="nik" name="nik" readonly value="<?php echo $data["nik"];?>" >
		  </div>
		  <div class="form-group">
		    <label class="col-form-label">Nama:</label>
		    <input class="form-control" id="nama" name="nama" required value="<?php echo $data["nama"];?>">
		    <script>
          $(function() {
              $( "#nama" ).autocomplete({
                  source: "ajax_surat_sakit.php",
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
		    <input class="form-control" type="text" name="waktu" id="waktu" required value="<?php echo $data["waktu"];?>">
		    <script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=waktu]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Keterangan Surat Sakit:</label>
 		     <select class="form-control" id="keterangan_surat_sakit" name="keterangan_surat_sakit" required>
		        <?php
                if ($data['keterangan_surat_sakit']== "Sudah Setor") echo "<option value='Sudah Setor' selected>Sudah Setor</option>";
                else echo "<option value='Sudah Setor'>Sudah Setor</option>";
                if ($data['keterangan_surat_sakit']== "Belum Setor") echo "<option value='Belum Setor' selected>Belum Setor</option>";
                else echo "<option value='Belum Setor'>Belum Setor</option>";
                if ($data['keterangan_surat_sakit']== "Revisi") echo "<option value='Revisi' selected>Revisi</option>";
                else echo "<option value='Revisi'>Revisi</option>";
                ?>
		    </select>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Tanggal Sektor Surat Sakit:</label>
		    <input class="form-control" type="text" name="tanggal_sektor_surat_sakit" id="tanggal" required value="<?php echo $data["tanggal_sektor_surat_sakit"];?>">
		    <script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=tanggal]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
		  </div>
		  <br>


		    <div>
		      <a href="surat_sakit.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		      <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		    </div>

		</form>
		</div>

<?php 
include '../template/footer_edit.php';
?>