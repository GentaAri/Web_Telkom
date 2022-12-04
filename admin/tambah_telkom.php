<?php 
include '../template/header_edit.php';
?>
<div class="mb-4">
    <div style="text-align: center;">
    	 <h1 class="mt-4">Tambah Data Karyawan Telkom</h1>
    </div>
<div class="col-md-auto">
  <form action="proses_telkom.php?act=tambahTelkom" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-form-label">NIK:</label>
                    <input type="text" class="form-control" id="nik" name="nik" required >
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Nama:</label>
                    <input class="form-control" id="nama" name="nama" required >
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Lahir:</label>
                        <input type="text" id="tanggal_lahir" name="tanggal_lahir" class="form-control" required>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Kota Lahir:</label>
                        <input type="text" id="kota_lahir" name="kota_lahir" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Agama:</label>
                     <select class="form-control"id="agama" name="agama" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Islam">Islam</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Kristen">Kristen</option>                
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jenis Kelamin:</label>
                     <select class="form-control"id="jenis_kelamin" name="jenis_kelamin" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>             
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jalan:</label>
                    <input type="text" class="form-control" id="jalan" name="jalan" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kota:</label>
                    <input type="text" class="form-control" id="kota" name="kota" required>
                </div>

                <div class="form-group">
                <label class="col-form-label">Suku:</label>
                     <select class="form-control"id="suku" name="suku" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Bali">Bali</option>
                        <option value="Banjar">Banjar</option>
                        <option value="Batak">Batak</option>
                        <option value="Betawi">Betawi</option>
                        <option value="Bima">Bima</option>
                        <option value="Bugis">Bugis</option>
                        <option value="Dayak">Dayak</option>
                        <option value="Irian">Irian</option> 
                        <option value="Jawa">Jawa</option>
                        <option value="Karo">Karo</option>
                        <option value="Kutai">Kutai</option>
                        <option value="Lampung">Lampung</option>
                        <option value="Madura">Madura</option>
                        <option value="Makasar">Makasar</option>
                        <option value="Maluku">Maluku</option>
                        <option value="Manado">Manado</option>
                        <option value="Melayu">Melayu</option>
                        <option value="Minahasa">Minahasa</option>
                        <option value="Minagkabau">Minagkabau</option>
                        <option value="Nias">Nias</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Sunda">Sunda</option>
                        <option value="Tapanuli">Tapanuli</option>
                        <option value="Toraja">Toraja</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">No KTP:</label>
                    <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Tanggal KTP:</label>
                    <input type="text" class="form-control" id="tanggal_ktp" name="tanggal_ktp" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">No KK:</label>
                    <input type="text" class="form-control" id="no_kk" name="no_kk" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">No NPWP:</label>
                    <input type="text" class="form-control" id="no_npwp" name="no_npwp" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">No GSM:</label>
                    <input type="text" class="form-control" id="no_gsm" name="no_gsm" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Nama Ibu Kandung:</label>
                    <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" required>
                </div>

                <div class="form-group">
                <label class="col-form-label">Golongan Darah:</label>
                     <select class="form-control"id="golongan_darah" name="golongan_darah" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="A">A</option>
                        <option value="A+">A+</option>
                        <option value="AB">AB</option>
                        <option value="B">B</option>
                        <option value="B+">B+</option>
                        <option value="O">O</option>
                        <option value="O+">O+</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">No BPJS Kesehatan:</label>
                    <input type="text" class="form-control" id="no_bpjs_kesehatan" name="no_bpjs_kesehatan" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">No BPJS Ketenagakerjaan</label>
                    <input type="text" class="form-control" id="no_bpjs_ketenagakerjaan" name="no_bpjs_ketenagakerjaan" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kode Faskes:</label>
                    <input type="text" class="form-control" id="kode_faskes" name="kode_faskes" required>
                </div>

                <div class="form-group">
                    <label class="col-form-label">Kode Faskes Gigi:</label>
                    <input type="text" class="form-control" id="kode_faskes_gigi" name="kode_faskes_gigi" required>
                </div>

                <div class="form-group">
                <label class="col-form-label">Status Pernikahan:</label>
                     <select class="form-control"id="status_pernikahan" name="status_pernikahan" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Cerai">Cerai</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Single">Single</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Tanggal Pernikahan:</label>
                    <input type="text" class="form-control" id="tanggal_pernikahan" name="tanggal_pernikahan">
                </div>

                <div class="form-group">
                    <label class="col-form-label">Jumlah Anak:</label>
                    <input type="text" class="form-control" id="jumlah_anak" name="jumlah_anak">
                </div>

                 <div class="form-group">
                <label class="col-form-label">Susunan Keluarga:</label>
                     <select class="form-control"id="susunan_keluarga" name="susunan_keluarga" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="K0">K0</option>
                        <option value="K1">K1</option>
                        <option value="K2">K2</option>
                        <option value="K3">K3</option>
                        <option value="K4">K4</option>
                        <option value="K5">K5</option>
                        <option value="TK">TK</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Lokasi:</label>
                     <select class="form-control"id="lokasi" name="lokasi" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Inner">Inner</option>
                        <option value="Outer">Outher</option>
                    </select>
                  </div>

                  <div class="form-group">
                      <label class="col-form-label">Loker:</label>
                      <select name="loker" id="loker" class="form-control" onchange='changeValue2(this.value)' required >
                      <option value='' selected>- Pilih -</option>  
                          <?php   
                          $query1 = mysqli_query($koneksi, "select * from tb_join3 order by id_join3 esc");  
                          $result1 = mysqli_query($koneksi, "select * from tb_join3");  
                          $a1          = "var sto = new Array();\n;"; 
                          while ($row1 = mysqli_fetch_array($result1)) {  
                               echo '<option name="loker" value="'.$row1['loker'] . '">' . $row1['loker'] . '</option>';   
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
                      <input type="text" name="sto" id="sto" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                      <label class="col-form-label">Position Name:</label>
                      <select name="position_name" id="position_name" class="form-control" onchange='changeValue(this.value)' required >
                      <option value='' selected>- Pilih -</option>  
                          <?php 
                          $result = mysqli_query($koneksi, "select * from tb_dropdown");  
                          $jsArray = "var nPositionName = new Array();\n";
                          while ($row = mysqli_fetch_array($result)) {  
                          echo '<option value="' . $row['position_name'] . '">' . $row['position_name'] . '</option>';   
                          $jsArray .= "nPositionName['" . $row['position_name'] . "'] = {position_title:'" . addslashes($row['position_title']) . "',level:'".addslashes($row['level']). "',sub_unit:'".addslashes($row['sub_unit']). "',sub_group:'".addslashes($row['sub_group']). "',group_fungsi:'".addslashes($row['group_fungsi']). "',cost_center:'".addslashes($row['cost_center'])."'};\n";  
                          }  
                          ?>  
                     </select>
                  </div>
                  <script type="text/javascript">   
                  <?php echo $jsArray; ?> 
                    function changeValue(item){ 
                    document.getElementById('position_title').value = nPositionName[item].position_title; 
                    document.getElementById('level').value = nPositionName[item].level; 
                    document.getElementById('sub_unit').value = nPositionName[item].sub_unit;
                    document.getElementById('sub_group').value = nPositionName[item].sub_group;
                    document.getElementById('group_fungsi').value = nPositionName[item].group_fungsi;
                    document.getElementById('cost_center').value = nPositionName[item].cost_center;
                  }; 
                </script>
                <input type="hidden" name="sub_group" id="sub_group">
                <input type="hidden" name="group_fungsi" id="group_fungsi">
                <input type="hidden" name="cost_center" id="cost_center">


                  <div class="form-group">
                      <label class="col-form-label">Position Title:</label>
                      <input type="text" name="position_title" id="position_title" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Level:</label>
                    <input type="text" name="level" id="level" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Sub Unit:</label>
                    <input type="text" name="sub_unit" id="sub_unit" class="form-control" readonly>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Status Kerja:</label>
                     <select class="form-control"id="status_kerja" name="status_kerja" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Pegawai Tetap">Pegawai Tetap</option>
                        <option value="PKS">PKS</option>
                        <option value="Kemitraan">Kemitraan</option>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Mulai Kerja:</label>
                        <input type="text" id="tanggal" name="tanggal_mulai_bekerja" class="form-control">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Awal Kontrak:</label>
                        <input type="text" id="tanggal2" name="tanggal_awal_kontrak" class="form-control">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Akhir Kontrak:</label>
                        <input type="text" id="tanggal3" name="tanggal_akhir_kontrak" class="form-control">
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tahun Kontrak:</label>
                        <input type="text" id="tahun_kontrak" name="tahun_kontrak" class="form-control">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Level Pendidikan:</label>
                     <select class="form-control"id="level_pendidikan" name="level_pendidikan" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="MAN">MAN</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="SMA">SMA</option>
                        <option value="SMEA">SMEA</option>
                        <option value="SMK">SMK</option>
                        <option value="SMP">SMP</option>
                        <option value="STM">STM</option>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Tanggal Level Pendidikan:</label>
                        <input type="text" id="tanggal_level_pendidikan" name="tanggal_level_pendidikan" class="form-control" required>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Penyelengara Pendidikan:</label>
                        <input type="text" id="penyelengara_pendidikan" name="penyelengara_pendidikan" class="form-control" required>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nomor Rekening:</label>
                        <input type="text" id="no_rekening" name="no_rekening" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Bank:</label>
                     <select class="form-control"id="bank" name="bank" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="BRI">BRI</option>
                        <option value="BNI">BNI</option>
                        <option value="MANDIRI">MANDIRI</option>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nama di Rekening:</label>
                        <input type="text" id="nama_di_rekening" name="nama_di_rekening" class="form-control" required>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Nama Ayah:</label>
                        <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Jenis Baju:</label>
                     <select class="form-control"id="jenis_baju" name="jenis_baju" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Panjang">Panjang</option>
                        <option value="Pendek">Pendek</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Ukuran Baju:</label>
                     <select class="form-control"id="ukuran_baju" name="ukuran_baju" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Ukuran Celana:</label>
                        <input type="text" id="ukuran_celana" name="ukuran_celana" class="form-control" required>
                  </div>

                  <div class="form-group">
                        <label class="col-form-label">Ukuran Sepatu:</label>
                        <input type="text" id="ukuran_sepatu" name="ukuran_sepatu" class="form-control" required>
                  </div>

                  <div class="form-group">
                    <label class="col-form-label">Mitra Kerja:</label>
                     <select class="form-control"id="mitra_kerja" name="mitra_kerja" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="PT. Telkom Akses">PT. Telkom Akses</option>
                        <option value="PT. Inconis Nusa Jaya">PT. Inconis Nusa Jaya</option>
                        <option value="PT. Smartelco Solusi Teknologi">PT. Smartelco Solusi Teknologi</option>
                        
                    </select>
                  </div>

                  <div>
                    <a href="karyawan_telkom.php" class="btn btn-info btn-flat btn-xs">Kembali</a> 
                    <input type="submit" class="btn btn-info" id="submit" value="Simpan">
                    <button onclick="validation()"> cek </button>
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