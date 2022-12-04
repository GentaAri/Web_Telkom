<?php 
include '../template/headerAdmin.php';
?>
	<?php
	$id = $_GET["id"];

	$sql = "SELECT * FROM tb_karyawan_mitra_operasi WHERE id = '$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if(mysqli_num_rows($query) > 0){
		$data = mysqli_fetch_array($query);
	}
	?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Data Karyawan Mitra</h1>
    </div>

     <form action="proses_mitra.php?act=updateMitra" method="POST" enctype="multipart/form-data">
     	<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
     	<input type="hidden" name="id_kar" value="<?php echo $data["id_kar"];?>" >
		<div class="form-gruop">
			<label class="col-form-label">Labor:</label>
			<input type="text" class="form-control" id="labor" name="labor" required value="<?php echo $data["labor"];?>">
		</div>

		<div class="form-group">
		  <label class="col-form-label">NIK:</label>
		  <input type="text" class="form-control" id="nik" name="nik" required value="<?php echo $data["nik"];?>">
		</div>

	 	<div class="form-group">
		  <label class="col-form-label">Nama:</label>
		  <input class="form-control" id="nama" name="nama" required value="<?php echo $data["nama"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No KTP:</label>
			<input type="text" class="form-control" id="no_ktp" name="no_ktp" required value="<?php echo $data["no_ktp"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No Telepon:</label>
			<input type="text" class="form-control" id="no_telepon" name="no_telepon" required value="<?php echo $data["no_telepon"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">No Telpon yang Dihubungi:</label>
			<input type="text" class="form-control" id="no_telepon_yang_dihubungi" name="no_telepon_yang_dihubungi" required value="<?php echo $data["no_telepon_yang_dihubungi"];?>">
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Nama Keluarga:</label>
			<input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" required value="<?php echo $data["nama_keluarga"];?>">
		</div>

		<div class="form-group">
		  <label class="col-form-label">Nama Perusahaan:</label>
		   <select class="form-control"id="nama_perusahaan" name="nama_perusahaan" required >
		      <?php
				if ($data['nama_perusahaan']== "ARMADA BAHTERA INTERNASIONAL") echo "<option value='ARMADA BAHTERA INTERNASIONAL' selected>ARMADA BAHTERA INTERNASIONAL</option>";
				else echo "<option value='ARMADA BAHTERA INTERNASIONAL'>ARMADA BAHTERA INTERNASIONAL</option>";
				if ($data['nama_perusahaan']== "ATLANTIK INTERNASIONAL AKSES") echo "<option value='ATLANTIK INTERNASIONAL AKSES' selected>ATLANTIK INTERNASIONAL AKSES</option>";
				else echo "<option value='ATLANTIK INTERNASIONAL AKSES'>ATLANTIK INTERNASIONAL AKSES</option>";
				if ($data['nama_perusahaan']== "BANGTELINDO") echo "<option value='BANGTELINDO' selected>BANGTELINDO</option>";
				else echo "<option value='BANGTELINDO'>BANGTELINDO</option>";
				if ($data['nama_perusahaan']== "FIBERHOME TECHNOLOGIES INDONESIA") echo "<option value='FIBERHOME TECHNOLOGIES INDONESIA' selected>FIBERHOME TECHNOLOGIES INDONESIA</option>";
				else echo "<option value='FIBERHOME TECHNOLOGIES INDONESIA'>FIBERHOME TECHNOLOGIES INDONESIA</option>";
				if ($data['nama_perusahaan']== "GARINDO TECHNO MANDIRI") echo "<option value='GARINDO TECHNO MANDIRI' selected>GARINDO TECHNO MANDIRI</option>";
				else echo "<option value='GARINDO TECHNO MANDIRI'>GARINDO TECHNO MANDIRI</option>";
				if ($data['nama_perusahaan']== "GLOBAL SETRA JAYA") echo "<option value='GLOBAL SETRA JAYA' selected>GLOBAL SETRA JAYA</option>";
				else echo "<option value='GLOBAL SETRA JAYA'>GLOBAL SETRA JAYA</option>";
				if ($data['nama_perusahaan']== "PILAR UTAMA") echo "<option value='PILAR UTAMA' selected>PILAR UTAMA</option>";
				else echo "<option value='PILAR UTAMA'>PILAR UTAMA</option>";
				if ($data['nama_perusahaan']== "SAWO INDAH MANDIRI") echo "<option value='SAWO INDAH MANDIRI' selected>SAWO INDAH MANDIRI</option>";
				else echo "<option value='SAWO INDAH MANDIRI'>SAWO INDAH MANDIRI</option>";
				if ($data['nama_perusahaan']== "SURYA TELINDO UTAMA") echo "<option value='SURYA TELINDO UTAMA' selected>SURYA TELINDO UTAMA</option>";
				else echo "<option value='SURYA TELINDO UTAMA'>SURYA TELINDO UTAMA</option>";	   		   
				?>
		  </select>
		</div>

		<div class="form-group">
		  <label class="col-form-label">Position Title:</label>
		   <select class="form-control"id="position_title" name="position_title" required >
		      <?php
				if ($data['position_title']== "Teknisi Provisioning") echo "<option value='Teknisi Provisioning' selected>Teknisi Provisioning</option>";
				else echo "<option value='Teknisi Provisioning'>Teknisi Provisioning</option>";
				if ($data['position_title']== "Teknisi Migrasi") echo "<option value='Teknisi Migrasi' selected>Teknisi Migrasi</option>";
				else echo "<option value='Teknisi Migrasi'>Teknisi Migrasi</option>";
				if ($data['position_title']== "Teknisi Wilsus") echo "<option value='Teknisi Wilsus' selected>Teknisi Wilsus</option>";
				else echo "<option value='Teknisi Wilsus'>Teknisi Wilsus</option>";
				if ($data['position_title']== "Teknisi IOAN") echo "<option value='Teknisi IOAN' selected>Teknisi IOAN/option>";
				else echo "<option value='Teknisi IOAN'>Teknisi IOAN</option>";
				if ($data['position_title']== "Teknisi BGES Services") echo "<option value='Teknisi BGES Services' selected>Teknisi BGES Services</option>";
				else echo "<option value='Teknisi BGES Services'>Teknisi BGES Services</option>";		   		   
				?>
		  </select>
		</div>

		<div class="form-gruop">
			<label class="col-form-label">Level:</label>
			<input type="text" class="form-control" id="level" name="level" value="Teknisi" readonly>
		</div>

		<div class="form-group">
                      <label class="col-form-label">STO:</label>
                      <select name="sto" id="sto" class="form-control" onchange='changeValue(this.value)' required >
                      <?php
				       $query_sto="SELECT * FROM tb_join3";
				       $sql_sto=mysqli_query($koneksi, $query_sto);
				       while ($data_sto=mysqli_fetch_array($sql_sto)) {
				        if ($data['loker']==$data_sto['loker']) {
				         $select="selected";
				        }else{
				         $select="";
				        }
				        echo "<option $select>".$data_sto['loker']."</option>";
				       }
				      ?> 
                          <?php   
                          $query1 = mysqli_query($koneksi, "select * from tb_join3 order by id_join3 esc");  
                          $result1 = mysqli_query($koneksi, "select * from tb_join3");  
                          $sektor          = "var sektor = new Array();\n;"; 
                          while ($row1 = mysqli_fetch_array($result1)) {  
                               '<option name="loker" value="'.$row1['loker'] . '">' . $row1['loker'] . '</option>';   
                          $sektor .= "sektor['" . $row1['loker'] . "'] = {sektor:'" . addslashes($row1['sto'])."'};\n";
                          }  
                          ?>  
                     </select>
                  </div>

		<div class="form-group">
		  <label class="col-form-label">Sektor:</label>
		  <input type="text" name="sektor" id="sektor" class="form-control" readonly value="<?php echo $data["sektor"];?>">
		</div>

		<div class="form-group">
		  <label class="col-form-label">Leader:</label>
		   <select class="form-control"id="leader" name="leader" required >
		      <?php
				if ($data['leader']== "ARI WIBOWO") echo "<option value='ARI WIBOWO' selected>ARI WIBOWO</option>";
				else echo "<option value='ARI WIBOWO'>ARI WIBOWO</option>";
				if ($data['leader']== "DEMIS NATA") echo "<option value='DEMIS NATA' selected>DEMIS NATA</option>";
				else echo "<option value='DEMIS NATA'>DEMIS NATA</option>";
				if ($data['leader']== "DONI AGUS SETIAWAN") echo "<option value='DONI AGUS SETIAWAN' selected>DONI AGUS SETIAWAN</option>";
				else echo "<option value='DONI AGUS SETIAWAN'>DONI AGUS SETIAWAN</option>";
				if ($data['leader']== "JONI SANTOSO") echo "<option value='JONI SANTOSO' selected>JONI SANTOSO</option>";
				else echo "<option value='JONI SANTOSO'>JONI SANTOSO</option>";
				if ($data['leader']== "M. RAMDHAN SAPUTRA") echo "<option value='M. RAMDHAN SAPUTRA' selected>M. RAMDHAN SAPUTRA</option>";
				else echo "<option value='M. RAMDHAN SAPUTRA'>M. RAMDHAN SAPUTRA</option>";
				if ($data['leader']== "MUHADI") echo "<option value='MUHADI' selected>MUHADI</option>";
				else echo "<option value='MUHADI'>MUHADI</option>";
				if ($data['leader']== "OKI DEDI SEPTIADI") echo "<option value='OKI DEDI SEPTIADI' selected>OKI DEDI SEPTIADI</option>";
				else echo "<option value='OKI DEDI SEPTIADI'>OKI DEDI SEPTIADI</option>";
				if ($data['leader']== "RANDY SHANDIKA") echo "<option value='RANDY SHANDIKA' selected>RANDY SHANDIKA</option>";
				else echo "<option value='RANDY SHANDIKA'>RANDY SHANDIKA</option>";
				if ($data['leader']== "SUJOKO") echo "<option value='SUJOKO' selected>SUJOKO</option>";
				else echo "<option value='SUJOKO'>SUJOKO</option>";
				if ($data['leader']== "TAUFIK KURNIAWAN") echo "<option value='TAUFIK KURNIAWAN' selected>TAUFIK KURNIAWAN</option>";
				else echo "<option value='TAUFIK KURNIAWAN'>TAUFIK KURNIAWAN</option>";
				if ($data['leader']== "WAHYU NEFERLY KARIM") echo "<option value='WAHYU NEFERLY KARIM' selected>WAHYU NEFERLY KARIM</option>";
				else echo "<option value='WAHYU NEFERLY KARIM'>WAHYU NEFERLY KARIM</option>";
				if ($data['leader']== "WILHAN SANJAYA") echo "<option value='WILHAN SANJAYA' selected>WILHAN SANJAYA</option>";
				else echo "<option value='WILHAN SANJAYA'>WILHAN SANJAYA</option>";
				if ($data['leader']== "YASIN SUMARDIANTO") echo "<option value='YASIN SUMARDIANTO' selected>YASIN SUMARDIANTO</option>";
				else echo "<option value='YASIN SUMARDIANTO'>YASIN SUMARDIANTO</option>";
				?>
		  </select>
		</div>

		<br>


		<div>
		  <a href="karyawan_mitra.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
		  <input type="submit" class="btn btn-info" id="submit" value="Simpan">
		</div>

</form>

<?php 
include '../template/footer.php';
?>