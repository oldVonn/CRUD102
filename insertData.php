<?php
    require_once('tblInfo.php');

    $data = new TblInfo;

    $data->firstname = $_POST['firstname'];
    $data->middlename = $_POST['middlename'];
    $data->lastname = $_POST['lastname'];
    $data->lastname = $_POST['lastname'];
    $data->position = $_POST['position'];
    $data->company = $_POST['company'];
    $data->created_at = date('Y-m-d H:i:s');

    $data = $data->insert();

    echo $data;
?>