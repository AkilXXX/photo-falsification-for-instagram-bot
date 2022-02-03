<?php

// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
function bot($method, $datas = []) {
$token = "";//توكن
$url = "https://api.telegram.org/bot$token/" . $method;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$res = curl_exec($ch);
curl_close($ch);
return json_decode($res, true);
}
function getupdates($up_id) {
$get = bot('getupdates', ['offset' => $up_id]);
return end($get['result']);
}

// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
$id = "1078349914";


while (1) {
	
	// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
$get_up = getupdates($last_up + 1);
$last_up = $get_up['update_id'];
if ($get_up) {
	$message = $get_up['message'];
	$mid = $get_up['message']['message_id'];
	$userID = $message['from']['id'];
	$chat_id = $message['chat']['id'];
	$firstname = $message["from"]["first_name"]; 
     $text = $message['text'];
     


if($text == '/start'){




bot('sendMessage',[
        'chat_id'=>$chat_id,
         'text'=>"مرحبا بك في بوت التزوير 
قم بارسل المعلومات بهذا الشكل :
الاسم:الكود:اليوزر
مثال :
akil:1234:@akil828 \n.BY  @AKIL828"]);
         } 
         
         // اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
 if(strpos($text, ":")){

 $s = explode(":",$text)[0];
 $d = explode(":",$text)[1];
 $f = explode(":",$text)[2];
 $img = imagecreatefromjpeg('oo.jpg');
$white = imagecolorallocate($img, 0, 0, 0);
$j = system("pwd");

// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
$font = "$j/AmaticSC-Regular.ttf";
imagettftext($img, 40, 0, 280, 500, $white, $font, "$s \n $d \n $f");
imagejpeg($img, "SAVE.JPG", 2000);
// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile("SAVE.JPG")
 ]);
 }
// اذا تخمط حط حقوقي @AKIL828 - @FFFFFFM
}
  
}