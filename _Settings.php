<?php
	$twnDeliverAccount = 'hsu6028@gmail.com'; //台灣便利配使用者帳號

	$webSiteName = '我的生活相片書';
	$appName = 'XX Online editing software';
	$siteName = $_SERVER['SERVER_NAME'];//'http://photobook.online-linux.net';
	$sitePhone = '(0X)XXXX-XXXX';
	$siteAddress = '台中市北區忠明路298號';
	$siteEmail = 'tw.okok888@msa.hinet.net';
	$siteCompany = '建明美術印刷';
	$siteCarryProvider = 'OO 貨運';
	$siteCarryQuery = 'http://cagweb01.hct.com.tw/pls/cagweb/C_POKAM031_NEW_S?pSearchFlg=2&pKey=';
	$siteCarryCheckStatusKeyword = '已配送完成';

	date_default_timezone_set('Asia/Taipei');
	$copyYear = getdate();
	$copyYear = $copyYear['year'];

	$config['taxrate'] = 1;
	$config['rootpage'] = 'index.php';
	$config['customerid']='dQKc9idd1hbR';
	$config['abbreviation']='ok888';
	$config['mapping_gding_member']='g32972';
	$config['CopyrightMessage'] = '88C9740DB841FF0BB621FA323E43727636CA6B9EAFD2D8762B9DE915B8497C74334FFB533FCAA9462FDA631EA755611E2F5153CC7BB6730EB7B9FB6469461B1C54515395DBD8FE1E2F51EC94A911B0B5B6A9FA103F75F3961BAA7B868E01CC8200C9794D3E2173CAB6BAFB1F85E94B7B379048152926F14DDA6F0904BA73E90BB4B7F9D694C89175D72930A0D9DEB430C4F925015004FEB70B4FF8B84EB3EB2BF8B6E95E5952D5462CAA60EEA0E693461350FA323F53F1762A8A5EDE90F2E64E06506594DCD8329B134FFA213FA89D9851CB2992A7E84C6A376D40904055B47DB62179FEAEC2D878C8A70A80A5C77085C64C51952922B2D51F7008EE7D81AC7BB4A7063F68341D61A55E1EA41941815E1C4FB4BFB83BAC8200C644064CF9AC79B6517513983A9C7CB0B104FBA83CBC8EC34FFA213FA89D9851CB2992A7E84C6A376D40904055B47DB62179FEAEC2D878C874096FA5C77073B59250845D3193E5EFA0D5007D81AC7BB4A7063F68341D61A55E1EA41941815E1C4FB4BFB830F46CB6FEFA653F977386F2CA5EDEAEC2D326275FE795B957DC7ED0B0F4F5483FEC70F0C207833E6573ECD1DC95EB4EC4D08C7FBF7981A5C77073B59250845D3193E5EFA0D5007D81AC7BB4A7094D3E2173CAB6BAFB1F85E58343E41B21C1500FAF3EE2DDC7D82BE9AE99D88727B6650594205BF/5606';//for preview用

	$Msg=array();
	//VerifyCode
	$Msg['MobileVerifyMsg']='%NAME% 您好： %CHECKCODE% 為您申請會員的手機認證碼，感謝您對 '.$webSiteName.' 的支持與愛護';
	$Msg['paymentByCash'] = '您好：訂單[%ORDERID%]款項%PAYMENTFEE%元，請至門市繳款後，我們將立即製作，謝謝惠顧。';
	$Msg['paymentByVATM'] = '您好：訂單[%ORDERID%]款項%PAYMENTFEE%元，請匯款009彰銀[%PAYMENTACC%]謝謝惠顧';
	//order1,order2,order3,order4
	$Msg['order_payment_note'] = '按此';
	$Msg['order_payment_note_a']='到店自取免運費';
	$Msg['order_payment_note_b']='您必須先前往我們的門市繳款,確認款項無誤後我們將立即製作!';
	$Msg['order_payment_note_c']='此訂單您已付過款項!若您要查詢訂單請';
	$Msg['order_payment_note_d']='此訂單您無需支付款項!若您要查詢訂單請';
	$Msg['order_payment_note_e']='若您要查詢訂單, 請由會員專區內的訂單查詢. 或';
	$Msg['order_payment_note_f']='若您要查詢訂單, 請由會員專區內的訂單查詢.';
	$Msg['order_payment_note_m']='您的付款程序有誤!請再試一次!';
	$Msg['order_payment_note_n']='<br />確認訂購後將進入綠界線上金流<font color="red">SSL安全連線刷卡</font>頁面.<br />';
	$Msg['order_payment_note_o']='<br /><span style="color:#CC0000">確認訂購後您必須先前往我們的門市繳款.<br />繳款後，我們將立即製作，謝謝您。</span><br />';
	$Msg['order_payment_note_p']='<br />確認訂購後將顯示我們的匯款帳號等相關資訊, 煩請您利用網路銀行 or ATM or 銀行臨櫃 完成轉帳匯款.';
	$Msg['order_payment_note_q']='您無需付款, 請按確定訂購!';

	$Msg['order_status_note']='您的訂單號碼:';
	$Msg['order_status_note_a']='oops...此品項無法訂購!!';
	$Msg['order_status_note_b']='移除訂購';
	$Msg['order_status_note_c']='修改訂購細節';
	$Msg['order_status_note_d']='此項目訂購失敗!!';

	$Msg['order_deliver_note_a'] = '新竹貨運宅配到府';
	$Msg['order_deliver_note_b'] = '配送至貴公司出貨地址';
	$Msg['order_deliver_note_c'] = '到店自取';
	$Msg['order_deliver_note_d'] = '代客宅配';
	$Msg['order_deliver_note_e'] = '物流配送';
	$Msg['order_deliver_note_f'] = '(我們約需1~3個工作天後為您出貨)';
?>
