<?php
//header(‘P3P:CP=”IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT”‘);
//header('P3P: CP="CAO PSA OUR"')

session_start();
require './src/facebook.php';
require 'config.php';


$canvas_page="http://apps.facebook.com/fitness_report_card/";
$app_id="397080130343663";

//oauth 2.0 procedure start 
$signed_request = $_REQUEST["signed_request"];

list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

if (empty($data["user_id"])) {
	echo "<script>
  var oauth_url = 'https://www.facebook.com/dialog/oauth/';
  oauth_url += '?client_id=397080130343663';
  oauth_url += '&redirect_uri=' + encodeURIComponent('http://apps.facebook.com/fitness_report_card/');
  oauth_url += '&scope=user_about_me,user_birthday,email,publish_stream,publish_actions,user_photos'

  window.top.location = oauth_url;
</script>";
    } 
//oauth 2.0 procedure ends	

//else case when user has been auth'd	
else {



$fbme = $facebook->api('/me');

$uid = $facebook->getUser();

//fetch user information	
 $user_id = $fbme['id'];
 $name=$fbme['name'];
 $first_name=$fbme['first_name'];
 //$last_name=$fbme['last_name'];
 $gender=$fbme['gender'];
 //$facebook_url=$fbme['link'];
 //$location=$fbme['location']['name'];
 //$bio_info=$fbme['bio'];
 //$work_array=$fbme['work'];
 //$education_array=$fbme["education"];
 $email=$fbme['email'];
 $date_of_birth=$fbme['birthday'];


//calculate user's age
$year_of_birth=substr($date_of_birth, 6, 4);
$current_year=date("Y");     
$age=$current_year - $year_of_birth;

//determine age category
$age_category;
if($age<13)
$age_category="Child";

else if($age>13 && $age<=20)
$age_category="Teenager";

else if($age>20 && $age<=40)
$age_category="Adult";

else $age_category="Middle-aged";


//determine birthday format
$date;
$month_int;
$month_char;
$month;

$date=substr($date_of_birth, 3, 2);
$month_int=substr($date_of_birth, 0, 2);
$month_char=array("01"=>"January","02"=>"February","03"=>"March","04"=>"April","05"=>"May","06"=>"June","07"=>"July","08"=>"August","09"=>"September","10"=>"October","11"=>"November","12"=>"December");
$month=$month_char["$month_int"];

$birthday=$month." ".$date;

//save user's profile pictute to directory profile_pics
$image = file_get_contents('http://graph.facebook.com/'.$uid.'/picture?type=large'); // sets $image to the contents of the url
file_put_contents('./profile_pics/'.$uid.'_dp.jpg', $image); // places the contents in the file /path/image.gif


require 'content_groupwise.php';
$_SESSION['content']=$content;


     $requests_url = "http://www.facebook.com/dialog/apprequests?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=I%20found%20this%20app%20really%20helpful";


//homepage interface starts here

include_once 'homepage_interface.php';

//require 'post_album_photo.php';
//require 'post_user_wall.php';

}
//else case when user has been auth'd ends	
?>

