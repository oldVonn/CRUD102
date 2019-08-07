<?php
    require_once('tblInfo.php');

    $data = new TblInfo;

    $data->id = $_POST['dataid'];
    $data->firstname = $_POST['firstname'];
    $data->middlename = $_POST['middlename'];
    $data->lastname = $_POST['lastname'];
    $data->position = $_POST['position'];
    $data->company = $_POST['company'];
    $data->updated_at = date('Y-m-d H:i:s');

    $data = $data->update();

    echo $data;
?>