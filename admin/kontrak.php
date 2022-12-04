<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel Kontrak</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_kontrak.php" type="button" class="btn btn-primary">
          Tambah Data
        </a>
        <a target="_blank" href="../include/export_kontrak.php" class="btn btn-success">Export Ke Excel</a>

        
    </div>
</div>




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
                        <th>Loker</th>
                        <th>STO</th>
                        <th>Level</th>
                        <th>Sub Unit</th>
                        <th>Status Kerja</th>
                        <th>Tanggal Mulai Kerja</th>
                        <th>Tanggal Awal Kontrak</th>
                        <th>Tanggal Akhir Kontrak</th>
                        <th>Nomor Kontrak</th>
                        <th>Kontrak Ke</th>
                        <th>Mitra Kerja</th>
                        <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_kontrak";
                    $no =1;
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){ 
                      ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                      <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['position_name']; ?></td>
                        <td><?php echo $d['position_title']; ?></td>
                        <td><?php echo $d['witel']; ?></td>
                        <td><?php echo $d['loker']; ?></td>
                        <td><?php echo $d['sto']; ?></td>
                        <td><?php echo $d['level']; ?></td>
                        <td><?php echo $d['sub_unit']; ?></td>
                        <td><?php echo $d['status_kerja']; ?></td>
                        <td><?php echo $d['tanggal_mulai_kerja']; ?></td>
                        <td><?php echo $d['tanggal_awal_kontrak']; ?></td>
                        <td><?php echo $d['tanggal_akhir_kontrak']; ?></td>
                        <td><?php echo $d['nomor_kontrak']; ?></td>
                        <td><?php echo $d['kontrak_ke']; ?></td>
                        <td><?php echo $d['mitra_kerja']; ?></td>
                        

                        
                        <td>

                     <a href="edit_kontrak.php?&id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteMapping<?php echo $no; ?>"> Delete</a>
                      <a href="detail_kontrak.php?&id=<?php echo $d['id']; ?>" class="btn btn-info btn-flat btn-sm">Detail</a>

                      <!-- modal delete -->
                       <div class="example-modal">
                        <div id="deleteMapping<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Delete Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_konseling.php?act=deleteKontrak&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal delete -->

                      

                      <!-- modal update -->
                      
                       
                      <!-- end modal update -->


                    </td>
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
