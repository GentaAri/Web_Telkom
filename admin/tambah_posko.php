<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Posko</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_posko.php?act=tambahPosko" method="POST" enctype="multipart/form-data">
		<div class="form-gruop">
			<label class="col-form-label">NIK:</label>
			<input type="text" class="form-control" id="nik" name="nik" readonly>
		</div>
		
		<div class="form-group">
            <label class="col-form-label">Nama:</label>
		    <input class="form-control" type="text" id="nama" name="nama_kar" required>
		    <script>
			    $(function() {
			        $( "#nama" ).autocomplete({
			            source: "ajax_posko.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik]').val(data.item.nik);
			            $('input[name=posisi]').val(data.item.posisi);
			            $('input[name=level]').val(data.item.level);
			            $('input[name=per]').val(data.item.per);
			        }
			        });
			    })
			</script>
		    
        </div>

		<div class="form-gruop">
			<label class="col-form-label">Posisi:</label>
			<input type="text" class="form-control" id="posisi" name="posisi" readonly>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Level:</label>
			<input type="text" class="form-control" id="level" name="level" readonly>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Perusahaan:</label>
			<input type="text" class="form-control" id="per" name="per" readonly>
		</div>

        <div class="form-group">
            <label class="col-form-label">Tanggal:</label>
            <input type="text" id="tbDate" name="tanggal" class="form-control" required>


			<script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=tbDate]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
      </div>

      <div class="form-gruop">
			<label class="col-form-label">Kategori:</label>
			<input type="text" class="form-control" id="kat" name="kat" required>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Witel:</label>
			<input type="text" class="form-control" id="witel" name="witel" readonly value="WITEL LAMPUNG">
		</div>

		<br>


		<div>
		  <a href="posko.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>
	</form>

</div>
<?php 
include '../template/footer_edit.php';
?>