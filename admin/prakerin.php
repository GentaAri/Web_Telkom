<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel Prakerin</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a type="button" class="btn btn-primary" href="tambah_prakerin.php">
          Tambah Data
        </a>
        <a target="_blank" href="../include/export_prakerin.php" class="btn btn-success">Export Ke Excel</a>
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
                      <th>Nama Sekolah</th>
                      <th>Level</th>
                      <th>Jumlah Prakerin</th>
                      <th>Nama Prakerin</th>
                      <th>Jenis Kelamin</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Selesai</th>
                      <th>Status</th>
                      <th>PIC</th>
                      <th>Alokasi</th>
                      <th>Penilaian PIC</th>
                      <th>Ket Sekolah</th>
                      <th>Opsi</th>
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

                        
                        <td>

                      <a href="edit_prakerin.php?&id=<?php echo $d['id'] ?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteMapping<?php echo $no; ?>"> Delete</a>

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
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama_prakerin'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_prakerin.php?act=deletePrakerin&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal delete -->

                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <style>
.datepicker{z-index:1151;}
</style>
<script>
$(function(){
    $("#tanggal_mulai").datepicker({
    format:'yyyy-dd-mm'
    });

    $("#tanggal_selesai").datepicker({
    format:'yyyy-dd-mm'
    });

        });
</script>
    
<?php 
include '../template/footer.php';
?>