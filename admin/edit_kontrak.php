<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_kontrak WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Kontrak</h1>
    </div>
<div class="col-md-auto">
 <form action="proses_kontrak.php?act=updateKontrak" method="POST" enctype="multipart/form-data">
 		<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
        <div class="form-group">
        <label class="col-form-label">NIK:</label>
        <input type="text" class="form-control" id="nik" name="nik" readonly value="<?php echo $data["nik"];?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Nama:</label>
        <input class="form-control" id="nama" name="nama" required value="<?php echo $data["nama"];?>">
        <script>
          $(function() {
              $( "#nama" ).autocomplete({
                  source: "ajax_kontrak.php",
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
                  $('input[name=status_kerja]').val(data.item.status_kerja);
                  $('input[name=mitra_kerja]').val(data.item.mitra_kerja);
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
        <label class="col-form-label">Level:</label>
        <input type="text" name="level" id="level" class="form-control" readonly value="<?php echo $data["level"];?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Sub Unit:</label>
        <input type="text" name="sub_unit" id="sub_unit" class="form-control" readonly value="<?php echo $data["sub_unit"];?>">
      </div>
      
      <div class="form-group">
        <label class="col-form-label">Witel:</label>
         <input class="form-control" id="witel" name="witel" value="WITEL LAMPUNG" readonly value="<?php echo $data["witel"];?>">
      </div>

      <div class="form-group">
          <label class="col-form-label">Loker:</label>
          <input name="loker" id="loker" class="form-control" readonly value="<?php echo $data["loker"];?>">
      </div>

        <div class="form-group">
          <label class="col-form-label">STO:</label>
          <input type="text" name="sto" id="sto" class="form-control" readonly value="<?php echo $data["sto"];?>">
      </div>
      
      <div class="form-group">
        <label class="col-form-label">Status Kerja:</label>
         <input class="form-control"id="status_kerja" name="status_kerja" readonly value="<?php echo $data["status_kerja"];?>">
      </div>

      <div class="form-group">
            <label class="col-form-label">Tanggal Mulai Kerja:</label>
            <input type="text" id="tanggal" name="tanggal_mulai_kerja" class="form-control" required value="<?php echo $data["tanggal_mulai_kerja"];?>">
            <script>
            $(function(){
                $("#tanggal").datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'yy-mm-dd'
                });
                    });
            </script>
      </div>

      <div class="form-group">
            <label class="col-form-label">Tanggal Awal Kontrak:</label>
            <input type="text" id="tanggal2" name="tanggal_awal_kontrak" class="form-control" required value="<?php echo $data["tanggal_awal_kontrak"];?>">
            <script>
            $(function(){
                $("#tanggal2").datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'yy-mm-dd'
                });
                    });
            </script>
      </div>

      <div class="form-group">
            <label class="col-form-label">Tanggal Akhir Kontrak:</label>
            <input type="text" id="tanggal3" name="tanggal_akhir_kontrak" class="form-control" required value="<?php echo $data["tanggal_akhir_kontrak"];?>">
            <script>
            $(function(){
                $("#tanggal3").datepicker({
                  changeMonth: true,
                  changeYear: true,
                  dateFormat: 'yy-mm-dd'
                });
                    });
            </script>
      </div>

      <div class="form-group">
        <label class="col-form-label">Nomor Kontrak:</label>
        <input type="text" name="nomor_kontrak" id="nomor_kontrak" class="form-control" required value="<?php echo $data["nomor_kontrak"];?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Kontrak ke:</label>
         <input class="form-control" id="kontrak_ke" name="kontrak_ke" required value="<?php echo $data["kontrak_ke"];?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Mitra Kerja:</label>
         <input class="form-control"id="mitra_kerja" name="mitra_kerja" readonly value="<?php echo $data["mitra_kerja"];?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload PM</label>
        <input type="file" class="form-control-file" id="pm" name="upload_pm" accept="application/pdf">
        <input type="hidden" name="pm_lama" value="<?php echo $data['upload_pm'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K1 TA</label>
        <input type="file" class="form-control-file" id="k1_ka" name="upload_k1_ka" accept="application/pdf">
        <input type="hidden" name="k1_ka_lama" value="<?php echo $data['upload_k1_ka'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K2 TA</label>
        <input type="file" class="form-control-file" id="k2_ka" name="upload_k2_ka" accept="application/pdf">
        <input type="hidden" name="k2_ka_lama" value="<?php echo $data['upload_k2_ka'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K3 TA</label>
        <input type="file" class="form-control-file" id="k3_ka" name="upload_k3_ka" accept="application/pdf">
        <input type="hidden" name="k3_ka_lama" value="<?php echo $data['upload_k3_ka'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K1 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="k1_ins" name="upload_k1_ins" accept="application/pdf">
        <input type="hidden" name="k1_ins_lama" value="<?php echo $data['upload_k1_ins'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K2 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="k2_ins" name="upload_k2_ins" accept="application/pdf">
        <input type="hidden" name="k2_ins_lama" value="<?php echo $data['upload_k2_ins'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload K3 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="k3_ins" name="upload_k3_ins" accept="application/pdf">
        <input type="hidden" name="k3_ins_lama" value="<?php echo $data['upload_k3_ins'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload A1 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="a1_ins" name="upload_a1_ins" accept="application/pdf">
        <input type="hidden" name="a1_ins_lama" value="<?php echo $data['upload_a1_ins'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload A2 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="a2_ins" name="upload_a2_ins" accept="application/pdf">
        <input type="hidden" name="a2_ins_lama" value="<?php echo $data['upload_a2_ins'] ?>">
      </div>

      <div class="form-group">
        <label class="col-form-label">Upload A3 KEMITRAAN</label>
        <input type="file" class="form-control-file" id="a3_ins" name="upload_a3_ins" accept="application/pdf">
        <input type="hidden" name="a3_ins_lama" value="<?php echo $data['upload_a3_ins'] ?>">
      </div>
         
    <div>
      <a href="kontrak.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
      <input type="submit" class="btn btn-info" id="submit" value="Simpan">
    </div>
    </form>

</div>
<?php 
include '../template/footer_edit.php';
?>