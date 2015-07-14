<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_order2.php'); ?>
<?
// 呼叫台灣便利配選擇收貨超商門市所回傳超商資訊
$processID = $_POST["processID"];
$stCate = $_POST["stCate"]; //取件超商通路代號: TFM-全家超商；TLF-萊爾富超商；TOK-OK超商
$stCode = $_POST["stCode"]; //取件門市代號
$stName = $_POST["stName"]; //取件門市名稱
$stAddr = $_POST["stAddr"]; //取件門市地址
$stTel = $_POST["stTel"]; //取件門市電話
$webPara = $_POST["webPara"]; //超商取貨判斷參數
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
<meta name="author" content="" />
<title>訂購流程(2/4)</title>
<link type="text/css" rel="stylesheet" href="css/order2.css">
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
<? require_once($config['global_library'].'/_order2.php'); ?>
<script src="js/_city.js"></script>
<script type="text/javascript" src="js/blockUI.js"></script>
<!-- InstanceEndEditable -->
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
            <a class="navbar-brand" href="#" onclick="gotocounter();"><span class="glyphicon glyphicon-shopping-cart iconMedium my_shopping_cart" aria-hidden="true"></span></a>
            <?endif;?>

            </div>
          <div class="collapse navbar-collapse" id="mainMenu">
            <!-- Main navigation -->
            <ul class="nav navbar-nav pull-right">
              <li class="primary"> <a href="index.php" class="firstLevel" >首頁</a> </li>

              <li class="primary"> <a href="products.php" class="firstLevel hasSubMenu" >產品</a>
                <ul class="subMenu">
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
				<img class="img-responsive center-block" src="/images/orders/order_02.gif">
			</div>
			<div class="text-left">
				<form name="FileHeaderForm" class="form-horizontal" method="post" id="christest" action="./order2.php" >
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-shopping-cart"></span>
						訂購產品、數量與價格
						<span class="badge "><?=count($orderlist_data)?></span>
					</h5>
					<div class="text-left" id="php_orderitemarea">
						<? foreach($orderlist_data as $data): ?>
							<div class="panel panel-primary sublist ol<?=$data["index"]?>">
								<div class="panel-heading">
									<h5 class="order-title" id="title">
										<?=$data["pdname"]?>
										<?if(!empty($data["bookname"])):?>
											<span class="subtitle"><?=$data["bookname"]?></span>
										<?endif;?>
										<?if(!isset($data["cpid"])):?>
											<span class="delorder glyphicon glyphicon-remove  canClick" title="取消訂購" onclick="deloitem(<?=$data["index"]?>,this,'<?=$data["bookid"]?>');"></span>
										<?else:?>
											<span class="delorder glyphicon glyphicon-remove  canClick" title="取消訂購" onclick="deloitem(<?=$data["index"]?>,this,'<?=$data["cpid"]?>');"></span>
										<?endif;?>
									</h5>
								</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4 col-xs-12">
											<img src="<?=$data["thumb"]?>" class="sl-imgarea img-responsive" alt="<?=$data["pdname"]?>" />
										</div>
										<div class="sl-productinfor col-sm-8 col-xs-12">
											<?if(empty($data["warningmessage"])):?>
												<div class="row order2-form-row">
													<div class="col-xs-12 col-lg-3 col-md-3" id="title1">
														<label class="pi-title text-right">
															數量
														</label>
													</div>
													<div class="pi-context col-xs-12 col-lg-2 col-md-2">
														<?if($data["allowchangeunit"]):?>
															<?if(!isset($data["cpid"])):?>
																<select class="amountchoose input-sm" name="amountchoose[]" onchange="modoitem(<?=$data["index"]?>,this);">
															<?else:?>
																<select class="customProd-qty cpq<?=$data["index"]?> input-sm" name="amountchoose[]" onchange="changeCustomProdShopQty(<?=$data["index"]?>,this);">
															<?endif;?>
																<? foreach($data["qtySelector"] as $qtySelector): ?>
																	<?if($data["qty"] == $qtySelector):?>
																		<option value="<?=$qtySelector?>" selected="selected"><?=$qtySelector?></option>
																	<?else:?>
																		<option value="<?=$qtySelector?>"><?=$qtySelector?></option>
																	<?endif;?>
																<? endforeach; ?>
															</select>
														<?else:?>
															<?=$data["qty"]?>
															（若要修改數量，請點選「修改訂購細節」）
														<?endif;?>
													</div>
												</div>
												<div class="row order2-form-row">
													<div class="col-xs-12 col-lg-3 col-md-3">
														<label class="pi-title text-right">
															單價
														</label>
													</div>
													<div class="pi-context col-xs-12 col-lg-9 col-md-9">
														<div class="pisprice">
															<?=$order["symbol_left"]?>
															<span id="php_price<?=$data["index"]?>">
																<?=$data["price"]?>
															</span>
															<?=$order["symbol_right"]?>
														</div>
													</div>
												</div>
												<div class="row discount order2-form-row">
													<div class="col-xs-12 col-lg-2">
														<label class="pi-titletext-right">
															折扣金額
														</label>
													</div>
													<div class="pi-context col-xs-12 col-lg-10">
														<div>
															-
															<?=$order["symbol_left"]?>
															<span class="pidiscount" id="php_discount<?=$data["index"]?>"></span>
															<?=$order["symbol_right"]?>
														</div>
													</div>
												</div>
												<?if(!empty($data["poption"])):?>
													<div class="row spec order2-form-row">
														<div class="col-xs-12 col-lg-3 col-md-3">
															<label class="pi-title text-right">
																商品規格
															</label>
														</div>
														<div class="pi-context col-xs-12 col-lg-9 col-md-9">
															<span><?=$data["poption"]?></span>
														</div>
													</div>
												<?endif;?>
												<?if(!empty($data["cpoption"])):?>
													<div class="row cspec order2-form-row">
														<div class="col-xs-3 col-md-2">
															<label class="pi-title text-right">
																商品選項
															</label>
														</div>
														<div class="pi-context col-xs-4 col-md-5">
															<select class="cpoption form-control input-sm" onchange="changecpoption('<?=$data["cpid"]?>','<?=$data["index"]?>',this)">
																<? foreach($data["cpoption"]["option"] as $cpokey => $cpovalue): ?>
																	<?if($data["cpoption"]["optionselected"] == $cpokey):?>
																		<option value="<?=$cpokey?>" selected="selected"><?=$cpovalue?></option>
																	<?else:?>
																		<option value="<?=$cpokey?>"><?=$cpovalue?></option>
																	<?endif;?>
																<? endforeach; ?>
															</select>
														</div>
													</div>
												<?endif;?>
												<?if(!empty($data["ordermemo"])):?>
													<div class="row note order2-form-row">
														<div class="col-xs-3 col-md-2">
															<label class="control-label pi-title text-right">
																商品備註
															</label>
														</div>
														<div class="pi-context col-xs-9 col-md-10">
															<?=$data["ordermemo"]?>
														</div>
													</div>
												<?endif;?>
												<div class="row">
													<?if($data["bookid"] != "customerproduct"):?>
														<div class="col-lg-4 text-right col-xs-6">
															<button class="btn btn-primary btn-sm" onclick="reedit('<?=$data["bookid"]?>','<?=$data["editorclass"]?>');" >繼續編輯該產品</button>
														</div>
													<?endif;?>
													<?if(!isset($data["cpid"])):?>
														<div class="col-lg-3">
															<button class="btn btn-primary btn-sm" onclick="detaitem(<?=$data["index"]?>);">修改訂購細節</button>
														</div>
													<?endif;?>
												</div>
											<?else:?>
												<div class="ol-warning bg-danger">
													<?=$data["warningmessage"]?>
												</div>
											<?endif;?>
										</div>
									</div>
								</div>
								<div class="panel-footer text-right">
									<?if(empty($data["warningmessage"])):?>
										小計：
										<?=$order["symbol_left"]?>
										<span class="php_sprice" id="php_sprice<?=$data["index"]?>">
											<?=$data["total"]?>
										</span>
										<?=$order["symbol_right"]?>
									<?else:?>
										<?if(!isset($data["cpid"])):?>
											<div title="取消訂購" class="delorder" onclick="deloitem(<?=$data["index"]?>,this,'<?=$data["bookid"]?>');">
												該商品無法訂購，請移除
												<span class="delorder glyphicon glyphicon-remove"></span>
											</div>
										<?else:?>
											<div title="取消訂購" class="delorder" onclick="deloitem(<?=$data["index"]?>,this,'<?=$data["cpid"]?>');>">
												該商品無法訂購，請移除
												<span class="delorder glyphicon glyphicon-remove"></span>
											</div>
										<?endif;?>

									<?endif;?>
								</div>
							</div>
						<? endforeach; ?>
						<div class="alert alert-info">
							<div class="row">
								<div class="text-center col-xs-12 col-sm-12 col-md-6">
									<?=count($orderlist_data)?> 筆產品
									<span class="fororderpromofee">
										小計 <?=$order["symbol_left"]?> <span class="productionfee">0</span> <?=$order["symbol_right"]?>，<span class="promotefeearea">折扣 <?=$order["symbol_left"]?> <span class="promotefee">0</span> <?=$order["symbol_right"]?></span>，
									</span>
									共 <?=$order["symbol_left"]?> <span class="orderlist_total">0</span>  <?=$order["symbol_right"]?>
								</div>
								<div class="text-center col-xs-12 col-sm-12 col-md-6" id="info">
									<a href="./booklists.php" class="">
										<span class="glyphicon glyphicon-shopping-cart"></span>購物車&mdash;加購其他製作項目
									</a>
								</div>
							</div>
						</div>
					</div>
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-tag"></span>
						物流配送（我們約需個 <?=$shipment["day"]?> 工作天後為您出貨）
					</h5>
					<div class="text-left shipmentlist" id="php_carryitem">
					
                        <div class="panel panel-info sublist">
									<div class="panel-heading">
										<label class="pdlabel">
											<input type="radio" value="99" name="php_delverytype" onclick="setDeliverytypeVisible();"/>
											&nbsp;超商取貨&nbsp;<img src="images/markt.png" height="30px">
										</label>
                                        <button type="button" class="btn btn-default navbar-btn" onClick="selectStore();">選擇門市</button>
									</div>
                                    <div class="panel-body" id="shipInfoByStore">
                                    <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">取件門市名稱<input type="text" id="store_name" value="<?=$stName?>" class="form-control" placeholder="取件門市名稱"></div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">取件門市地址<input type="text" id="store_addr" value="<?=$stAddr?>" class="form-control" placeholder="取件門市地址"></div>
                                    <input type="hidden" id="hidden_WebPara" value="<?=$webPara?>" >
									</div>
                                    </div>
								</div>
					    </div>						
						
						<?if(count($shipmentlist_data) > 0):?>
							<? foreach($shipmentlist_data as $data): ?>
								<div class="panel panel-info sublist sl<?=$data["value"]?>">
									<div class="panel-heading">
										<label class="pdlabel">
											<input name="php_delverytype" type="radio" shipmentfee="<?=$data["freight"]?>" value="<?=$data["value"]?>">
											<?=$data["name"]?>
										</label>
										<span class="freight">
											<?=$order["symbol_left"]?>
											<?=$data["freight"]?>
											<?=$order["symbol_right"]?>
										</span>
										<span class="freefreight">
											<?=$order["symbol_left"]?>
											0
											<?=$order["symbol_right"]?>
										</span>
									</div>
									<div class="panel-body csdiv <?=$data["containerclassname"]?>" <?=$data["containeridname"]?> onclick="setDeliverytypeVisible();" >
										<?if(!empty($data["path"]) && file_exists($data["path"])):?>
											<?require_once($data["path"]);?>
										<?elseif($data["value"] < 0)://自訂物流?>
											<div class="row  order2-form-row">
												<div class="col-lg-2 ">
													<label class="text-right">
														收件人姓名
													</label>
												</div>
												<div class="col-lg-10">
													<input type="text" id="delveryname<?=$data["value"]?>" name="delveryname<?=$data["value"]?>" class="form-control validate[required]" data-errormessage-value-missing="請輸入收件人姓名" value="<?=$data["delveryname"]?>" />
												</div>
											</div>
											<div class="row  order2-form-row">
												<div class="col-lg-2">
													<label class="text-right">
														收件人電話
													</label>
												</div>
												<div class="col-lg-10">
													<input type="text" id="delverytel<?=$data["value"]?>" name="delverytel<?=$data["value"]?>" class="form-control validate[required]" data-errormessage-value-missing="請輸入收件人電話" value="<?=$data["delverytel"]?>" />
												</div>
											</div>
											<div class="row  order2-form-row">
												<div class="col-lg-2">
													<label class="text-right">
														<?=$data["inputtext"]?>
													</label>
												</div>
												<div class="col-lg-10">
													<input type="text" id="cskeyin<?=$data["value"]?>" name="cskeyin<?=$data["value"]?>" class="form-control cskeyin<?=$data["value"]?> validate[required]" value="<?=$data["keyinvalue"]?>" />
												</div>
											</div>
											<?if(!empty($data["descr"])):?>
												<div class="row">
													<div class="col-lg-2">
														<label class="text-right"></label>
													</div>
													<div class="col-lg-10">
														<?=$data["descr"]?>
													</div>
												</div>
											<?endif;?>
										<?endif;?>
									</div>
								</div>
								
									<?
									// 如果物流配送選擇超商取貨，以session將超商資訊、收件人資訊儲存傳遞	
									if ($stName != ""){
										$_SESSION["stName"] = $stName;
										$_SESSION["stAddr"] = $stAddr;
										$_SESSION["deliName"] = $data["delveryname"];
										$_SESSION["deliTel"] = $data["delverytel"];
									}	
									?>								
								
							<? endforeach; ?>
						<?else:?>
							<div class="bg-danger text-center col-xs-12 col-md-12">
								該商家未設定運費方式，請聯絡客服，謝謝。
							</div>
						<?endif;?>
						<span class="hidden" id="php_sdfee">0</span>
					</div>
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-tag"></span>
						折扣禮卷優惠
					</h5>
					<div class="promotecodearea row">
						<div class="from-group col-xs-6 col-sm-6 col-md-6">
							<input type="text" maxlength="12" value="" name="php_promotecode" id="php_promotecode" class="form-control text-center" placeholder="請輸入折扣優惠碼" />
						</div>
						<div class="from-group col-xs-6 col-sm-6 col-md-6 php_doverify">
							<input id="php_doverify" title="按此驗證折扣禮卷優惠" type="button" onclick="verify();" class="btn btn-warning" value="按此驗證折扣禮卷優惠" />
						</div>
						<div class="from-group col-xs-6 col-sm-6 col-md-6 rekeyinpromotecodearea">
							<input type="button" value="變更折扣碼" class="btn btn-warning" onclick="rekeyinpromotecode();" />
						</div>
						<div id="php_spromo" class="hidden"></div>
					</div>
					<div id="php_PromoteMsg" class="alert alert-success text-center"></div>
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-tag"></span>
						費用總計
					</h5>
					<div class="alert alert-info">
						<div class="totalarea row">
							<div class="col-xs-12 col-sm-12 col-md-12 text-center">
								<?=$order["symbol_left"]?> <span id="php_stotal"></span> <?=$order["symbol_right"]?>
							</div>
						</div>
					</div>
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-tag"></span>
						備註資訊
					</h5>
					<div class="notearea row">
						<div class="from-group col-xs-12 col-sm-12 col-md-12">
							<input type="text" name="php_note" id="php_note" class="form-control text-center" placeholder="此處可填寫備註資訊，以供廠商得知您對於此訂單的需求" />
						</div>
					</div>
					<h5 class="order2-title" id="php_invoice1">
						<span class="glyphicon glyphicon-tag"></span>
						發票資訊
					</h5>
					<div class="invoicearea row" id="php_invoice2">
						<div class="col-xs-12 col-lg-4 col-md-4">
							<label class="form-control">
								<input type="radio" name="php_invoicetype" value="2" onclick="setInvoiceAreaVisible();"/>二聯發票
							</label>
						</div>
						<div class="col-xs-12 col-lg-4 col-md-4">
							<label class="form-control">
								<input type="radio" name="php_invoicetype" value="3" onclick="setInvoiceAreaVisible();"/>三聯發票
							</label>
						</div>
						<div class="col-xs-12 col-lg-4 col-md-4">
							<label class="form-control">
								<input type="radio" name="php_invoicetype" value="1" onclick="setInvoiceAreaVisible();"/>我要捐發票給「<a href="http://child-home.org.tw/child_home/index.php" target="new" id="donate">台中光音育幼院</a>」
							</label>
						</div>
						<div id="php_invoicearea" class="col-xs-12 col-sm-8 col-md-8 list">
							<div class="col-xs-6 col-sm-6 col-md-6">
								<input type="text" id="php_invoicetitle" name="php_invoicetitle" class="form-control" value="" maxlength="8" title="請輸入統一編號" placeholder="請輸入統一編號" />
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<input type="text" id="php_invoicename" name="php_invoicename" class="form-control" value="" title="請輸入發票抬頭" placeholder="請輸入發票抬頭" />
							</div>
						</div>
					</div>
					<h5 class="order2-title" id="php_paysms">
						<span class="glyphicon glyphicon-tag"></span>
						訂單狀態簡訊通知
					</h5>
					<div class="smsarea row" id="php_sms">
						<div class="col-xs-12  col-lg-12">
							<label class="form-control">
								<input type="checkbox" name="smsnotify" id="smsnotify" onclick="smsnotifyjs();"><img src="./images/orders/sms.gif">我要收到簡訊通知訂單狀態(訂單確認, 出貨通知等)
							</label>
						</div>
						<div id="php_smsnotifyinput" class="col-lg-12">
							<input type="text" class="form-control col-lg-12" maxlength="10" value="" name="php_smsnotifynum" id="php_smsnotifynum" title="請輸入手機號碼"  placeholder="請輸入手機號碼" />
						</div>
					</div>
					<h5 class="order2-title">
						<span class="glyphicon glyphicon-tag"></span>
						付款方式
					</h5>
					<div class="paymentlist">
						<?if(count($paymentlist_data) > 0):?>
							<? foreach($paymentlist_data as $data): ?>
								<div class="panel panel-info sublist pl<?=$data["pid"]?>">
									<div class="panel-heading">
										<label class="pdlabel">
											<input type="radio" name="php_paymenttype" class="validate[required]" pid="<?=$data["pid"]?>" value="<?=$data["value"]?>" />
											&nbsp;<?=$data["name"]?>&nbsp;<img src="<?=$data["imgsrc"]?>" />
										</label>
									</div>
								</div>
							<? endforeach; ?>
						<?else:?>
							<div class="bg-danger text-center col-xs-12 col-md-12">
								該商家未設定付款方式，請聯絡客服，謝謝。
							</div>
						<?endif;?>




					<div class="controlorderarea row">
						<div class=" col-xs-6 col-lg-6 text-right">
							<input type="button" id="php_cancel" class="btn btn-default btn-lg" value="取消訂購" />
						</div>
						<div class=" col-xs-6 col-lg-2 text-center">
							<input type="button" id="php_confirmed" class="btn btn-success btn-lg" value="確定訂購" />
						</div>
						<div class=" col-xs-6 col-sm-6 col-lg-2 text-center">
							<input type="button" id="php_xorder" class="btn btn-danger btn-lg" value="無法訂購" />
						</div>
						<div id="php_btsa" class="col-xs-12 col-sm-12 col-md-12 text-center">
							<img src="./images/im/loading.gif" border="0" />&nbsp;訂購中請稍候...
						</div>
						<div id="php_showmes" class="col-xs-12 col-sm-12 col-md-12 text-center"></div>
					</div>
				</form>
			</div>
			<div class="step-title">
				<img class="img-responsive center-block" src="/images/orders/order_02.gif">
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
          <div class="col-sm-3">
            <div class="footerWidget">
              <h3>
                <?=$webSiteName?>
              </h3>
              <address>
              <p> <i class="icon-location"></i>&nbsp;
                <?=$siteAddress?>
                <br>
                <i class="icon-phone"></i>&nbsp;
                <?=$sitePhone?>
                <br>
                <i class="icon-mail-alt"></i>&nbsp;
                <?=$siteEmail?>
                <br>
              </p>
              </address>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footerWidget">
              <h3>Latest news</h3>
              <ul class="list-unstyled iconList borderList">
                <li><a href="service.php">服務使用條款</a></li>
                <li><a href="privacy.php"> 隱私權條款</a></li>
                <li><a href="commission.php">託製作契約</a></li>
                <li><a href="sendback.php">退換貨政策</a></li>
                <li><a href="transportation.php">運方式與計價</a></li>
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

  if ($("#hidden_WebPara").val() == "getGoodsByStore"){ //配送方式為超商自取
		var $radios = $('input:radio[name="php_delverytype"]');
        $radios.filter('[value=99]').prop('checked', true); //取回回傳值後，再次設定配送方式為超商自取
		$("#ship_id_a").hide();
		$("#shipInfoByStore").show();	
  }
  
});

