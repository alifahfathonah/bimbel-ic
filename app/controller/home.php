<?php
    // load model
    include_once("../model/home.php");
    // initialize model
    $model = new Home($db);
    // get rows slide
    $data['slide'] = $model->getSlide();
    render_page("pages/home",$data);
    