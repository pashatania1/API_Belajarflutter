<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'conn.php';
    $id = $_POST['id'];
    $sql = "DELETE FROM `tb_users` WHERE `id` = $id";
    mysqli_query($db, $sql);
?>