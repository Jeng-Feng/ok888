<?php
  require_once(dirname(__FILE__).'/init.php');
  require_once($config['global_library'].'/_top_commission.php');
?>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/normal_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<!-- Basic Page Needs
	================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$getmetadescription?>">
<meta name="keywords" content="<?=$getmetakeyword?>">
<!-- InstanceBeginEditable name="doctitle" -->
  <title>委託製作契約</title>
  <!-- InstanceEndEditable -->
<meta name="author" content="Little NEKO">
<!-- Mobile Specific Metas================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS================================================== -->
<!-- Bootstrap  -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<!-- plugin css  -->
<link rel="stylesheet" type="text/css" href="vjs/animation-framework/animate.css" />
<!-- isotope -->
<link type="text/css" rel="stylesheet" href="vjs/isotope/css/style.css">
<!-- icon fonts -->
<link type="text/css" rel="stylesheet" href="css/font-icons/custom-icons/css/custom-icons.css">
<!-- Custom css -->
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<script src="vjs/modernizr-2.6.1.min.js"></script>
<link rel="shortcut icon" href="images/favicon.ico">
<!-- MAXM -->
<script src="js/jquery-1.9.0.min.js"></script>
<script src="Scripts/jquery-migrate-1.1.0.min.js"></script>
<link rel="stylesheet" href="css/jquery-fallr-1.0.css" type="text/css" />
<script src="Scripts/mylibs/jquery-fallr-1.2.js"></script>
<link rel="stylesheet" href="css/shoppingcart.css">
<? require_once($config['global_library'].'/shoppingcart.php'); ?>
<? require_once($config['global_library']."/js_common.php"); ?>
<link rel="stylesheet" href="css/vsite.css">
<link rel="stylesheet" href="css/yours.css">
<!-- END MAXM -->
<!-- InstanceBeginEditable name="custom javascript" -->
  <?require_once($config['global_library'].'/_commission.php');?>
  <script src="js/jquery.prettyPhoto.js"></script>
  <!-- InstanceEndEditable -->

<!-- DEMO 區 start
	加入購物車按紐請加一個 addToCart 的 class name
	移出購物車按紐請加一個 removeFromCart 的 class name
-->
<script type="text/javascript" language="javascript">


$(function(){
	if($('#shoppingcart_qty').length > 0) $('#CartQty').html($('#shoppingcart_qty').html());
	
	var iQty = parseInt($('#shoppingcart_qty').html());
	if (iQty == 0){
		 $('#shoppingcart_qty').html('');
		 $('#CartQty').html($('#shoppingcart_qty').html());
		 $('#all_my_shoppingcart').unbind("click"); //當購物車清單數量=0時，動態移除結帳函式gotocounter();
	} 
		
	$('.addToCart').click(function() {
		setTimeout(function(){
			$('#CartQty').html($('#shoppingcart_qty').html());
			$('#all_my_shoppingcart').unbind("click"); // 避免bind()失效，所以bind()之前先unbind();
						
			iQty = parseInt($('#shoppingcart_qty').html());
			$('#CartQty').html( (iQty == 0) ? '': $('#shoppingcart_qty').html() ); //假如購物車清單數量為0，購物車清單數量顯示空白
			
			//動態加入結帳函式gotocounter();
			$('#all_my_shoppingcart').click(function(){
				gotocounter();
			});
		},500);
	});
	
	$('.removeFromCart').click(function() {
		setTimeout(function(){
			iQty = parseInt($('#shoppingcart_qty').html());
			$('#CartQty').html( (iQty == 0) ? '': $('#shoppingcart_qty').html() ); //假如購物車清單數量為0，購物車清單數量顯示空白
			
			if (iQty == 0){
				$('#all_my_shoppingcart').unbind('click'); //當購物車清單數量=0時，動態移除結帳函式gotocounter();
			} 
		},500);
	});
	
	$('#all_my_shoppingcart').hover(
		function(){
			var clistli = '';
			for(i=0; i<clist_car.length; i++){
				clistli += '<li id="'+cplist_car[i]+'">'+clist_car[i]+'</li>';
			}
			$('#CartQty').append("<br>" + clistli);
		}, // end mouseover
		function(){
			$('#CartQty').find('li').remove();
			$('#CartQty').find('br').remove();
		} // end mouseout
	); // end hover
	
});
</script>
<style>
#shoppingcar {
	opacity:0;
}
</style>
<!-- DEMO 區 end -->

