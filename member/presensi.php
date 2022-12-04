<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Tabel Presensi</h1>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                   <tr>
                    <th>No</th>
                    <th>Nik</th>
                    <th>Nama</th>
                    <th>Position Name</th>
                    <th>Position Title</th>
                    <th>Level</th>
                    <th>Sub Unit</th>
                    <th>Witel</th>
                    <th>Lokasi</th>
                    <th>Loker</th>
                    <th>STO</th>
                    <th>Waktu</th>
                    <th>Cek Kehadiran</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
                    $sql = "SELECT * FROM tb_presensi";
                    $no =1;
                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ 
                       $date=$d['waktu'];
                      ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                        <td><?php echo $d['nik']?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['position_name']; ?></td>
                        <td><?php echo $d['position_title']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['sub_unit']; ?></td>
                        <td><?php echo $d['witel']; ?></td>
                        <td><?php echo $d['lokasi']; ?></td>
                        <td><?php echo $d['loker']; ?></td>
                        <td><?php echo $d['sto']; ?></td>
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date)); ?></td>
                        <td><?php echo $d['cek_kehadiran']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php 
include '../template/footer.php';
?>