<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Presensi</h1>
    </div>
    <div class="col-md-auto">
    	<form action="proses_presensi.php?act=tambahPresensi" method="POST">
		  <div class="form-group">
		    <label class="col-form-label">NIK:</label>
		    <input type="text" class="form-control" id="nikPresensi" name="nik" readonly >
		  </div>
		  <div class="form-group">
		    <label class="col-form-label">Nama:</label>
		    <input class="form-control" id="namaPresensi" name="nama" required >
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
		    <input class="form-control" type="date" name="waktu" id="waktu" required>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Cek Kehadiran:</label>
		     <select class="form-control"id="cek_kehadiran" name="cek_kehadiran" required>
		        <option value='' selected>- Pilih -</option>
		        <option value="Belum Hadir">Belum Hadir</option>
		        <option value="Cuti">Cuti</option>
		        <option value="Hadir">Hadir</option>
		        <option value="Ijin Terlambah">Ijin Terlambah</option>
		        <option value="Ijin Pulang lebih Awal">Ijin Pulang lebih Awal</option>
		        <option value="Off">Off</option>
		        <option value="Progress Pekerjaan Malam">Progress Pekerjaan Malam</option>
		        <option value="Sakit">Sakit</option>
		        <option value="Shift Siang">Shift Siang</option>
		        <option value="SPPD">SPPD</option>
		        <option value="Terlambat">Terlambat</option>
		        <option value="Tidak Ada Keterangan">Tidak Ada Keterangan</option>
		        <option value="Tidak Ada Report Dari TL/SM">Tidak Ada Report Dari TL/SM</option>
		     </select>
		  </div>

		  <div class="form-group">
		    <label class="col-form-label">Keterangan:</label>
		     <textarea class="form-control" name="keterangan" id="keterangan" required></textarea> 
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