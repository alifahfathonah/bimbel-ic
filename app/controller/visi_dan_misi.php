<?php
    // load model
    include_once("../model/modul.php");
    // initialize model
    $model = new Modul($db);
    $data['row'] = $model->getModul(14)[0];

    render_page("pages/visi_dan_misi",$data);