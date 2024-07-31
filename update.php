<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'conn.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $unitkerja = $_POST['unitkerja'];
    $foto = $_POST['foto'];
    $sql = "UPDATE `tb_users` SET `nama`='$nama',`unitkerja`='$unitkerja', `foto`='$foto' WHERE `id` = $id";
    mysqli_query($db, $sql);
?>