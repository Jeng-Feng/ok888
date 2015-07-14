<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_products.postcard.uploadResult.php'); ?>
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
<? require_once($config['global_library'].'/_products.'.$whichproductclass.'.uploadResult.php'); ?>
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
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?if(!empty($test_alert)): ?>
					<div id="p_alert" class="alert alert-danger" role="alert">
						<span class="glyphicon glyphicon-warning-sign"></span>
						<?=$test_alert?>
					</div>
				<?endif;?>
			</div>
		</div>	
		<div class="row">
			<div class="col-md-6" id="order_sel_qty">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">訂購數量</p>
					</div>
					<div class="panel-body" id="order_sel_qty_content">
						<div id="ordering"></div>
						<div id="controlArea">
							<div id="photobook_only">
								<h6><p class="text-center"><?=$pdname?></p></h6>
								<form name="formorder" id="formorder"></form>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<select id="amountchoose" name="amountchoose" onchange="askprice();" class="form-control">
											<?=$amountchoose_option?>
										</select>
									</div>	
								</div>	
								<div class="col-md-9">
									<div class="form-group pull-left">
										<input type="text" class="form-control" maxlength="5" id="inputqty" name="inputqty" style="display:none;width:100px" onchange="askprice();" value="" />&nbsp;&nbsp;
										<img class="canClick" style="display:none" id="imgqtyconfirm" src="" />&nbsp;&nbsp;<span id="other" class="canClick" onclick="showinput()">其他數量<span class="glyphicon glyphicon-pencil"></span></span>
									</div>
								</div>	
							</div>	
							<div class="row">
								<div class="col-md-12">
									<div class="form-group pull-left">
										<?=$subprice?>
									</div>	
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group pull-left">
										<div id="ststus">價格預估中...</div>
									</div>	
								</div>
							</div>	
							<div class="form-group">
								<textarea class="form-control" name="order_memo" rows="3" id="order_memo">訂單備註:</textarea>
							</div>	
						</div>
						<div id="order_confirm">
							<div class="form-group">
								<?php if($nonlogin): ?>
									test<?=$_SESSION['memlevel']?>
								<?php elseif($allowOrder == true): ?>
									<a id="ornow" class="btn btn-primary" href="javascript:doorder();"><span><?=$lang_OrderVerified?></span></a>
								<?php else: ?>
									<a class="btn btn-primary" title="<?=$lang_InPrinting_Wait30mins?>"><span><?=$lang_NotAbleToOrder?></span></a><br /><br /><?=$lang_InPrinting_Wait30mins?>
								<?php endif;?>
							</div>
						</div>
					</div>	
				</div>		
			</div>
			<div class="col-md-6" id="order_perview">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">預覽</p>
					</div>
					<div class="panel-body" id="order_perview_content">
						<? if($thumb_url): ?>
							<img class="img-responsive center-block" src="<?=$thumb_url?>" />
						<? else: ?>
							<p class="bg-warning">沒有圖片可供預覽</p>
						<? endif; ?>
					</div>	
				</div>
			</div>
		</div>	

		<div class="row">
			<div class="col-md-6" id="order_spec">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">印刷規格</p>
					</div>
					<div class="panel-body" id="order_spec_content">
						<img id="img_products" class="img-responsive center-block" src="<?=$img_products?>"  />
						<div class="text-left"><?=$productinfo?></div>						
					</div>	
				</div>	
			</div>
			<div class="col-md-6" id="order_editagain">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<p class="panel-title">再次編輯</p>
					</div>
					<div class="panel-body" id="order_editagain_content">
						<div>
							<div class="text-left">
								<p>您的作品:<?=$bkname?></p>
								<p>您的作品編號:<?=$bookid?></p>
								<? if($_SESSION['Account'] != '' && strtolower($owner)==strtolower($newAccount)): ?>
										<p class="bg-info"><?=$lang_FindThisWorkInRecords . $lang_InputPasswordToEditbyOthers . $ppw?><p>
								<? else: ?>
										<? if($_SESSION['whomakethisbook']==$bookid): ?>
											<p class="bg-info"><?=$lang_InputPassword . $ppw;?><br />(&nbsp;<?=$lang_EditingNeedThisPassword;?>&nbsp;)</p>
										<? else: ?>
											<p class="bg-info"><?=$lang_EditingNeedThisEditingPassword;?></p>
										<?	endif ?>
								<?	endif ?>
								<div class="form-group">
									編輯此頁的網址:<input class="form-control" type="text" id="editor_url" readonly="readonly" value="" onclick="$(this).select();" />
								</div>	
								<p><a id="editnow" class="btn btn-primary" href=""><span>繼續編輯</span></a></p>
							</div>
						</div>
					</div>
				</div>	
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
<script type="text/javascript">
function MM_goToURL() { //v3.0
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
<!-- InstanceEnd --></html>