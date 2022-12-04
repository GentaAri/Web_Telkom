<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel Konseling</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKonseling">
          Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="tambahKonseling" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Konseling</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="proses_arsip_konseling.php?act=tambahKonseling" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-form-label">Upload Konseling</label>
                    <input type="file" class="form-control-file" name="konseling" id="konseling" required >
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-info" id="submit" value="Save">
                  </div>
                </form>
              </div>              
            </div>
          </div>
        </div>
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
                        <th>Konseling</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                     <?php 
                    $sql = "SELECT * FROM tb_arsip_konseling";
                    $no =1;
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><embed src="../file/<?php echo $d['konseling'] ?>" type="application/pdf" width="300px" height="200px"></td>
                        <td><?php echo $d['konseling']; ?></td>
                        <td>

                      <a href="#" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#updateKonseling<?php echo $no; ?>"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteKonseling<?php echo $no; ?>"> Delete</a>
                      <a href="download.php?filename=<?=$d['konseling']?>" class="btn btn-info btn-flat btn-sm"> Download</a>

                      <!-- modal delete -->
                       <div class="example-modal">
                        <div id="deleteKonseling<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Delete Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['konseling'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancle</button>
                                <a href="proses_arsip_konseling.php?act=deleteKonseling&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal delete -->            

                      <!-- modal update -->
                       <div class="example-modal">
                        <div id="updateKonseling<?php echo $no; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Edit Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <div class="modal-body">
                                  <form action="proses_arsip_konseling.php?act=updateKonseling&id=<?php echo $d['id']; ?>" method="POST" enctype="multipart/form-data">
                                    <?php
                                  $id = $d['id'];
                                  $sql = "SELECT * FROM tb_arsip_konseling WHERE id='$id'";
                                  $hasil = mysqli_query($koneksi, $sql);
                                  while ($d = mysqli_fetch_assoc($hasil)) {
                                  ?>
									<div class="form-group">
				                    	<label class="col-form-label">Upload Konseling</label>
				                    	<input type="hidden" name="id" value="<?php echo $d['id'] ?>">
				                    	<input type="file" class="form-control-file" name="konseling" id="konseling" required >
				                    	<input type="hidden" name="konseling_lama" value="<?php echo $d['konseling'] ?>">
				                  	</div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <input type="submit" class="btn btn-info" id="submit" value="Save">

                                    </div>
                                    <?php
                                  }
                                  ?>
                                  </form>
                                </div>              
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
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
