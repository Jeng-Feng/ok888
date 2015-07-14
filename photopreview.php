<?php 
	require_once(dirname(__FILE__).'/init.php');
	require_once($config['global_library'].'/_top_photopreview.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Responsive Bootstrap Multi-Purpose Landing Page Template">
<meta name="keywords" content="LandX, Bootstrap, Landing page, Template, Registration, Landing">
<meta name="author" content="Mizanur Rahman">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="<?=$getmetadescription?>">
<meta name="keywords" content="<?=$getmetakeyword?>">

<title>會員線上相簿 - 相片預覽</title>

<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="assets/ionicons/css/ionicons.css">
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<!--[if lte IE 7]><script src="assets/elegant-icons/lte-ie7.js"></script><![endif]-->
<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/responsive.css">
<!--[if lt IE 9]>
			<script src="vjs/html5shiv.js"></script>
			<script src="vjs/respond.min.js"></script>
<![endif]-->

<script src="js/jquery-1.9.0.min.js"></script>
<script src="Scripts/jquery-migrate-1.1.0.min.js"></script>
<link rel="stylesheet" href="css/jquery-fallr-1.0.css" type="text/css" />
<script src="Scripts/mylibs/jquery-fallr-1.2.js"></script>
<link rel="stylesheet" href="css/shoppingcart.css">
<? require_once($config['global_library'].'/shoppingcart.php'); ?>
<? require_once($config['global_library']."/js_common.php"); ?>
<link rel="stylesheet" href="css/vsite.css">
<link rel="stylesheet" href="css/yours.css">
<link rel="stylesheet" href="css/styles.css">

<?require_once($config['global_library'].'/_photopreview.php');?>
<script src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.contextmenu.r2.js"></script>
<script type="text/javascript" src="Scripts/jquery.easing.1.3.js"></script>
<!-- BeforeAfter Libary -->
<script type="text/javascript" src="js/beforeafter/jquery.beforeafter-1.4.min.js"></script>
<script type="text/javascript" src="js/beforeafter/jquery-ui-1.8.13.custom.min.js"></script>
<!-- Toastmessage Libary -->
<script type="text/javascript" src="http://photobooks.tw/js/jquery.toastmessage.js"></script>
<link type="text/css" rel="stylesheet" href="http://photobooks.tw/css/jquery.toastmessage.css">
<!-- InstanceEndEditable -->
</head>
<body>
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

					<div class="row php-album-photo-preview">
						<div class="before-btn" style="display:none;">調整前</div>
						<div class="after-btn" style="display:none;">調整後</div>
						<div class="col-md-8 col-sm-8 col-xs-12 php-album-photo-preview-imgpool">
							<div class="beforeAfter">
								<img class="img-responsive pic-m" src="/saved/memberdata/albums/<?=$photo['pic_m']?>" <?if($photo['pic_h']==1){?>style="display:none;"<?}?> />
								<img class="img-responsive pic-m" src="/saved/memberdata/albums/<?=str_replace('_m.jpg','_m_p.jpg',$photo['pic_m'])?>" <?if($photo['pic_h']!=1){?>style="display:none;"<?}?> />
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="row php-album-photo-preview-tools">
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-title">功能列</div>
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-content">
									<input type="checkbox" id="pclearEnable" <?if($photo['pic_h']=='1'){?>checked="checked"<?}?> />
									<label for="pclearEnable">影像最佳化</label>
									<div class="compare" <?if($photo['pic_h']!='1'){?>style="display:none;"<?}?>>
										<input type="checkbox" id="compare" />
										<label for="compare">比較模式</label>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-title">相片標題</div>
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-content"><?=$photo['title']?></div>
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-title">相片簡述</div>
								<div class="col-md-12 col-sm-12 col-xs-12 php-album-photo-preview-tools-content php-album-photo-preview-tools-content-last"><?=$photo['description']?></div>
							</div>
						</div>
					</div>

	
</body>

<script>
jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})
</script>
<script src="vjs/bootstrap.min.js"></script>
<script src="vjs/retina-1.1.0.min.js"></script>
<script src="vjs/smoothscroll.js"></script>
<script src="vjs/jquery.scrollTo.min.js"></script>
<script src="vjs/jquery.localScroll.min.js"></script>
<script src="vjs/owl.carousel.min.js"></script>
<script src="vjs/nivo-lightbox.min.js"></script>
<script src="vjs/simple-expand.min.js"></script>
<script src="vjs/jquery.nav.js"></script>
<script src="vjs/jquery.fitvids.js"></script>
<script src="vjs/jquery.ajaxchimp.min.js"></script>
<script src="vjs/custom.js"></script>
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
</html>