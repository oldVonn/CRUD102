<?php
    require_once('tblInfo.php');

    $data = new TblInfo;

    $data = $data->show();
    echo json_encode($data);
?>