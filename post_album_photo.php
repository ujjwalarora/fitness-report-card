<?php

$facebook->setFileUploadSupport(true);

//create a new album
$album_details = array(
    'message'=> 'See your Fitness Report Card @ http://apps.facebook.com/fitness_report_card/',
    'name'=> 'Fitness Report Card'
);
$create_album = $facebook->api('/me/albums', 'post', $album_details);

// Upload a picture
$photo_details = array(
    'message'=> 'Hey! Its amazing. See yours just now @ http://apps.facebook.com/fitness_report_card/'
);
$photo_details['image'] = '@' . realpath('./report_cards/'.$uid.'_report_card.jpg');
$upload_photo = $facebook->api('/'.$create_album['id'].'/photos', 'post', $photo_details);

// echo $upload_photo['id']; // The id of your newly uploaded pic.

?>