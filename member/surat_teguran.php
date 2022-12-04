<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel E-Surat Teguran</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead >
                   <tr>
                      <th>No</th>
                      <th>Nama Mgr</th>
                      <th>NIK Mgr</th>
                      <th>Posisi Mgr</th>
                      <th>Nama Karyawan</th>
                      <th>NIK Karyawan</th>
                      <th>Posisi Karyawan</th>
                      <th>Sub Unit</th>
                      <th>Nama Pembuat</th>
                      <th>NIK Pembuat</th>
                      <th>Posisi Pembuat</th>
                      <th>Permasalahan</th>
                      <th>Tanggal</th>
                      <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_surat_teguran";
                    $no =1;
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){
                      ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama_mgr'];?></td>
                        <td><?php echo $d['nik_mgr'];?></td>
                        <td><?php echo $d['posisi_mgr'];?></td>
                        <td><?php echo $d['nama_karyawan'];?></td>
                        <td><?php echo $d['nik_karyawan'];?></td>
                        <td><?php echo $d['posisi_karyawan'];?></td>
                        <td><?php echo $d['sub_unit'];?></td>
                        <td><?php echo $d['nama_pembuat'];?></td>
                        <td><?php echo $d['nik_pembuat'];?></td>
                        <td><?php echo $d['posisi_pembuat'];?></td>
                        <td><?php echo $d['permasalahan'];?></td>
                        <td><?php echo $d['tanggal'];?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    
<?php 
include '../template/footer.php';
?>
