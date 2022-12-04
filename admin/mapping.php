<?php 
include '../template/headerAdmin.php';
?>
<h1 class="mt-4">Tabel Mapping</h1>
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>Tambah Data</div>
    <div class="card-body">
        <!-- Button trigger modal -->
        <a href="tambah_mapping.php" class="btn btn-primary">Tambah Data</a>
        <a target="_blank" href="../include/export_mapping.php" class="btn btn-success">Export Ke Excel</a>

        <!-- Modal -->
        
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
                        <th>Object ID</th>
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
                        <th>Opsi</th>
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
                        <td><?php echo $d['object_id']; ?></td>
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
                        <td>

                      <a href="edit_mapping.php?&id=<?php echo $d['id'];?>" class="btn btn-primary btn-flat btn-sm"> Edit</a>
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
                                <h6 align="center" >Apakah anda yakin ingin menghapus data <?php echo $d['nama'];?><strong><span class="grt"></span></strong> ?</h6>
                              </div>
                              <div class="modal-footer">
                                <button id="nodelete" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancel</button>
                                <a href="proses_mapping.php?act=deleteMapping&id=<?php echo $d['id']; ?>" class="btn btn-primary">Delete</a>
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

<script type="text/javascript">   
        <?php   
        echo $a12;?>  
        function editValue2(id){  
          document.getElementById('sto1').value = sto1[id].sto1;   
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $tr;
        echo $re;
        echo $biz;
        echo $dir;
        echo $un?>  
        function editValue3(id){  
          document.getElementById('teritory1').value = teritory[id].teritory;
          document.getElementById('regional1').value = regional[id].regional;
          document.getElementById('bizpart_id1').value = bizpart_id[id].bizpart_id; 
          document.getElementById('direktorat1').value = direktorat[id].direktorat; 
          document.getElementById('unit1').value = unit[id].unit;    
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $po1;   
        echo $le1;
        echo $su1;
        echo $sg1;
        echo $gf1;
        echo $cs1; ?>  
        function editValue4(id){  
          document.getElementById('position_title1').value = position_title[id].position_title;  
          document.getElementById('level1').value = level[id].level;
          document.getElementById('sub_unit1').value = sub_unit[id].sub_unit;
          document.getElementById('sub_group1').value = sub_group[id].sub_group; 
          document.getElementById('group_fungsi1').value = group_fungsi[id].group_fungsi; 
          document.getElementById('cost_center1').value = cost_center[id].cost_center;    
        };  
</script>
    
<?php 
include '../template/footer.php';
?>