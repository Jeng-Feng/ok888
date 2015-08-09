<?php
require_once(dirname(__FILE__).'/init.php');
require_once($config['global_library'].'/_top_privacy.php');
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
  <title>隱私權條款</title>
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
  <?require_once($config['global_library'].'/_privacy.php');?>
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
        <h1 class="panel-title">隱私權條款</h1>
      </div>
      <div class="panel-body">
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">請您細讀以下有關隱私權保護政策的內容</span>
        </h6>
        <p class="text-left">本公司以最嚴謹的方式保障用戶的隱私權，因此制訂了隱私權保護政策。請你細讀以下有關隱私權保護政策的內容。<br />您絕對可以瞭解到在您使用<?=$webSiteName;?>所提供的多項服務時，我們處理您個人資料的政策與原則，以及蒐集利用之範圍及目的。本聲明隨時可能會變更，請定期查詢。本公司將依法令及本聲明內容保護您對您個人資料之隱私權。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">資料收集及使用方式</span>
        </h6>
        <p class="text-left"><?=$webSiteName;?>所蒐集的個人資料？<br /><?=$webSiteName;?>以多種方式從網站的不同部分蒐集個人資料，敬請詳細閱讀以下說明。<br />若您不願提供個人資料或不同意本聲明，請立即停止使用<?=$webSiteName;?>提供之服務。<br />若您提供個人資料予<?=$webSiteName;?>，則視為您同意本聲明。</p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text"><?=$webSiteName;?>對使用者所蒐集之個人資料分非公開性資料及公開性資料兩種：</span>
        </h6>
        <p class="text-left">非公開性資料：<br />(1)會員註冊：<br />當您註冊成為「<?=$webSiteName;?>會員」時,<?=$webSiteName;?>會請您提供您的個人資訊 ,<br />包括姓名、性別、國籍、生日、電子信箱、身份證字號、聯絡住址、電話、帳號、密碼、職業和個人興趣等私密性之資料。這些動作僅為了完成您的訂購手續、隨時查看訂購的情況，為了針對處理您個人訂單與提供更友善的個人化購書服務，因此我們希望您能夠提供詳細與準確的資料。一經註冊後，您會獲得一個「<?=$webSiteName;?>網友」的會員帳號，並且由該帳號充分使用<?=$webSiteName;?>提供的所有會員服務。請您妥善保密您的網路密碼與個人資料，不要將任何個人資料，尤其是網路密碼提供給任何人，以保障您的資料安全。</p>
        <p class="text-left">(2)線上活動：<br />當您參與<?=$webSiteName;?>舉辦的各項線上活動查詢時，我們會請您提供姓名、身份證字號、電話、電子信箱及住址等私密性資料。</p>
        <p class="text-left">
          公開性資料：<br />
          (1)一般瀏覽：<br />為整體評估各個網頁的流量、使用者進入<?=$webSiteName;?>之路徑等資料，我們會保留您在上網瀏覽時，伺服器自行產生的相關記錄，包括您使用連線設備的IP位址、使用時間、使用的瀏覽器、瀏覽及點選資料記錄等。<br />
          (2)其他：<br />若您寫信與<?=$webSiteName;?>聯繫，或在skype線上反應您的意見 , 我們會保存您的通訊記錄。
        </p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text">特別注意事項：</span>
        </h6>
        <p class="text-left">
          (1)本聲明所保護之使用者個人資料不包括使用者之「一般性資料」。<br />
          (2)若您所提供之個人資料若有錯誤、不正確情事者，亦不受本聲明之保護。
        </p>
        <p class="text-left">
          資料分享以及公開方式<br />
          &nbsp;(1)本公司不會任意揭露或出售、交換、或轉讓您的你的個人識別資料給任何非公開性資料予第三人，除非經由您的同意或法律之規定<br />
          &nbsp;(2)在以下的情況下，本公司會向政府機關、其他人士或公司提供你的個人識別資料：<br />
          &nbsp;&nbsp;a.與其他人士或公司共用資料前已取得你的同意。<br/>
          &nbsp;&nbsp;b.需要與其他人士或公司共用你的資料，才能夠提供你要求的產品或服務。<br/>
          &nbsp;&nbsp;c.應遵守法令或政府機關的要求<br/>
          &nbsp;&nbsp;d.我們發覺你在網站上的行為違反<?=$webSiteName;?>服務條款或產品、服務的特定使用指南。
        </p>
        
        <h6 class="text-left step1subtitle">
        <img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
        <span class="step1subtitle-text"><?=$webSiteName;?>對於使用者個人資料的更新聲明？</span>
        </h6>
        <p class="text-left">
          (1)你可以在任何時候修改更新個人<?=$webSiteName;?> Online帳號資料的權力，包括接受<?=$webSiteName;?>通知你特別活動或新產品的決定權。<?=$webSiteName;?> Online對於使用者個人資料及線上交易的安全防範聲明。<br />
          (2)為保障你的隱私及安全，你的<?=$webSiteName;?> Online帳號資料會用密碼保護。<?=$webSiteName;?> Online會盡最大努力確保儲存於系統中的安全性。由於網際網路資料的傳輸不能保證百分之百的安全，儘管我們努力保護您的個人資料安全，仍無法確保您傳送或接收資料的安全。此風險並不在<?=$webSiteName;?> Online所承擔的責任範圍內。<br />
          (3)在部分情況下<?=$webSiteName;?> Online使用通行標準的SSL安全加密憑證，保障資料傳送的安全 所以在購物過程中，所有資料皆在保密狀態下，故在線上購物是安全無虞的。
        </p>
        
        <p class="text-left">看法與建議<br />如有任何看法與建議，請寫mail到我們的客服信箱告訴我們。 我們會加以說明。</p>
        
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