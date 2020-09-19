<?php
    // load model
    include_once("../model/modul.php");
    // initialize model
    $model = new Modul($db);
    $data['row'] = $model->getModul(2)[0];

    render_page("pages/profil",$data);