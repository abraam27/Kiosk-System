<?php
    require_once'../model/user.php';
    $userID = "";
    if(isset($_SESSION['userID'])){
        $userID = $_SESSION['userID'];
    }
    
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Home</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.12.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-5a0a"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" src="images/cjnkxnckc.png" alt="" data-image-width="1920" data-image-height="505" data-href="Home.php" data-page-id="2140117">
      </div></header>
    <section class="u-clearfix u-palette-4-base u-section-1" id="carousel_757c">
      <div class="u-clearfix u-sheet u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-shape u-shape-svg u-text-white u-shape-1">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xlink:href="#svg-fa8f"></use></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-fa8f" style="enable-background:new 0 0 160 160;"><path d="M151.7,132.5c-3.4,6-7.9,11.7-13.3,16.5c-29.2,26.1-54.1-2.3-88.2-3S0,109.5,0,91.6s14.8-31.3,25.3-45.3S33.4,11,51.8,3
	c15.3-6.6,33.6-0.4,51.6,0.7c11.2,0.7,28.8-3.8,38.2,0.4s11.8,15.4,9.2,22.8c-1.9,5.4-5.5,11.6-12.8,16.5
	c-9.3,10.1-4.7,22.9,3.7,33.4c7.8,9.7,17.7,11.7,18.3,23.5C160.4,110.8,157.6,122.2,151.7,132.5L151.7,132.5z"></path></svg>
                  </div>
                  <div class="u-rotation-parent u-rotation-parent-1"><span class="u-dnd-started u-file-icon u-icon u-res-move-started u-rotate-270 u-icon-1"><img src="images/2067153.png" alt=""></span>
                  </div>
                  <div class="u-shape u-shape-svg u-text-palette-4-light-2 u-shape-2">
                    <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 50" style=""><use xlink:href="#svg-1c6d"></use></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 160 50" x="0px" y="0px" id="svg-1c6d" style="enable-background:new 0 0 160 50;"><path d="M133,26.7c-13.9,9.7-25.8,9.7-39.8,0c-9.1-6.3-16.8-6.3-25.9,0c-13.8,9.6-25.1,9.6-38.9,0c-9.2-6.4-15.4-6.4-24.6,0L0,22
	c11.2-7.8,20.6-8.1,32.2,0c11,7.6,19,8.5,31.3,0c11.6-8.1,22.4-7.7,33.5,0c11.4,8,20.3,8.3,32.2,0c11.6-8.1,19.2-8.1,30.8,0
	l-3.8,4.7C146.9,20.2,142.3,20.2,133,26.7z M133,10.8c-13.9,9.7-25.8,9.7-39.8,0c-9.1-6.3-16.8-6.3-25.9,0
	c-13.8,9.6-25.1,9.6-38.9,0c-9.2-6.4-15.4-6.4-24.6,0L0,6.1c11.2-7.8,20.6-8.1,32.2,0c11,7.6,19,8.5,31.3,0C75.1-2,85.9-1.6,97,6.1
	c11.4,8,20.3,8.3,32.2,0C140.8-2,148.4-2,160,6.1l-3.8,4.7C146.9,4.3,142.3,4.3,133,10.8z M32.2,38c11,7.6,19,8.5,31.3,0
	c11.6-8.1,22.4-7.7,33.5,0c11.4,8,20.3,8.3,32.2,0c11.6-8.1,19.2-8.1,30.8,0l-3.8,4.7c-9.3-6.5-13.9-6.5-23.3,0
	c-13.9,9.7-25.8,9.7-39.8,0c-9.1-6.3-16.8-6.3-25.9,0c-13.8,9.6-25.1,9.6-38.9,0c-9.2-6.4-15.4-6.4-24.6,0L0,38
	C11.2,30.2,20.6,29.9,32.2,38z"></path></svg>
                  </div>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h6 class="u-align-center u-text u-text-default u-text-palette-3-light-2 u-text-1">online metro kiosk</h6>
                  <p class="u-align-center u-custom-font u-heading-font u-text u-text-2">Done by Beman Barakat And Karim Mohamed<br>under supervision of&nbsp;&nbsp;<br>Prof/Mostfa Zaki
                  </p>
                    <?php
                        // header
                        if(is_numeric($userID)){
                            $user = User::readById($userID);
                            // show profile and logout buttoms
                            echo '<a href="Logout.php" data-page-id="2140657" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-btn-1">log out</a>
                                <a href="Profile.php?" data-page-id="2140233" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-btn-2">'.$user['username'].'</a>
                                <a href="products.php" data-page-id="2140938" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-btn-3">products</a>';
                        }else{
                            // show sign up and login page
                            echo '<a href="Registration.php" data-page-id="2140657" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-btn-1">signup</a>
                                <a href="Login.php" data-page-id="2140233" class="u-btn u-btn-round u-button-style u-gradient u-none u-radius-4 u-btn-2">login</a>';
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-285c"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  </body>
</html>