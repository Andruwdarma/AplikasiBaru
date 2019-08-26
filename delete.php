<?php
include 'init.php';

function delete ($koneksi, $nis)
{
    $sql = "DELETE FROM siswa WHERE $nis";
    $Data =mysqli_query($koneksi,$sql);
    return $Data;
}
