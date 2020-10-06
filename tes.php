<?php

// Create an image resource
$im = imagecreatefromjpeg('image.jpg'); 

// Add an HTML header and specify the MIME type of the image to display
header('Content-type: image/jpg');

// Decrease the quality of the image to 75
// print_r($_GET);
imagejpeg($im, null, $_GET['q']);
// imagedestroy($im);

