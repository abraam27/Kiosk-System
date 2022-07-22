<?php
    require_once'../model/ticket.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>test result</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/test-result.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="test result">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"> 
    <section class="u-clearfix u-image u-section-1" id="carousel_adc7" data-image-width="1980" data-image-height="1200">
      <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-image u-layout-cell u-size-35 u-image-1" data-image-width="1022" data-image-height="904">
              <div class="u-container-layout u-container-layout-1">
                  <?php
                    if(isset($_POST['submit'])){
                    $ticketCode = $_POST['ticketCode'];
                    $ticket = Ticket::retreiveticketByticketCode($ticketCode);
                    if(is_numeric($ticket['ticketID'])){
                        if($ticket['printed']){
                            if($ticket['used']){
                                echo'<p class="u-align-center u-text u-text-custom-color-3 u-text-2">
                                    <span class="u-text-custom-color-4">Used Before</span>
                                    <br>
                                  </p>';
                                header('Refresh: 10; home1.html');
                            }else{
                                $flag = Ticket::updateUsedTicket($ticket['ticketID'], 1);
                                if($flag){
                                    echo'<p class="u-align-center u-text u-text-custom-color-3 u-text-2">
                                        <span class="u-text-custom-color-4">Completed</span>
                                        <br>
                                      </p>';
                                    header('Refresh: 10; home1.html');
                                }else{
                                    echo'<p class="u-align-center u-text u-text-custom-color-3 u-text-2">
                                        <span class="u-text-custom-color-4">Failed</span>
                                        <br>
                                      </p>';
                                    header('Refresh: 10; home1.html');
                                }
                            }
                        }else{
                            echo'<p class="u-align-center u-text u-text-custom-color-3 u-text-2">
                                <span class="u-text-custom-color-4"> Not Printed</span>
                                <br>
                              </p>';
                            header('Refresh: 10; home1.html');
                        }
                    }else{
                        echo'<p class="u-align-center u-text u-text-custom-color-3 u-text-2">
                            <span class="u-text-custom-color-4"> No Ticket with Code '.$ticketCode.'</span>
                            <br>
                          </p>';
                        header('Refresh: 10; home1.html');
                    }
                }
                  ?>
              </div>
            </div>
            <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-25 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/landing-page" target="_blank">
        <span>Landing Page</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.review" target="_blank">
        <span>Free Website Builder</span>
      </a>. 
    </section>
  </body>
</html>