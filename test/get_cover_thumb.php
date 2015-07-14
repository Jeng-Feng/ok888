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
                        
                        $arrParam['bookid'] ='65061522343911';
                        $arrParam['timestamp'] = $time;
                        
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
                        function get_cover_thumb(){
                        	var ajax_url_main = "https://api.gggo.tw/gateway.php";
                         	var ajax_url_method = "/creation/get_cover_thumb";
                        	var ajax_url_param = "?api_key=<?=$arrParam['api_key']?>&timestamp=<?=$time?>&signature=<?=$signature?>&bookid=<?=$arrParam['bookid']?>";
                        	var ajax_url = ajax_url_main+ajax_url_method+ajax_url_param;
                        	//alert(ajax_url_main+ajax_url_method+ajax_url_param);
                        	
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
                            			var output = "";
                            			if(jsonData.error){
                            				alert(jsonData.error.code+"\n"+jsonData.error.message);
                                    console.log(jsonData.error.code+"\n"+jsonData.error.message);
                            			}else{
                             				var arrData = jsonData.data;
                            				//alert(arrData.link);
                            				if (arrData.link != ""){
                                       $("#img_previews").attr("src","http://www.lifebooks.com.tw" + arrData.link);
                                    }else{ //取得沒有封面的相片書處理
                                      $("#img_thumbs_div").html("");
                                    } 
                            			}	
                                 }
                            });
                        }                
                        get_cover_thumb();
    							  </script>              
</body> 
</html>