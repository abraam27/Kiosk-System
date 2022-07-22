<?php
    require_once '../Model/user.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>register 1</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/register-1.css" media="screen">
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
    <meta property="og:title" content="register 1">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-5a0a"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-expanded-width-sm u-expanded-width-xs u-image u-image-default u-image-1" src="images/cjnkxnckc.png" alt="" data-image-width="1920" data-image-height="505" data-href="Home.html" data-page-id="2140117">
      </div></header> 
    <section class="u-clearfix u-palette-4-base u-section-1" id="sec-e93d">
        <?php
            if(isset($_POST['signup'])){
                $SSN = $_POST['SSN'];
                $name = $_POST['name'];
                $dateOfBirth = $_POST['dateOfBirth'];
                $gender = $_POST['gender'];
                $city = $_POST['city'];
                $phoneNo = $_POST['phoneNo'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $question = $_POST['question'];
                $answer = $_POST['answer'];
                $user = new User($SSN, $name, $dateOfBirth, $gender, $city, $phoneNo, $username, $password, $question, $answer);
                //print_r($donor);
                $userID = $user->add();
                if(is_numeric($userID)){
                    $_SESSION["userID"] = $userID;
                    header("location: Profile.php");
                    exit();
                }else{
                    echo '<div>
                        <p style="font-size:35px; text-align:center">User Name or Password is wrong!</p>
                    </div>';
                }

            }
        ?>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-expanded-width-sm u-form u-form-1">
            <form action="Registration.php" method="POST" class="u-clearfix u-form-spacing-14 u-inner-form" source="email" name="form" style="padding: 0px;">
     
            <div class="u-form-group u-form-name u-label-left" style="margin-bottom: 15px">
              <label for="name-ac1b" class="u-label u-spacing-12 u-label-1">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-ac1b" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
            </div>
            <div class="u-form-group u-label-left u-form-group-5" style="margin-bottom: 15px">
              <label for="text-f217" class="u-label u-spacing-12 u-label-5">SSN</label>
              <input type="text" id="text-f217" name="SSN" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-5" placeholder="national number ">
            </div>
            <div class="u-form-group u-form-name u-label-left" style="margin-bottom: 15px">
              <label for="name-ac1b" class="u-label u-spacing-12 u-label-1">User Name</label>
              <input type="text" placeholder="Enter your User Name" id="name-ac1b" name="username" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group u-label-left" style="margin-bottom: 15px">
              <label for="password-ac1b" class="u-label u-spacing-12 u-label-2">Password</label>
              <input type="password" placeholder="Enter Your Password" id="email-ac1b" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
            </div>
            <div class="u-form-date u-form-group u-label-left u-form-group-3" style="margin-bottom: 15px">
              <label for="date-4445" class="u-label u-spacing-12 u-label-3">Date of Birth</label>
              <input type="date" placeholder="MM/DD/YYYY" id="date-4445" name="dateOfBirth" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-3" required="">
            </div>
            <div class="u-form-group u-form-select u-label-left u-form-group-4" style="margin-bottom: 15px">
              <label for="select-8e37" class="u-label u-spacing-12 u-label-4">Gender</label>
              <div class="u-form-select-wrapper">
                <select id="select-8e37" name="gender" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-4">
                  <option value="male">male</option>
                  <option value="female">female</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-label-left u-form-group-6" style="margin-bottom: 15px">
              <label for="text-5d44" class="u-label u-spacing-12 u-label-6">city</label>
              <input type="text" id="text-5d44" name="city" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-6" placeholder="city">
            </div>
            <div class="u-form-group u-label-left u-form-group-7" style="margin-bottom: 15px">
              <label for="text-dbb9" class="u-label u-spacing-12 u-label-7">phone number </label>
              <input type="text" placeholder="phone number" id="text-dbb9" name="phoneNo" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-7">
            </div>
            <div class="u-form-group u-form-select u-label-left u-form-group-8" style="margin-bottom: 15px">
              <label for="select-eb20" class="u-label u-spacing-12 u-label-8">question used to rest password </label>
              <div class="u-form-select-wrapper">
                <select id="select-eb20" name="question" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-8">
                  <option value="what is your first school name?">what is your first school name?</option>
                  <option value="what is your sister/brother  name?">what is your sister/brother  name?</option>
                  <option value="what is your father name?">what is your father name?</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
              </div>
            </div>
            <div class="u-form-group u-label-left u-form-group-9" style="margin-bottom: 15px">
              <label for="text-2433" class="u-label u-spacing-12 u-label-9">Answer</label>
              <input type="text" placeholder="Answer " id="text-2433" name="answer" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white u-input-9">
            </div>
            <div class="u-form-group u-form-submit u-label-left">
              <div class="u-align-center u-btn-submit-container">
                  <button type="submit" value="signup" name="signup" class="u-align-center u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">Sign up</button>
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
      <a class="u-link" href="https://nicepage.com/html5-template" target="_blank">
        <span>Free HTML5 Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
        <span>HTML Website Builder</span>
      </a>. 
    </section>
  </body>
</html>