<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Report Surat Sakit</h1>
    </div>
    <div class="col-md-auto">
    	<form action="proses_surat_sakit.php?act=tambahSakit" method="POST">
		  <div class="form-group">
		    <label class="col-form-label">NIK:</label>
		    <input type="text" class="form-control" id="nik" name="nik" readonly >
		  </div>
		  <div class="form-group">
		    <label class="col-form-label">Nama:</label>
		    <input class="form-control" id="nama" name="nama" required >
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
		      <input name="position_name" id="position_name" class="form-control" readonly>
		  </div>

		  <div class="form-group">
		      <label class="col-form-label">Position Title:</label>
		      <input type="text" name="position_title" id="position_title" class="form-control" readonly>
		  </div>
		  
		  <div class="form-group">
		    <label class="col-form-label">Witel:</label>
		     <input class="form-control"id="witel" name="witel" readonly value="WITEL LAMPUNG">
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Lokasi:</label>
		     <input class="form-control"id="lokasi" name="lokasi" readonly >
		  </div>
		  <!-- loker -->
		  <div class="form-group">
		      <label class="col-form-label">Loker:</label>
		      <input name="loker" id="loker" class="form-control" readonly >
		  </div>

		    <div class="form-group">
		      <label class="col-form-label">STO:</label>
		      <input type="text" name="sto" id="sto" class="form-control" readonly>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Level:</label>
		    <input type="text" name="level" id="level" class="form-control" readonly>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Sub Unit:</label>
		    <input type="text" name="sub_unit" id="sub_unit" class="form-control" readonly>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Waktu:</label>
		    <input class="form-control" type="text" name="waktu" id="waktu" required>
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
		        <option value='' selected>- Pilih -</option>
		        <option value="Sudah Setor">Sudah Setor</option>
		        <option value="Belum Setor">Belum Setor</option>
		        <option value="Revisi">Revisi</option>
		    </select>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Tanggal Sektor Surat Sakit:</label>
		    <input class="form-control" type="text" name="tanggal_sektor_surat_sakit" id="tanggal" required>
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