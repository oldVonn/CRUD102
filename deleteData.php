<?php
    #important
    require_once('tblInfo.php');

    $data = new TblInfo;

    $data->id = $_POST['dataid'];    

    $data = $data->delete();
    echo $data;
?>
