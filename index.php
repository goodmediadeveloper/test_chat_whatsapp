<?php
// curl_setopt($ch, CURLOPT_POSTFIELDS, "token=66263b9075828e25414a523b115618ac5db7de7a20a68&uid=375293942692&to=375259955372&custom_uid=msg-2447&text=Hello+world+Dzmity!!!%21");

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.waboxapp.com/api/send/chat");
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "token=66263b9075828e25414a523b115618ac5db7de7a20a68&uid=375293942692&to=375259955372&custom_uid=msg-2447&text=Hello+world%21");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_MAXREDIRS, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25);

$response = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close ($ch);


var_dump($response);
echo '<br>';
var_dump($info);

// echo "HELLO WORLD !!!!!";

($f = dirname(FILE). '\\' . uniqid ().'.txt');
(file_put_contents($f, $HTTP_RAW_POST_DATA));