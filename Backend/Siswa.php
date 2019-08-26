<?php
    include_once 'init.php';

    if (isset($_POST['submit'])) {

        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['Kelas'];
        $jurusan = $_POST['Jurusan'];

        mysqli_query($koneksi,"INSERT INTO Siswa VALUES ('$nis','$nama','$kelas','$jurusan')");

<<<<<<< HEAD
        header("location:/MoneyManagement1?page=MasterMember1");
=======
        // header("location:/MoneyManagement1/M_Siswa.php");
>>>>>>> 0220c305b2a50270db5a1cfd2900ae3580682e24
    }
   
    
    function DataSiswa($koneksi)
    {
        $sql = "SELECT * FROM Siswa";
        $Data =mysqli_query($koneksi,$sql);
        return $Data;
    }
    