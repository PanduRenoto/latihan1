<?php 
include "koneksi.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $telp = $_POST['telp'];
    $id_jabatan = $_POST['id_jabatan'];

    if(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='register.php';</script>";
    } else if(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='register.php';</script>";
    } else if(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='register.php';</script>";
    } else if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='register.php';</script>";
    } else if(empty($alamat)){
        echo "<script>alert('Alamat tidak boleh kosong');location.href='register.php';</script>";
    } else if(empty($jk)) {
        echo "<script>alert('Jenis Kelamin tidak boleh kosong');location.href='register.php';</script";
    } else if(empty($telp)) {
        echo "<script>alert('Nomor Telepon tidak boleh kosong');location.href='register.php'</script>";
    } else if(empty($id_jabatan)) {
        echo "<script>alert('Jabatan tidak boleh kosong');location.href='register.php'</script>";
    } else {
        $qry_register = "INSERT INTO pegawai (email, password, nik, nama, alamat, jk, telp, id_jabatan) VALUES ('$email', '$password', '$nik', '$nama', '$alamat', '$jk', '$telp', '$id_jabatan')";

        if ($conn -> query($qry_register) === TRUE) {
            echo "<script>alert('Register berhasil');location.href='login.php'</script>";
        } else {
            echo "Kesalahan: " . $qry_register . "<br>" . $conn -> error;
        }
    
        $conn -> close();
    }
}
?>