<?php
ini_set('session.use_trans_sid', 1);
header('P3P:CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');

session_start();
require './src/facebook.php';
require 'config.php';


$canvas_page="http://apps.facebook.com/fitness_report_card/";
$app_id="397080130343663";

//oauth 2.0 procedure start 
$signed_request = $_REQUEST["signed_request"];

list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

$data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

echo $data['user_id'];

?>