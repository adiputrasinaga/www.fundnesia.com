<?php include "indonesia.php"; ?>
<?php include "english.php"; ?>
<?php
// memulai sesi
session_start();
// bahasa default website
$default_lang = 'indonesia';

// jika user merubah bahasa
if($_GET['lang']) {
  // ubah bahasa sesuai keinginan user
  $_SESSION['lang'] = $_GET['lang'];
  // kembalikan ke halaman index.php
  
}

// jika tidak ada bahasa terdeteksi
if(!$_SESSION['lang']) {
  // atur bahasa ke bahasa default
  $_SESSION['lang'] = $default_lang;
}

// masukan file bahasa yang sedang aktif
include $_SESSION['lang'] . '.php';
?>


<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.6.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.6.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="images/logo-single.png" type="image/x-icon">
  <meta name="description" content="Site Builder Description">
  <title><?php echo $lang_judul; ?></title>
  <link rel="stylesheet" href="web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="tether/tether.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="dropdown/css/style.css">
  <link rel="stylesheet" href="socicon/css/styles.css">
  <link rel="stylesheet" href="animatecss/animate.min.css">
  <link rel="stylesheet" href="theme/css/style.css">
  <link rel="stylesheet" href="mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qKhJ1pZKwS" once="menu" id="menu2-22">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://fundnesia.com">
                        <img src="images/fundnesia-logo-5-960x560.png" alt="Fundnesia" title="" style="height: 4.1rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php#tentang"><?php echo $lang_menu_about; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-black display-4" href="index.php#carakerja"><?php echo $lang_menu_howtoworks; ?></a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#keuntungan"><?php echo $lang_menu_price; ?></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#mitra"><?php echo $lang_mitra; ?></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php">FAQ</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php#accordion1-23"></a></li><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="faq.php#accordion1-23" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbrib-globe-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(7, 59, 76);"></span></a><div class="dropdown-menu"><a class="text-black dropdown-item display-4" href="?lang=indonesia">ID</a><a class="text-black dropdown-item display-4" href="?lang=english" aria-expanded="true">EN</a></div></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php#accordion1-23"></a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/i">build your own website</a></section><section class="accordion1 cid-qKhJ1r2dNQ" id="accordion1-23">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-8">
                <div class="section-head text-center space30">
                    <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2"><?php echo $lang_butuh_bantuan; ?></h2>
                </div>
                <div class="clearfix"></div>
                <div id="bootstrap-accordion_11" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_11" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_1; ?>
</h4>
                            </a>
                        </div>
                        <div id="collapse1_11" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_1; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_11" aria-expanded="false" aria-controls="collapse2">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_2; ?></h4>
                            </a>
                            
                        </div>
                        <div id="collapse2_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_2; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_11" aria-expanded="false" aria-controls="collapse3">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_3; ?>
</h4>
                            </a>
                        </div>
                        <div id="collapse3_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_3; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_11" aria-expanded="false" aria-controls="collapse4">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_4; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse4_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_4; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse5_11" aria-expanded="false" aria-controls="collapse5">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_5; ?>
</h4>
                            </a>
                        </div>
                        <div id="collapse5_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_5_1; ?><br>
																				<?php echo $lang_ans_faq_5_2; ?><br>
																				<?php echo $lang_ans_faq_5_3; ?></br>
																				<?php echo $lang_ans_faq_5_4; ?><br>
																				</p>
                            </div>
                        </div>
                    </div>
                    
					   <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse6_11" aria-expanded="false" aria-controls="collapse6">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_6; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse6_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_6; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingSeven">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse7_11" aria-expanded="false" aria-controls="collapse7">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_7; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse7_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSeven" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_7; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingEight">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse8_11" aria-expanded="false" aria-controls="collapse8">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_8; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse8_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingEight" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_8; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingNine">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse9_11" aria-expanded="false" aria-controls="collapse9">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_9; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse9_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingNine" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_9; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingTeen">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse10_11" aria-expanded="false" aria-controls="collapse10">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_10; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse10_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTeen" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_10; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingEleven">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse11_11" aria-expanded="false" aria-controls="collapse11">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_11; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse11_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingEleven" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_11; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingTwelve">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse12_11" aria-expanded="false" aria-controls="collapse12">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_12; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse12_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwelve" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_12; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingThreeTeen">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse13_11" aria-expanded="false" aria-controls="collapse13">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_13; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse13_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThreeTeen" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_13; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingFourTeen">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse14_11" aria-expanded="false" aria-controls="collapse14">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_14; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse14_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFourTeen" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_14; ?></p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingFiveteen">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse15_11" aria-expanded="false" aria-controls="collapse15">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_15; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse15_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFiveteen" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_15; ?> <i><b><?php echo $lang_ans_faq_15_1; ?> </b></i>.</p>
                            </div>
                        </div>
                    </div>
					   <div class="card">
                        <div class="card-header" role="tab" id="headingSixTeen">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse16_11" aria-expanded="false" aria-controls="collapse16">
                                <h4 class="mbr-fonts-style display-7">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;<?php echo $lang_ques_faq_16; ?>
