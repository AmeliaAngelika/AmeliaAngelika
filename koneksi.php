<?php
$con = mysqli_connect("localhost","root","","beasiswa");
if (mysqli_connect_errno()){
    echo "Koneksi gagal: ".mysqli_connect_errno();
}
?>