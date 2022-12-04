<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel Report Surat Sakit</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_surat_sakit.php" class="btn btn-primary" >
          Tambah Data
        </a>
         <a target="_blank" href="../include/export_surat_sakit.php" class="btn btn-success">Export Ke Excel</a>
        
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
                    <th>Keterangan Surat Sakit</th>
                    <th>Tanggal Sektor Surat Sakit</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
                    $sql = "SELECT * FROM tb_surat_sakit";
                    $no =1;
                    setlocale(LC_ALL, 'id-ID', 'id_ID'); 
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ 
                    $date1=$d['waktu'];
                    $date2=$d['tanggal_sektor_surat_sakit'];                     
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
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date1)); ?></td>
                        <td><?php echo $d['keterangan_surat_sakit']; ?></td>
                        <td><?php echo strftime("%A, %d %B %Y", strtotime($date2)); ?></td>
                        <td>
                        <a href="edit_surat_sakit.php?&id=<?php echo $d['id'];?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                        <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteSakit<?php echo $no; ?>"> Delete</a>

                      <!-- modal delete -->
                       <div class="example-modal">
                        <div id="deleteSakit<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
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
                                <a href="proses_surat_sakit.php?act=deleteSakit&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal delete -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php 
include '../template/footer.php';
?>