<?php

$uid="1206766919";
$first_name="Ujjwal";
//homepage interface starts here
include_once 'lightbox.php';

echo "<div id=wrapper style='width:1060px; height:800px; background-image:url(./img/app_bg1.jpg);'>";
echo "<center> 

<br />
<div style=width:auto><font style=color:#FFFFFF; font:Courier New, Courier, monospace size=+4 >".$first_name.", your Fitness Report Card is ready.</font></div>
<br /><br />



<div style='width:400px; height:80px;'>
<iframe src='http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fapps.facebook.com%2Ffitness_report_card%2F&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;action=like&amp;colorscheme=dark&amp;font&amp;height=80&amp;appId=397080130343663' scrolling=no frameborder=0 style=border:none; overflow:hidden; width:450px; height:80px; allowTransparency='true'></iframe></div>

</center>



<div style='width:447px; margin-left:70px; float:left; border:double; border-color:#000; border-style:solid;'>
<img src=./report_cards/".$uid."_report_card.jpg height='530px' width='447px' /></div>

<a href=".$requests_url." target=_blank><div style='margin-left:40px; float:left; display: inline-block; outline: none; cursor: pointer; text-align: center; text-decoration: none; font: bold 24px/100% Arial,Helvetica,sans-serif; padding: 6px 17px; text-shadow: 0 1px 1px #333; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-box-shadow: 0 1px 2px #333; -moz-box-shadow: 0 1px 2px #333; box-shadow: 0 1px 2px #333; color: #fff; border: solid 1px #0085CF; background: -moz-linear-gradient(top,  #48B9FD,  #0090DF); progid: DXImageTransform.Microsoft.gradient(startColorstr='#48B9FD', endColorstr='#0090DF');'>Share with Friends</div></a>


<a href=http://www.earthhospital.co.in target=_blank><div style='margin-left:40px; margin-top:40px; float:left; display: inline-block; outline: none; cursor: pointer; text-align: center; text-decoration: none; font: bold 24px/100% Arial,Helvetica,sans-serif; padding: 6px 17px; text-shadow: 0 1px 1px #333; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-box-shadow: 0 1px 2px #333; -moz-box-shadow: 0 1px 2px #333; box-shadow: 0 1px 2px #333; color: #fff; border: solid 1px #0085CF; background: -moz-linear-gradient(top,  #48B9FD,  #0090DF); progid: DXImageTransform.Microsoft.gradient(startColorstr='#48B9FD', endColorstr='#0090DF');'>Visit our website <br>  Click Here</div></a>

<a href=http://www.facebook.com/ujjwalarora92><div style='margin-top:400px; margin-left:40px; display: inline-block; outline: none; cursor: pointer; text-align: center; text-decoration: none; font: bold 14px/100% Arial,Helvetica,sans-serif; padding: 6px 17px; text-shadow: 0 1px 1px #333; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; -webkit-box-shadow: 0 1px 2px #333; -moz-box-shadow: 0 1px 2px #333; box-shadow: 0 1px 2px #333; color: #fff; border: solid 1px #0085CF; background: -moz-linear-gradient(top,  #48B9FD,  #0090DF); progid: DXImageTransform.Microsoft.gradient(startColorstr='#48B9FD', endColorstr='#0090DF');'>App developed by : Ujjwal Arora</div></a>


</center></div>";
	

?>

