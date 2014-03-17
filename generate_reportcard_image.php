<?php
session_start();
header ("Content-type: image/jpeg");

$uid=$_REQUEST['uid'];
$name=$_REQUEST['name'];
$birthday=$_REQUEST['birthday'];
$gender=$_REQUEST['gender'];
$age_category=$_REQUEST['age_category'];
$content=$_SESSION['content'];

$top_file = './profile_pics/'.$uid.'_dp.jpg';
$bottom_file = 'template.jpg';

$top = imagecreatefromjpeg($top_file);
$bottom = imagecreatefromjpeg($bottom_file);

//$text1 = $name;
//$text2 = $gender;
//$text3 = $birthday;
//$text4 = $age_category;

$font= './fonts/ANTQUAB.ttf';
$comic_sans = './fonts/comicbd.ttf';

$blue_font = imagecolorallocate ($bottom, 28,82,106);
$dark_blue = imagecolorallocate ($bottom, 33,39,124);

// get current width/height
list($top_width, $top_height) = getimagesize($top_file);
list($bottom_width, $bottom_height) = getimagesize($bottom_file);

// compute new width/height
//$new_width = ($top_width > $bottom_width) ? $top_width : $bottom_width;
//$new_height = $top_height + $bottom_height;

// create new image and merge
//$new = imagecreate($new_width, $new_height);
imagecopy($bottom, $top, 37, 136, 0, 0, 147, 147);
//add contact info to image
imagettftext($bottom, 18, 0, 305, 162, $blue_font, $font, $name);
imagettftext($bottom, 18, 0, 305, 200, $blue_font, $font, $gender);
imagettftext($bottom, 18, 0, 305, 238, $blue_font, $font, $birthday);
imagettftext($bottom, 18, 0, 366, 278, $blue_font, $font, $age_category);
//add content to image
imagettftext($bottom, 17, 0, 51, 367, $dark_blue, $comic_sans, $content);

// save to file
imagejpeg($bottom, './report_cards/'.$uid.'_report_card.jpg');
imagepng($bottom);

imagedestroy($top);
imagedestroy($bottom);

//echo "<img src=generated_image.png />";


?>