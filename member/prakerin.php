<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Tabel Prakerin</h1>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead >
                   <tr>
                      <th>No</th>
                      <th>Nama Sekolah</th>
                      <th>Level</th>
                      <th>Jumlah Prakerin</th>
                      <th>Nama Prakerin</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Status</th>
                      <th>PIC</th>
                      <th>ALokasi</th>
                      <th>Penilaian PIC</th>
                      <th>Ket Sekolah</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_prakerin";
                    $no =1;
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama_sekolah'];?></td>
                        <td><?php echo $d['level'];?></td>
                        <td><?php echo $d['jumlah_prakerin'];?></td>
                        <td><?php echo $d['nama_prakerin'];?></td>
                        <td><?php echo $d['jenis_kelamin'];?></td>
                        <td><?php echo $d['tanggal_mulai'];?></td>
                        <td><?php echo $d['tanggal_selesai'];?></td>
                        <td><?php echo $d['status'];?></td>
                        <td><?php echo $d['pic'];?></td>
                        <td><?php echo $d['alokasi'];?></td>
                        <td><?php echo $d['penilaian_pic'];?></td>
                        <td><?php echo $d['ket_sekolah'];?></td>

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