<?php 
	require_once(dirname(__FILE__).'/init.php');
	require_once($config['global_library'].'/_top_service.php');
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
<title>服務使用條款</title>
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
<?require_once($config['global_library'].'/_service.php');?>
<script src="js/jquery.prettyPhoto.js"></script>
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
 
		<?//require_once($config['global_library'].'/_albumView.php');?>
			<div id="bootstrap_content">
				<div class="container" align="center">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h1 class="panel-title">服務使用條款</h1>
						</div>
						<div class="panel-body">
							
							<p class="text-left"><?=$webSiteName?>（以下稱本網）係依據本服務條款提供相片書印刷服務。當您使用本網軟體及服務時，即表示您已閱讀、瞭解並同意接受本契約書之所有內容。本公司有權於任何時間修改或變更本契約書之內容，建議您隨時注意該等修改或變更。當您於任何修改或變更服務條款後繼續使用本網提供的服務，表示您已閱讀、瞭解並同意接受該等修改或變更。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">1. 認知與接受條款</span>
							</h6>
							<p class="text-left">「 <?=$siteCompany?> 」（以下稱本公司），係依據本服務條款提供  <?=$webSiteName?>  &nbsp;服務(以下簡稱「本服務」)。當您使用本服務時，即表示您已閱讀、瞭解並同意接受本服務條款之所有內容。本公司有權於任何時間修改或變更本服務條款之內容，建議您隨時注意該等修改或變更，您於任何修改或變更後繼續使用本服務，視為您已閱讀、瞭解並同意接受該等修改或變更。如果您不同意本服務條款的內容，或者您所屬的國家或地域排除本服務條款內容之全部或一部時，您應立即停止使用本服務。  &nbsp;<br />若您為未滿二十歲，除應符合上述規定外，並應於您的家長（或監護人）閱讀、瞭解並同意本服務條款之所有內容  及其後修改變更後，方得使用或繼續使用本服務。當您使用或繼續使用本服務時，即推定您的家長（或監護人）已閱讀、瞭解並同意接受本服務條款之所有內容及其後修改變更。本公司強烈的希望您在徵得您的家長同意後，再繼續使用本服務。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">2. 您的註冊義務</span>
							</h6>
							<p class="text-left">為了能使用本服務，您同意以下事項：<br /><br />(a) 依本服務註冊表之提示提供您本人正確、最新及完整的資料，<br />(b) 維持並更新您個人資料，確保其為正確、最新及完整。若您提供任何錯誤、不實或不完整的資料，本公司有權暫停或終止您的帳號，並拒絕您使用本服務之全部或一部。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">3. <?=$webSiteName;?>隱私權政策</span>
							</h6>
							<p class="text-left">關於您的會員註冊以及其他特定資料依本公司「隱私權政策」受到保護與規範。您了解當您使用本服務時，您同意本公司依據「隱私權政策」進行您個人資料的蒐集與利用，及本公司及其關係企業內部之利用。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">4. 會員帳號、密碼及安全</span>
							</h6>
							<p class="text-left">完成本服務的加入會員程序之後，您將會有一個密碼及帳號。維持密碼及帳號的機密安全，是您的責任。您並同意以下事項： <br /><br />(a)您的密碼或帳號遭到盜用或有其他任何安全問題發生時，您將立即通知本公司，且 <br />(b)每次連線完畢，均結束您的帳號使用。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">5. 兒童及青少年之保護</span>
							</h6>
							<p class="text-left">為確保兒童及青少年使用網路的安全，並避免隱私權受到侵犯，家長（或監護人）應盡到下列義務：<br /><br />(a)先檢閱各該網站是否有保護個人資料的隱私權政策，再決定是否同意提出相關的個人資料；並應持續叮嚀兒童及青少年不可洩漏自己或家人的任何資料（包括姓名、地址、電話、電子郵件信箱、照片、信用卡號等）給任何人。也不可以單獨接受網友的邀請或贈送禮物而與之見面。 <br />(b)謹慎選擇合適網站供兒童及青少年瀏覽。未滿十二歲之兒童上網時，應全程在旁陪伴，十二歲以上未滿十八歲之青少年上網前亦應斟酌是否給予同意。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">6. 使用者的守法義務及承諾</span>
							</h6>
							<p class="text-left">您承諾絕不為任何非法目的或以任何非法方式使用本服務，並承諾遵守中華民國相關法規及一切使用網際網路之國際慣例。您若係中華民國以外之使用者，並同意遵守所屬國家或地域之法令。您同意並保證不得利用本服務從事侵害他人權益或違法之行為，包括但不限於： <br /><br />
									(A) 製做任何誹謗、侮辱、具威脅性、攻擊性、不雅、猥褻、不實、違反公共秩序或善良風俗或其他不法之文字、圖片或任何形式的檔案於本服務上。 <br />
									(B) 侵害他人名譽、隱私權、營業秘密、商標權、著作權、專利權、其他智慧財產權及其他權利。 <br />
									(C) 違反依法律或契約所應負之保密義務。 <br />
									(D) 冒用他人名義使用本服務。 <br />
									(E) 以任何方法傷害未成年人。 <br />
									(F) 偽造訊息來源或以任何方式干擾傳輸來源之認定。 <br />
									(G) 干擾或中斷本服務或伺服器或連結本服務之網路，或不遵守連結至本服務之相關需求、程序、政策或規則等。 <br />
									(H) 對於恐怖行動提供任何實質支持或資源。<br />
									(I) 追蹤他人或其他干擾他人或為前述目前蒐集或儲存他人之個人資訊。 <br />
									(J) 其他本公司有正當理由認為不適當之行為。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">7. 系統中斷或故障</span>
							</h6>
							<p class="text-left">本服務有時可能會出現中斷或故障等現象，或許將造成您使用上的不便、資料喪失、錯誤、遭人篡改或其他經濟上損失等情形。您於使用本服務時宜自行採取防護措施。本公司對於您因使用（或無法使用）本服務而造成的損害，不負任何賠償責任。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">8. 廣告</span>
							</h6>
							<p class="text-left">您在本服務中瀏覽到的所有廣告內容、文字與圖片之說明、展示樣品或其他銷售資訊，均由各該廣告商、產品與服務的供應商所設計與提出。您對於廣告之正確性與可信度應自行斟酌與判斷。本公司僅接受委託予以刊登，不對前述廣告負擔保責任。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">9. 交易行為</span>
							</h6>
							<p class="text-left">會員同意其訂購行為，以「<?=$webSiteName;?>」網站所示之電子交易資料為準，如有任何糾紛，將以該電子交易資料為認定標準。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">10. 智慧財產權的保護</span>
							</h6>
							<p class="text-left"><?=$webSiteName;?>所使用之軟體或程式、網站上所有內容，包括但不限於著作、圖片、檔案、資訊、資料、網站架構、網站畫面的安排、網頁設計，均由<?=$webSiteName;?>或其他權利人依法擁有其智慧財產權，包括但不限於商標權、專利權、著作權、營業秘密與專有技術等。任何人不得逕自使用、修改、重製、公開播送、改作、散布、發行、公開發表、進行還原工程、解編或反向組譯。尊重智慧財產權是您應盡的義務，如有違反，您應對本公司負所有損害賠償責任。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">11. 您對本公司之授權</span>
							</h6>
							<p class="text-left">會員同意授權本公司，得為提供服務及贈獎之目的，提供必需之會員資料給合作夥伴(第三者)做約定範圍內之妥善使用。對於會員所登錄之個人資料，會員同意本公司得於合理之範圍內蒐集、處理、保存、傳遞及使用該等資料，以提供使用者其他資訊或服務、或作成會員統計資料、或進行關於網路行為之調查或研究，或為任何之合法使用。若您無合法權利得授權他人使用、修改、重製、公開播送、改作、散布、發行、公開發表某資料，並將前述權利轉授權第三人，請勿擅自將該資料上載、傳送、輸入或提供予<?=$webSiteName;?>網站。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">12. 服務變更</span>
							</h6>
							<p class="text-left">本公司保留於任何時點，不經通知隨時修改或暫時或永久停止繼續提供本服務（或其任一部分）的權利。您同意本公司於您或是任何第三方對於任何修改、暫停或停止繼續提供本服務負任何責任。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">13. 拒絕或終止您的使用</span>
							</h6>
							<p class="text-left">您同意本公司得基於其自行之考量，因任何理由，包含但不限於一定期間未使用、法院或政府機關命令、您自行請求、本服務無法繼續或服務內容實質變更、無法預期之技術或安全因素或問題、您所為詐欺或違法行為、未依約支付費用，或其他本公司認為您已經違反本服務條款的明文規定及精神，而終止您的密碼、帳號（或其任何部分）或本服務之使用，並將本服務內任何「會員內容」加以移除並刪除。本公司亦得依其自行之考量，於通知或未通知之情形下，隨時終止本服務或其任何部分。您同意依本服務條款任何規定提供之本服務，無需進行事先通知即得終止，您承認並同意，本公司得立即關閉或刪除您的帳號及您帳號中所有相關資料及檔案，及停止本服務之使用。此外，您同意若本服務之使用被終止，本公司對您或任何第三人均不承擔責任。</p>
							
							<h6 class="text-left step1subtitle">
								<img src="/images/im/flag.gif" width="13" height="13" alt="*" class="step1subtitle-img">
								<span class="step1subtitle-text">14. 一般條款</span>
							</h6>
							<p class="text-left">本服務條款之解釋與適用，以及與本服務條款有關的爭議，除法律另有規定者外，均應依照中華民國法律予以處理，並以台灣嘉義地方法院為第一審管轄法院。本公司未行使或執行本服務條款任何權利或規定，不構成前開權利或規定之棄權。若任何本服務條款規定，經有管轄權之法院認定無效，當事人仍同意法院應努力使當事人於前開規定所表達之真意生效，且本服務條款之其他規定仍應完全有效。</p>
														
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
<!-- InstanceEnd --></html>