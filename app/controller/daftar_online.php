<?php
    // load model
    include_once("../model/navigation.php");
    // initialize model
    $modelNavigation = new Navigation($db);
    // get rows
    $data['program_bimbingan'] = $modelNavigation->getProgram();
    foreach ($data['program_bimbingan'] as $key => $value) {
        $value->rows = $modelNavigation->getSubBimbingan('program_id',$value->program_id);
    }

    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    render_page("pages/daftar_online",$data);
    