</div> 
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
<script type="text/javascript">   
        <?php   
        echo $a1;?>  
        function changeValue2(id){  
          document.getElementById('sto').value = sto[id].sto;   
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $sektor;?>  
        function changeValue(id){  
          document.getElementById('sektor').value = sektor[id].sektor;   
        };  
</script>
<script type="text/javascript">   
        <?php   
        echo $tr;
        echo $re;
        echo $biz;
        echo $dir;
        echo $un?>  
        function changeValue3(id){  
          document.getElementById('teritory').value = teritory[id].teritory;
          document.getElementById('regional').value = regional[id].regional;
          document.getElementById('bizpart_id').value = bizpart_id[id].bizpart_id; 
          document.getElementById('direktorat').value = direktorat[id].direktorat; 
          document.getElementById('unit').value = unit[id].unit;    
        };  
</script>
<!-- <script type="text/javascript">   
        <?php   
        echo $po;   
        echo $le;
        echo $su;
        echo $sg;
        echo $gf;
        echo $cs; ?>  
        function changeValue4(id){  
          document.getElementById('position_title').value = position_title[id].position_title;  
          document.getElementById('level').value = level[id].level;
          document.getElementById('sub_unit').value = sub_unit[id].sub_unit;
          document.getElementById('sub_group').value = sub_group[id].sub_group; 
          document.getElementById('group_fungsi').value = group_fungsi[id].group_fungsi; 
          document.getElementById('cost_center').value = cost_center[id].cost_center;    
        };  
</script> -->


        <script src="../js/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="../assets/demo/datatables-demo.js"></script>
        <script src="../js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
        <script src="../js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
        <!-- <script src="../js/bootstrap-modal.js"></script> -->
        <!-- <script src="../js/bootstrap-transition.js"></script> -->
        <script src="../js/bootstrap-datepicker.js"></script>

    </body>
</html>
