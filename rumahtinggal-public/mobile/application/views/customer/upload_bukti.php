<?php
$uploadDir = 'assets/img/bukti_transaksi';
if(!empty($_FILES)) {
    $tmpFile = $_FILES['userfile']['tmp_name'];
    $filename = $uploadDir. '/'. $_FILES['userfile']['name'];
    move_uploaded_file($tmpFile, $filename);
}
// if(isset($_POST["userfile"])) {
//     $data = $_POST["userfile"];
//     list($type, $data) = explode(';', $data);
//     list(, $data)      = explode(',', $data);
//     $data              = base64_decode($data);
//     $imageName         = time(). '.png';
//     $path              = 'assets/uploads/gambar_pendukung/';
//     file_put_contents($path.$imageName, $data);
    
//     echo $imageName;
// }
?>