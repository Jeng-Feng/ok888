<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_index.php'); ?>
<!DOCTYPE html>
<html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Basic Page Needs
	================================================== -->
<!-- TemplateBeginEditable name="doctitle" -->
<title>fotobe</title>
<!-- TemplateEndEditable -->
<meta name="description" content="<?=$getmetadescription?>">
<meta name="keywords" content="<?=$getmetakeyword?>">
<meta name="author" content="Little NEKO"> 
<!-- Mobile Specific Metas
	================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
	<!-- Bootstrap  -->
	<link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
	<!-- plugin css  -->
	<link rel="stylesheet" type="text/css" href="../vjs/animation-framework/animate.css" />
	<!-- Pop up-->
	<link rel="stylesheet" type="text/css" href="../vjs/magnific-popup/magnific-popup.css" />
	<!-- Revolution Slider -->
	<link rel="stylesheet" type="text/css" href="../vjs/revolution-slider/rs-plugin/css/navstylechange.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="../vjs/revolution-slider/rs-plugin/css/settings-hideo.css" media="screen" />

	<!-- nekoAnim-->
	<link rel="stylesheet" type="text/css" href="../vjs//appear/nekoAnim.css" />
	
	<!-- Owl carousel-->
	<link rel="stylesheet" href="../vjs/owl.carousel/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="../vjs/owl.carousel/owl-carousel/owl.transitions.css">
	<link rel="stylesheet" href="../vjs/owl.carousel/owl-carousel/owl.theme.css">
	<!-- icon fonts -->
	<link type="text/css" rel="stylesheet" href="../css/font-icons/custom-icons/css/custom-icons.css">
	<!-- Custom css -->
	<link type="text/css" rel="stylesheet" href="../css/layout.css">
	<link type="text/css" id="colors" rel="stylesheet" href="../css/colors.css">
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<script src="../vjs/modernizr-2.6.1.min.js"></script>
<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../images/favicon.ico">

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
<? require_once($config['global_library'].'/_index.php'); ?>
<!-- TemplateBeginEditable name="custom javascript" -->
<!-- TemplateEndEditable -->

</head>
<body class="activateAppearAnimation">
<!-- Primary Page Layout 
	================================================== --> 
<!-- globalWrapper -->
<div id="globalWrapper" class="localscroll">
  <header class="navbar-fixed-top"> 
    <!-- pre header -->
    <div id="preHeader" class="hidden-xs">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <ul class="quickMenu">
              <li><a href="../template-site-map.html" class="linkLeft">Site map</a></li>
              <li><a href="../template-about.html">About us</a></li>
              <li><a href="../template-team.html">Our team</a></li>
              <li><a href="../template-contact.html">Contact</a></li>
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
            <a class="navbar-brand" href="../index.php"><img src="../images/home/main-logo.png" alt="photobook logo"/></a> </div>
          <div class="collapse navbar-collapse" id="mainMenu"> 
            <!-- Main navigation -->
            <ul class="nav navbar-nav pull-right">
              <li class="primary"> <a href="../index.php" class="firstLevel" >首頁</a> </li>
              <li class="primary"> <a href="../products.php" class="firstLevel" >產品</a> </li>
              
              
              <?if($isLogin == true):?>
								<li class="primary"><a id="php_member_order_history" href="./memberindex.php"><?=$lang_member_zone?></a></li>
								<li class="primary"><a id="php_member_logout" href="javascript:bye();"><?=$lang_logout?></a></li>
							<?else:?>
								<li class="primary"><a id="php_member_login" href="./memberlogin.php"><?=$lang_member_login?></a></li>
								<li class="primary"><a id="php_member_join" href="./memberregisterrule.php"><?=$lang_member_register?></a></li>
							<?endif;?>
 							<li class="primary"><a href="../helps.php">新手上路</a></li>
              
              
              
              
            </ul>
            <!-- End main navigation --> 
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- header --> 
  <!-- ======================================= content ======================================= --> 
  <!-- slider -->

  <section id="rsDemoWrapper">
    <div class="tp-banner-container">
      <div class="tp-banner" >
<!-- TemplateBeginEditable name="home slide" -->
<!-- TemplateEndEditable -->
      
      
        
      </div>
    </div>
  </section>
  <!-- slider -->
 
<section id="content">
 
 <!-- TemplateBeginEditable name="home main content" -->
<!-- TemplateEndEditable -->
 
 </section> 
  
  <!-- footer -->
  
  <!-- TemplateBeginEditable name="home footer" -->
 <!-- TemplateEndEditable -->

  
  <!-- End footer --> 
</div>
<!-- global wrapper -->
<!-- End Document 
	================================================== -->
	<script type="text/javascript" src="../vjs/respond/respond.min.js"></script>
	<script type="text/javascript" src="../vjs/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script>
	<!-- third party plugins  -->
	<script type="text/javascript" src="../vjs/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../vjs/easing/jquery.easing.1.3.js"></script>
	<!-- carousel -->
	<script type="text/javascript" src="../vjs/owl.carousel/owl-carousel/owl.carousel.min.js"></script>
	<!-- pop up -->
	<script type="text/javascript" src="../vjs/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- Revolution slider -->
	<script type="text/javascript" src="../vjs/revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script type="text/javascript" src="../vjs/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- isotope -->
	<script type="text/javascript" src="../vjs/isotope/jquery.isotope.min.js"></script>
	<!-- form -->
	<script type="text/javascript" src="../vjs/neko-contact-ajax-plugin/js/jquery.form.js"></script>
	<script type="text/javascript" src="../vjs/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script>
	<!-- parallax -->
	<script type="text/javascript" src="../vjs/parallax/js/jquery.stellar.min.js"></script>
	<!-- appear -->
	<script type="text/javascript" src="../vjs/appear/jquery.appear.js"></script>

	<!-- toucheeffect -->
	<script type="text/javascript" src="../vjs/toucheeffect/toucheffects.js"></script>

	<!-- Custom  -->
	<script type="text/javascript" src="../vjs//custom.js"></script>
<!-- TemplateBeginEditable name="afterjs" -->
<!-- TemplateEndEditable -->

</body>
</html>