function setInvoiceAreaVisible(){
	if ( $('input:radio:checked[name="php_invoicetype"]').val() == 3){ //三聯式發票
		$("#php_invoicearea").show();
	}else{
		$("#php_invoicearea").hide();		
	}
}

function setDeliverytypeVisible(){
	if ( $('input:radio:checked[name="php_delverytype"]').val() == 10){ //貨運宅配到府
		$("#ship_id_a").show();
		$("#shipInfoByStore").hide();	
	}else if ( $('input:radio:checked[name="php_delverytype"]').val() == 99){ //超商取貨
		$("#ship_id_a").hide();
		$("#shipInfoByStore").show();	
	}else{
		$("#ship_id_a").hide();
		$("#shipInfoByStore").hide();
	}	
}

function getProcessID() {  //產生唯一值guid，來作為process_id
    function S4() {
        return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
    }
    return (S4() + S4() + "-" + S4() + "-" + S4() + "-" + S4() + "-" + S4() + S4() + S4());
}

function selectStore(){ //設定收貨超商門市
  location.href="http://map.ezship.com.tw/ezship_map_web.jsp?suID=<?=$twnDeliverAccount?>&processID=" + getProcessID() + "&rtURL=http://test.lifebooks.com.tw/order2.php&webPara=getGoodsByStore";
}

</script>
<!-- InstanceEnd --></html>
