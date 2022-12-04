<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah E-Surat Teguran</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_surat_teguran.php?act=tambahSurat" method="POST" enctype="multipart/form-data">
        <div class="form-group">
        	<label class="col-form-label">Nama Mgr:</label>
		  	<input type="text" name="nama_mgr" id="nk" class="form-control">
		    <script>
			    $(function() {
			        $( "#nk" ).autocomplete({
			            source: "ajax_teguran2.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_mgr]').val(data.item.nik_mgr);
			            $('input[name=posisi_mgr]').val(data.item.posisi_mgr);
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
			<label class="col-form-label">Posisi Mgr:</label>
			<input type="text" class="form-control" id="posisi_mgr" name="posisi_mgr" readonly>
		</div>

		<div class="form-group">
            <label class="col-form-label">Nama Karyawan:</label>
		    <input class="form-control" type="text" id="nama" name="nama_karyawan">
		     <script>
			    $(function() {
			        $( "#nama" ).autocomplete({
			            source: "ajax_teguran.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_karyawan]').val(data.item.nik_karyawan);
			            $('input[name=posisi_karyawan]').val(data.item.posisi_karyawan);
			            $('input[name=sub_unit]').val(data.item.sub_unit);
			            }
			        });
			    });
			</script>
        </div>

        <div class="from-group">
        	<label class="col-form-label">NIK Karyawan: </label>
			<input id="nik_karyawan" name="nik_karyawan" class="form-control" readonly>

        </div>

        <div class="from-group">
			<label class="col-form-label">Posisi Karyawan: </label>
			<input id="posisi_karyawan" name="posisi_karyawan" class="form-control" readonly>
        	
        </div>

        <div class="from-group">
			<label class="col-form-label">Sub Unit: </label>
			<input id="sub_unit" name="sub_unit" class="form-control" readonly>
        	
        </div>        

		<div class="form-group">
            <label class="col-form-label">Nama Pembuat:</label>
		    <input class="form-control" type="text" id="nama_pembuat" name="nama_pembuat">
		     <script>
			    $(function() {
			        $( "#nama_pembuat" ).autocomplete({
			            source: "ajax_teguran_1.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_pembuat]').val(data.item.nik_pembuat);
			            $('input[name=posisi_pembuat]').val(data.item.posisi_pembuat);
			            }
			        });
			    });
			</script>
        </div>

        <div class="from-group">
        	<label class="col-form-label">NIK Pembuat: </label>
			<input id="nik_pembuat" name="nik_pembuat" class="form-control" readonly>

        </div>

        <div class="from-group">
			<label class="col-form-label">Posisi Pembuat: </label>
			<input id="posisi_pembuat" name="posisi_pembuat" class="form-control" readonly>
        	
        </div>

        <div class="from-group">
        	<label class="col-form-label">Permasalahan: </label>
			<input id="permasalahan" name="permasalahan" class="form-control" required>

        </div>

        <div class="from-group">
			<label class="col-form-label">Tanggal: </label>
			<input id="tanggal" name="tanggal" class="form-control" required>
			<script>
			    $(document).ready(function () {
			        $('input[id$=tanggal]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>       	
        </div>           



		<br>


		<div>
		  <a href="surat_teguran.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>
	</form>

</div>
<?php 
include '../template/footer_edit.php';
?>
