<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Karyawan Telkom Mitra</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead>
                   <tr>
                     <th>No</th>
                     <th>Labor</th>
                     <th>Nik</th>
                     <th>Nama</th>
                     <th>No KTP</th>
                     <th>No Telpon</th>
                     <th>No Telpon Yang Dihubungi</th>
                     <th>Nama Keluarga</th>
                     <th>Nama Perusahaan</th>
                     <th>Position Title</th>
                     <th>Level</th>
                     <th>STO</th>
                     <th>Sektor</th>                     
                     <th>Leader</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    $sql = "SELECT * FROM tb_karyawan_mitra_operasi";
                    $no =1;
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['labor']; ?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['no_ktp']; ?></td>
                        <td><?php echo $d['no_telepon']; ?></td>
                        <td><?php echo $d['no_telepon_yang_dihubungi']; ?></td>
                        <td><?php echo $d['nama_keluarga']; ?></td>
                        <td><?php echo $d['nama_perusahaan']; ?></td>
                        <td><?php echo $d['position_title']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['sto']; ?></td>
                        <td><?php echo $d['sektor']; ?></td>
                        <td><?php echo $d['leader']; ?></td>
                    </tr>
                                                
                      <?php } ?>
                </tbody>
            </table>
        </div>
<?php 
include '../template/footer.php';
?>