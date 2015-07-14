<html>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <head>
    <title>eShop 模擬購物網站超商取貨</title>
  </head>
  <body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="84" align="center">
          <div style="font-size:28px"><br><b> <font size=6 color=red>模擬</font> 購物網站超商取貨</b><br><br></div>
          <img src="http://www.ezship.com.tw/images/store_step.gif" border="0">
        </td>
      </tr>
    </table>
  <hr>
  <form method="post" name="simulation_from" action="https://www.ezship.com.tw/emap/ezship_request_order_api.jsp">
    <input type="text" name="su_id"  value="hsu6028@gmail.com"><br> <!-- 業主在 ezShip 使用的帳號 -->
    <input type="text" name="order_id" value="1559211"><br> <!-- 購物網站自行產生之訂單編號 -->
    <input type="text" name="order_status" value="A02"><br> <!-- 訂單狀態，超商取貨 -->
    <input type="text" name="order_type" value="3"><br> <!-- 訂單類別，取貨不付款 -->
    <input type="text" name="order_amount" value="1001"><br> <!-- 訂單金額，取貨不付款 -->
    <input type="text" name="rv_name" value="楊曉基"><br> <!-- 取件人姓名 -->
    <input type="text" name="rv_email" value="garyy@mail2000.com.tw"><br> <!-- 取件人email -->
    <input type="text" name="rv_mobile" value="0926963936"><br> <!-- 取件人行動電話 -->
    <input type="text" name="st_code" value="TFM11370"><br> <!-- 取件人行動電話 -->
    <input type="text" name="rv_addr" value="台中市北區漢口路四段284之1號(全家超商)"><br> <!-- 取件人收件地址 -->
    <input type="text" name="rtn_url" value="http://test.lifebooks.com.tw/test/OrderStatus.php"><br><!-- 回傳路徑及程式名稱 -->
    <input type="text" name="web_para" value="fdfdsfdsfdsfffff"><br><!-- 額外參數 -->
    <input type="submit" value="送出訂單">
  </form>
  <hr>
  </body>
</html>
