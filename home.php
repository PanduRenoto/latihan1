<?php
    session_start();
    if (!isset($_SESSION['status_login']) || $_SESSION['status_login'] !== true) {
        header("Location: login.php");
        exit();
    }
    include "header.php";
?>

<h2>Selamat datang <?=$_SESSION['nama']?>.</h2>

<?php
    include "footer.php";
?>