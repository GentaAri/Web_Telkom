<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_surat_teguran WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Surat Teguran</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_surat_teguran.php?act=updateSurat" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
        <div class="form-group">
        	<label class="col-form-label">Nama Mgr:</label>
		  	<input type="text" name="nama_mgr" id="nk" class="form-control"  value="<?php echo $data["nama_mgr"];?>" >
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
			<input type="text" class="form-control" id="nik_mgr" name="nik_mgr" readonly value="<?php echo $data["nik_mgr"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Posisi Mgr:</label>
			<input type="text" class="form-control" id="posisi_mgr" name="posisi_mgr" readonly value="<?php echo $data["posisi_mgr"];?>">
		</div>

		<div class="form-group">
            <label class="col-form-label">Nama Karyawan:</label>
		    <input class="form-control" type="text" id="nama" name="nama_karyawan" value="<?php echo $data["nama_karyawan"];?>">
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
			<input id="nik_karyawan" name="nik_karyawan" class="form-control" readonly value="<?php echo $data["nik_karyawan"];?>">

        </div>

        <div class="from-group">
			<label class="col-form-label">Posisi Karyawan: </label>
			<input id="posisi_karyawan" name="posisi_karyawan" class="form-control" readonly value="<?php echo $data["posisi_karyawan"];?>">
        	
        </div>

        <div class="from-group">
			<label class="col-form-label">Sub Unit: </label>
			<input id="sub_unit" name="sub_unit" class="form-control" readonly value="<?php echo $data["sub_unit"];?>">
        	
        </div>  

		<div class="form-group">
            <label class="col-form-label">Nama Pembuat:</label>
		    <input class="form-control" type="text" id="nama_pembuat" name="nama_pembuat" value="<?php echo $data["nama_pembuat"];?>">
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
			<input id="nik_pembuat" name="nik_pembuat" class="form-control" readonly value="<?php echo $data["nik_pembuat"];?>">

        </div>

        <div class="from-group">
			<label class="col-form-label">Posisi Pembuat: </label>
			<input id="posisi_pembuat" name="posisi_pembuat" class="form-control" readonly value="<?php echo $data["posisi_pembuat"];?>">
        	
        </div>

        <div class="from-group">
        	<label class="col-form-label">Permasalahan: </label>
			<input id="permasalahan" name="permasalahan" class="form-control" required value="<?php echo $data["permasalahan"];?>">

        </div>

        <div class="from-group">
			<label class="col-form-label">Tanggal: </label>
			<input id="tanggal" name="tanggal" class="form-control" required value="<?php echo $data["tanggal"];?>">
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