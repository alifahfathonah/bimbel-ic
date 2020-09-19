<?php
    // load model
    include_once("../model/kontak.php");
    // initialize model
    $model = new Kontak($db);
    $data['kontakk'] = $model->getKontakk();

    render_page("pages/kontak",$data);