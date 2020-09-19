<?php
    // load model
    include_once("../model/subbimbingan.php");
    // initialize model
    $model = new SubBimbingan($db);
    $data['row'] = $model->getSubBimbingan($_GET['id'])[0];

    render_page("pages/detail_program_bimbingan",$data);