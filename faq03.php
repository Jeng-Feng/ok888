<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_contact.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"><!-- InstanceBegin template="/Templates/normal_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--<![endif]-->
<head>
<!-- Basic Page Needs
	================================================== -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?=$getmetadescription?>">
<meta name="keywords" content="<?=$getmetakeyword?>">
<!-- InstanceBeginEditable name="doctitle" -->
  <title>生活相片書-編輯與印製</title>
  <style>
  .container p span {
    color: #A67C52;
  }
  </style>
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
	}else{
		 $('#all_my_shoppingcart').click(function(){ gotocounter(); });
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
            <a class="navbar-brand" id="all_my_shoppingcart" href="#" onclick=""><span class="glyphicon glyphicon-shopping-cart iconMedium my_shopping_cart" aria-hidden="true"></span><span id="CartQty">0</span><span id="CartItemList"></span></a> 
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
<section id="content" class="mt30 pb30">
  <div class="container">
    <div class="row">
      <!-- sidebar -->
      <aside id="sidebar" class="col-md-3">
        <nav id="subnav">
          <ul>
            <li><a href="faq01.php">第一次接觸<i class=" icon-right-open-mini"></i></a></li>
            <li><a href="faq02.php">照片的準備<i class=" icon-right-open-mini"></i></a></li>
            <li><a class="active" href="faq03.php">編輯與印製<i class=" icon-right-open-mini"></i></a></li>
            <li><a href="faq04.php">訂購與付款<i class=" icon-right-open-mini"></i></a></li>
            <li><a href="faq05.php">出貨與售服<i class=" icon-right-open-mini"></i></a></li>
          </ul>
        </nav>
      </aside>
      <!-- end sidebar -->
      <!-- page content-->
      <section class="col-md-9">
        <!--
        <div class="row mb30">
          <div class="col-md-12">
            <div class="imgBorder"><img src="images/theme-pics/fullwidth.jpg" alt="HIDEO website template" class="img-responsive" /> </div>
          </div>
        </div>-->
        
        <div class="row mb15">
          <div class="col-md-12">
            <h2>Q1：照片上出現黃色圓形鋸齒狀驚嘆號代表什麼意思？</h2>
            <p> A：若您在編輯時，圖片上出現了黃色圓形鋸齒狀驚嘆號圖示，<span>表示照片解析度不足</span>。
            您可以換一張解析度較大的照片，或將照片替換至較小的圖片框內。
          解析度不足一樣可以輸出相片書，但無法保證輸出品質。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/newbie_amazing.jpg" alt="鋸齒狀驚嘆號說明圖" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q2：驚嘆號顯示：建議最少解析度1740*2666像素，目前解析度3861*2574像素，這樣照片印出來會模糊嗎？</h2>
          <p> A：這是照片與圖框長寬比例不同，為避免出現白邊所造成的，<span>理應不會有模糊情況發生</span>，因高度2666與2574像素差距算小，並不會有此問題。
          若是差距太大（例如：640*480），就會有馬賽克模糊情形發生。
          照片上出現驚嘆號時，您<span> 可使用【G校訂作品→近距離檢視】影像馬賽克情況</span> 是否難以接受，若無法，請參照Q1說明進行調整。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/fag03-q2.png" alt="近距離檢視" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q3：頁面上留白的空間不想輸入文字，可以多放幾張照片嗎？我的照片是直的，可是圖框是橫的，匯入後被裁切，要怎麼做才能完整呈現？</h2>
          <p>A：建議您使用<span> D.新增插圖→上傳插圖檔案 </span>的方式匯入照片檔。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/faq03_q301.png" alt="新增插圖" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q4：如果有個小相機符號的灰色圖框內沒有匯入照片，灰色區塊會被印出來嗎？</h2>
          <p> A：<span>灰色區塊不會被印刷出來。</span>但是，如果您選擇的風格套版為<span>設計框</span>，灰色區塊外的 <span>紋飾仍然會被印刷 </span>出來。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/faq03-q4.png" alt="灰色區塊不會被印刷出來" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q5：可將字型替換成電腦內已安裝的字型嗎?</h2>
          <p> A：很抱歉！！目前僅能使用編輯器內所提供之字型。</p>
        </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q6：插入文字時，設定文字大小為120，印出來會有多大？</h2>
          <p> A：文字大小設定為120像素，實際印刷出的文字尺寸<span> 約1公分</span>。</p>
        </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q7：蝴蝶書中間無接縫，那適合將人像擺放在中間嗎？</h2>
          <p> A：雖然蝴蝶書可跨頁，中間無接縫，但 <span>跨頁處仍有摺痕</span>，會影響人像臉不美觀，因此，不建議把重要人像放置正中央。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/newbie_butterfly_1.jpg" alt="不建議把重要人像放置正中央" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q8：為什麼我無法輸入文字？為什麼進入編輯器沒反應／一直處於LOADING狀態？</h2>
          <p> A：本系統需要在網路暢通的狀態下進行操作，建議您依據<span> 新手上路→新手操作手冊→簡單上手→電腦基本環境需求之建議，更新 Adobe Flash Player 和 使用 Google Chrome 瀏覽器。</span>此外，有些公司的防火牆會封鎖線上金流的網站，也會造成您無法正常進入編輯畫面，請更換您上網地點。</p>
        </div>
        <div class="col-md-12"> <img src="images/faq-details/faq03_q8.png" alt="新手操作手冊" class="img-responsive"> </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q9：右下角的「上傳資訊」停在某張圖片很久了，該如何處理？</h2>
          <p> A：若您的照片解析度很高，且一次匯入的數量很多，難免會有上傳「累格」的現象發生，<span>請先取消上傳再重新儲存</span>，系統會繼續完成上傳的動作。</p>
        </div>
      </div>
      <div class="row mb15">
        <div class="col-md-12">
          <h2>Q10：編輯相片書需要注意些甚麼？</h2>
          <p>A：一、避免照片儲存失敗，建議 <span>分批上傳</span>（約10～20張）或使用 <span>雲端相本 </span>預先上傳。<br>
          二、養成編輯時<span> 隨手儲存</span>的習慣，防止斷線、停電、當機，造 成需要重新編輯。<br>
        三、訂購下單時，再次 確認預覽您相片書的完整性。</p>
      </div>
    </div>
    <div class="row mb15">
      <div class="col-md-12">
        <h2>Q11：儲存的作品可至別台電腦繼續編輯嗎？</h2>
        <p>A：<span>可以的。</span><br>
      登入會員→製作紀錄→選擇「全部」作品，挑選到作品後，按下 繼續編輯 即可。</p>
    </div>
  </div>
  <div class="row mb15">
    <div class="col-md-12">
      <h2>Q12：編輯好的相片書可以保留多久？</h2>
      <p>A：編輯好但未送出訂單的相片書，我們將為您 <span>保留一個月</span>。</p>
    </div>
  </div>
  <div class="row mb15">
    <div class="col-md-12">
      <h2>Q13：原本印製的是直A4精裝書，我可以直接另存新檔改為直A4蝴蝶書嗎？</h2>
      <p>A：想要重新印刷相同的相片書，請至 <span>製作紀錄，將作品 加入購物車 即可。<span><br>
        很抱歉，<span>目前本系統未提供編輯好的相片書轉換為PDF檔的服務</span>，但您編輯完成且 <span>印製過的檔案，會 永久保存（不刪檔）在雲端主機裡</span>，方便您隨時重印。</p>
      </div>
    </div>
    <div class="row mb15">
      <div class="col-md-12">
        <h2>Q14：印刷好的相片書，可以重印嗎？可以取得電子檔（如：PDF）保存嗎？</h2>
        <p>A：很抱歉！！考量到印刷生產與加工相關細節，目前，本系統<span> 無法透過另存新檔的方式 將直A4精裝書改變為直A4蝴蝶書，不便之處敬請見諒。</span></p>
      </div>
    </div>
    <div class="row mb15">
      <div class="col-md-12">
        <h2>Q15：我的相片書想要加頁，可以只加1～2頁就好嗎？</h2>
        <p>A：很抱歉，本系統採自動化生產流程，各式相片書可加頁數略有不同，考量到印刷臺數的計算，因此 <span>無法只加1～2頁</span>，敬請見諒。<br>
        編輯時，若覺得基本頁數不夠，您隨時可按 F頁數管理 加頁增加相片書的頁數，但您想刪除加頁時，也一定要刪到基本加頁量。<br>
      例：直A4蝴蝶書每次加4頁，刪除加頁也必須是4的倍數。</p>
    </div>
  </div>
</section>
<!--end page content right-->
</div>
</div>
</section>
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
<!-- InstanceEndEditable -->
<script>
$(document).ready( function () {
  $("#shoppingcar").hide();
});
</script>
<!-- InstanceEnd --></html>