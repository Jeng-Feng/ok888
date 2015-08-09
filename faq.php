<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_helps.php'); ?>
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
<title>產品</title>
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
<? require_once($config['global_library'].'/_products.php'); ?>
<script src="Scripts/detectmobilebrowser.js"></script>
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
<div id="bootstrap_content">
<div class="container">	

<!-- Single button -->
<div class="row">
	<div class="col-md-12">
		<div class="text-left">
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#helper_nav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand visible-xs" href="#">小幫手導覽</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div id="helper_nav" class="collapse navbar-collapse">
				  <ul class="nav navbar-nav">
					<li class="dropdown">
					  <a href="helps.php" class="dropdown-toggle" data-toggle="dropdown">簡單上手<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="002.jpg">加入會員</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="003.jpg">電腦基本環境需求</a></li>
					  </ul>
					</li>				
					<li class="dropdown">
					  <a href="helps.php" imgid="004.jpg" class="dropdown-toggle" data-toggle="dropdown">編輯頁面<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="004.jpg">操作介面介紹</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="005.jpg">匯入資料</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="006.jpg">手動匯圖</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="006.jpg">自動匯圖</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="007.jpg">新增背景顏色</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="007.jpg">插入背景顏色</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="helps.php" imgid="008.jpg class="dropdown-toggle" data-toggle="dropdown">照片編輯<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="008.jpg">調整大小</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="008.jpg">旋轉照片</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="009.jpg">圖框旋轉及縮放</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="010.jpg">圖框旋轉及縮放</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="011.jpg">照片互換</a></li>
					  </ul>
					</li>
					<li class="dropdown">
					  <a href="helps.php" imgid="012.jpg" class="dropdown-toggle" data-toggle="dropdown">文字編輯<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="012.jpg">新增文字</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="012.jpg">修改文字</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="012.jpg">刪除文字</a></li>
					  </ul>
					</li>	
					<li class="dropdown">
					  <a href="helps.php" imgid="013.jpg" class="dropdown-toggle" data-toggle="dropdown">加入插圖<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="013.jpg">編輯插圖</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="013.jpg">上傳插圖</a></li>
					  </ul>
					</li>	
					<li class="dropdown">
					  <a href="helps.php" imgid="014.jpg" class="dropdown-toggle" data-toggle="dropdown">版面風格<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="014.jpg">更換版面</a></li>
					  </ul>
					</li>	
					<li class="dropdown">
					  <a href="helps.php" imgid="015.jpg" class="dropdown-toggle" data-toggle="dropdown">關於頁面<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="helps.php" imgid="015.jpg">放大預覽</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="016.jpg">改變頁次</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="017.jpg">切換可用版面</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="017.jpg">新增頁面</a></li>
						<li class="divider"></li>
						<li><a href="helps.php" imgid="018.jpg">刪除頁面</a></li>
					  </ul>
					</li>	
					<li class="dropdown" a href="faq.php">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">常見問題<span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="faq.php">Q&A</a></li>
                        <li><a href="faq01.php">第一次接觸</a></li>
                        <li><a href="faq02.php">照片的準備</a></li>
                        <li><a href="faq03.php">編輯與印製</a></li>
                        <li><a href="faq04.php">訂購與付款</a></li>
                        <li><a href="faq05.php">出貨與售服</a></li>
					  </ul>
					</li>
                    </a>
				  </ul>
			  
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>	
	</div>
	<div class="col-md-12">
		<div id="img_container">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="2" >&nbsp;</td>
        </tr>
      <tr>
        <td width="21" height="21" >&nbsp;</td>
        <td width="656" >&nbsp;</td>
      </tr>
      <tr>
        <td height="19"   class="text-left" ><span class="text-left">1.</span></td>
        <td class="text-left" >什麼是相片書?</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left"><span class="text-left"> 以照片寫真當主題，製作專屬的個性化相片書，提供各式版型及適用於親人間的甜蜜時光、同學間的畢業回憶、與友人的旅行遊記及可為店家製作專屬形象等數十種不同主題風格，開始製作一本專屬自己的寫真相片書帶你回到當下的時光感。</span></td>
      </tr>
      <tr>
        <td   class="text-left" >&nbsp;</td>
        <td ><hr></td>
      </tr>
      <tr>
        <td class="text-left"><span class="text-left">2.</span></td>
        <td class="text-left"><span class="text-left">照片解析度需要多少才夠?</span></td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left">建議將您的相機照片尺寸設定為最高品質。</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left"><hr></td>
      </tr>
      <tr>
        <td height="22" class="text-left" ><span class="text-left">3.</span></td>
        <td class="text-left">需準備多少照片數量才夠?</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left">不同版型或風格會影響相片框的數量，在產品資訊內將會提示需要的相片框數量，且進入相片書編輯時的照片配置或數量，都可以自由搭配。</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left"><hr></td>
      </tr>
      <tr>
        <td class="text-left"><span class="text-left">4.</span></td>
        <td class="text-left">照片需要轉成CMYK模式嗎?</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left">只要數位相機拍出的檔案直接製作即可，我們採用RGB色域輸出，可保留較大的色域空間使色彩更加鮮豔。目前數位相機、手機或平版電腦等，拍攝的檔案都是RGB格式的檔案，所以不需要再做色彩轉換的處理。</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left"><hr></td>
      </tr>
      <tr>
        <td   class="text-left">5.</td>
        <td class="text-left">圖片上出現黃色圓型鋸齒狀驚嘆號代表的意思?</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left">若您在編輯時，圖片上出現了黃色圓形鋸齒狀驚嘆號的圖示，表示該解析度不足。您可以換一張解析度較大的圖片，或將圖片替換至較小的圖片框內。解析度不足一樣可以輸出相片書，但無法保證輸出品質。</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left"><hr></td>
      </tr>
      <tr>
        <td><span class="text-left">6.</span></td>
        <td class="text-left">可將字型替換成電腦內已安裝的字型嗎?</td>
      </tr>
      <tr>
        <td height="19">&nbsp;</td>
        <td class="text-left" >目前僅能使用我們網站所提供的字型。</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="text-left"><hr></td>
      </tr>
      <tr>
        <td><span class="text-left">7.</span></td>
        <td class="text-left">儲存的作品可至別台電腦繼續編輯嗎?</td>
      </tr>
      <tr>
        <td class="text-left">&nbsp;</td>
        <td class="text-left">可以的!進入[會員專區]→[製作紀錄]，開啟要再次編輯的檔案，相片框內的相片會鎖定編輯功能。需再次置入相片才可編輯。</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="text-left" ><hr></td>
      </tr>
      <tr>
        <td><span class="text-left">8.</span></td>
        <td class="text-left">訂單進度需到哪裡查詢?</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="text-left" >確認上傳檔案完成後，會員隨時都可至網站右上方的      [訂單查詢]查詢進度或其它資料。</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td class="text-left" >&nbsp;</td>
      </tr>
    </table>
    <img id="showimage" class="img-responsive center-block" style="display:none;" src="images/faq/000.jpg"/>
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
<script>
	$(function() {
		$("#helper_nav .dropdown-menu a").click(function(){
			var imageName = $(this).attr("imgid");
			//var objImgHTML = '<img class="img-responsive center-block" src="./images/faq/' + imageName + '" />';
			var srcLink =  "./images/faq/" + imageName;
			$("#showimage").attr("src", srcLink);
			$("#showimage").fadeIn("slow");
			if(jQuery.browser.mobile == true){
				$("html, body").animate({ scrollTop: $('#img_container').offset().top }, 700);
			}	
		});
	});
	/*
	function goto(who){
		if($(who).attr('href').indexOf('.html')>-1){
			$('#helphtml').load($(who).attr('href'));
		}else{
			$('#helphtml').html('<img class="helpimages" src="./images/faq/'+$(who).attr('href')+'" border="0" />');
		}
		$('#subb').html($(who).html());
		$('#suba').show();
		$('#subb').show();
	}
	function getQueryString( paramName ){ 
		paramName = paramName .replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]").toLowerCase();
		var reg = "[\\?&]"+paramName +"=([^&#]*)"; 
		var regex = new RegExp( reg );
		var regResults = regex.exec( window.location.href.toLowerCase() );
		if( regResults == null ) return ""; 
		else return regResults [1]; 
	} 
	*/
</script>
<!-- InstanceEndEditable -->
<script>
$(document).ready( function () {
  $("#shoppingcar").hide();
});
</script>
<!-- InstanceEnd --></html>