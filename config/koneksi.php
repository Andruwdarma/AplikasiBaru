<?php 
<<<<<<< HEAD
  
    $server = "localhost";
=======
    session_start();
    $server = "Localhost";
>>>>>>> 0220c305b2a50270db5a1cfd2900ae3580682e24
    $username ="root";
    $password ="";
    $database="MoneyManagement";

    $koneksi = mysqli_connect($server,$username,$password,$database);

    
    // if(mysqli_connect_errno()){
    //     echo "Database Error", mysqli_connect_error();
    // }     
    // else echo "berhasil"; 
    // echo "hello";