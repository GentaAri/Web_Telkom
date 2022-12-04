<?php
if(ISSET($_REQUEST['filename'])){
 $file = $_REQUEST['filename'];
 
  //header("Cache-Control: public");
  //header("Content-Description: File Transfer");
 header("Content-Disposition: attachment; filename=".basename($file));
 header("Content-Type: application/octet-stream;");
  //header("Content-Transfer-Encoding: binary");
 readfile("../file/".$file);
}
?>