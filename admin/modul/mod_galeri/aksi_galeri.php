<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";


$module=$_GET[module];
$act=$_GET[act];

// Input soal
if ($module=='soal' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    UploadBanner($nama_file_unik);
  mysqli_query($config,"INSERT INTO tbl_soal(soal,a,b,c,d,knc_jawaban,gambar,id_modul)
  				VALUES('$_POST[soal]',
					   '$_POST[a]',
					   '$_POST[b]',
					   '$_POST[c]',
					   '$_POST[d]',
					   '$_POST[knc_jawaban]',
                       '$nama_file_unik',
                       '$_POST[pilihan_modul]')");
  }
  else{
  mysqli_query($config,"INSERT INTO tbl_soal(soal,a,b,c,d,knc_jawaban,id_modul)
  				VALUES('$_POST[soal]',
					   '$_POST[a]',
					   '$_POST[b]',
					   '$_POST[c]',
					   '$_POST[d]',
					   '$_POST[knc_jawaban]',
             '$_POST[pilihan_modul]')");
  }
    header('location:../../media.php?module='.$module);
}
//Hapus Soal
elseif ($module=='soal' AND $act=='hapus') {
	mysqli_query($config,"DELETE FROM tbl_soal WHERE id_soal='$_GET[id]'");
    header('location:../../media.php?module='.$module);
}
// Update soal
elseif ($module=='soal' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysqli_query($config,"UPDATE tbl_soal SET soal       = '$_POST[soal]',
                                   			 a  = '$_POST[a]' ,
								             b  = '$_POST[b]',
											 c  = '$_POST[c]',
											 d  = '$_POST[d]',
											knc_jawaban= '$_POST[knc_jawaban]'
                             WHERE id_soal   = '$_POST[id]'");
  }
  else{
    UploadBanner($nama_file_unik);
    mysqli_query($config,"UPDATE tbl_soal SET soal       = '$_POST[soal]',
                                   			 a  = '$_POST[a]' ,
								             b  = '$_POST[b]',
											 c  = '$_POST[c]',
											 d  = '$_POST[d]',
											knc_jawaban= '$_POST[knc_jawaban]',
                                   gambar      = '$nama_file_unik'
                             WHERE id_soal   = '$_POST[id]'");
  }
  header('location:../../media.php?module='.$module);
}
//Pengaktifan dan Pengnonaktifan
elseif ($module=='soal' AND $act=='nonaktif'){
$aktif='N';
    mysqli_query($config,"UPDATE tbl_soal SET aktif  = '$aktif'  WHERE id_soal='$_GET[id]'");
  header('location:../../media.php?module='.$module);
  echo "tes";

 }
elseif ($module=='soal' AND $act=='aktif'){
$aktif='Y';
    mysqli_query($config,"UPDATE tbl_soal SET aktif  = '$aktif'  WHERE id_soal='$_GET[id]'");
  header('location:../../media.php?module='.$module);
  echo "tes";

 }

}
?>
