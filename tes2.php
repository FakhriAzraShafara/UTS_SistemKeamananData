<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    // $password = $_POST['password'];
    $salt = "aksnjA;Mjisauhsu";
    $pepper = "saasfpjp;j';lkpokaspok";
    $password = $pepper. $_POST['password'] . $salt;
    $hashpassword = md5($password);

    $query = "INSERT INTO users (fullname, username, password) VALUES ('$fullname','$username', '$hashpassword')";

    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Registrasi berhasil');
            window.location.href='login.php'
            </script>";
    } else {
        echo "<script>alert('Registrasi gagal');
    </script>";
    }
}