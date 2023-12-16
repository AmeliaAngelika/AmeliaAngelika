<?php
 include("koneksi.php");

        $nama = $_POST['nama']; 
        $jeniskelamin = $_POST['jeniskelamin']; 
        $alamat = $_POST['alamat']; 
          $email = $_POST['email']; 
          $nohp = $_POST['no-hp']; 
          $semester = $_POST['semester']; 
          $ipk = $_POST['ipk']; 
          $beasiswa = $_POST['pilihan-beasiswa']; 
          $syarat = $_POST['syarat']; 

 $error = "";
     $query = mysqli_query($con, "INSERT INTO beasiswa SET
     nama = '$nama',
     jeniskelamin = '$jeniskelamin',
     Alamat = '$alamat',
     email = '$email',
     hp = '$nohp',
     semester = '$semester',
     ipk = '$ipk',
     jenis_beasiswa = '$beasiswa',
     syarat = '$syarat',
     status_pengajuan = 'Belum diverifikasi'");

if($error != ""){
    echo $error;
   header('Location: hasil.php');
}elseif($query){
    echo "Data berhasil disimpan!";
    header('Location: hasil.php');
}else{
    echo "Tidak dapat menyimpan data!<br>";
    echo "mysqli_error()";
}
?>