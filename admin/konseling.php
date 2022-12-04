<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel E-Konseling</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_konseling.php" type="button" class="btn btn-primary">
          Tambah Data
        </a>
        <a target="_blank" href="../include/export_ekonseling.php" class="btn btn-success">Export Ke Excel</a>

        
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
                      <th>Nama Konselor</th>
                      <th>Nik Konselor</th>
                      <th>Jabatan Konselor</th>
                      <th>Nama Konseling</th>
                      <th>Nik Konseling</th>
                      <th>Jabatan Konseling</th>
                      <th>Lokasi Kerja Konseling</th>
                      <th>Tanggal</th>
                      <th>Permasalahan</th>
                      <th>Tanggapan Terhadap Permasalahan</th>
                      <th>Ususlan</th>                      
                      <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_konseling";
                    $no =1;
                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                    $da = $koneksi->query($sql);
                    while($d =$da->fetch_assoc()){ 
                      $date=$d['tanggal'];
                      ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $d['nama_konselor'];?></td>
                        <td><?php echo $d['nik_konselor'];?></td>
                        <td><?php echo $d['jabatan_konselor'];?></td>
                        <td><?php echo $d['nama_konseling'];?></td>
                        <td><?php echo $d['nik_konseling'];?></td>
                        <td><?php echo $d['jabatan_konseling'];?></td>
                        <td><?php echo $d['lokasi_kerja_konseling'];?></td>
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date)); ?></td>
                        <td><?php echo $d['permasalahan'];?></td>
                        <td><?php echo $d['tanggapan_terhadap_permasalahan'];?></td>
                        <td><?php echo $d['usulan'];?></td>
                        

                        
                        <td>

                     <a href="edit_konseling.php?&id=<?php echo $d['id']; ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteMapping<?php echo $no; ?>"> Delete</a>
                      <a target="_blank" href="export_pdf_konseling.php?act=pdfKonseling&id=<?php echo $d['id']; ?>" class="btn btn-success btn-flat btn-sm">PDF</a>

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
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama_konseling'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_konseling.php?act=deleteKonseling&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
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
