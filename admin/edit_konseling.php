<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_konseling WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit E-Konseling</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_konseling.php?act=updateKonseling" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
        <div class="form-group">
        	<label class="col-form-label">Nama Konselor:</label>
        	<input type="text" name="nama_konselor" id="nk" class="form-control" value="<?php echo$data["nama_konselor"]?>">
		    <script>
			    $(function() {
			        $( "#nk" ).autocomplete({
			            source: "ajax_konseling2.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_konselor]').val(data.item.nik_konselor);
			            $('input[name=jabatan_konselor]').val(data.item.jabatan_konselor);
			            }
			        });
			    });
			</script>
		</div>
		

		<div class="form-gruop">
			<label class="col-form-label">NIK Konselor:</label>
			<input type="text" class="form-control" id="nik_konselor" name="nik_konselor" required value="<?php echo $data["nik_konselor"];?>" readonly>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Jabatan Konselor:</label>
			<input type="text" class="form-control" id="jabatan_konselor" name="jabatan_konselor" required value="<?php echo $data["jabatan_konselor"];?>" readonly>
		</div>

		<div class="form-group">
            <label class="col-form-label">Nama Konseling</label>
		    <input class="form-control" type="text" id="nama" name="nama_konseling" required value="<?php echo $data["nama_konseling"];?>">
		    <script>
			    $(function() {
			        $( "#nama" ).autocomplete({
			            source: "ajax_konseling.php",
			            minLength: 1,
			            select: function( event, data ) {
			            // $('#sub_unit').val(ui.item.sub_unit);
			            $('input[name=nik_konseling]').val(data.item.nik_konseling);
			            $('input[name=jabatan_konseling]').val(data.item.jabatan_konseling);
			            $('input[name=lokasi_kerja_konseling]').val(data.item.lokasi_kerja_konseling);
			            }
			        });
			    });
			</script>
		    
        </div>

        <div class="from-group">
        	<label class="col-form-label">NIK Konseling: </label>
			<input id="nik_konseling" name="nik_konseling" class="form-control" value="<?php echo $data["nik_konseling"];?>" readonly>

        </div>

        <div class="from-group">
			<label class="col-form-label">Jabatan Konseling: </label>
			<input id="jabatan_konseling" name="jabatan_konseling" class="form-control" value="<?php echo $data["jabatan_konseling"];?>" readonly>
        	
        </div>

        <div class="from-group">
			<label class="col-form-label">Lokasi Kerja Konseling: </label>
			<input id="lokasi_kerja_konseling" name="lokasi_kerja_konseling" class="form-control" value="<?php echo $data["lokasi_kerja_konseling"];?>" readonly>
        	
        </div>

        <div class="form-group">
            <label class="col-form-label">Tanggal:</label>
            <input type="text" id="tbDate" name="tanggal" class="form-control" required value="<?php echo $data["tanggal"];?>">
            <script>
			    $(document).ready(function () {
			    
			    // shows 'DD, d MM, yy' (or full) format. Also shows the day of the week.
			        $('input[id$=tbDate]').datepicker({
			    		dateFormat: 'yy-mm-dd'
					});
			    });
			</script>
      </div>

      <div class="form_group">
      	<label class="col_form_label">Permasalahan</label>
      	<textarea id="permasalahan" name="permasalahan" class="form-control" required ><?php echo $data["permasalahan"];?></textarea>
      </div>

      <div class="form_group">
      	<label class="col_form_label">Tanggapan Terhadap Permasalahan</label>
      	<textarea id="tanggapan_terhadap_permasalahan" name="tanggapan_terhadap_permasalahan" class="form-control" required><?php echo $data["tanggapan_terhadap_permasalahan"];?></textarea>
      	
      </div>

      <div class="form_group">
      	<label class="col_form_label">Usulan</label>
      	<textarea id="usulan" name="usulan" class="form-control" required><?php echo $data["usulan"];?></textarea>
      	
      </div>
		<br>


		<div>
		  <a href="konseling.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>
	</form>

</div>
<?php 
include '../template/footer_edit.php';
?>