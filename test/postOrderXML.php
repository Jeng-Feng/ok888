<?php
if(isset($_POST['Submit2']))
{
  header("Content-Type:text/html; charset=Big5");

  echo("<form method='post' id='formsubmitout' name='simulation_to' action='https://www.ezship.com.tw/emap/rv_request_web.jsp'> ");
  echo("  <input type='hidden' name='rv_name' value='" .iconv("UTF-8", "Big5",$_POST['rv_name']). "'> ");
  echo("  <input type='hidden' name='rv_email' value='" .iconv("UTF-8", "Big5",$_POST['rv_email']). "'> ");
  echo("  <input type='hidden' name='rv_mobil' value='" .iconv("UTF-8", "Big5",$_POST['rv_mobil']). "'> ");
  echo("  <input type='hidden' name='order_id' value='" .iconv("UTF-8", "Big5",$_POST['order_id']). "'> ");
  echo("  <input type='hidden' name='su_id' value='" .iconv("UTF-8", "Big5",$_POST['su_id']). "'> ");
  echo("  <input type='hidden' name='rv_amount' value='" .iconv("UTF-8", "Big5",$_POST['rv_amount']). "'> ");
  echo("  <input type='hidden' name='webtemp' value='" .iconv("UTF-8", "Big5",$_POST['webtemp']). "'> ");
  echo("  <input type='hidden' name='rturl' value='" .iconv("UTF-8", "Big5",$_POST['rturl']). "'> ");
  echo("</form> ");
  echo(" <script>document.getElementById('formsubmitout').submit();</script> ");

  return;
}

header("Content-Type:text/html; charset=utf-8");
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
