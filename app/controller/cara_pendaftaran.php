<?php
    // load model
    include_once("../model/modul.php");
    // initialize model
    $model = new Modul($db);
    $data['row'] = $model->getModul(17)[0];

    render_page("pages/cara_pendaftaran",$data);