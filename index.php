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
  <meta name="msvalidate.01" content="84FCAE77DF11BDC231E77E26C39B856D" />
  <meta name="google-site-verification" content="YlbVPRPLIN3Rd4yH4u1jZ6u8TGGy8dpfMrumU-gwQ4o" />
  <meta name="description" content="Platform digital yang bertujuan untuk membantu petani dan peternak lokal Indonesia"/>
  <meta content='fundnesia,investasi pertanian,peternakan,permodalan pertanian, crowdfunding, penggalan dana pertanian, sumatera utara, platform digital' name='keywords'/>
  <title><?php echo $lang_judul; ?></title>
  <link rel="stylesheet" href="web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="tether/tether.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="animatecss/animate.min.css">
  <link rel="stylesheet" href="socicon/css/styles.css">
  <link rel="stylesheet" href="dropdown/css/style.css">
  <link rel="stylesheet" href="theme/css/style.css">
  <link rel="stylesheet" href="mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="menu cid-qJTkH5eTG2" once="menu" id="menu2-k">

    

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
                    <a class="nav-link link text-black display-4" href="index.html#carakerja"><?php echo $lang_menu_howtoworks; ?></a>
                </li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#keuntungan"><?php echo $lang_menu_price; ?></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="index.php#mitra"><?php echo $lang_mitra; ?></a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php">FAQ</a></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php#accordion1-23"></a></li><li class="nav-item dropdown"><a class="nav-link link text-black dropdown-toggle display-4" href="faq.php#accordion1-23" data-toggle="dropdown-submenu" aria-expanded="false"><span class="mbrib-globe-2 mbr-iconfont mbr-iconfont-btn" style="color: rgb(7, 59, 76);"></span></a><div class="dropdown-menu"><a class="text-black dropdown-item display-4" href="?lang=indonesia">ID</a><a class="text-black dropdown-item display-4" href="?lang=english" aria-expanded="true">EN</a></div></li><li class="nav-item"><a class="nav-link link text-black display-4" href="faq.php#accordion1-23"></a></li></ul>
            
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.ws/m">drag and drop site maker</a></section><section class="header9 cid-qK7kzLeS2Z mbr-fullscreen mbr-parallax-background" id="header9-1y">

    

    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(0, 0, 0);">
    </div>

    <div class="container">
        <div class="media-container-column mbr-white col-md-8">
            
            <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-1"><strong><span style="font-style: normal;"><br></span></strong><strong><span style="font-style: normal;font-size:52px"><?php echo $lang_potensi; ?></span>&nbsp;<span style="font-style: normal; font-size:52px"><?php echo $lang_dan; ?></span><span style="font-style: normal; font-size:52px">&nbsp;<?php echo $lang_kolab; ?></span></strong></h3>
            <p class="mbr-text align-left pb-3 mbr-fonts-style display-5"><?php echo $lang_tag; ?></p>
            
        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="mbr-section article content10 cid-qJTmK0hXYr" id="tentang">
    
     

    <div class="container">
        <div class="inner-container" style="width: 66%;">
            <hr class="line" style="width: 25%;">
            <div class="section-text align-center mbr-white mbr-fonts-style display-7"><?php echo $lang_deskripsi; ?>
                </div>
            <hr class="line" style="width: 25%;">
        </div>
    </div>
</section>

<section class="mbr-section content4 cid-qJTq1P9aew" id="carakerja">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-5"><?php echo $lang_cara_kerja; ?></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
                
            </div>
        </div>
    </div>
</section>

