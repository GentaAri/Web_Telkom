<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_surat_opr WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit E-Surat Tugas</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_surat_opr.php?act=updateSurat" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
		<div class="form-group">
            <label class="col-form-label">Nama</label>
		    <input class="form-control" type="text" list="p" id="nama" name="nama" required value="<?php echo $data["nama"];?>">
        </div>

        <div class="from-group">
        	<label class="col-form-label">NIK: </label>
			<input id="nik_konseling" name="nik" class="form-control" required value="<?php echo $data["nik"];?>">

        </div>

        <div class="from-group">
			<label class="col-form-label">Jabatan: </label>
			<input id="jabatan_konseling" name="jabatan" class="form-control" required value="<?php echo $data["jabatan"];?>">
        	
        </div>

        <div class="form-group">
        	<label class="col-form-label">Nama Mgr:</label>
			<input type="text" name="nama_mgr" id="nk" class="form-control" required value="<?php echo $data["nama_mgr"];?>" >
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
			<input type="text" class="form-control" id="nik_mgr" name="nik_mgr" readonly value="<?php echo $data["nik_mgr"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Jabatan Mgr:</label>
			<input type="text" class="form-control" id="jabatan_mgr" name="jabatan_mgr" readonly value="<?php echo $data["jabatan_mgr"];?>">
		</div>


        <div class="from-group">
			<label class="col-form-label">Tanggal Mulai: </label>
			<input type="text" id="tbDate" name="tanggal_mulai" class="form-control" value="<?php echo $data["tanggal_mulai"];?>">
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
            <input type="text" id="tbDate2" name="tanggal_selesai" class="form-control" required value="<?php echo $data["tanggal_selesai"];?>">
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
      	<textarea id="penugasan" name="penugasan" class="form-control" required><?php echo $data["penugasan"];?></textarea>
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