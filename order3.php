<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_order3.php'); ?>
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
<meta name="author" content="" />
<title>訂購流程(3/4)</title>
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
<? require_once($config['global_library'].'/_order3.php'); ?>
<script src="js/_city.js"></script>
<script type="text/javascript" src="js/blockUI.js"></script>
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
	<div id="bootstrap_content">
		<div class="container">
			<div class="step-title">
				<img class="img-responsive center-block" src="/images/orders/order_03.gif">
			</div>
			<div class="text-left">
				<div class="alert alert-primary">
					<h5 class="order3-title orderidarea bg-primary">
						<span class="glyphicon glyphicon-shopping-cart"></span>
						訂單編號：
						<span class="orderid">
							<?=$order["orderid"]?>
						</span>
					</h5>
				</div>	
				<h5 class="order3-title">
					<span class="glyphicon glyphicon-tag"></span>
					訂購產品、數量與價格
				</h5>
				<div class="text-left" id="php_orderitemarea">
					<? foreach($orderlist_data as $data): ?>
						<div class="panel panel-primary sublist ol<?=$data["index"]?>">
							<div class="panel-heading">
								<h6 class="order-title">
									<?=$data["pdname"]?>
									<?if(!empty($data["bookname"])):?>
										<span class="subtitle"><?=$data["bookname"]?></span>
									<?endif;?>
								</h6>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-xs-12  col-lg-4">
										<img src="<?=$data["thumb"]?>" class="sl-imgarea img-responsive" alt="<?=$data["pdname"]?>" />
									</div>
									<div class="sl-productinfor col-xs-12  col-lg-8">
										<div class="row">
											<div class="pi-title col-xs-12  col-lg-2 text-right">
												數量
											</div>
											<div class="pi-context col-xs-12  col-lg-10">
												<?=$data["qty"]?>
											</div>
										</div>
										<div class="row">
											<div class="pi-title col-xs-12  col-lg-2 text-right">
												單價
											</div>
											<div class="pi-context col-xs-12  col-lg-10">
												<div class="pisprice">
													<?=$order["symbol_left"]?>
													<span id="php_price<?=$data["index"]?>">
														<?=$data["price"]?>
													</span>
													<?=$order["symbol_right"]?>
												</div>
											</div>
										</div>
										<?if($data["promotefee"] != '0'):?>
											<div class="row discount">
												<div class="pi-title col-xs-12  col-lg-2 text-right">
													折扣金額
												</div>
												<div class="pi-context col-xs-12  col-lg-10">
													<div>
														- 
														<?=$order["symbol_left"]?>
														<span class="pidiscount" id="php_discount<?=$data["index"]?>"><?=$data["promotefee"]?></span>
														<?=$order["symbol_right"]?>
													</div>
												</div>
											</div>
										<?endif;?>
										<?if(!empty($data["poption"])):?>
											<div class="row">
												<div class="pi-title col-xs-12  col-lg-2 text-right">
													商品規格
												</div>
												<div class="pi-context col-xs-12  col-lg-10">
													<?=$data["poption"]?>
												</div>
											</div>
										<?endif;?>
										<?if(!empty($data["ordermemo"])):?>
											<div class="row">
												<div class="pi-title col-xs-12  col-lg-2 text-right">
													商品備註
												</div>
												<div class="pi-context col-xs-12  col-lg-10">
													<?=$data["ordermemo"]?>
												</div>
											</div>
										<?endif;?>
								</div>
							</div>
						</div>
						<div class="panel-footer text-right">
							小計：
							<?=$order["symbol_left"]?>
							<span class="php_sprice" id="php_sprice<?=$data["index"]?>">
								<?=$data["total"]?>
							</span>
							<?=$order["symbol_right"]?>
						</div>
					</div>
					<? endforeach; ?>
				</div>
				<div class="row">
					<div class=" col-lg-12">
						<div class="alert alert-info">
							<div class="order-fee">
								<span class="glyphicon glyphicon-usd"></span>
								<?=count($orderlist_data)?> 筆產品
								<span class="pull-right">
									<?=$order["symbol_left"]?> <span class="subtotal"><?=$order['total']?></span> <?=$order["symbol_right"]?>
								</span>
							</div>
							<div class="order-fee">
								<?if($order["shipfee"] > 0):?>			
									<span class="glyphicon glyphicon-usd"></span>
									運費
									<span class="pull-right">
										<?=$order["symbol_left"]?> <span class="shipfee"><?=$order["shipfee"]?></span> <?=$order["symbol_right"]?>
									</span>
								<?endif;?>
							</div>	
							<?if($order["promotefee"] > 0):?>
								<div class="order-fee">
									<div class="bg-danger">
										<span class="glyphicon glyphicon-usd"></span>
										折扣
										<span class="pull-right">
											- <?=$order["symbol_left"]?> <span class="promotefee"><?=$order["promotefee"]?></span> <?=$order["symbol_right"]?>
										</span>
									</div>
								</div>
							<?endif;?>	
							<div>
								<span class="glyphicon glyphicon-usd"></span>
								費用總計
								<span class="pull-right">
									<?=$order["symbol_left"]?> <span class="totalfee"><?=$order["totalfee"]?></span> <?=$order["symbol_right"]?>
								</span>
							</div>
						</div>
					</div>
				</div>
				
				<h5 class="order3-title">
					<span class="glyphicon glyphicon-tag"></span>
					訂單相關資訊
				</h5>
				<div class="panel panel-info order3-shipmentarea">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-map-marker"></span>
						<?=$shipment["name"]?>（我們約需個 <?=$shipment["day"]?> 工作天後為您出貨）
					</div>
					<div class="panel-body">
						<?if($shipment["value"] == 99)://超商取貨?>
						    <div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									取件超商門市
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$_SESSION["stName"]?>
								</div>
							</div>
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									取件超商地址
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$_SESSION["stAddr"]?>
								</div>
							</div>							
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									收件人姓名
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$_SESSION["deliName"]?>
								</div>
							</div>
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									收件人電話
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$_SESSION["deliTel"]?>
								</div>
							</div>
						<?elseif($shipment["value"] == 10)://貨運宅配到府?>
							<?require_once($shipment["path"]);?>
						<?elseif($shipment["value"] == 11)://台中總公司自取免運費?>
							<?require_once($shipment["path"]);?>	
						<?elseif($shipment["value"] < 0)://自訂物流?>
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									收件人姓名
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$shipment["membername"]?>
								</div>
							</div>
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									收件人電話
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$shipment["membertel"]?>
								</div>
							</div>
							<div class="row">
								<div class="sm-title col-xs-12  col-lg-2 text-right">
									輸入資訊
								</div>
								<div class="pi-context col-xs-12  col-lg-10">
									<?=$shipment["memberkeyin"]?>
								</div>
							</div>
						<?endif;?>
					</div>
				</div>
				<div class="panel panel-info order3-invoicearea">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-list-alt"></span>
						<?if($invoice['type'] == "2")://二聯發票?>
							二聯發票
						<?elseif($invoice['type'] == "3")://三聯發票?>
							三聯發票
						<?endif;?>
					</div>
					<?if($invoice['type'] == "3")://三聯發票?>
						<div class="panel-body">
							<div class="invoice-code row">
								<div class="iv-title col-xs-12  col-lg-2 text-right">
									統一編號
								</div>
								<div class="iv-context col-xs-12  col-lg-10">
									<?=$invoice["code"]?>
								</div>
							</div>
							<div class="invoice-title row">
								<div class="iv-title col-xs-12  col-lg-2 text-right">
									發票抬頭
								</div>
								<div class="iv-context col-xs-12  col-lg-10">
									<?=$invoice["title"]?>
								</div>
							</div>
						</div>
					<?endif;?>
				</div>
				<div class="panel panel-info order3-paymentarea">
					<div class="panel-heading">
						<span class="glyphicon glyphicon-tags"></span>
						<?=$payment["name"]?>&nbsp;<img src="<?=$payment["imgsrc"]?>" />
					</div>
					<?if(file_exists($payment["path"])):?>
						<?require_once($payment["path"]);?>
					<?endif;?>
				</div>
				<div class="controlorderarea row">
					<div class=" col-xs-6  col-lg-6 text-right">
						<input type="button" id="php_cancel" class="btn btn-default btn-lg" value="取消訂購" />
					</div>
					<div class=" col-xs-6  col-lg-2 text-center">
						<input type="button" id="php_confirmed" class="btn btn-success btn-lg" value="確定訂購" />
					</div>
					<div id="php_btsa" class="col-xs-12 col-sm-12  col-lg-12 text-center">
						<img src="./images/im/loading.gif" border="0" />&nbsp;訂購中請稍候...
					</div>
					<div id="php_showmes" class="col-xs-12 col-sm-12  col-lg-12 text-center">
						<span id="php_ppd">此訂單您已付過款項.</span>
						<span id="php_pno">此訂單您無需支付款項</span>
					</div>
				</div>
			</div>
			<div class="step-title">
				<img class="img-responsive center-block" src="/images/orders/order_03.gif">
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
<!-- InstanceEndEditable -->
<script>
$(document).ready( function () {
  $("#shoppingcar").hide();
});
</script>
<!-- InstanceEnd --></html>