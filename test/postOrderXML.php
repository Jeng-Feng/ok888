<?php

  echo $_POST['test.lifebooks.com.tw/test/getStore.php'];
?>

<html>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <head>
    <title>eShop 模擬購物網站超商取貨</title>
  </head>
  <body>
    
<form method="post" name="simulation_from" action="https://www.ezship.com.tw/emap/ezship_xml_order_api.jsp">
      <center>
      <textarea cols="120" rows="30" name="web_map_xml">
                  <ORDER>
                   <suID>hsu6028@gmail.com</suID>
                   <orderID>201507071136</orderID>
                   <orderStatus>A02</orderStatus>
                   <orderType>3</orderType>
                   <orderAmount>1680</orderAmount>
                   <rvName>楊曉G</rvName>
                   <rvEmail>garyy@mail2000.com.tw</rvEmail>
                   <rvMobile>0926963936</rvMobile>
                   <stCode>TFM11370</stCode>
                   <rtURL>http://test.lifebooks.com.tw/test/OrderStatus.php</rtURL>
                   <webPara>20150707001-xxx</webPara>
                   <Detail>
                      <prodItem>1</prodItem>
                      <prodNo>A2769-1</prodNo>
                      <prodName>格子口袋襯衫</prodName>
                      <prodPrice>860</prodPrice>
                      <prodQty>1</prodQty>
                      <prodSpec>白</prodSpec>
                   </Detail>
                   <Detail>
                      <prodItem>2</prodItem>
                      <prodNo>A2770-2</prodNo>
                      <prodName>格子口袋襯衫</prodName>
                      <prodPrice>820</prodPrice>
                      <prodQty>1</prodQty>
                      <prodSpec>水藍</prodSpec>
                   </Detail>
                </ORDER>
    </textarea><!-- xml內容 -->
    <br>
    <input type="submit" value="送出訂單">
    </center>
</form>
</body>
</html>
