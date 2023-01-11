<?php
include("koneksi.php");
if(isset($_POST['tambah_siswa'])){
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];
    
    $sql = "INSERT INTO tb_siswa(nama, kelas, jurusan, tahun, nominal,) VALUES ('$nama', '$kelas', '$jurusan', '$tahun', '$nominal')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:join_table.php?status=sukses');
    }else{
        header('location:join_table.php?status=gagal');
    }
}
?>