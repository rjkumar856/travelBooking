<?php
require_once 'db.php';
class USER{
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
	
	public function login($email,$upass){
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM tbl_admin_customers WHERE cusEmail=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() > 0)
			{
				if($userRow['cusStatus']=="Y")
				{
					if($userRow['cusPassword']==md5($upass))
					{
						$_SESSION['userSession'] = $userRow['id'];
						return true;
					}
					else
					{
						$_SESSION['userPasswordWrong'] = "Password dint matched with the given email id";
						header("Location: login");
						exit;
					}
				}
				else
				{
					$_SESSION['userInactive'] = "User is inactive we have sent a email please check to active.";
					header("Location: login");
					exit;
				}	
			}
			else
			{
				$_SESSION['userNotExist'] = "User not found please register as new user";
				header("Location: login");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout(){
		session_destroy();
		$_SESSION['userSession'] = false;
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