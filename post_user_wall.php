<?php

//post on user's wall

//$token = "https://graph.facebook.com/oauth/access_token?%20client_id=397080130343663&client_secret=3cb58db51dc45236910de3c0c12ab49b&%20grant_type=client_credentials";
$token = $facebook->getAccessToken();
//Try to Publish on wall or catch the Facebook exception
try {
$attachment = array('message' => 'This app is really cool.',
            'access_token' => $token,
                    'name' => 'Fitness Report Card',
                    'caption' => 'Check out your report now !',
                    'link' => 'http://apps.facebook.com/fitness_report_card/',
                    'description' => '',
                    'picture' => 'app_logo.jpg',
                    'actions' => array(array('name' => 'www.earthhospital.co.in', 
                                      'link' => 'http://earthhospital.co.in/'))
                    );

$result = $facebook->api('/me/feed/', 'post', $attachment);
}

//If the post is not published, print error details
catch (FacebookApiException $e) {
echo '<pre>';
print_r($e);
echo '</pre>';
}		 

?>