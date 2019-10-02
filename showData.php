<?php
    require_once('tblInfo.php');

    $infos = new TblInfo;

    $infos = $infos->show();
    echo json_encode($infos);
?>
