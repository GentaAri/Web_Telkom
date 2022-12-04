<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel E-Surat Teguran</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_surat_teguran.php" type="button" class="btn btn-primary">
          Tambah Data
        </a>
        <a target="_blank" href="../include/export_surat_teguran.php" class="btn btn-success">Export Ke Excel</a>
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
                        <td>

                     <a href="edit_surat_teguran.php?&id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteSurat<?php echo $no; ?>"> Delete</a>
                      <a target="_blank" href="export_pdf_surat_teguran.php?act=pdfSuratteguran&id=<?php echo $d['id']; ?>" class="btn btn-success btn-flat btn-sm">PDF</a>

                      <!-- modal delete -->
                       <div class="example-modal">
                        <div id="deleteSurat<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Delete Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama_karyawan'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_surat_teguran.php?act=deleteSurat&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
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
