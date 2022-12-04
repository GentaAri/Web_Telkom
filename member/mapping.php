<?php 
include '../template/headerMember.php';
?>
<h1 class="mt-4">Tabel Mapping</h1>

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
                        <th>Position Name</th>
                        <th>Position Title</th>
                        <th>Witel</th>
                        <th>Teritory</th>
                        <th>Regional</th>
                        <th>Lokasi</th>
                        <th>Loker</th>
                        <th>STO</th>
                        <th>Level</th>
                        <th>Bizpart Id</th>
                        <th>Direktorat</th>
                        <th>Unit</th>
                        <th>Sub Unit</th>
                        <th>Sub Group</th>
                        <th>Group Fungsi</th>
                        <th>Cost Center</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_mapping";
                    $no =1;
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['position_name']; ?></td>
                        <td><?php echo $d['position_title']; ?></td>
                        <td><?php echo $d['witel']; ?></td>
                        <td><?php echo $d['teritory']; ?></td>
                        <td><?php echo $d['regional']; ?></td>
                        <td><?php echo $d['lokasi']; ?></td>
                        <td><?php echo $d['loker']; ?></td>
                        <td><?php echo $d['sto']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['bizpart_id']; ?></td>
                        <td><?php echo $d['direktorat']; ?></td>
                        <td><?php echo $d['unit']; ?></td>
                        <td><?php echo $d['sub_unit']; ?></td>
                        <td><?php echo $d['sub_group']; ?></td>
                        <td><?php echo $d['group_fungsi']; ?></td>
                        <td><?php echo $d['cost_center']; ?></td>
                        
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