<section class="features1 cid-qJTqAMuCfn" id="features1-y">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbrib-touch-swipe"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong><?php echo $lang_jenis_investasi; ?></strong></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $lang_des_investasi; ?>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbrib-edit"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong><?php echo $lang_pantau_perkembangan; ?></strong></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $lang_des_perkembangan; ?>
                    </p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbrib-cart-full"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong><?php echo $lang_hasil_panen; ?></strong></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                        <?php echo $lang_des_hasil_panen; ?></p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbrib-like"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-7"><strong><?php echo $lang_hasil; ?></strong></h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       <?php echo $lang_des_hasil; ?>
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="timeline2 cid-qJTwvklUGp mbr-parallax-background" id="keuntungan">

    

    

    <div class="container align-center">
        <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"><?php echo $lang_benefits; ?></h2>
        <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5"></h3>

        <div class="container timelines-container" mbri-timelines="">
            <div class="row timeline-element reverse separline">      
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-cash" style="color: rgb(255, 255, 255);"></span>
                </span>          
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">
                            <?php echo $lang_jud_investasi; ?></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7"><?php echo $lang_des_ben_investasi; ?></p>
                     </div>
                </div>
            </div>

            <div class="row timeline-element  separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbrib-user" style="color: rgb(255, 255, 255);"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><?php echo $lang_jud_petani; ?></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7"><?php echo $lang_des_ben_petani; ?></p>
                    </div>
                </div>
            </div> 

            <div class="row timeline-element reverse separline">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-protect" style="color: rgb(255, 255, 255);"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><?php echo $lang_jud_pangan; ?></h4>      
                        <p class="mbr-timeline-text mbr-fonts-style display-7"><?php echo $lang_des_ben_pangan; ?></p>
                    </div>
                </div>
            </div>

            <div class="row timeline-element ">
                <span class="iconsBackground">
                    <span class="mbr-iconfont mbri-like" style="color: rgb(255, 255, 255);"></span>
                </span>
                <div class="col-xs-12 col-md-6 align-left ">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5"><?php echo $lang_jud_terpercaya; ?></h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7"><?php echo $lang_des_ben_terpercaya; ?></p>
                    </div>
                </div>
            </div>

            

            

            

            

            

            

            

            
        </div>
    </div>
</section>

<section class="clients cid-qJY1Td3fQ9" id="mitra">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5"><?php echo $lang_partners_company; ?></h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="4">
                
                
                
                
           </div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="clients cid-qJTESWYYvX" id="clients-1f">
      

    
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2"></h2>
                    <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5"><?php echo $lang_partners_media; ?></h3>
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="4">
                
                
                
                
                
       </div>
            <div class="carousel-controls">
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="footer4 cid-qKhUoKKDD0" id="footer4-2b">

    

    

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
               
                <p class="mb-3 mbr-fonts-style foot-title display-7"><strong><?php echo $lang_jud_bantuan; ?></strong>:</p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7"><a href="index.php#carakerja" class="text-white"><?php echo $lang_footer_cara; ?></a>&nbsp;<br><a href="index.php#keuntungan" class="text-white"><?php echo $lang_footer_benefits; ?></a><br><a href="index.php#mitra" class="text-white"><?php echo $lang_footer_partners; ?></a>&nbsp;<br><a href="faq.php" class="text-white"><?php echo $lang_footer_FAQ; ?></a></p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7"><strong><?php echo $lang_jud_kontak; ?></strong>:</p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">Perumahan Sukamaju Indah 
<br>Deli Serdang, Sumatera Utara 
<br>Indonesia, 20532 
<br><?php echo $lang_des_kontak; ?>
<br>Email: info@fundnesia.com<br></p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7"></p>
                <p class="mbr-text mbr-fonts-style form-text display-7"><br><?php echo $lang_jud_email; ?><br></p>
                <div class="media-container-column" data-form-type="formoid">
                    <div data-form-alert="" hidden="" class="align-center"><?php echo $lang_thanks_email; ?></div>

                    <form class="form-inline" action="https://mobirise.com/" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" value="W4d85iSqf7EydsvtCMRi87rKK0Pf5ZIATk+gMVzYrs06400aBUWhmDpciJvobMVLeUSCRHBSh2FuyWSVrMwjOOvj/rL1GjfsLqia8nwEoDvsLgfg/v1+EFXW1rctFtQK" data-form-email="true">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-2b">
                        </div>
                        <div class="input-group-btn m-2"><button href="" class="btn btn-primary display-4" type="submit" role="button"><?php echo $lang_langganan; ?></button></div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-4"><br><?php echo $lang_connect_sosmed; ?></p>
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
                            <a href="https://www.linkedin.com/company/fundnesia/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-linkedin socicon"></span>
                            </a>
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
                        ©&nbsp;Copyright 2018 PT Fundnesia Nusantara</p>
                </div>
				
            </div>
        </div>
    </div>
</section>


  <script src="web/assets/jquery/jquery.min.js"></script>
  <script src="popper/popper.min.js"></script>
  <script src="tether/tether.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="parallax/jarallax.min.js"></script>
  <script src="dropdown/js/script.min.js"></script>
  <script src="touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="mbr-clients-slider/mbr-clients-slider.js"></script>
  <script src="smoothscroll/smooth-scroll.js"></script>
  <script src="viewportchecker/jquery.viewportchecker.js"></script>
  <script src="theme/js/script.js"></script>
  <script src="formoid/formoid.min.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
