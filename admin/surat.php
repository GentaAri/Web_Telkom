<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel E-Surat Tugas SPBU</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_surat.php" type="button" class="btn btn-primary">
          Tambah Data
        </a>
        <a target="_blank" href="../include/export_surat.php" class="btn btn-success">Export Ke Excel</a>
        <a target="_blank" href="export_pdf_surat_tugas.php" class="btn btn-secondary">Export Ke PDF</a>
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
                      <th>Nik Mgr</th>
                      <th>Jabatan Mgr</th>
                      <th>Nama</th>
                      <th>Nik</th>
                      <th>Jabatan</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Penugasan</th>
                      <th>ID SPBU</th>
                      <th>Alamat SPBU</th>
                      <th>Kota</th>
                      <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_surat";
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
                        <td><?php echo $d['id_spbu'];?></td>
                        <td><?php echo $d['alamat'];?></td>
                        <td><?php echo $d['kota'];?></td>
                        

                        
                        <td>

                     <a href="edit_surat.php?&id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteSurat<?php echo $no; ?>"> Delete</a>
                      <a href="tambah_print.php?act=print&id=<?php echo $d['id']; ?>" class="tombol-simpan btn btn-success btn-flat btn-sm">Tambah</a>


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
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_surat.php?act=deleteSurat&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
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
