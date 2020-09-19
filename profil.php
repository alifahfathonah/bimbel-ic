<?php
    // load model
    include_once("../model/about.php");
    // initialize model
    $model = new About($db);
    $data['row'] = $model->getProfil()[0];

    render_page("pages/profil",$data);