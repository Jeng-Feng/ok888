<? require_once('init.php'); ?>
<? require_once($config['global_library'].'/_top_index.php'); ?>
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/index_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Basic Page Needs
	================================================== -->
<!-- InstanceBeginEditable name="doctitle" -->
    <title>台中相片書印刷、水晶相本、無框畫–生活相片書</title>
    <!-- InstanceEndEditable -->
<meta name="description" content="<?=$getmetadescription?>">
<meta name="keywords" content="<?=$getmetakeyword?>">
<meta name="author" content="">
<!-- Mobile Specific Metas
	================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS
	================================================== -->
<!-- Bootstrap  -->
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
<!-- plugin css  -->
<link rel="stylesheet" type="text/css" href="vjs/animation-framework/animate.css" />
<!-- Pop up-->
<link rel="stylesheet" type="text/css" href="vjs/magnific-popup/magnific-popup.css" />
<!-- Revolution Slider -->
<link rel="stylesheet" type="text/css" href="vjs/revolution-slider/rs-plugin/css/navstylechange.css" media="screen" />
<link rel="stylesheet" type="text/css" href="vjs/revolution-slider/rs-plugin/css/settings-hideo.css" media="screen" />

<!-- nekoAnim-->
<link rel="stylesheet" type="text/css" href="vjs/appear/nekoAnim.css" />

