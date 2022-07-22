<?php
require_once '../config.php';
require_once '../lib/DatabaseModel.php';

class Transaction extends DatabaseModel
{
    // property
    protected $transactionID;
    protected $qrCode;
    protected $date;
    protected $time;
    protected $userID;
    // table name
    protected static $tableName = "transaction";
    // all fields in tabel
    protected $tableFields = array(
        'qrCode',
        'date',
        'time',
        'userID'
    );
    public function __construct($qrCode, $date, $time, $userID="", $transactionID="")
    {
        $this->qrCode = $qrCode;
        $this->date = $date;
        $this->time = $time;
        $this->userID = $userID;
        $this->transactionID = $transactionID;
    }
    public static function retreiveTransactionByqrCode($qrCode)
    {
        // get connection
        global $dbh;
        $sql = $dbh->prepare("SELECT * FROM transaction WHERE qrCode='$qrCode'");
        $sql->execute();
        $transaction = $sql->fetch(PDO::FETCH_ASSOC);
        return $transaction;
    }
    public static function generateQRCode() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 15; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}