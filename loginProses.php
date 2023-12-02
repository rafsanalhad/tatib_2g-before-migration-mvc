<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST ['password']);

    $query="SELECT * FROM user WHERE username='$username' and password='$password'";
    $result=mysqli_query ($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['level'] = $row['level'];

    if ($row['level'] == 1) {
        header('location: index.php');
    }else if ($row['level'] == 2) {
        $_SESSION['username'] =  $row['username'];
        header('location: dosen.php');
    }else if ($row['level'] == 3) {
        
        $_SESSION['username'] =  $row['username'];
        header('location: mahasiswa.php');
    }else{
        echo "Salah";
        header('location: index.php');
        echo mysqli_error ($koneksi) ;
    }
?>
