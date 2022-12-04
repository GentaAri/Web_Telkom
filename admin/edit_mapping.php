<?php 
include '../template/header_edit.php';
?>
<?php
$id = $_GET["id"];

$sql = "SELECT * FROM tb_mapping WHERE id = '$id'";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if(mysqli_num_rows($query) > 0){
	$data = mysqli_fetch_array($query);
}
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Mapping</h1>
    </div>
    <div class="col-md-auto">
      <form action="proses_mapping.php?act=updateMapping" method="POST" enctype="multipart/form-data">
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
                  source: "ajax_mapping.php",
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
                  $('input[name=sub_group]').val(data.item.sub_group);
                  $('input[name=group_fungsi]').val(data.item.group_fungsi);
                  $('input[name=cost_center]').val(data.item.cost_center);
                  }
              });
          });
      </script>
    </div>

    <div class="form-group">
        <label class="col-form-label">Object ID:</label>
        <input name="object_id" id="object_id" class="form-control" required value="<?php echo $data["object_id"];?>">
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
      <label class="col-form-label">Sub Group:</label>
      <input type="text" name="sub_group" id="sub_group" class="form-control" readonly value="<?php echo $data["sub_group"];?>">
    </div>

    <div class="form-group">
      <label class="col-form-label">Group Fungsi:</label>
      <input type="text" name="group_fungsi" id="group_fungsi" class="form-control" readonly value="<?php echo $data["group_fungsi"];?>">
    </div>

    <div class="form-group">
      <label class="col-form-label">Cost Center:</label>
      <input type="text" name="cost_center" id="cost_center" class="form-control" readonly value="<?php echo $data["cost_center"];?>">
    </div> 
    
    <div class="form-group">
      <label class="col-form-label">Witel:</label>
      <input class="form-control" type="text" name="witel" id="witel" value="WITEL LAMPUNG" readonly>
    </div>

    <div class="form-group">
        <label class="col-form-label">Teritory</label>
        <input type="text" name="teritory" id="teritory" class="form-control" value="TA SUMBAGSEL" readonly>
    </div>

    <div class="form-group">
        <label class="col-form-label">Regional:</label>
        <input type="text" name="regional" id="regional" class="form-control" value="SUMATERA" readonly>
    </div>

    <div class="form-group">
      <label class="col-form-label">Bizpart Id:</label>
      <input type="text" name="bizpart_id" id="bizpart_id" class="form-control" value="Fiber Zone" readonly>
    </div>

    <div class="form-group">
      <label class="col-form-label">Direktorat:</label>
      <input type="text" name="direktorat" id="direktorat" class="form-control" value="Operation & Construction West" readonly>
    </div>

    <div class="form-group">
      <label class="col-form-label">Unit:</label>
      <input type="text" name="unit" id="unit" class="form-control" value="TA Sumbagsel" readonly>
    </div>

    <div class="form-group">
      <label class="col-form-label">Lokasi:</label>
       <input class="form-control"id="lokasi" name="lokasi" readonly value="<?php echo $data["lokasi"];?>">
    </div>

    <div class="form-group">
        <label class="col-form-label">Loker:</label>
        <input name="loker" id="loker" class="form-control" readonly value="<?php echo $data["loker"];?>">
    </div>

      <div class="form-group">
        <label class="col-form-label">STO:</label>
        <input type="text" name="sto" id="sto" class="form-control" readonly value="<?php echo $data["sto"];?>">
    </div> 
    <br>


    <div>
      <a href="mapping.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
      <input type="submit" class="btn btn-info" id="submit" value="Simpan">
    </div>
    </form>
  </div>
                                


<?php 
include '../template/footer_edit.php';
?>