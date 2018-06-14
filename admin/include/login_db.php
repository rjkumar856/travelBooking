<?php
if(isset($_POST['login'])){
    $user = new USER();
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if($user->login($email,$password)){
         if(isset($_SESSION['requested_page'])){
        $user->redirect($_SESSION['requested_page']);
        unset($_SESSION['requested_page']);
        }else{
        $user->redirect('index');
        }
    }else{
        $user->redirect('login');
    }
}

if (isset($_POST['forgot_password'])){
    class Database{
        private $host = "localhost";
        private $db_name = "weblist_srithirumala";
        private $username = "weblist_thirumal";
        private $password = "Tsilbew@321#";
        public $conn;

        public function dbConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
            }
            catch(PDOException $exception){
                echo "Connection error: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }

    $email = $_POST['email'];
    $user = new USER();
    $stmt = $user->runQuery("SELECT id FROM tbl_admin_customers WHERE email=:email LIMIT 1");
    $stmt->execute(array(":email"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);  

    if($stmt->rowCount() == 1){
        $id = base64_encode($row['id']);
        $code = md5(uniqid(rand()));
        
        $message= "
                   Hello , $email
                   <br /><br />
                   We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore this email,
                   <br /><br />
                   Click Following Link To Reset Your Password 
                   <br /><br />
                   <a href='https://www.iasshiksha.com/admin/reset-password?id=$id&code=$code'>click here to reset your password</a>
                   <br /><br />
                   thank you :)
                   ";
        $subject = "Password Reset";
        $user->send_mail($email,$message,$subject);
        $_SESSION['forgotpassword_succsess'] = "<strong>Success!</strong> we've sent an email to $email.Please click on the password reset link in the email to generate new password.";
        $user->redirect('login');
    }
    else{
        $_SESSION['forgotpassword_error'] = "<strong>Sorry!</strong>  this email not found. Please register as new customer";
        $user->redirect('login');
    }
}
?>