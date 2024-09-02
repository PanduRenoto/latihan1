<?php 
include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='login.php';</script>";
    } else if(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        $qry_login = mysqli_query($conn, "SELECT * FROM pegawai WHERE email = '".$email."' AND password = '".$password."'");
        $user_data = mysqli_fetch_assoc($qry_login);
        if ($user_data['password']) {
            $_SESSION['user_id'] = $user_data['id'];
            $_SESSION['nama'] = $user_data['nama'];
            $_SESSION['status_login'] = true;
            header("location: home.php");
        } else {
            echo "<script>alert('Email atau Password salah');location.href='login.php'</script>";
        }
    }
}
?>
