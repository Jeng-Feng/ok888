<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <title>api測試</title>
  </head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <?php
  //api_key
  $arrParam['api_key'] = 'qr30xuzdm41wvawmmkx95cgsjasnwq10';
  //api_secret
  $md5string = 'j57rd3hE7v';
  $time = time();
  
  $tmp_param = '';
  
  $arrParam['timestamp'] = $time;
  $arrParam['member_account'] = "myjoy0810";
  $arrParam['productclass_id'] = "photobook";
  // $arrParam['product_id'] = "A4HHP";
  
  ksort($arrParam); //重要，排序key
  
  foreach($arrParam as $tmpk => $tmpv){
  $tmp_param.=$tmpk.$tmpv;
  }
  $md5string.= $tmp_param;
  $signature = md5($md5string);
  ?>
  <body>
    <td><div>
      <div id="img_thumbs_div"> <img id="img_previews" src="" border="0" /> </div>
      <div> <span id="img_thumbs"></span> </div>
    </div></td>
    
    
    <script type="text/javascript">
    function get_product_list(){
    var ajax_url_main = "https://api.gggo.tw/gateway.php";
    var ajax_url_method = "/Product/get_product_list";
    var ajax_url_param = "?api_key=<?=$arrParam['api_key']?>&timestamp=<?=$time?>&signature=<?=$signature?>&productclass_id=<?=$arrParam['productclass_id']?>&member_account=<?=$arrParam['member_account']?>";
    var ajax_url = ajax_url_main+ajax_url_method+ajax_url_param;
    // alert(ajax_url_main+ajax_url_method+ajax_url_param);
    console.log(ajax_url_main+ajax_url_method+ajax_url_param);
    // JSON回覆
    
    $.ajax({
    type: "GET",
    url: ajax_url,
    dataType: "json",
    cache:false,
    error:  function(jqXHR, textStatus, errorThrown){
    var message = "There was an error with the AJAX request.\n";
    message += "\najax請求錯誤--get_fb_userinfo";
    alert(message+"\n"+jqXHR+"\n"+textStatus+"\n"+errorThrown);
    },
    success: function(jsonData){

    var output = "";//歸零
    if(jsonData.error){
    alert(jsonData.error.code+"\n"+jsonData.error.message);
    console.log(jsonData.error.code+"\n"+jsonData.error.message);
    }else{
    
    var arrData = jsonData.data;
    var arrProduct = new Array();　// 宣告一個新的陣列為 arrProduct
    
    for( var i= 0; i < arrData.product.length; i++){
    var Product_id = arrData.product[i].product_id;  //proudct_id
    var product_name = arrData.product[i].product_name;  //product_name
    var product_intro = arrData.product[i].product_intro;  //product_intro
    var product_price = arrData.product[i].product_price;  //product_price
    var product_qty = arrData.product[i].product_qty;  //product_qty
    var product_show = arrData.product[i].product_show;  //product_show
    var product_member_show = arrData.product[i].product_member_show;  //product_member_show

    output = output + 'Product_id:' + Product_id + '\n';
    output = output + 'product_name:' + product_name + '\n';
    output = output + 'product_intro:' + product_intro + '\n';
    output = output + 'product_price:' + product_price + '\n';
    output = output + 'product_qty:' + product_qty + '\n';
    output = output + 'product_show:' + product_show + '\n';
    output = output + 'product_member_show:' + product_member_show + '\n';
    
    arrProduct[i] = output;
    output ="";
    console.log('第' + i + '筆: ' + arrProduct[i] + '\n');

    }//取固定數量的值
    
    //alert(output);
    }
    }
    });
    }
    $(function(){
    get_product_list();
    });
    </script>
  </body>
</html>