</head>
<body>
<!-- Primary Page Layout 
	================================================== --> 
<!-- globalWrapper -->
<div id="globalWrapper">
  <header class="navbar-fixed-top"> 
    <!-- pre header -->
    <div id="preHeader" class="hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <ul class="quickMenu">
              <li><a href="template-site-map.html" class="linkLeft">Site map</a></li>
              <li><a href="template-about.html">About us</a></li>
              <li><a href="template-team.html">Our team</a></li>
              <li><a href="template-contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="col-xs-6">
            <div id="contactBloc" class="clearfix"> 
              <!-- social icons -->
              <ul class="socialNetwork">
                <li><a href="#" class="tips" title="follow me on Facebook"> <i class="icon-facebook-1"></i></a></li>
                <li> <a href="#" class="tips" title="follow me on Twitter"> <i class="icon-twitter-bird"></i> </a> </li>
                <li> <a href="#" class="tips" title="follow me on Google+"> <i class="icon-gplus-1"></i> </a> </li>
                <li> <a href="#" class="tips" title="follow me on Linkedin"> <i class="icon-linkedin-1"></i> </a> </li>
                <li> <a href="#" class="tips" title="follow me on Dribble"> <i class="icon-dribbble"></i> </a> </li>
                <!-- social icons -->
              </ul>
              <!-- phone --> 
              <span class="contactPhone"><i class="icon-mobile"></i>615.987.1234</span> </div>
          </div>
        </div>
      </div>
    </div>
    <!-- pre header --> 
    <!-- header -->
    <div id="mainHeader" role="banner">
      <div class="container">
        <nav class="navbar navbar-default scrollMenu" role="navigation">
          <div class="navbar-header"> 
            <!-- responsive navigation -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- Logo --> 
            <a class="navbar-brand" href="index.php"><img src="images/home/main-logo.png" alt="photobook logo"/></a> 
            
           <?if($isLogin == true):?>
            <a class="navbar-brand" id="all_my_shoppingcart" href="#" onclick="gotocounter();"><span class="glyphicon glyphicon-shopping-cart iconMedium my_shopping_cart" aria-hidden="true"></span><span id="CartQty">0</span><span id="CartItemList"></span></a> 
            <?endif;?>
           
            
            </div>
          <div class="collapse navbar-collapse" id="mainMenu"> 
            <!-- Main navigation -->
            <ul class="nav navbar-nav pull-right">
              <li class="primary"> <a href="index.php" class="firstLevel" >首頁</a> </li>
              
              <li class="primary"> <a href="products.php" class="firstLevel hasSubMenu" >產品</a>
                <ul class="subMenu">
                  <li><a href="products.php">產品</a></li>
                  <li><a href="products.calendar.php">桌月曆</a></li>
                  <li><a href="products.photobook.php">相片書</a></li>
                  <li><a href="products.sticker.php">大頭貼</a></li>
                  <li><a href="customprods.php?c=c_cate_1">無框裝飾畫</a></li>
                  <li><a href="customprods.php?c=c_cate_6">拍照背景牆</a></li>
                  <li><a href="#">水晶相片相本</a></li>
                </ul>
              </li>
              <?if($isLogin == true):?>
              <li class="primary"><a id="php_member_order_history" href="./memberindex.php">
                <?=$lang_member_zone?>
                </a></li>
              <li class="primary"><a id="php_member_logout" href="javascript:bye();">
                <?=$lang_logout?>
                </a></li>
              <?else:?>
              <li class="primary"><a id="php_member_login" href="./memberlogin.php">
                <?=$lang_member_login?>
                </a></li>
              <li class="primary"><a id="php_member_join" href="./memberregisterrule.php">
                <?=$lang_member_register?>
                </a></li>
              <?endif;?>
              <li class="primary"><a href="helps.php"  class="firstLevel hasSubMenu">新手上路</a>
              <ul class="subMenu">
                  <li><a href="helps.php">新手操作手冊</a></li>
                  <li><a href="faq01.php">第一次接觸</a></li>
                  <li><a href="faq02.php">照片的準備</a></li>
                  <li><a href="faq03.php">編輯與印製</a></li>
                  <li><a href="faq04.php">訂購與付款</a></li>
                  <li><a href="faq05.php">出貨與售服</a></li>
                </ul>
              
              </li>
              <li class="primary"><a href="about.php"  class="firstLevel hasSubMenu" >關於我們</a>
              <ul class="subMenu">
                  <li><a href="about.php">關於我們</a></li>
                  <li><a href="#">相片書介紹</a></li>
                  <li><a href="#">大頭貼介紹</a></li>
                  <li><a href="#">無框裝飾畫介紹</a></li>
                  <li><a href="#">拍照背景牆介紹</a></li>
                  <li><a href="#">水晶相片相本介紹</a></li>
                </ul>
              </li>
              
              <li class="primary"><a href="news.php">優惠訊息</a></li>
              <li class="primary"><a href="contact.php" class="firstLevel hasSubMenu" >聯絡我們</a>
               <ul class="subMenu">
                  <li><a href="contact.php">線上E-mail</a></li>
                  <li><a href="online-service.php">線上客服</a></li>
                  <li><a href="service-cooperation.php">行銷合作</a></li>
                </ul>
              
              </li>
            </ul>
            <!-- End main navigation --> 
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- header --> 
  <!-- ======================================= content ======================================= -->
  <section id="page">
    <header class="page-header margin-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>&nbsp;</h1>
          </div>
          <div class="col-sm-6 hidden-xs">
            <ul id="navTrail">
              <li>&nbsp;</li>
              <li>&nbsp;</li>
              <li>&nbsp;</li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="margin-top none"> <!-- InstanceBeginEditable name="main content" -->

