  <title>訂單測試</title>
  <? php
  $xml = '<ORDER>
  <suID>service@ezship.com.tw</suID>
  <orderID>20140318154002</orderID>
  <orderStatus>A01</orderStatus>
  <orderType>1</orderType>
  <orderAmount>1680</orderAmount>
  <rvName>謝無忌</rvName>
  <rvEmail>123@ezship.com.tw</rvEmail>
  <rvMobile>0987654321</rvMobile>
  <stCode>TFM0038</stCode>
  <rtURL>http://yourdomain.domain/direct/program.php</rtURL>
  <webPara>20140318154002-xxx</webPara>
  </ORDER>';//要發送的xml
  $url = 'https://www.ezship.com.tw/emap/ezship_xml_order_api.jsp';//接收XML地址
  $header = 'Content-type: test/xml';//定義content-type為xml
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
  
  ?>