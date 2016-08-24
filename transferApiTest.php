<?php
$website = "EsBall";
$username = "betsyLiu";
$uppername = "dnnatest1";
$remitno = "8223362036854775806";
$action = "IN";
$remit = "100000";

$a = "00000";
$b = MD5("EsBallbetsyLiu82233620368547758067rRGfi1b20160824"); 
$c = "00";
$key = $a.$b.$c;

$url = "http://bm.vir999.com/app/WebService/JSON/display.php/Transfer?website=".$website."&username=".$username."&uppername=".$uppername."&remitno=".$remitno."&action=".$action."&remit=".$remit."&key=".$key;
// 建立CURL連線
$ch = curl_init();

// 設定擷取的URL網址
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);

//將curl_exec()獲取的訊息以文件流的形式返回，而不是直接輸出。
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);

// 執行
$temp = curl_exec($ch);

// 關閉CURL連線
curl_close($ch);

echo $temp;
?>