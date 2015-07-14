<?php
//api_key
$arrParam['api_key'] = 'qr30xuzdm41wvawmmkx95cgsjasnwq10';
//api_secret
$md5string = 'j57rd3hE7v';
$time = time();

$tmp_param = '';


//測試get_members
$arrParam['encrypt_type'] = 'sha1';
$arrParam['start'] = '1';
$arrParam['end'] = '5';
$arrParam['timestamp'] = $time;



ksort($arrParam); //重要，排序key

foreach($arrParam as $tmpk => $tmpv){
	$tmp_param.=$tmpk.$tmpv;
}
$md5string.= $tmp_param;
$signature = md5($md5string);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>api測試</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript">

function test_member(){
	var ajax_url_main = "https://api.gggo.tw/gateway.php";
	//測試get_members
	var ajax_url_method = "/member/get_members";
	var ajax_url_param = "?api_key=<?=$arrParam['api_key']?>&timestamp=<?=$time?>&signature=<?=$signature?>&encrypt_type=<?=$arrParam['encrypt_type']?>&start=<?=$arrParam['start']?>&end=<?=$arrParam['end']?>";
	
	
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
			}else{
				//測試get_members
				var arrData = jsonData.data.members;
				for(var i=0; i<arrData.length; i++){
					output+= arrData[i].id+"  ";
					output+= arrData[i].pwd+"  ";
					output+= arrData[i].zip+"  ";
					output+= arrData[i].city+"  ";
					output+= arrData[i].district+"  ";
					output+= arrData[i].address+"  ";
					output+= arrData[i].name+"  ";
					output+= arrData[i].mobile+"  ";
					output+= arrData[i].email+"\n\n";
				}  
				
				alert(output);
			}	
        }
    });
}


$(function(){
	
	test_member();

});
</script>
</head>
<body>

</body>
</html>