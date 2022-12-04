<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah E-Surat Tugas</h1>
    </div>
</div>
<div class="col-md-auto">
	<form action="proses_surat_opr.php?act=tambahSurat" method="POST" enctype="multipart/form-data">
		<button type="button" class="btn btn-info btn-flat btn-sm" id="btn-tambah-form">Tambah Nama Form</button>
		<button type="button" id="btn-reset-form" class="btn btn-success btn-flat btn-sm">Reset Nama Form</button><br><br>
		<b>Nama ke 1 :</b>

		<div class="form-group">
            <label class="col-form-label">Nama</label>
		    <input class="form-control" type="text" id="nama" name="nama[]" required>
        </div>

        <div class="from-group">
        	<label class="col-form-label">NIK: </label>
			<input id="nik" name="nik[]" class="form-control" required>

        </div>
        
        <div class="from-group">
			<label class="col-form-label">Jabatan: </label>
			<input id="jabatan" name="jabatan[]" class="form-control" required>
        </div>
        <div id="insert-form"></div>
        <input type="hidden" id="jumlah-form" value="1">

        <hr>
        <script>
		$(document).ready(function(){ // Ketika halaman sudah diload dan siap
			$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
				var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
				var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
				
				// Kita akan menambahkan form dengan menggunakan append
				// pada sebuah tag div yg kita beri id insert-form
				$("#insert-form").append("<b>Nama ke " + nextform + " :</b>" +
					"<div class='form-group'>"+
					"<label class='col-form-label'>Nama</label>"+
					"<input class='form-control' type='text' id='nama' name='nama[]' required>"+

					"<div class='form-group'>"+
					"<label class='col-form-label'>NIk</label>"+
					"<input class='form-control' type='text' id='nik' name='nik[]' required>"+
					
					"<div class='form-group'>"+
					"<label class='col-form-label'>Jabatan</label>"+
					"<input class='form-control' type='text' id='jabatan' name='jabatan[]' required>"+
					
					
					"<br>");
				
				$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
			});
			
			// Buat fungsi untuk mereset form ke semula
			$("#btn-reset-form").click(function(){
				$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
				$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
			});
		});
		</script>

        <div class="form-group">
        	<label class="col-form-label">Nama Mgr:</label>
			<input type="text" name="nama_mgr" id="nk" class="form-control">
		    <script>
			    $(function() {
			        $( "#nk" ).autocomplete({
			            source: "ajax_surat2.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_mgr]').val(data.item.nik_mgr);
			            $('input[name=jabatan_mgr]').val(data.item.jabatan_mgr);
			            }
			        });
			    });
			</script>	
		</div>
		

		<div class="form-gruop">
			<label class="col-form-label">NIK Mgr:</label>
			<input type="text" class="form-control" id="nik_mgr" name="nik_mgr" readonly>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Jabatan Mgr:</label>
			<input type="text" class="form-control" id="jabatan_mgr" name="jabatan_mgr" readonly>
		</div>

        <div class="from-group">
			<label class="col-form-label">Tanggal Mulai: </label>
			<input type="text" id="tbDate" name="tanggal_mulai" class="form-control">
			<script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=tbDate]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
        </div>

        <div class="form-group">
            <label class="col-form-label">Tanggal Selesai:</label>
            <input type="text" id="tbDate2" name="tanggal_selesai" class="form-control" required>
            <script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=tbDate2]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
      </div>

      <div class="form_group">
      	<label class="col_form_label">Penugasan</label>
      	<textarea id="penugasan" name="penugasan" class="form-control" required></textarea>
      </div>      

		<br>


		<div>
		  <a href="surat_opr.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>
	</form>

</div>
<?php 
include '../template/footer_edit.php';
?>