<!-- Owl carousel-->
<link rel="stylesheet" href="vjs/owl.carousel/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="vjs/owl.carousel/owl-carousel/owl.transitions.css">
<link rel="stylesheet" href="vjs/owl.carousel/owl-carousel/owl.theme.css">
<!-- icon fonts -->
<link type="text/css" rel="stylesheet" href="css/font-icons/custom-icons/css/custom-icons.css">
<!-- Custom css -->
<link type="text/css" rel="stylesheet" href="css/layout.css">
<link type="text/css" id="colors" rel="stylesheet" href="css/colors.css">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
<script src="vjs/modernizr-2.6.1.min.js"></script>
<!-- Favicons
	================================================== -->
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
<? require_once($config['global_library'].'/_index.php'); ?>
<!-- InstanceBeginEditable name="custom javascript" -->
    <!-- InstanceEndEditable -->
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
              <li class="primary"><a href="#"  class="firstLevel hasSubMenu" >關於我們</a>
              <ul class="subMenu">
                  <li><a href="#">關於我們</a></li>
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
  <!-- slider -->
  
  <section id="rsDemoWrapper">
    <div class="tp-banner-container">
      <div class="tp-banner" > <!-- InstanceBeginEditable name="home slide" -->
        <ul>
          <!-- SLIDE  -->
          <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
            <!-- MAIN IMAGE -->
            <img src="images/home/banner01.jpg"  alt="slide-美觀精緻的相片書 "  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 1 -->
            <div class="tp-caption tp-resizeme"
              data-x="center" data-hoffset="0"
              data-y="150"
              data-speed="600"
              data-start="1400"
              data-endspeed="600"
            > <img src="images/home/LOGO.png" alt="Hideo Logo" /> </div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption large_bold_white customin customout tp-resizeme"
              data-x="center" data-hoffset="0"
              data-y="250"
              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="600"
              data-start="2400"
              data-easing="Power4.easeOut"
              data-endspeed="600"
              data-endeasing="Power0.easeIn"
            style="z-index: 3">美觀精緻的相片書 </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption medium_light_white customin customout tp-resizeme"
              data-x="center" data-hoffset="0"
              data-y="bottom" data-voffset="-140"
              data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
              data-speed="600"
              data-start="2700"
              data-easing="Power4.easeOut"
              data-endspeed="600"
              data-endeasing="Power0.easeIn"
            style="z-index: 4">客制化線上製作</div>
          </li>
          <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
            <!-- MAIN IMAGE -->
            <img src="images/home/banner02.jpg"  alt="slide-月桌曆線上製作"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
            <!-- LAYERS -->
            <!-- LAYER NR. 2 -->
            <div class="tp-caption largeblackbg skewfromleft tp-resizeme"
              data-x="20" data-hoffset="0"
              data-y="200"
              data-speed="600"
              data-start="1400"
              data-easing="Power4.easeOut"
              data-endspeed="600"
              data-endeasing="Power0.easeIn"
            style="z-index: 3">月桌曆線上製作 </div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
              data-x="20" data-hoffset="0"
              data-y="280"
              data-speed="600"
              data-start="1800"
              data-easing="Power4.easeOut"
              data-endspeed="600"
              data-endeasing="Power0.easeIn"
              style="z-index: 3"><span class="banner-text">精緻的線圈裝訂，彩色高質感印刷</span></div>
              
              <!-- LAYER NR. 4 -->
              <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                data-x="20" data-hoffset="0"
                data-y="320"
                data-speed="600"
                data-start="2200"
                data-easing="Power4.easeOut"
                data-endspeed="600"
                data-endeasing="Power0.easeIn"
                style="z-index: 3"><span class="banner-text"><strong>多買多賺！</strong> 會員更有更多折扣喔！</span> </div>
              </li>
              <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                <!-- MAIN IMAGE -->
                <img src="images/home/banner03.jpg"  alt="slide-個性化大頭貼"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                
                <!-- LAYER NR. 2 -->
                <div class="tp-caption largeblackbg skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="200"
                  data-speed="600"
                  data-start="1400"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                style="z-index: 3">個性化大頭貼</div>
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="280"
                  data-speed="600"
                  data-start="1800"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                style="z-index: 3"><i class="icon-right-open-mini"></i>多種尺寸，豐富的版型</div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="320"
                  data-speed="600"
                  data-start="2200"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                style="z-index: 3"><i class="icon-right-open-mini"></i>客制化服務，線上編輯！ </div>
                
                <!-- LAYER NR. 4 -->
                <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="360"
                  data-speed="600"
                  data-start="2600"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                style="z-index: 3"><i class="icon-right-open-mini"></i>馬上線上製作！</div>
              </li>
              <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                <!-- MAIN IMAGE -->
                <img src="images/home/banner04.jpg"  alt="slide-精緻明信片"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                <!-- LAYERS -->
                
                <!-- LAYER NR. 2 -->
                <div class="tp-caption largeblackbg skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="200"
                  data-speed="600"
                  data-start="1400"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                style="z-index: 3">精緻明信片</div>
                
                <!-- LAYER NR. 3 -->
                <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                  data-x="20" data-hoffset="0"
                  data-y="280"
                  data-speed="600"
                  data-start="1800"
                  data-easing="Power4.easeOut"
                  data-endspeed="600"
                  data-endeasing="Power0.easeIn"
                  style="z-index: 3"><span class="banner-text icon-right-open-mini">線上製作，</span></div>
                  
                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                    data-x="20" data-hoffset="0"
                    data-y="320"
                    data-speed="600"
                    data-start="2200"
                    data-easing="Power4.easeOut"
                    data-endspeed="600"
                    data-endeasing="Power0.easeIn"
                    style="z-index: 3"><span class="banner-text icon-right-open-mini">將自己的照片製成精美明信片</span></div>
                  </li>
                  <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                    <!-- MAIN IMAGE -->
                    <img src="images/home/banner05.jpg"  alt="slide-線上桌曆製作"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption largeblackbg skewfromleft tp-resizeme"
                      data-x="20" data-hoffset="0"
                      data-y="200"
                      data-speed="600"
                      data-start="1400"
                      data-easing="Power4.easeOut"
                      data-endspeed="600"
                      data-endeasing="Power0.easeIn"
                    style="z-index: 3">線上桌曆製作</div>
                    
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                      data-x="20" data-hoffset="0"
                      data-y="280"
                      data-speed="600"
                      data-start="1800"
                      data-easing="Power4.easeOut"
                      data-endspeed="600"
                      data-endeasing="Power0.easeIn"
                      style="z-index: 3"><span class="banner-text icon-right-open-mini">線上製作，</span></div>
                      
                      <!-- LAYER NR. 4 -->
                      <div class="tp-caption medium_light_white skewfromleft tp-resizeme"
                        data-x="20" data-hoffset="0"
                        data-y="320"
                        data-speed="600"
                        data-start="2200"
                        data-easing="Power4.easeOut"
                        data-endspeed="600"
                        data-endeasing="Power0.easeIn"
                        style="z-index: 3"><span class="banner-text icon-right-open-mini">陪您一整年的喜悅！</span></div>
                      </li>
                      <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="images/home/banner06.jpg"  alt="slide-相片書"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme"
                          data-x="center" data-hoffset="0"
                          data-y="150"
                          data-speed="600"
                          data-start="1400"
                          data-endspeed="600"
                        > <img src="images/home/LOGO.png" alt="photo book Logo" /> </div>
                      </li>
                    </ul>
                    <!-- InstanceEndEditable --> </div>
    </div>
  </section>
  <!-- slider -->
  
  <section id="content"> <!-- InstanceBeginEditable name="home main content" -->
                <section class="largeQuote pb40 pt40">
                  <div class="container">
                    <div class="row">
                      <div class="span12 text-center">
                        <h1>相片書 折扣、團購 <strong>讓您更物超所值</strong><br/>
                        <small>10~39本9折，滿30本，享本島寄同址免運費</small></h1>
                        </br>
                        <a href="news.php" class="btn projectLink">點我了解</a>
                      </div>
                    </div>
                  </div>
                </section>
                
                
                
                <!-- works -->
                <section class="imgHover clearfix cs-style-3 mb40">
                  <div class="container">
                    <div class="row">
                      <div class="span12 text-center mb40">
                        <h1></br>精選商品 Item</h1>
                        <h2 class="subTitle">我們的商品包羅萬象</h2>
                      </div>
                    </div>
                  </div>
                  
                  <!-- works carousel -->
                  
                  <div class="owl-carousel nekoDataOwl imgHover neko-hover-1" data-neko_items="1"  data-neko_singleitem="true">
                    <div class="item">
                      <div class="container">
                        <div class="row">
                          <article class="col-md-6 mb30">
                            <figure class="minimalBox"> <img alt="photobooks" src="images/home/item01.jpg" class="img-responsive">
                              <figcaption>
                              <h3>相片書</h3>
                              <p>多種版面尺寸</p>
                              <a href="products.photobook.php" class="btn projectLink">開始製作</a> </figcaption>
                            </figure>
                          </article>
                          <article class="col-md-6 mb30">
                            <figure class="minimalBox"> <img alt="姓名貼" src="images/home/item02.jpg" class="img-responsive">
                              <figcaption>
                              <h3>姓名貼</h3>
                              <p>多種版面尺寸</p>
                              <a href="products.sticker.php" class="btn projectLink">開始製作</a> </figcaption>
                            </figure>
                          </article>
                        </div>
                        <div class="row">
                          <article class="col-md-6 mb30">
                            <figure class="minimalBox"> <img alt="明信片" src="images/home/item03.jpg" class="img-responsive">
                              <figcaption>
                              <h3>明信片</h3>
                              <p>多種版面尺寸</p>
                              <a href="products.postcard.php" class="btn projectLink">開始製作</a> </figcaption>
                            </figure>
                          </article>
                          <article class="col-md-6 mb30">
                            <figure class="minimalBox"> <img alt="桌曆" src="images/home/item04.jpg" class="img-responsive">
                              <figcaption>
                              <h3>桌曆</h3>
                              <p>多種版面尺寸</p>
                              <a href="products.calendar.php" class="btn projectLink">開始製作</a> </figcaption>
                            </figure>
                          </article>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                  <!-- works carousel -->
                  
                  <!-- services -->
                  <section id="services">
                    <div class="container pb30 pt15">
                      <div class="row">
                        <div class="col-md-12 text-center" data-nekoanim="bounceIn" data-nekodelay="200">
                          <h1>我們想要推廣的是</h1>
                          <p>把珍貴的照片保留在電腦裡只是一個檔案，但印製成一本相片書，讓您手握珍藏的回憶。</p>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb30">
                          <hr class="lineLines">
                        </div>
                      </div>
                    </div>
                  </section>
                  
                  
                </section>
                <!-- content -->
                
                <!-- call to action -->
                
                <section class="color2 pb40 pt40">
                  <div class="ctaBox ctaBoxFullwidth">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-8">
                          <h1> <strong>方便的線上編輯! 依照您的需求設計</strong><br />
                          方便的相片書製作，保留您珍貴的回憶！</h1>
                        </div>
                        <div class="col-md-4"> <a class="btn btn-lg btn-border" title="" href="products.php"> <i class="icon-down-open-big"></i> Start </a> </div>
                      </div>
                    </div>
                  </div>
                </section>
                
                <!-- call to action -->
                <!-- InstanceEndEditable --> </section>
  
  <!-- footer --> 
  
  <!-- InstanceBeginEditable name="home footer" -->
                <footer id="footerWrapper" class="footer2">
                  <section id="mainFooter">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6 col-sm-6">
                          <div class="footerWidget"> <img src="images/home/main-logo.png" alt="latest Little Neko news" id="footerLogo">
                            <p>Life Books運用雲端數位化技術搭配數位印刷設備，讓您可以不限時間、不限地點、不限電腦，透過網路隨手編輯您的相片書，直覺、友善、簡單人性化的操作介面，所以Life Books不只是相片書，還可以是本型錄、畢冊、作品集、畫冊等等多方面應用的少量印刷書冊，所以不管是送人或自用皆適用。</p>
                          </div>
                        </div>
                        
                        <!--
                        <div class="col-md-3 col-sm-6">
                          <div class="footerWidget">
                            <h3>Latest works</h3>
                            <ul class="list-unstyled worksList">
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works1.jpg" alt="works"></a></li>
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works2.jpg" alt="works"></a></li>
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works3.jpg" alt="works"></a></li>
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works4.jpg" alt="works"></a></li>
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works5.jpg" alt="works"></a></li>
                              <li><a href="#" class="tips" title="" data-original-title="Little Neko work"><img src="images/theme-pics/works6.jpg" alt="works"></a></li>
                            </ul>
                          </div>
                        </div>
                        
                        -->
                        
                        <div class="col-md-3 col-sm-6">
                          <div class="footerWidget">
                            <h3>Quick Menu</h3>
                            <ul class="list-unstyled iconList borderList">
                              <li><a href="service.php">服務使用條款</a></li>
                              <li><a href="privacy.php">隱私權條款</a></li>
                              <li><a href="commission.php">委託製作契約</a></li>
                              <li><a href="sendback.php">退換貨政策</a></li>
                              <li><a href="transportation.php">貨運方式與計價</a></li>
                              <li><a href="contact.php">聯絡我們</a></li>
                            </ul>
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
                    </div>
                  </div>
                </section>
                <section id="footerRights">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="socialNetwork">
                          <ul class="socialNetwork">
                            <li><a href="https://www.facebook.com/mylifebooks888" class="tips" title="follow me on Facebook"><i class="icon-facebook-1 iconRounded"></i></a></li>
                            <li><a href="#" class="tips" title="follow me on Google+"><i class="icon-gplus-1 iconRounded"></i></a></li>
                          </ul>
                        </div>
                        <div class="col-md-12">
                          <p>©
                            <?=$copyrightyear?>
                            <?=$siteCompany?>
                          Copyright All Rights Reserved.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </footer>
              <!-- InstanceEndEditable --> 
  
  <!-- End footer --> 
