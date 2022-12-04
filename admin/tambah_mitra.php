<?php 
include '../template/headerAdmin.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Data Karyawan mitra</h1>
    </div>
<div class="col-md-auto">
	<form action="proses_mitra.php?act=tambahMitra" method="POST" enctype="multipart/form-data">
		<div class="form-gruop">
			<label class="col-form-label">Labor:</label>
			<input type="text" class="form-control" id="labor" name="labor" required>
		</div>

		<div class="form-group">
		  <label class="col-form-label">NIK:</label>
		  <input type="text" class="form-control" id="nik" name="nik" required >
		</div>

	 	<div class="form-group">
		  <label class="col-form-label">Nama:</label>
		  <input class="form-control" id="nama" name="nama" required >
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No KTP:</label>
			<input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No Telepon:</label>
			<input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No Telpon yang Dihubungi:</label>
			<input type="text" class="form-control" id="no_telepon_yang_dihubungi" name="no_telepon_yang_dihubungi" required>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Nama Keluarga:</label>
			<input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" required>
		</div>

		<div class="form-group">
		  <label class="col-form-label">Nama Perusahaan:</label>
		   <select class="form-control"id="nama_perusahaan" name="nama_perusahaan" required >
		      <option value='' selected>- Pilih -</option>
		      <option value="ARMADA BAHTERA INTERNASIONAL">ARMADA BAHTERA INTERNASIONAL</option>
		      <option value="ATLANTIK INTERNASIONAL AKSES">ATLANTIK INTERNASIONAL AKSES</option>
		      <option value="BANGTELINDO">BANGTELINDO</option>
		      <option value="FIBERHOME TECHNOLOGIES INDONESIA">FIBERHOME TECHNOLOGIES INDONESIA</option>
		      <option value="GARINDO TECHNO MANDIRI">GARINDO TECHNO MANDIRI</option>
		      <option value="GLOBAL SETRA JAYA">GLOBAL SETRA JAYA</option>
		      <option value="PILAR UTAMA">PILAR UTAMA</option>
		      <option value="SAWO INDAH MANDIRI">SAWO INDAH MANDIRI</option>
		      <option value="SURYA TELINDO UTAMA">SURYA TELINDO UTAMA</option>
		  </select>
		</div>

		<div class="form-group">
		  <label class="col-form-label">Position Title:</label>
		   <select class="form-control"id="position_title" name="position_title" required >
		      <option value='' selected>- Pilih -</option>
		      <option value="Teknisi Provisioning">Teknisi Provisioning</option>
		      <option value="Teknisi Migrasi">Teknisi Migrasi</option>
		      <option value="Teknisi Wilsus">Teknisi Wilsus</option>
		      <option value="Teknisi IOAN">Teknisi IOAN</option>
		      <option value="Teknisi BGES Services">Teknisi BGES Services</option>
		  </select>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Level:</label>
			<input type="text" class="form-control" id="level" name="level" value="Teknisi" readonly>
		</div>

		<div class="form-group">
                      <label class="col-form-label">STO:</label>
                      <select name="sto" id="sto" class="form-control" onchange='changeValue(this.value)' required >
                      <option value='' selected>- Pilih -</option>  
                          <?php   
                          $query1 = mysqli_query($koneksi, "select * from tb_join3 order by id_join3 esc");  
                          $result1 = mysqli_query($koneksi, "select * from tb_join3");  
                          $sektor          = "var sektor = new Array();\n;"; 
                          while ($row1 = mysqli_fetch_array($result1)) {  
                               echo '<option name="loker" value="'.$row1['loker'] . '">' . $row1['loker'] . '</option>';   
                          $sektor .= "sektor['" . $row1['loker'] . "'] = {sektor:'" . addslashes($row1['sto'])."'};\n";
                          }  
                          ?>  
                     </select>
                  </div>

		<div class="form-group">
		  <label class="col-form-label">Sektor:</label>
		  <input type="text" name="sektor" id="sektor" class="form-control" readonly>
		</div>

		<div class="form-group">
		  <label class="col-form-label">Leader:</label>
		   <select class="form-control"id="leader" name="leader" required >
		      <option value='' selected>- Pilih -</option>
		      <option value="ARI WIBOWO">ARI WIBOWO</option>
		      <option value="DEMIS NATA">DEMIS NATA</option>
		      <option value="DONI AGUS SETIAWAN">DONI AGUS SETIAWAN</option>
		      <option value="JONI SANTOSO">JONI SANTOSO</option>
		      <option value="M. RAMDHAN SAPUTRA ">M. RAMDHAN SAPUTRA </option>
		      <option value="MUHADI">MUHADI</option>
		      <option value="OKI DEDI SEPTIADI">OKI DEDI SEPTIADI</option>
		      <option value="RANDY SHANDIKA">RANDY SHANDIKA</option>
		      <option value="SUJOKO">SUJOKO</option>
		      <option value="TAUFIK KURNIAWAN">TAUFIK KURNIAWAN</option>
		      <option value="WAHYU NEFERLY KARIM">WAHYU NEFERLY KARIM</option>
		      <option value="WILHAN SANJAYA">WILHAN SANJAYA</option>
		      <option value="YASIN SUMARDIANTO">YASIN SUMARDIANTO</option>
		  </select>
		</div>

		<br>


		<div>
		  <a href="karyawan_mitra.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>
	</form>

</div>
<?php 
include '../template/footer.php';
?>