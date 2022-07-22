<?php
    /* include QRBarCode class */
    include "QRBarCode.php"; 
    $qr = new QRBarCode(); 
    /* create text QR code  */
    $qr->text('ItSolutionstuff.com'); 
    /* display QR code image */
    $qr->qrCode();
    /* qrCode(size, path) */
    $qr->qrCode(400, '../images/1.png');