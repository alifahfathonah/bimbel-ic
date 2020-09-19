<?php
    // load model
    include_once("../model/home.php");
    // initialize model
    $model = new Home($db);
    // get rows slide
    $data['slide'] = $model->getSlide();
    $data['testimoni'] = $model->getTestimoni();
    $data['video'] = $model->getVideo();
    $data['sosmed'] = $model->getSosmed();
    foreach ($data['video'] as $key => $value) {
        $value->videoId = getYoutubeId($value->video)[1];
    }

    render_page("pages/home",$data);

    function getYoutubeId($url) {
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches;
    }
    