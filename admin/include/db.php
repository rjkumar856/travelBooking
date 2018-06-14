<?php
class Database1
{
   private $db_name = "weblist_srithirumala";
        private $username = "weblist_thirumal";
        private $password = "Tsilbew@321#";
    public $conn;

    public function dbConnection()
    {

        $this->conn = null;    
        try
        {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        }
        catch(PDOException $exception)
        {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

class USER1{
    private $conn;
    public function __construct()
    {
        $database = new Database1();
        $db = $database->dbConnection();
        $this->conn = $db;
    }
    
    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    
    public function lasdID()
    {
        $stmt = $this->conn->lastInsertId();
        return $stmt;
    }


    public function send_mail($email,$message,$subject)
    {                       
    			require_once('mailer/class.phpmailer.php');
    			$mail = new PHPMailer();
    			$mail->IsSMTP(); 
    			                 
    			$mail->SMTPAuth   = true;                  
    			$mail->SMTPSecure = "ssl";                 
    			$mail->Host       = "mail.webliststore.org";      
    			$mail->Port       = 465;             
    			$mail->AddAddress($email);
    			$mail->Username="support@webliststore.org";  
    			$mail->Password="weblist@123";            
    			$mail->SetFrom('support@webliststore.org','IAS Shiksha');
    			$mail->AddReplyTo("support@webliststore.org","IAS Shiksha");
    			$mail->Subject    = $subject;
    			$mail->MsgHTML($message);
    			$mail->Send();
    }
}
?>