<?//require_once($config['global_library'].'/_albumView.php');?>
<div id="bootstrap_content">
  <div class="container" align="center">
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">委託製作契約</h1>
      </div>
      <div class="panel-body">
        
        <p class="text-left">&nbsp;<?=$webSiteName?>&nbsp;係由&nbsp;<?=$siteCompany?>&nbsp;（以下簡稱本公司）依據本服務條款提供透過&nbsp;<?=$appName?>&nbsp;軟體（以下簡稱本軟體），製作印刷成冊相關數位化內容（以下簡稱製作資料）並由客戶委託本公司印製的服務（以下簡稱本服務）。當您使用本服務時，即表示您已閱讀、瞭解並同意接受本契約書之所有內容。本公司有權於任何時間修改或變更本契約書之內容，建議您隨時注意該等修改或變更，並於每次使用本服務前，詳細閱讀本契約書。您於任何修改或變更後繼續使用本服務均被視為您已閱讀、瞭解並同意接受本契約書。如果您不同意本契約書的內容，或者您所屬的國家或地域排除本服務條款內容之全部或一部時，請立即停止使用本服務。</p>
        <p class="text-left">若您為未滿二十歲，除應符合上述規定外，並應於您的家長（或監護人）閱讀、瞭解並同意本服務條款之所有內容及其後修改變更後，方得使用或繼續使用本服務。當您使用或繼續使用本服務時，即視為您的家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其後修改變更。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">服務可用性</span>
        </h6>
        <p class="text-left">本公司將盡一切可能及合理的努力以提供您的製作資料（檔案）於傳輸過程中的穩定與安全。但本公司無法保證於傳輸過程中不會發生網路中斷或者錯誤，或免於惡意的攻擊行為，包括但不限於病毒、服務阻斷、蠕蟲、木馬攻擊或者任何帶有惡意形式的侵害。請自行妥善的保存儲存於您的電腦中的製作資料。本公司保留權力於任何時點，不經通知可隨時修改或暫時或永久停止繼續提供本服務（或其任一部分）。當您同意本契約書後，本公司有權判斷您是否合理、正常的使用本服務。當本公司認為您已經違反本契約書之條款及精神，本公司有權逕行停止、取消您的使用資格，並隨時終止持續的服務，而無須提前以書面或其他形式通知您。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">委託製作契約的成立</span>
        </h6>
        <p class="text-left">使用者必須透過本軟體製作，並完成購買程序後，本契約書方得以成立。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">委託製作訂單之完成與取消</span>
        </h6>
        <p class="text-left">
          （a）使用者必須自行確認製作內容正確無誤，任何原始資料提供之錯誤、誤用或品質不佳（包括但不限於製作資料的解析度不足），均不在瑕疵擔保範圍內。<br />
          （b）使用者必須確認印製品的收件地址正確無誤，如地址填載錯誤而致退回，另行寄送之費用由使用者自行負擔。<br />
          （c）使用者必須確認發票抬頭與收件地址正確無誤，如地址填載錯誤而致退回，另行寄送之費用由使用者自行負擔。<br />
          （d）使用者必須依據指示之付款方式及金額完成該筆委託製作訂單費用的支付。<br />
          （e）使用者必須以網路上載的方式完成委託製作資料傳輸至指定之伺服器。<br />
          一旦使用者完成委託製作的購買流程後，一切後續之生產、配送均為自動化處理，無法中途取消。使用者在完成委託製作資料的傳輸前，均可隨時終止委託。是故，完成委託後，即無法取消訂單及退款。
        </p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">受委託製作</span>
        </h6>
        <p class="text-left">本公司是依據您經由本軟體自行提供圖片及字型編輯、製作並代為生產印製品。其版型、樣式均應以本軟體內含的為準。並依照 Photobook Online 網站上所載明之規格為生產標準。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">瑕疵擔保及有限保證</span>
        </h6>
        <p class="text-left">本公司秉持以人為本、以客為尊的經營理念來服務顧客。如發生裝訂錯誤、缺頁、裁切不齊、印刷污損與其他可歸責於本公司之情況，請您用數位相機拍下瑕疵發生的情形，並且以電子郵件附加附件的方式發送到本公司的客服信箱中， 並馬上與客服人員聯繫。我們將會在收到瑕疵品後立即為您免費重新製作一份同樣規格同樣內容之印製品。除上述瑕疵擔保範圍內本公司同意對印製品品質進行保證外，本公司不負其他保證責任。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">瑕疵擔保及有限保證</span>
        </h6>
        <p class="text-left">
          <b color="red">每件產品均屬個人客製化訂製，係非大量生產之商品，故本服務不提供網路購物七天鑑賞期之服務。消費者經由自行編排、確認完稿、已閱讀服務條款，並下單付款後始同意完成購買流程，不可任意取消訂單，如有本公司認為不適當，或使本公司蒙受損害，本公司可視情況拒絕繼續交易，取消訂單所產生之相關費用（如手續費等）消費者須自行負擔。</b><br />
          本服務製作所需時間約為一~三個工作天（不含運送時間），當您完成委託製作訂單並支付費用後，您可於 Photobook Online 網站上輸入您的訂單編號查詢您的訂單狀態。如因天災、戰爭或其他不可抗力之因素導致製作與運送發生延遲，本公司無須負擔任何責任。
        </p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">製作資料限制</span>
        </h6>
        <p class="text-left">製作資料當中所有使用之素材及圖片（包括但不限於影像、文字），皆不可侵害他人之著作權、肖像權、隱私權以及其他一切屬於專有的權利。同時也無違反社會善良風俗或與中華民國法律抵觸之內容或與您所在地區、國家法律之規定有所抵觸的內容，務必請您詳細確認過後再進行製作。如有第三人主張其權利並進行訴訟時，您應負起一切法律責任。本公司亦將對因此所造成的損失對您進行追訴與請求賠償。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">準據法與管轄法院</span>
        </h6>
        <p class="text-left">本委託製作契約未盡事宜，均應依照中華民國法律為準據法，如因本契約書涉訟，以台灣台中地方法院為第一審管轄法院。</p>
        
      </div>
      
    </div>
    
  </div>
