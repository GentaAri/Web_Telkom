<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Tabel E-Surat Tugas Opr</h1>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead >
                   <tr>
                      <th>No</th>
                      <th>Nama Mgr</th>
                      <th>Nik Mgr</th>
                      <th>Jabatan Mgr</th>
                      <th>Nama</th>
                      <th>Nik</th>
                      <th>Jabatan</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Penugasan</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_surat_opr";
                    $no =1;
                    setlocale(LC_ALL, 'id-ID', 'id_ID'); 
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){ 
                    $date1=$d['tanggal_mulai'];
                    $date2=$d['tanggal_selesai'];   
                      ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama_mgr'];?></td>
                        <td><?php echo $d['nik_mgr'];?></td>
                        <td><?php echo $d['jabatan_mgr'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['nik'];?></td>
                        <td><?php echo $d['jabatan'];?></td>
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date1)); ?></td>
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date2)); ?></td>
                        <td><?php echo $d['penugasan'];?></td>
                       
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
