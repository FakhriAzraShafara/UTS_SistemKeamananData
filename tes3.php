<?php
session_start();
include('koneksi.php');


if (isset($_POST['login'])) {
    $salt = "aksnjA;Mjisauhsu";
    $pepper = "saasfpjp;j';lkpokaspok";
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username = '" . $_POST['username'] . "' AND password = '" . md5($pepper . $_POST['password'] . $salt) . "' ");

    $numRows = mysqli_num_rows($query);
    if ($numRows == 1) {
        $sesi = mysqli_fetch_assoc($query);
        $_SESSION['username'] = $sesi['username'];
        echo "<script>alert('Login berhasil');
        window.location.href='home.php'
        </script>";
    } else {
        echo "<script>alert('Login gagal');
        window.location.href='login.php'
        </script>";
    }
}
?>