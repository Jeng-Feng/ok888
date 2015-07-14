<? require_once('init.php'); ?>
<? $pageitems = 12;//每一頁幾筆 ?>
<? require_once($config['global_library'].'/_top_booklists.php'); ?>
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
	<title>製作紀錄</title>
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
	<? require_once($config['global_library'].'/_booklists.php'); ?>
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
            <a class="navbar-brand" href="index.php"><img src="images/home/main-logo.png" alt="photobook logo"/></a> </div>
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
              <li class="primary"><a href="helps.php">新手上路</a></li>
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
              
              <li class="primary"><a id="php_member_login" href="memberlogin.php">購物車</a></li>
              <li class="primary"><a href="#" class="firstLevel hasSubMenu" >聯絡我們</a>
               <ul class="subMenu">
                  <li><a href="news.php">優惠訊息</a></li>
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
			<div class="container" align="center">
				<div id="php_tags" class="row">
					<!--產品標籤框架-->
					<?if($memnerdata['search']):?>
					<div class="searchmember col-md-12 php-booklists-button">
						<label for="inpubktitle3" class="col-sm-6 col-md-3 col-xs-6 col-md-offset-3 control-label" style="text-align:right;"><span class="booklist-text">輸入帳號後ENETR搜尋</span></label>
						<div class="col-sm-2 col-xs-2 col-md-2">
							<input id="seachermember_input" type="text" class="form-control text-center" value="<?=$memnerdata['searchaccount']?>" onchange="changemember()" />
						</div>
						<?if(!$memnerdata['self']):?>
						<div class="col-sm-2 col-xs-2 col-md-2">
							<input type="button" class="form-control" value="只看自己" onclick="$('#seachermember_input').prop('value','<?=$memnerdata['account']?>');changemember();" />
						</div>
						<?endif?>
					</div>
					<?else:?>
					<input type="hidden" class="memberaccount" value="" />
					<?endif?>
					<?foreach($defaulttag as $tagdata):?>
					<?if($tagdata["isclick"]):?>
					<div id="<?=$tagdata["id"]?>" class="btn-group php-booklists-prodtag" onclick="<?=$tagdata["onclick"]?>">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?=$tagdata["text"]?><span class="count">(<?=$tagdata["count"]?>)</span>
						</button>
					</div>
					<?else:?>
					<div id="<?=$tagdata["id"]?>" class="btn-group php-booklists-prodtag" onclick="<?=$tagdata["onclick"]?>">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?=$tagdata["text"]?><span class="count">(<?=$tagdata["count"]?>)</span>
						</button>
					</div>
					<?endif?>
					<?endforeach?>
					<?foreach($producttag as $pid => $producttagdata):?>
					<div class="btn-group php-booklists-prodtag">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						<?=$pid?><span class="caret"></span>
						</button>
						<ul class="dropdown-menu" role="menu">
							<?foreach($producttagdata as $pid2 => $producttagdata2):?>
							<?if($productdata["mode"] == $pid):?>
							<li id="<?=$pid?>" onclick="sg('<?=$producttagdata2["productID"]?>',this,'<?=$product_made['productNum'][$k]?>','<?=$producttagdata2['name']?>');" title="<?=$producttagdata2['name']?> 共有 <?=$producttagdata2['count']?> 項">
								<a href="#"><?=$producttagdata2['name']?>(<?=$producttagdata2['count']?>)</a>
							</li>
							<?else:?>
							<li id="<?=$pid?>" onclick="sg('<?=$producttagdata2["productID"]?>',this,'<?=$producttagdata2['count']?>','<?=$producttagdata2['name']?>');" title="<?=$producttagdata2['name']?> 共有 <?=$producttagdata2['count']?> 項">
								<a href="#"><?=$producttagdata2['name']?>(<?=$producttagdata2['count']?>)</a>
							</li>
							<?endif?>
							<?endforeach?>
						</ul>
					</div>
					<?endforeach?>
				</div>
				<div class="php_pagecontrola">
					<!--頁數控制框架(上）-->
					<?if(count($pagedata) > 0):?>
					<ul class="pagination">
						<?foreach($pagedata as $page => $data):?>
						<?if($data["now"]):?>
						<li class="active pages <?=$page?>">
							<a href="javascript:void(0)" class="link">
								<?=$data["page"]?>
							</a>
						</li>
						<?else:?>
						<li class="pages <?=$page?>">
							<a href="javascript:void(0)" class="link" onclick="gotopage('<?=$data["target"]?>')">
								<?=$data["page"]?>
							</a>
						</li>
						<?endif?>
						<?endforeach?>
					</ul>
					<?endif?>
				</div>
				<div id="php_pagerigon" class="row">
					<div id="php_messagearea">
						<!--訊息框架-->
					</div>
					<div id="php_maincontent" class="col-md-12">
						<!--主要製作紀錄-->
						<?if(count($booklists_panel) > 0):?>
						<?foreach($booklists_panel as $data):?>
						<div class="col-md-4 col-sm-6">
							<div class="panel panel-primary php-booklists-panel" name="<?=$data["b_id"]?>" id="booklist<?=$data["b_id"]?>">
								<div class="panel-heading">
									<div class="div_bookname" style="cursor: pointer;" title="點此修改書名" name="<?=$data["b_id"]?>" >
										<span id="editimg_pancel" class="glyphicon glyphicon-pencil" style="display: none;"></span>
										<span id="bkname_spantitle"><?=$data["bk_name"]?></span>
									</div>
								</div>
								<div class="panel-body">
									<div class="div_productname">
										<?=$data["b_productName"]?>
									</div>
									<div class="php-booklists-img-area">
										<img class="img-responsive php-booklists-img" src="<?=$data["thumb"]?>" />
									</div>
									<div class="box-middle">
										<div class="createdatatime">
											建立時間: <?=$data["b_createdatetime"]?>
										</div>
										<div class="lastupdatedatatime">
											最後編輯: <?=$data["b_updatedatetime"]?>
										</div>
										<div>
											<?if($data["checkCBC"]):?>
											<?if(!$data["needre"]):?>
											<div class="edit">
												<button class="btn btn-success btn-lg btn-block php-booklists-editorbutton" onclick="goedit('<?=$data["b_papertype"]?>','<?=$data['b_id']?>');">
												<span class="glyphicon glyphicon-pencil"></span>
												繼續編輯
												</button>
											</div>
											<?else:?>
											<div class="revise">
												<button class="btn btn-success btn-lg btn-block php-booklists-editorbutton" onclick="goedit('<?=$data["b_papertype"]?>','<?=$data['b_id']?>');">
												<span class="glyphicon glyphicon-pencil"></span>
												修正編輯
												</button>
											</div>
											<?endif?>
											<?else:?>
											<div class="lock">
												<button class="btn btn-default btn-lg btn-block disabled php-booklists-editorbutton" title="目前該產品正在處理訂購程序，除繼續編輯外，您仍可運行其他操作">
												<span class="glyphicon glyphicon-ban-circle"></span>
												鎖定編輯
												</button>
											</div>
											<?endif?>
										</div>
										<div class="row">
											<div class="addcartbutton col-md-6 col-sm-6 col-xs-6">
												<button class="otheredit btn btn-default btn-sm php-booklists-editorbutton" title="加入購物車" onclick="addcart('<?=$data["b_id"]?>',this,'<?=$data["bk_name"]?>');">
												<span class="glyphicon glyphicon-shopping-cart"></span>
												加入購物車
												</button>
											</div>
											<div class="removecartbutton col-md-6 col-sm-6 col-xs-6">
												<button class="otheredit btn btn-default btn-sm php-booklists-editorbutton" title="已加入購物車，移出購物車" onclick="delitem(this,'<?=$data["delitemmode"]?>')" bookID="<?=$data["b_id"]?>" customProductID="<?=$data["checkbookidincart"]["customProdKey"]?>">
												<span class="glyphicon glyphicon-arrow-left"></span>
												移出購物車
												</button>
											</div>
											<?if($memnerdata['self']):?>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="otheredit btn btn-default btn-sm php-booklists-editorbutton" title="複製製作" onclick="askcopybk(this,'<?=$data["b_id"]?>','<?=$data["b_whose"]?>','<?=$data["b_productName"]?>');">
												<span class="glyphicon glyphicon-plus"></span>
												複製製作
												</button>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="otheredit btn btn-default btn-sm php-booklists-editorbutton" title="刪除製作" onclick="delmklist(this,'<?=$data["b_id"]?>','<?=$data["b_whose"]?>','<?=$data["b_productName"]?>');">
												<span class="glyphicon glyphicon-trash"></span>
												刪除製作
												</button>
											</div>
											<?endif?>
											<?if($data["allowotheredit"]):?>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="otheredit btn btn-default btn-sm php-booklists-editorbutton" title="若您需要讓他人編輯此製作, 請點此查看" onclick="showqa('<?=$data["b_id"]?>','<?=$data["b_password"]?>','<?=$data["b_papertype"]?>');">
												<span class="glyphicon glyphicon-user"></span>
												他人編輯
												</button>
											</div>
											<?if($data["allowshare"]):?>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="preview btn btn-default btn-sm php-booklists-editorbutton" onclick="preview('<?=$data["b_id"]?>',this,'<?=$data["b_papertype"]?>','<?=$data["b_productName"]?> - <?=$data["bk_name"]?>');">
												<span class="glyphicon glyphicon-eye-open"></span>
												前往預覽
												</button>
											</div>
											<?if($memnerdata['self']):?>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="doshare btn btn-default btn-sm php-booklists-editorbutton" title="點此發佈分享高品質的<?=$data["b_productName"]?>" onclick="pub('<?=$data["b_id"]?>','<?=$data["b_password"]?>','<?=$data["b_papertype"]?>','<?=$data["b_whose"]?>');">
												<span class="glyphicon glyphicon-share-alt"></span>
												發佈分享
												</button>
											</div>
											<?endif?>
											<?if($data["allowdelshare"] && $memnerdata['self']):?>
											<div class="col-md-6 col-sm-6 col-xs-6">
												<button class="delshare btn btn-default btn-sm php-booklists-editorbutton" title="<?$data["bk_name"]?>" onclick="delShare(this,'<?=$data["b_shareid"]?>','<?=$data["b_id"]?>','<?=$data["b_whose"]?>');">
												<span class="glyphicon glyphicon-remove"></span>
												刪除分享
												</button>
											</div>
											<?endif?>
											<?endif?>
											<?endif?>
										</div>
										<?if(count($data["b_orders"]["oid"]) > 0):?>
										<div class="row orderhistory">
											<?for($i=0;$i<count($data["b_orders"]["oid"]);$i++):?>
											<div class="col-md-1 col-sm-1 col-xs-1 php-booklists-orderstar" title="訂單號碼:<?=$data["b_orders"]["oid"][$i]?>&#10;訂購時間:<?=$data["b_orders"]['odt'][$i]?>">
												<span class="glyphicon glyphicon-star"></span>
											</div>
											<?endfor?>
										</div>
										<?endif?>
									</div>
								</div>
							</div>
						</div>
						<?endforeach?>
						<?else:?>
						查詢不到製做紀錄!!
						<?endif?>
					</div>
				</div>
				<div class="php_pagecontrola">
					<!--頁數控制框架(下）-->
					<?if(count($pagedata) > 0):?>
					<ul class="pagination">
						<?foreach($pagedata as $page => $data):?>
						<?if($data["now"]):?>
						<li class="active pages <?=$page?>">
							<a href="javascript:void(0)" class="link">
								<?=$data["page"]?>
							</a>
						</li>
						<?else:?>
						<li class="pages <?=$page?>">
							<a href="javascript:void(0)" class="link" onclick="gotopage('<?=$data["target"]?>')">
								<?=$data["page"]?>
							</a>
						</li>
						<?endif?>
						<?endforeach?>
					</ul>
					<?endif?>
				</div>
				<form name="mklist" id="mklist" action="" method="post">
					<input type="hidden" id="form_action" name="form_action" value="" />
					<input type="hidden" id="form_bookid" name="form_bookid" value="" />
					<input type="hidden" id="reorder" name="reorder" value="" />
				</form>
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
              <h3><?=$webSiteName?></h3>
              <address>
              <p> <i class="icon-location"></i>&nbsp;<?=$siteAddress?><br>
                <i class="icon-phone"></i>&nbsp;<?=$sitePhone?><br>
                <i class="icon-mail-alt"></i>&nbsp;<?=$siteEmail?><br>
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
<!-- InstanceEnd --></html>