</div>
<!-- InstanceEndEditable --> </div>
  </section>
  <!-- content --> 
  <!-- footer -->
  <footer id="footerWrapper" class="margin-top">
    <section id="mainFooter">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="footerWidget"> <img src="images/home/main-logo.png" alt="latest Little Neko news" id="footerLogo">
              <p>永遠以『人』為出發，是我們對客戶最大的承諾，成立「客服部」是我們對承諾的具體實踐！印刷整個過程，是繁雜且多樣的，除了在客服方面，解答客戶的問題之外更定期發行月刊，教導客戶各類軟體的使用方式、商品印刷相關須知與後加工的注意事項，達到客戶「所印即所要」的目標，大大提升客戶印刷物的良率，並減少不必要的損失。</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="footerWidget">
                <h3>PHOTOBOOK</h3>
                <address>
                  <p> &nbsp;<a href="https://www.google.com.tw/maps/place/404%E5%8F%B0%E4%B8%AD%E5%B8%82%E5%8C%97%E5%8D%80%E5%BF%A0%E6%98%8E%E8%B7%AF298%E8%99%9F/@24.1626,120.665874,17z/data=!3m1!4b1!4m2!3m1!1s0x34693d81dfb9c8c5:0x16fc4ea0ee7dbd9c" target="_blank">臺中市北區忠明路298號</a><br>
                  <i class="icon-phone"></i>&nbsp;(04)2207-3819#82<br>
                  <i class="icon-mail-alt"></i>&nbsp;<a href="mailto:101@mail.ok888.com.tw ">101@mail.ok888.com.tw </a> <br>
                </p>
              </address>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footerWidget">
              <h3>Quick Menu</h3>
              <ul class="list-unstyled iconList borderList">
                <li><a href="service.php">服務使用條款</a></li>
                <li><a href="privacy.php">隱私權條款</a></li>
                <li><a href="commission.php">委託製作契約</a></li>
                <li><a href="sendback.php">退換貨政策</a></li>
                <li><a href="transportation.php">貨運方式與計價</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section  id="footerRights">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>©
              <?=$copyrightyear?>
              <?=$siteCompany?>
              Copyright All Rights Reserved.</p> 
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!-- End footer --> 
</div>
<!-- global wrapper --> 
<!-- End Document 
	================================================== -->
</body>
<script type="text/javascript" src="vjs/respond/respond.min.js"></script>
<script type="text/javascript" src="vjs/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
<!-- third party plugins  -->
<script type="text/javascript" src="vjs/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="vjs/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="vjs/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="vjs/isotope/jquery.isotope.sloppy-masonry.min.js"></script>
<!-- sharrre -->
<script type="text/javascript" src="vjs/jquery.sharrre-1.3.4/jquery.sharrre-1.3.4.min.js"></script>
<!-- toucheeffect -->
<script type="text/javascript" src="vjs/toucheeffect/toucheffects.js"></script>
<!-- Custom  -->
<script type="text/javascript" src="vjs/custom.js"></script>
<!-- InstanceBeginEditable name="afterjs" -->
<script type="text/javascript">
function MM_goToURL(){ //v3.0
  if (document.getElementById('igotit').checked) {
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
  }
  else {
    alert("請先閱讀相關權益，並同意加入會員。");
  }
}
</script>
<!-- InstanceEndEditable -->
<script>
$(document).ready( function () {
  $("#shoppingcar").hide();
});
</script>
<!-- InstanceEnd --></html>