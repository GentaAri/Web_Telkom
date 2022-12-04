<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Karyawan Telkom Mitra</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-book mr-1"></i>Action</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_mitra.php" class="btn btn-primary" > 
          Tambah Data
         </a>

        <a target="_blank" href="../include/export_mitra.php" class="btn btn-success">Export Ke Excel</a>
     </div>
 </div>

        



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
                     <th>Opsi</th>
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
                        <td>
                            <a href="edit_mitra.php?&id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                            <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteMitra<?php echo $no; ?>"> Delete</a>

                            <!-- modal delete -->
                               <div class="example-modal">
                                <div id="deleteMitra<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
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
                                        <a href="proses_mitra.php?act=deleteMitra&id_kar=<?php echo $d['id_kar']; ?>" class="btn btn-primary">Delete</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- end modal delete -->
                        </td>
                        
                      <?php } ?>
                </tbody>
            </table>
        </div>
<?php 
include '../template/footer.php';
?>