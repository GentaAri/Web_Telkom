<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel User</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah User</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahUser">
          Tambah Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="proses_user.php?act=tambahUser" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label class="col-form-label">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" required >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" required >
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Role:</label>
                     <select class="form-control"id="role" name="role" required >
                        <option value='' selected>- Pilih -</option>
                        <option value="Admin">Admin</option>
                        <option value="Member">Member</option>
                    </select>
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
    <div class="card-header"><i class="fas fa-table mr-1"></i>Data User</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                <thead >
                	<tr>
                    <th>No</th>
                		<th>Username</th>
                		<th>Password</th>
                		<th>Role</th>
                    <th>Opsi</th>
                	</tr>

                </thead>
                <tbody>
                    	<?php 
                    $sql = "SELECT * FROM tb_user";
                    $no =1;
                    $data = $koneksi->query($sql);
                    while($d =$data->fetch_assoc()){ ?>
                      <tr>
                        <td><?=$no++ ?></td>
                    	<td><?php echo $d['username']; ?></td>
                        <td><?php echo $d['password']; ?></td>
                        <td><?php echo $d['role']; ?></td>
                        <td>

                    <a href="#" class="btn btn-primary btn-flat btn-sm" data-toggle="modal" data-target="#updateUmp<?php echo $no; ?>"> Edit</a>
                      <a href="#" class="btn btn-danger btn-flat btn-sm" data-toggle="modal" data-target="#deleteUmp<?php echo $no; ?>"> Delete</a>
                      <!-- modal delete -->
                       <div class="example-modal">
                        <div id="deleteUmp<?php echo $no; ?>" class="modal fade" role="dialog" style="display :none;">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Delete Data</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['username'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_user.php?act=deleteUser&id_user=<?php echo $d['id_user']; ?>" class="btn btn-primary">Delete</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end modal delete -->            

                      <!-- modal update -->
                       <div class="example-modal">
                        <div id="updateUmp<?php echo $no; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <form action="proses_user.php?act=updateUser&id_user=<?php echo $d['id_user']; ?>" method="POST" enctype="multipart/form-data">
                                    <?php
                                  $id = $d['id_user'];
                                  $sql = "SELECT * FROM tb_user WHERE id_user='$id'";
                                  $hasil = mysqli_query($koneksi, $sql);
                                  while ($da = mysqli_fetch_assoc($hasil)) {
                                  ?>
                                  <div class="form-group">
                                    <label class="col-form-label">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" required value="<?=$da['username']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label class="col-form-label">Password:</label>
                                    <input type="text" class="form-control" id="password" name="password" required value="<?=$da['password']; ?>">
                                  </div>
                                  <div class="form-group">
                                    <label class="col-form-label">Role:</label>
                                   <select class="form-control"id="cek_kehadiran" name="cek_kehadiran" required>
                                      <?php
                                          $JK=$data->JK;
                                          if ($JK== "Admin") echo "<option value='Admin' selected>Admin</option>";
                                          else echo "<option value='Admin'>Admin</option>";
                                          if ($JK== "Member") echo "<option value='Member' selected>Member</option>";
                                          else echo "<option value='Member'>Member</option>";
                                          ?>
                                  </select>                                    
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
                      </td>
                    </tr>
                      <!-- end modal update -->
                    <?php } ?>
                </tbody>
            </table>
        </div>
      </div>
    </div>
<?php 
include '../template/footer.php';
?>