<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Tabel Posko</h1>

<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data Tabel</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0" style="font-size:12px">
                <thead >
                   <tr>
                      <th>No</th> 
                      <th>Nik</th>                    
                      <th>Nama</th>
                      <th>Posisi</th>
                      <th>Level</th>
                      <th>Perusahaan</th>
                      <th>Tanggal</th>
                      <th>Kategori</th>
                      <th>Witel</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_posko";
                    $no =1;
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nik'];?></td>
                        <td><?php echo $d['nama'];?></td>
                        <td><?php echo $d['posisi'];?></td>
                        <td><?php echo $d['level'];?></td>
                        <td><?php echo $d['perusahaan'];?></td>
                        <td><?php echo $d['tanggal'];?></td>
                        <td><?php echo $d['kategori'];?></td>
                        <td><?php echo $d['witel'];?></td>

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
