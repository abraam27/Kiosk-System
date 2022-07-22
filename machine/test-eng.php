<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>test eng</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/test-eng.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="test eng">
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
                <p class="u-text u-text-default u-text-1">
                  <span style="font-size: 1.875rem;">Scan To Test Code</span>
                </p>
              </div>
            </div>
            <?php
                if(isset($_POST['submit'])){
                    $ticketCode = $_POST['ticketCode'];
                    $ticket = Ticket::retreiveticketByticketCode($ticketCode);
                    if(is_numeric($ticket['ticketID'])){
                        if($ticket['used']){
                            // this ticket is used 
                            echo 'Abraam';
                        }else{
                            //thank you for using the ticket
                            Ticket::updateUsedTicket($ticket['ticketID'], 1);
                        }
                    }else{
                        // there is no ticket with this code
                    }
                }
            ?>
            <div class="u-align-left u-container-style u-layout-cell u-shape-rectangle u-size-25 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <div class="u-form u-form-1">
                  <form action="#" method="POST" style="padding: 50px;">
                    <div class="u-form-group u-form-name u-label-top">
                      <label for="name-cee8" class="u-form-control-hidden u-label u-label-1"></label>
                      <input type="text" placeholder="code" id="name-cee8" name="ticketCode" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" autofocus="autofocus">
                    </div>
                    <div class="u-align-center u-form-group u-form-submit" style="padding: 30px;">
                        <button type="submit" value="submit" name="submit" class="u-btn u-btn-submit u-button-style">Submit</button> 
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>