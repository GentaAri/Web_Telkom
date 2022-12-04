<?php 
include '../template/header_edit.php';
?>
	<?php
	$id = $_GET["id"];

	$sql = "SELECT * FROM tb_karyawan_telkom_akses WHERE id = '$id'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if(mysqli_num_rows($query) > 0){
		$data = mysqli_fetch_array($query);
	}
	?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Edit Data Karyawan Telkom</h1>
    </div>

     <form action="proses_telkom.php?act=updateTelkom" method="POST" enctype="multipart/form-data">
     			<input type="hidden" name="id" value="<?php echo $data["id"];?>" >
                <input type="hidden" name="id_kar" value="<?php echo $data["id_kar"];?>" >
                  <div class="form-group">
                    <label class="col-form-label">NIK:</label>
                    <input type="text" class="form-control" id="nik" name="nik" required value="<?php echo $data["nik"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Nama:</label>
                    <input class="form-control" id="nama" name="nama" required value="<?php echo $data["nama"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Lahir:</label>
                        <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required value="<?php echo $data["tanggal_lahir"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Kota Lahir:</label>
                        <input type="text" id="kota_lahir" name="kota_lahir" class="form-control" required value="<?php echo $data["kota_lahir"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Agama:</label>
                     <select class="form-control"id="agama" name="agama" required>
                        <?php
                        if ($data['agama']== "Budha") echo "<option value='Budha' selected>Budha</option>";
                        else echo "<option value='Budha'>Budha</option>";
                        if ($data['agama']== "Hindu") echo "<option value='Hindu' selected>Hindu</option>";
                        else echo "<option value='Hindu'>Hindu</option>";
                        if ($data['agama']== "Islam") echo "<option value='Islam' selected>Islam</option>";
                        else echo "<option value='Islam'>Islam</option>";
                        if ($data['agama']== "Katholik") echo "<option value='Katholik' selected>Katholik</option>";
                        else echo "<option value='Katholik'>Katholik</option>";
                        if ($data['agama']== "Konghucu") echo "<option value='Konghucu' selected>Konghucu</option>";
                        else echo "<option value='Konghucu'>Konghucu</option>";
                        if ($data['agama']== "Kristen") echo "<option value='Kristen' selected>Kristen</option>";
                        else echo "<option value='Kristen'>Kristen</option>";          
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jenis Kelamin:</label>
                     <select class="form-control"id="jenis_kelamin" name="jenis_kelamin" required >
                        <?php
                        if ($data['jenis_kelamin']== "Laki - Laki") echo "<option value='Laki - Laki' selected>Laki - Laki</option>";
                        else echo "<option value='Laki - Laki'>Laki - Laki</option>";
                        if ($data['jenis_kelamin']== "Perempuan") echo "<option value='Perempuan' selected>Perempuan</option>";
                        else echo "<option value='Perempuan'>Perempuan</option>";          
                        ?>            
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jalan:</label>
                    <input type="text" class="form-control" id="jalan" name="jalan" required value="<?php echo $data["jalan"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kota:</label>
                    <input type="text" class="form-control" id="kota" name="kota" required value="<?php echo $data["kota"];?>">
                </div>

                <div class="form-group">
                <label class="col-form-label">Suku:</label>
                     <select class="form-control"id="suku" name="suku" required >
                        <?php
                        if ($data['suku']== "Aceh") echo "<option value='Aceh' selected>Aceh</option>";
                        else echo "<option value='Aceh'>Aceh</option>";
                        if ($data['suku']== "Bali") echo "<option value='Bali' selected>Bali</option>";
                        else echo "<option value='Bali'>Bali</option>";
                        if ($data['suku']== "Banjar") echo "<option value='Banjar' selected>Banjar</option>";
                        else echo "<option value='Banjar'>Banjar</option>";
                        if ($data['suku']== "Batak") echo "<option value='Batak' selected>Batak</option>";
                        else echo "<option value='Batak'>Batak</option>";    
                        if ($data['suku']== "Betawi") echo "<option value='Betawi' selected>Betawi</option>";
                        else echo "<option value='Betawi'>Betawi</option>";
                        if ($data['suku']== "Bima") echo "<option value='Bima' selected>Bima</option>";
                        else echo "<option value='Bima'>Bima</option>";
                        if ($data['suku']== "Bugis") echo "<option value='Bugis' selected>Bugis</option>";
                        else echo "<option value='Bugis'>Bugis</option>";
                        if ($data['suku']== "Dayak") echo "<option value='Dayak' selected>Dayak</option>";
                        else echo "<option value='Dayak'>Dayak</option>";
                        if ($data['suku']== "Irian") echo "<option value='Irian' selected>Irian</option>";
                        else echo "<option value='Irian'>Irian</option>";
                        if ($data['suku']== "Jawa") echo "<option value='Jawa' selected>Jawa</option>";
                        else echo "<option value='Jawa'>Jawa</option>";
                        if ($data['suku']== "Karo") echo "<option value='Karo' selected>Karo</option>";
                        else echo "<option value='Karo'>Karo</option>";
                        if ($data['suku']== "Kutai") echo "<option value='Kutai' selected>Kutai</option>";
                        else echo "<option value='Kutai'>Kutai</option>";
                        if ($data['suku']== "Lampung") echo "<option value='Lampung' selected>Lampung</option>";
                        else echo "<option value='Lampung'>Lampung</option>";
                        if ($data['suku']== "Madura") echo "<option value='Madura' selected>Madura</option>";
                        else echo "<option value='Madura'>Madura</option>";
                        if ($data['suku']== "Makasar") echo "<option value='Makasar' selected>Makasar</option>";
                        else echo "<option value='Makasar'>Makasar</option>";
                        if ($data['suku']== "Maluku") echo "<option value='Maluku' selected>Maluku</option>";
                        else echo "<option value='Maluku'>Maluku</option>";
                        if ($data['suku']== "Manado") echo "<option value='Manado' selected>Manado</option>";
                        else echo "<option value='Manado'>Manado</option>";
                        if ($data['suku']== "Manado") echo "<option value='Manado' selected>Manado</option>";
                        else echo "<option value='Manado'>Manado</option>";
                        if ($data['suku']== "Melayu") echo "<option value='Melayu' selected>Melayu</option>";
                        else echo "<option value='Melayu'>Melayu</option>";
                        if ($data['suku']== "Minahasa") echo "<option value='Minahasa' selected>Minahasa</option>";
                        else echo "<option value='Minahasa'>Minahasa</option>";
                        if ($data['suku']== "Minagkabau") echo "<option value='Minagkabau' selected>Minagkabau</option>";
                        else echo "<option value='Minagkabau'>Minagkabau</option>";
                        if ($data['suku']== "Nias") echo "<option value='Nias' selected>Nias</option>";
                        else echo "<option value='Nias'>Nias</option>";
                        if ($data['suku']== "Palembang") echo "<option value='Palembang' selected>Palembang</option>";
                        else echo "<option value='Palembang'>Palembang</option>";
                        if ($data['suku']== "Sunda") echo "<option value='Sunda' selected>Sunda</option>";
                        else echo "<option value='Sunda'>Sunda</option>";
                        if ($data['suku']== "Tapanuli") echo "<option value='Tapanuli' selected>Tapanuli</option>";
                        else echo "<option value='Tapanuli'>Tapanuli</option>";
                        if ($data['suku']== "Toraja") echo "<option value='Toraja' selected>Toraja</option>";
                        else echo "<option value='Toraja'>Toraja</option>";

                        ?> 
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">No KTP:</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" required value="<?php echo $data["no_ktp"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Tanggal KTP:</label>
                    <input type="text" class="form-control" id="tanggal_ktp" name="tanggal_ktp" required value="<?php echo $data["tanggal_ktp"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">No KK:</label>
                    <input type="text" class="form-control" id="no_kk" name="no_kk" required value="<?php echo $data["no_kk"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">No NPWP:</label>
                    <input type="text" class="form-control" id="no_npwp" name="no_npwp" required value="<?php echo $data["no_npwp"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">No GSM:</label>
                    <input type="text" class="form-control" id="no_gsm" name="no_gsm" required value="<?php echo $data["no_gsm"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required value="<?php echo $data["email"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Nama Ibu Kandung:</label>
                    <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" required value="<?php echo $data["nama_ibu_kandung"];?>">
                </div>

                <div class="form-group">
                <label class="col-form-label">Golongan Darah:</label>
                     <select class="form-control"id="golongan_darah" name="golongan_darah" required >
                        <?php
                        if ($data['golongan_darah']== "A") echo "<option value='A' selected>A</option>";
                        else echo "<option value='A'>A</option>";
                        if ($data['golongan_darah']== "A+") echo "<option value='A+' selected>A+</option>";
                        else echo "<option value='A+'>A+</option>";
                        if ($data['golongan_darah']== "AB") echo "<option value='AB' selected>AB</option>";
                        else echo "<option value='AB'>AB</option>";          
                        if ($data['golongan_darah']== "B") echo "<option value='B' selected>B</option>";
                        else echo "<option value='B'>B</option>"; 
                        if ($data['golongan_darah']== "B+") echo "<option value='B+' selected>B+</option>";
                        else echo "<option value='B+'>B+</option>"; 
                        if ($data['golongan_darah']== "O") echo "<option value='O' selected>O</option>";
                        else echo "<option value='O'>O</option>";
                        if ($data['golongan_darah']== "O+") echo "<option value='O+' selected>O+</option>";
                        else echo "<option value='O+'>O+</option>"; 
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">No BPJS Kesehatan:</label>
                    <input type="text" class="form-control" id="no_bpjs_kesehatan" name="no_bpjs_kesehatan" required value="<?php echo $data["no_bpjs_kesehatan"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">No BPJS Ketenagakerjaan</label>
                    <input type="text" class="form-control" id="no_bpjs_ketenagakerjaan" name="no_bpjs_ketenagakerjaan" required value="<?php echo $data["no_bpjs_ketenagakerjaan"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kode Faskes:</label>
                    <input type="text" class="form-control" id="kode_faskes" name="kode_faskes" required value="<?php echo $data["kode_faskes"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kode Faskes Gigi:</label>
                    <input type="text" class="form-control" id="kode_faskes_gigi" name="kode_faskes_gigi" required value="<?php echo $data["kode_faskes_gigi"];?>">
                </div>

                <div class="form-group">
                <label class="col-form-label">Status Pernikahan:</label>
                     <select class="form-control"id="status_pernikahan" name="status_pernikahan" required >
                        <?php
                        if ($data['status_pernikahan']== "Cerai") echo "<option value='Cerai' selected>Cerai</option>";
                        else echo "<option value='Cerai'>Cerai</option>";
                        if ($data['status_pernikahan']== "Menikah") echo "<option value='Menikah' selected>Menikah</option>";
                        else echo "<option value='Menikah'>Menikah</option>";
                        if ($data['status_pernikahan']== "Single") echo "<option value='Single' selected>Single</option>";
                        else echo "<option value='Single'>Single</option>";           
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Tanggal Pernikahan:</label>
                    <input type="text" class="form-control" id="tanggal_pernikahan" name="tanggal_pernikahan" value="<?php echo $data["tanggal_pernikahan"];?>">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Jumlah Anak:</label>
                    <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak" value="<?php echo $data["jumlah_anak"];?>">
                </div>

                 <div class="form-group">
                <label class="col-form-label">Susunan Keluarga:</label>
                     <select class="form-control"id="susunan_keluarga" name="susunan_keluarga" required >
                        <?php
                        if ($data['susunan_keluarga']== "K0") echo "<option value='K0' selected>K0</option>";
                        else echo "<option value='K0'>K0</option>";
                        if ($data['susunan_keluarga']== "K1") echo "<option value='K1' selected>K1</option>";
                        else echo "<option value='K1'>K1</option>";          
                        if ($data['susunan_keluarga']== "K2") echo "<option value='K2' selected>K2</option>";
                        else echo "<option value='K2'>K2</option>"; 
                        if ($data['susunan_keluarga']== "K3") echo "<option value='K3' selected>K3</option>";
                        else echo "<option value='K3'>K3</option>";
                        if ($data['susunan_keluarga']== "K4") echo "<option value='K4' selected>K4</option>";
                        else echo "<option value='K4'>K4</option>";
                        if ($data['susunan_keluarga']== "K5") echo "<option value='K5' selected>K5</option>";
                        else echo "<option value='K5'>K5</option>";
                        if ($data['susunan_keluarga']== "TK") echo "<option value='TK' selected>TK</option>";
                        else echo "<option value='TK'>TK</option>";
                        ?>
                    </select>
                  </div>
                  <div class="form-group">
                  <label class="col-form-label">Lokasi:</label>
                   <select class="form-control"id="lokasi" name="lokasi" required >
                      <?php
                        if ($data['lokasi']== "Inner") echo "<option value='Inner' selected>Inner</option>";
                        else echo "<option value='Inner'>Inner</option>";
                        if ($data['lokasi']== "Outer") echo "<option value='Outer' selected>Outer</option>";
                        else echo "<option value='Outer'>Outer</option>";
                        ?>
                  </select>
                </div>

                  <div class="form-group">
                      <label class="col-form-label">Loker:</label>
                      <select name="loker" id="loker" class="form-control" onchange='changeValue2(this.value)' required > 
                          <?php
                           $query_loker="SELECT loker FROM tb_join3";
                           $sql_loker=mysqli_query($koneksi, $query_loker);
                           while ($data_loker=mysqli_fetch_array($sql_loker)) {
                            if ($data['loker']==$data_loker['loker']) {
                             $select="selected";
                            }else{
                             $select="";
                            }
                            echo "<option $select>".$data_loker['loker']."</option>";
                           }
                          ?> 

                          <?php   
                          $query1 = mysqli_query($koneksi, "select * from tb_join3 order by id_join3 esc");  
                          $result1 = mysqli_query($koneksi, "select * from tb_join3");  
                          $a1          = "var sto = new Array();\n;"; 
                          while ($row1 = mysqli_fetch_array($result1)) {  
                               '<option name="loker" value="'.$row1['loker'] . '">' . $row1['loker'] . '</option>';   
                          $a1 .= "sto['" . $row1['loker'] . "'] = {sto:'" . addslashes($row1['sto'])."'};\n";
                          }  
                          ?>
                     </select>
                    <script type="text/javascript">   
                          <?php   
                          echo $a1;?>  
                          function changeValue2(id){  
                            document.getElementById('sto').value = sto[id].sto;   
                          };  
                  </script>
                  </div>

                  <div class="form-group">
                      <label class="col-form-label">STO:</label>
                      <input type="text" name="sto" id="sto" class="form-control" readonly value="<?php echo $data["sto"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Position Name:</label>
                    <select name="position_name" id="position_name" class="form-control" onchange='changeValue(this.value)' required >
                    <?php
                         $query_position_name="SELECT position_name FROM tb_dropdown";
                         $sql_position_name=mysqli_query($koneksi, $query_position_name);
                         while ($data_position_name=mysqli_fetch_array($sql_position_name)) {
                          if ($data['position_name']==$data_position_name['position_name']) {
                           $select="selected";
                          }else{
                           $select="";
                          }
                          echo "<option $select>".$data_position_name['position_name']."</option>";
                         }
                        ?>

                        <?php
                        $result = mysqli_query($koneksi, "select * from tb_dropdown");  
                        $jsArray  = "var Nposition = new Array();\n;";       
                        while ($row = mysqli_fetch_array($result)) 
                        {
                          '<option value="' . $row['position_name'] . '">' . $row['position_name'] . '</option>';   
                          $jsArray .= "Nposition['" . $row['position_name'] . "'] = {position_title:'" . addslashes($row['position_title']) . "',sub_unit:'".addslashes($row['sub_unit']). "',level:'".addslashes($row['level']). "',sub_group:'".addslashes($row['sub_group']). "',group_fungsi:'".addslashes($row['group_fungsi']). "',cost_center:'".addslashes($row['cost_center'])."'};\n";   
                        }     
                        ?>  
                   </select>
                   <script type="text/javascript">   
                    <?php echo $jsArray; ?> 
                      function changeValue(item){ 
                      document.getElementById('position_title').value = Nposition[item].position_title; 
                      document.getElementById('sub_unit').value = Nposition[item].sub_unit; 
                      document.getElementById('level').value = Nposition[item].level;
                      document.getElementById('sub_group').value = Nposition[item].sub_group;
                      document.getElementById('group_fungsi').value = Nposition[item].group_fungsi;
                      document.getElementById('cost_center').value = Nposition[item].cost_center;
                    }; 
                  </script>
                  </div>
                <input type="hidden" name="sub_group" id="sub_group" value="<?php echo $data["sub_group"];?>">
                <input type="hidden" name="group_fungsi" id="group_fungsi" value="<?php echo $data["group_fungsi"];?>">
                <input type="hidden" name="cost_center" id="cost_center" value="<?php echo $data["cost_center"];?>">

                  <div class="form-group">
                      <label class="col-form-label">Position Title:</label>
                      <input type="text" name="position_title" id="position_title" class="form-control" readonly value="<?php echo $data["position_title"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Level:</label>
                    <input type="text" name="level" id="level" class="form-control" value="<?php echo $data["level"];?>"readonly>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Sub Unit:</label>
                    <input type="text" name="sub_unit" id="sub_unit" class="form-control" readonly value="<?php echo $data["sub_unit"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Status Kerja:</label>
                     <select class="form-control"id="status_kerja" name="status_kerja" required >
                        
                        <?php
                        if ($data['status_kerja']== "Pegawai Tetap") echo "<option value='Pegawai Tetap' selected>Pegawai Tetap</option>";
                        else echo "<option value='Pegawai Tetap'>Pegawai Tetap</option>";
                        if ($data['status_kerja']== "PKS") echo "<option value='PKS' selected>PKS</option>";
                        else echo "<option value='PKS'>PKS</option>";          
                        if ($data['status_kerja']== "Kemitraan") echo "<option value='Kemitraan' selected>Kemitraan</option>";
                        else echo "<option value='Kemitraan'>Kemitraan</option>"; 
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Mulai Kerja:</label>
                        <input type="text" id="tanggal1" name="tanggal_mulai_bekerja" class="form-control" value="<?php echo $data["tanggal_mulai_bekerja"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Awal Kontrak:</label>
                        <input type="text" id="tanggal2" name="tanggal_awal_kontrak" class="form-control" value="<?php echo $data["tanggal_awal_kontrak"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Akhir Kontrak:</label>
                        <input type="text" id="tanggal3" name="tanggal_akhir_kontrak" class="form-control" value="<?php echo $data["tanggal_akhir_kontrak"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tahun Kontrak:</label>
                        <input type="text" id="tahun_kontrak" name="tahun_kontrak" class="form-control" value="<?php echo $data["tahun_kontrak"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Level Pendidikan:</label>
                     <select class="form-control"id="level_pendidikan" name="level_pendidikan" required >
                        <?php
                        if ($data['level_pendidikan']== "D1") echo "<option value='D1' selected>D1</option>";
                        else echo "<option value='D1'>D1</option>";
                        if ($data['level_pendidikan']== "D2") echo "<option value='D2' selected>D2</option>";
                        else echo "<option value='D2'>D2</option>";          
                        if ($data['level_pendidikan']== "D3") echo "<option value='D3' selected>D3</option>";
                        else echo "<option value='D3'>D3</option>"; 
                        if ($data['level_pendidikan']== "D4") echo "<option value='D4' selected>D4</option>";
                        else echo "<option value='D4'>D4</option>"; 
                        if ($data['level_pendidikan']== "MAN") echo "<option value='MAN' selected>MAN</option>";
                        else echo "<option value='MAN'>MAN</option>";
                        if ($data['level_pendidikan']== "S1") echo "<option value='S1' selected>S1</option>";
                        else echo "<option value='S1'>S1</option>";
                        if ($data['level_pendidikan']== "S2") echo "<option value='S2' selected>S2</option>";
                        else echo "<option value='S2'>S2</option>";
                        if ($data['level_pendidikan']== "SMA") echo "<option value='SMA' selected>SMA</option>";
                        else echo "<option value='SMA'>SMA</option>";
                        if ($data['level_pendidikan']== "SMEA") echo "<option value='SMEA' selected>SMEA</option>";
                        else echo "<option value='SMEA'>SMEA</option>";
                        if ($data['level_pendidikan']== "SMK") echo "<option value='SMK' selected>SMK</option>";
                        else echo "<option value='SMK'>SMK</option>";
                        if ($data['level_pendidikan']== "SMP") echo "<option value='SMP' selected>SMP</option>";
                        else echo "<option value='SMP'>SMP</option>";
                        if ($data['level_pendidikan']== "STM") echo "<option value='STM' selected>STM</option>";
                        else echo "<option value='STM'>STM</option>";
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Level Pendidikan:</label>
                        <input type="text" id="tanggal_level_pendidikan" name="tanggal_level_pendidikan" class="form-control" required value="<?php echo $data["tanggal_level_pendidikan"];?>">
                  </div>
                  <div class="form-group">
                        <label class="col-form-label">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" required value="<?php echo $data["jurusan"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Penyelengara Pendidikan:</label>
                        <input type="text" id="penyelengara_pendidikan" name="penyelengara_pendidikan" class="form-control" required value="<?php echo $data["penyelenggara_pendidikan"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nomor Rekening:</label>
                        <input type="text" id="no_rekening" name="no_rekening" class="form-control" required value="<?php echo $data["no_rekening"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Bank:</label>
                     <select class="form-control"id="bank" name="bank" required >
                        <?php
                        if ($data['bank']= "BRI") echo "<option value='BRI' selected>BRI</option>";
                        else echo "<option value='BRI'>BRI</option>";
                        if ($data['bank']= "BNI") echo "<option value='BNI' selected>BNI</option>";
                        else echo "<option value='BNI'>BNI</option>";          
                        if ($data['bank']= "MANDIRI") echo "<option value='MANDIRI' selected>MANDIRI</option>";
                        else echo "<option value='MANDIRI'>MANDIRI</option>"; 
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nama di Rekening:</label>
                        <input type="text" id="nama_di_rekening" name="nama_di_rekening" class="form-control" required value="<?php echo $data["nama_di_rekening"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nama Ayah:</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required value="<?php echo $data["nama_ayah"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jenis Baju:</label>
                     <select class="form-control"id="jenis_baju" name="jenis_baju" required >
                       <?php
                        if ($data['jenis_baju']== "Panjang") echo "<option value='Panjang' selected>Panjang</option>";
                        else echo "<option value='Panjang'>Panjang</option>";
                        if ($data['jenis_baju']== "Pendek") echo "<option value='Pendek' selected>Pendek</option>";
                        else echo "<option value='Pendek'>Pendek</option>";
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Ukuran Baju:</label>
                     <select class="form-control"id="ukuran_baju" name="ukuran_baju" required >
                        <?php
                        if ($data['ukuran_baju']== "S") echo "<option value='S' selected>S</option>";
                        else echo "<option value='S'>S</option>";
                        if ($data['ukuran_baju']== "M") echo "<option value='M' selected>M</option>";
                        else echo "<option value='M'>M</option>";          
                        if ($data['ukuran_baju']== "L") echo "<option value='L' selected>L</option>";
                        else echo "<option value='L'>L</option>"; 
                        if ($data['ukuran_baju']== "XL") echo "<option value='XL' selected>XL</option>";
                        else echo "<option value='XL'>XL</option>";
                        if ($data['ukuran_baju']== "XXL") echo "<option value='XXL' selected>XXL</option>";
                        else echo "<option value='XXL'>XXL</option>";
                        if ($data['ukuran_baju']== "XXXL") echo "<option value='XXXL' selected>XXXL</option>";
                        else echo "<option value='XXXL'>XXXL</option>";
                        ?>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Ukuran Celana:</label>
                        <input type="text" id="ukuran_celana" name="ukuran_celana" class="form-control" required value="<?php echo $data["ukuran_celana"];?>">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Ukuran Sepatu:</label>
                        <input type="text" id="ukuran_sepatu" name="ukuran_sepatu" class="form-control" required value="<?php echo $data["ukuran_sepatu"];?>">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Mitra Kerja:</label>
                     <select class="form-control"id="mitra_kerja" name="mitra_kerja" required >
                        <?php
                        if ($data['mitra_kerja']== "PT. Telkom Akses") echo "<option value='PT. Telkom Akses' selected>PT. Telkom Akses</option>";
                        else echo "<option value='PT. Telkom Akses'>PT. Telkom Akses</option>";
                        if ($data['mitra_kerja']== "PT. Inconis Nusa Jaya") echo "<option value='PT. Inconis Nusa Jaya' selected>PT. Inconis Nusa Jaya</option>";
                        else echo "<option value='PT. Inconis Nusa Jaya'>PT. Inconis Nusa Jaya</option>";          
                        if ($data['mitra_kerja']== "PT. Smartelco Solusi Teknologi") echo "<option value='PT. Smartelco Solusi Teknologi' selected>PT. Smartelco Solusi Teknologi</option>";
                        else echo "<option value='PT. Smartelco Solusi Teknologi'>PT. Smartelco Solusi Teknologi</option>"; 
                        ?>                        
                    </select>
                  </div>

                  <div>
			    	<a href="karyawan_telkom.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
			    	<input type="submit" class="btn btn-info" id="submit" value="Simpan">
			    </div>

                  
                 
                </form>
            </div>


<script>
$(function(){
    $("#tanggal_lahir").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });
    $("#tanggal_ktp").datepicker({
    dateFormat:'yy-dd-mm'
    });
    $("#tanggal_pernikahan").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });

    $("#tanggal").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });

    $("#tanggal2").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });

    $("#tanggal3").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });

    $("#tanggal_level_pendidikan").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'yy-mm-dd'
    });

        });
</script>
<?php 
include '../template/footer_edit.php';
?>