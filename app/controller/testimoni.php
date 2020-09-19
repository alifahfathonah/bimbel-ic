<?php
    // load model
    include_once("../model/testimoni.php");
    $model = new Testimoni($db);
    $data['testimoni'] = $model->getTestimoni();

    render_page("pages/testimoni",$data);
    