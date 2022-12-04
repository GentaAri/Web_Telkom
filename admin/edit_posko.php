<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_posko WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Posko</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_posko.php?act=updatePosko" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
		<div class="form-gruop">
			<label class="col-form-label">NIK:</label>
			<input type="text" class="form-control" id="nik" name="nik" readonly value="<?php echo $data["nik"];?>">
		</div>
		
		<div class="form-group">
            <label class="col-form-label">Nama:</label>
		    <input class="form-control" type="text" id="nama" name="nama_kar" required value="<?php echo $data["nama"];?>">
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
			<input type="text" class="form-control" id="posisi" name="posisi" readonly  value="<?php echo $data["posisi"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Level:</label>
			<input type="text" class="form-control" id="level" name="level" readonly  value="<?php echo $data["level"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Perusahaan:</label>
			<input type="text" class="form-control" id="per" name="per" readonly  value="<?php echo $data["perusahaan"];?>">
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

      <div class="form-gruop">
			<label class="col-form-label">Kategori:</label>
			<input type="text" class="form-control" id="kat" name="kat" required value="<?php echo $data["kategori"];?>">
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