</h4>
                            </a> 
                        </div>
                        <div id="collapse16_11" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSixTeen" data-parent="#bootstrap-accordion_11">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7"><?php echo $lang_ans_faq_16; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-qKhJ1tLPbM" id="footer4-25">

    

    

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
              
                <p class="mb-3 mbr-fonts-style foot-title display-7"><strong><?php echo $lang_jud_bantuan; ?> </strong>:</p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7"><a href="index.php#carakerja" class="text-warning"><?php echo $lang_menu_howtoworks; ?> </a>&nbsp;<br><a href="index.php#keuntungan" class="text-warning"><?php echo $lang_menu_price; ?></a>&nbsp;<br><a href="index.php#mitra" class="text-warning"><?php echo $lang_mitra; ?></a>&nbsp;<br><a href="#top" class="text-warning">FAQ</a></p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7"><strong><?php echo $lang_jud_kontak; ?></strong>:</p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">Perumahan Sukamaju Indah <br>Deli Serdang, Sumatera Utara&nbsp;<br>Indonesia, 20532&nbsp;<br><?php echo $lang_des_kontak; ?>
<br>Email: info@fundnesia.com<br></p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7"></p>
                <p class="mbr-text mbr-fonts-style form-text display-7"><br><?php echo $lang_jud_email; ?></p>
                <div class="media-container-column" data-form-type="formoid">
                    <div data-form-alert="" hidden="" class="align-center"><?php echo $lang_thanks_email; ?></div>

                    <form class="form-inline" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" value="iKd6YXf9qMR4BwLcYWVdi6YTgPrteVQ7nK144SBTMRs2iMxnBM3G3MUJ1korLT6BYVnCtyJDWCTpn1Lfv4R+jricU1y+uFuHNwNO/taJT9D+xczYR6Zv5K+ehSpIvyBh" data-form-email="true">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-25">
                        </div>
                        <div class="input-group-btn m-2"><button href="" class="btn btn-primary display-4" type="submit" role="button"><?php echo $lang_langganan; ?></button></div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-4"><br><br><?php echo $lang_connect_sosmed; ?></p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://www.facebook.com/fundnesia/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/fundnesia" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            
                                <a href="https://www.linkedin.com/company/fundnesia/" target="_blank"><span class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span></a>
                            
                        </div>
                        <div class="soc-item">
                            <a href="https://twitter.com/fundnesia" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                            </a>
                        </div>
                        
                        
                </div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-12 copyright">
                    <p class="mbr-text mbr-fonts-style display-4">
                        © Copyright 2018 PT Fundnesia Nusantara</p>
					
                </div>
				
            </div>
        </div>
    </div>
</section>


  <script src="web/assets/jquery/jquery.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="tether/tether.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="smoothscroll/smooth-scroll.js"></script>
  <script src="dropdown/js/script.min.js"></script>
  <script src="viewportchecker/jquery.viewportchecker.js"></script>
  <script src="mbr-switch-arrow/mbr-switch-arrow.js"></script>
  <script src="touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="theme/js/script.js"></script>
  <script src="formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
