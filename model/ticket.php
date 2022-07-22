<?php
require_once '../config.php';
require_once '../lib/DatabaseModel.php';
class Ticket extends DatabaseModel
{
    // property
    protected $ticketID;
    protected $ticketCode;
    protected $price;
    protected $printed;
    protected $used;
    protected $transactionID;
    // table name
    protected static $tableName = "ticket";
    // all fields in tabel
    protected $tableFields = array(
        'ticketCode',
        'price',
        'printed',
        'used',
        'transactionID'
    );
    public function __construct($ticketCode, $price, $printed, $used, $transactionID, $ticketID="")
    {
        $this->ticketCode = $ticketCode;
        $this->price = $price;
        $this->printed = $printed;
        $this->used = $used;
        $this->transactionID = $transactionID;
        $this->ticketID = $ticketID;
    }
    public static function retreiveTicketsByTransactionID($transactionID)
    {
        // get connection
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM `ticket` WHERE transactionID = '$transactionID'");
        // execute sql query
        $sql->execute();
        // fetch data to specfic format like associative array
        $tickets = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $tickets;
    }
    public static function retreiveticketByticketCode($ticketCode)
    {
        // get connection
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM ticket WHERE ticketCode='$ticketCode'");
        $sql->execute();
        $ticket = $sql->fetch(PDO::FETCH_ASSOC);
        return $ticket;
    }
    public static function updatePrintedTicket($ticketID,$printed)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE ticket SET printed = 1 WHERE ticketID='$ticketID'");
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function updateUsedTicket($ticketID,$used)
    {
        global $dbh;
        $sql = $dbh->prepare("UPDATE ticket SET used = 1 WHERE ticketID='$ticketID'");
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function generateTicketCode() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}