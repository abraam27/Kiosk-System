<?php
require_once '../config.php';
require_once '../lib/DatabaseModel.php';
class User extends DatabaseModel
{
    // property
    protected $userID;
    protected $SSN;
    protected $name;
    protected $dateOfBirth;
    protected $gender;
    protected $city;
    protected $phoneNo;
    protected $username;
    protected $password;
    protected $question;
    protected $answer;
    protected $ballance;
    // table name
    protected static $tableName = "user";
    // all fields in tabel
    protected $tableFields = array(
        'SSN',
        'name',
        'dateOfBirth',
        'gender',
        'city',
        'phoneNo',
        'username',
        'password',
        'question',
        'answer',
    );
    public function __construct($SSN, $name, $dateOfBirth, $gender, $city, $phoneNo, $username, $password, $question, $answer, $userID="")
    {
        $this->SSN = $SSN;
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->gender = $gender;
        $this->city = $city;
        $this->phoneNo = $phoneNo;
        $this->username = $username;
        $this->password = $password;
        $this->question = $question;
        $this->answer = $answer;
        $this->userID = $userID;
    }
    public static function userLogin($username,$password)
    {
        global $dbh;
        $sql = $dbh->prepare("SELECT * from user WHERE username = '$username' And password = '$password'");
        $sql->execute();
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);
        if(is_array($fetch)){
            return $fetch["userID"];
        }else{
            return FALSE;
        }
    }
}