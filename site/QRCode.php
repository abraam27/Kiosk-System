<?php
    // header
    if(is_numeric($_SESSION['userID']))
    {
        // show profile and logout buttoms
        $user = User::readById($_SESSION['userID']);
    }else{
        // show sign up and login page
    }

    if(isset($_POST['submit'])){
        $EGP5 = $_POST['EGP5'];
        $EGP7 = $_POST['EGP7'];
        $EGP10 = $_POST['EGP10'];
        $qrCode = Transaction::generateQRCode();
        $date = date("d-m-20y");
        $time = date("h:i:s A");
        $transaction = new Transaction($qrCode, $date, $time, $_SESSION['userID']);
        $transactionID = $transaction->add();
        if($transactionID){
            for($i = 0; $i < $EGP5; $i++){
                $ticketCode = Ticket::generateTicketCode();
                $ticket = new Ticket($ticketCode, 5, 0, 0, $transactionID);
                if(!is_numeric($ticket->add())){
                    // transaction failed
                    Transaction::delete($transactionID);
                    break;
                }
            }
            if($transactionID){
                for($i = 0; $i < $EGP7; $i++){
                    $ticketCode = Ticket::generateTicketCode();
                    $ticket = new Ticket($ticketCode, 7, 0, 0, $transactionID);
                    if(!is_numeric($ticket->add())){
                        // transaction failed
                        Transaction::delete($transactionID);
                        break;
                    }
                }
                if($transactionID){
                    for($i = 0; $i < $EGP10; $i++){
                        $ticketCode = Ticket::generateTicketCode();
                        $ticket = new Ticket($ticketCode, 10, 0, 0, $transactionID);
                        if(!is_numeric($ticket->add())){
                            // transaction failed
                            Transaction::delete($transactionID);
                            break;
                        }
                    }
                }else{
                    // transaction failed
                }
            }else{
                // transaction failed
            }
            // show qrCode
        }else{
            // transaction failed
        }
    }
    