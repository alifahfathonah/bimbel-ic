<?php
    // load model
    include_once("../model/video.php");
    $model = new Video($db);
    $data['video'] = $model->getVideo();
    foreach ($data['video'] as $key => $value) {
        $value->videoId = getYoutubeId($value->video)[1];
    }

    
    // echo '<pre>';
    // print_r($data);
    // echo '</pre>';
    render_page("pages/video",$data);

    function getYoutubeId($url) {
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $url, $matches);
        return $matches;
    }
    