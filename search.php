<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    include 'conn.php';
    // $search = $_POST['search'];
    // if($search == ''){
    // $status = $db->query("SELECT * FROM tb_users");
    // }
    // else{
    // $status = $db->query("SELECT * FROM tb_users WHERE nama LIKE '%$search%'");
    // }
    $status = $db->query("SELECT * FROM `tb_users` ORDER BY `id`");
    $list = array();
    while ($rowdata = $status->fetch_assoc()){
        $list[] = $rowdata;
    }
    echo json_encode($list);
?>