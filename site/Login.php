<?php
    // before page load
    // Setting output buffer
    ob_start();
    if(!session_start()){
        session_start();
    }
    // Error Handling
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
    require_once '../model/user.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>login</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/login.css" media="screen">
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
    <meta property="og:title" content="login">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-5a0a"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" src="images/cjnkxnckc.png" alt="" data-image-width="1920" data-image-height="505" data-href="Home.php" data-page-id="2140117">
      </div></header> 
      <?php
        // befor form 
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userID = User::userLogin($username, $password);
            if(is_numeric($userID)){
                $_SESSION["userID"] = $userID;
                // header used  to redirect to another page 
                header("location: Home.php");
                exit();
            }else{
                header("location: Login.php?message=error");
                exit();
            }
        }
      ?>
    <section class="u-clearfix u-palette-4-base u-section-1">
        <?php
            if(isset($_GET['message'])){
                echo '<div>
                        <p style="font-size:35px; text-align:center">User Name or Password is wrong!</p>
                    </div>';
            }
        ?>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
            <form action="Login.php" method="POST" class="u-clearfix u-form-spacing-10  u-inner-form" style="padding: 10px;">
            <div class="u-form-group u-label-left" style="margin-bottom: 15px;">
              <label for="name-ac1b" class="u-label u-spacing-0 u-label-1">User Name</label>
              <input type="text" placeholder="Enter your User Name" id="name-ac1b" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
            </div>
            <div class="u-form-group u-label-left">
              <label for="email-ac1b" class="u-label u-spacing-0 u-label-2">Password</label>
              <input type="password" placeholder="Enter Your Password" id="password-ac1b" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <div class="u-align-center u-btn-submit-container">
                  <button type="submit" value="login" name="login" class="u-align-center u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">login</button>
              </div>
            </div>
          </form>
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