</div>
<!-- global wrapper --> 
<!-- End Document 
	================================================== --> 
<script type="text/javascript" src="vjs/respond/respond.min.js"></script> 
<script type="text/javascript" src="vjs/jquery-ui/jquery-ui-1.8.23.custom.min.js"></script> 
<!-- third party plugins  --> 
<script type="text/javascript" src="vjs/bootstrap/js/bootstrap.js"></script> 
<script type="text/javascript" src="vjs/easing/jquery.easing.1.3.js"></script> 
<!-- carousel --> 
<script type="text/javascript" src="vjs/owl.carousel/owl-carousel/owl.carousel.min.js"></script> 
<!-- pop up --> 
<script type="text/javascript" src="vjs/magnific-popup/jquery.magnific-popup.min.js"></script> 
<!-- Revolution slider --> 
<script type="text/javascript" src="vjs/revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="vjs/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- isotope --> 
<script type="text/javascript" src="vjs/isotope/jquery.isotope.min.js"></script> 
<!-- form --> 
<script type="text/javascript" src="vjs/neko-contact-ajax-plugin/js/jquery.form.js"></script> 
<script type="text/javascript" src="vjs/neko-contact-ajax-plugin/js/jquery.validate.min.js"></script> 
<!-- parallax --> 
<script type="text/javascript" src="vjs/parallax/js/jquery.stellar.min.js"></script> 
<!-- appear --> 
<script type="text/javascript" src="vjs/appear/jquery.appear.js"></script> 

<!-- toucheeffect --> 
<script type="text/javascript" src="vjs/toucheeffect/toucheffects.js"></script> 

<!-- Custom  --> 
<script type="text/javascript" src="vjs/custom.js"></script> 
<!-- InstanceBeginEditable name="afterjs" --> <!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>