<?php
    // header
    require_once'../model/user.php';
    require_once'../model/transaction.php';
    require_once'../model/ticket.php';
    $transactionID = 0
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>ticket table</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/ticket-table.css" media="screen">
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
    <meta property="og:title" content="ticket table">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"> 
    <section class="u-align-left-xs u-clearfix u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-section-1" id="carousel_adc7">
      <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-image u-layout-cell u-size-60 u-image-1" data-image-width="1022" data-image-height="904">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-align-center u-custom-font u-font-lobster u-text u-text-default u-text-1">Your qr ticket</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xl u-layout-wrap u-layout-wrap-2">
        <div class="u-layout">
          <div class="u-layout-col">
        <?php
        if(isset($_GET['printed'])){
            $transactionID = $_GET['TID'];
            $tickets = Ticket::retreiveTicketsByTransactionID($transactionID);
            if(is_array($tickets) && count($tickets)>0){
                foreach ($tickets as $ticket){
                    Ticket::updatePrintedTicket($ticket['ticketID'], 1);
                }
            }
            header("location: home1.html");
            exit();
        }
        if(isset($_POST['submit'])){
            $qrCode = $_POST['transactionCode'];
            $transaction = Transaction::retreiveTransactionByqrCode($qrCode);
            $transactionID = $transaction['transactionID'];
            if(is_numeric($transaction['transactionID'])){
                $tickets = Ticket::retreiveTicketsByTransactionID($transaction['transactionID']);
                if(is_array($tickets) && count($tickets)>0){
                foreach ($tickets as $ticket){
                    if($ticket['printed']){
                        echo' <p class="u-text u-text-default u-text-2">No Ticket</p>';
                    }else{
                        echo '<div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                                <div class="u-container-layout u-container-layout-3">
                                  <img class="u-align-center u-image u-image-default u-preserve-proportions u-image-3" src="../QRimages/'.$ticket['ticketCode'].'png.png" alt="" data-image-width="820" data-image-height="860">
                                  <p class="u-align-center u-text u-text-default u-text-3">'.$ticket['price'].' EGP ticket&nbsp;</p>
                                </div>
                              </div>';
                    }
                }
                }else{
                    echo' <p class="u-text u-text-default u-text-2">No Tickets</p>';
                }
            }else{
                echo' <p class="u-text u-text-default u-text-2">No Tickets</p>';
            }
        }
      ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-align-center u-clearfix u-custom-html u-custom-html-1">
        <?php
              echo '<button onclick="window.print(); window.location.href=\'TicketTable.php?printed=1&TID='.$transactionID.'\'"> Print </button>';
        ?>
          
      </div>
    </section>
    
    
    
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/css-templates" target="_blank">
        <span>CSS Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="https://nicepage.me" target="_blank">
        <span>Free Website Builder</span>
      </a>. 
    </section>
  </body>
</html>