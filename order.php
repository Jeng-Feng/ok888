<html>
<title>訂單測試</title>
<?php

$order_id = $_POST["order_id"];
$sn_id = $_POST["sn_id"];
$order_status = $_POST["order_status"];

$xml = '<ORDER>web_map_xml</ORDER>';//要發送的xml
$url = ' https://www.ezship.com.tw/emap/ezship_xml_order_api.jsp';//接收XML地址 
$header = 'Content-type: text/xml';//定義content-type為xml
$ch = curl_init(); //初始化curl
curl_setopt($ch, CURLOPT_URL, $url);//設置链接
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//設置是否返回信息
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//設置HTTP頭
curl_setopt($ch, CURLOPT_POST, 1);//設置為POST方式
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);//POST數據
$res = curl_exec($ch);//接收返回信息
if(curl_errno($ch)){//出错則顯示錯誤信息
print curl_error($ch);
}
curl_close($ch); //關閉curl鏈接
echo $res;//顯示返回信息


echo "order_id:" . $order_id . "<br/>";
echo "sn_id:" . $sn_id . "<br/>";
echo "order_status:" . $order_status . "<br/>";
?>

<body>
  <script type="text/javascript">
  
  </script>
</body>
</html>