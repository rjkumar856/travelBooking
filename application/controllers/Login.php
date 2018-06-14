<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('email');
		$this->load->database();
		$this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('details');
        $this->load->helper('security');
        $this->load->model('login_form');
        $this->load->model('All_page');
	}

    public function page(){
       $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="blog";
        if(isset($this->session->userdata['logged_in'])){
		redirect(base_url()."my-account");
        }else{
            $this->load->view('login_page',$data);
        }
	}
	
	public function submission_page(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="blog";
	    
	     $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|xss_clean');
         $this->form_validation->set_rules('user_password', 'Password', 'trim|xss_clean|required');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('login_page',$data);
         return false;
         }
         
         $customer_details = array(
         'user_name'   => $this->input->post('user_name'),
         'user_password'=> $this->input->post('user_password')
      );
        
        $login_details = $this->login_form->check_login($customer_details['user_name']);

        if ($login_details && is_array($login_details)){
            
                    if($login_details[0]['password'] === md5($customer_details['user_password'])){
                        
                        if($login_details[0]['status'] === '1'){
                        $this->session->set_flashdata('message', 'You have logged in Successfully!');
                        $this->data['message'] = $this->session->flashdata('message');
                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],
                        "Name"=>$login_details[0]['full_name'],"email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],
                        "password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                        $this->session->set_userdata('logged_in', $session_user_data);
                        redirect(base_url()."my-account");
                        return true;
                        }else{
                        $this->session->set_flashdata('message', 'User ID is disabled by Admin. Contact admin to Enbale.');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('login_page',$data);
                        return false;
                        }
                        
                        }else{
                        $this->session->set_flashdata('message', 'You entered Wrong Password');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('login_page',$data);
                        return false;
                    }
            
            }else{
                    $this->session->set_flashdata('message', 'Invalid User Name');
                    $this->data['message'] = $this->session->flashdata('message');
                    $this->load->view('login_page',$data);
                    return false;
            }
		
	}
	
	public function forgot_password(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    
	    if(isset($this->session->userdata['logged_in'])){
		redirect(base_url()."my-account");
        }else{
                $this->form_validation->set_rules('user_name', 'User Name/Email', 'trim|required|xss_clean');
                $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');
        
                 if ($this->form_validation->run() == FALSE) {
                 $this->load->view('login/forgot_password_page', $this->data);
                 return false;
                 }
                 
                if($this->input->post('user_name')){
                    $customer_details = array('user_name' => $this->input->post('user_name'),'ip'=>$this->details->getClientIP());
                    $request_details = $this->login_form->post_forgot_password($customer_details);
                            if ($request_details){
                                   $this->session->set_flashdata('message', 'Your Forgot password Request submitted Successfully!');
                                   $this->data['message'] = $this->session->flashdata('message');
                                   redirect(base_url().'forgot_password');
                            }
                }
                
                $this->load->view('login/forgot_password_page',$this->data);
        }
	}
	
	
	public function submission(){
	     header('Content-type: application/json');
	     $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|xss_clean');
         $this->form_validation->set_rules('user_password', 'Password', 'trim|xss_clean|required');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('login_page');
         echo json_encode(array("code"=>'201',"status1"=>"error","message"=>$this->data['message_error']));
         return true;
         exit();
         }
         
         $customer_details = array(
         'user_name'   => $this->input->post('user_name'),
         'user_password'=> $this->input->post('user_password')
      );
        
        $login_details = $this->login_form->check_login($customer_details['user_name']);

        if ($login_details && is_array($login_details)){
            
                    if($login_details[0]['password'] === md5($customer_details['user_password'])){
                        
                        if($login_details[0]['status'] === '1'){
                        $session_user_data=array("id"=>$login_details[0]['id'],"userid"=>$login_details[0]['userid'],"Name"=>$login_details[0]['full_name'],
                        "email"=>$login_details[0]['email'],"mobile"=>$login_details[0]['phone'],
                        "password"=>$login_details[0]['password'],"role"=>$login_details[0]['role']);
                        $this->session->set_userdata('logged_in', $session_user_data);
                        echo json_encode(array("code"=>'200',"status1"=>"succes","message"=>'You have logged in Successfully!'));
                        return true;
                        exit();
                        }else{
                        echo json_encode(array("code"=>'202',"status1"=>"error","message"=>'User ID is disabled by Admin. Contact admin to Enbale.'));
                        return true;
                        exit();
                        }
                        
                        }else{
                       echo json_encode(array("code"=>'203',"status1"=>"error","message"=>'You entered Wrong Password'));
                        return true;
                        exit();
                    }
            
            }else{
                    echo json_encode(array("code"=>'204',"status1"=>"error","message"=>'Invalid User Name'));
                    return true;
                    exit();
            }
            
	}
	
	
	public function signup_submission(){
	    try{
	     $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|xss_clean');
         $this->form_validation->set_rules('user_email', 'Email ID', 'trim|xss_clean|required|valid_email|min_length[8]');
         $this->form_validation->set_rules('user_password', 'Password', 'trim|required|xss_clean|min_length[6]');
         $this->form_validation->set_rules('user_mobile', 'Mobile', 'trim|xss_clean|required|min_length[10]|regex_match[/^[0-9]{10}$/]');
         $this->form_validation->set_rules('user_city', 'City', 'trim|required|xss_clean');
         $this->form_validation->set_rules('user_course', 'Course Type', 'trim|required|xss_clean');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
             header('Content-type: application/json');
         echo json_encode(array("code"=>'201',"status1"=>"error","message"=>$this->data['message_error']));
         return true;
         exit();
         }
         
         $customer_details = array(
         'userid'   => $this->input->post('user_email'),
         'full_name'=> $this->input->post('user_name'),
         'email'   => $this->input->post('user_email'),
         'password'=> md5($this->input->post('user_password')),
         'phone'   => $this->input->post('user_mobile'),
         'course_type'=> $this->input->post('user_course'),
         'city'   => $this->input->post('user_city'),
         'address'=> $this->input->post('user_address'),
         'status'   => '1',
         'ip'   => $this->details->getClientIP()
      );
      
        $login_details = $this->login_form->check_login($customer_details['userid']);
        if ($login_details && is_array($login_details)){
            header('Content-type: application/json');
            echo json_encode(array("code"=>'205',"status1"=>"error","message"=>"This Email ID is already Registered. Please Login!"));
            return true;
            exit();
        }else{
        $signup_details = $this->login_form->submit_signup($customer_details);
        
        if(isset($signup_details) && $signup_details){
            header('Content-type: application/json');
                        echo json_encode(array("code"=>'200',"status1"=>"succes","message"=>'You have Signedup Successfully. Now you can login using Your Email and Password!'));
                        return true;
                        exit();
            
            }else{
                header('Content-type: application/json');
                    echo json_encode(array("code"=>'203',"status1"=>"error","message"=>'Server Error Occured'));
                    return true;
                    exit();
            }
        }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>'203',"status1"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
            
	}
	
	
	public function enquiry_submission(){
	    try{
	     $this->form_validation->set_rules('enquiry_name', 'Full Name', 'trim|required|xss_clean');
         $this->form_validation->set_rules('enquiry_email', 'Email ID', 'trim|xss_clean|required|min_length[8]|valid_email');
         $this->form_validation->set_rules('enquiry_phone', 'Mobile', 'trim|required|xss_clean|min_length[10]|regex_match[/^[0-9]{10}$/]');
         $this->form_validation->set_rules('enquiry_subject', 'Course Type', 'trim|xss_clean|required');
         $this->form_validation->set_rules('enquiry_city', 'City', 'trim|required|xss_clean');
         $this->form_validation->set_rules('enquiry_message', 'Message', 'trim|required|xss_clean|min_length[6]');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
             header('Content-type: application/json');
         echo json_encode(array("code"=>201,"status1"=>"error","message"=>$this->data['message_error']));
         return true;
         exit();
         }
         
         $customer_details = array(
         'name'   => $this->input->post('enquiry_name'),
         'email'=> $this->input->post('enquiry_email'),
         'mobile'   => $this->input->post('enquiry_phone'),
         'subject'=> $this->input->post('enquiry_subject'),
         'city'   => $this->input->post('enquiry_city'),
         'message'=> $this->input->post('enquiry_message'),
         'ip'   => $this->details->getClientIP()
      );
      
        $login_details = $this->login_form->InsertNewEnquiry($customer_details);
        if ($login_details){
            header('Content-type: application/json');
            echo json_encode(array("code"=>200,"status1"=>"error","message"=>"Your Enquiry submitted Successfully. We'll get back you soon!"));
            return true;
            exit();
        }else{
                header('Content-type: application/json');
                    echo json_encode(array("code"=>203,"status1"=>"error","message"=>'Server Error Occured. Please try after sometimes!'));
                    return true;
                    exit();
            }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>202,"status1"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
	}
	public function admission_submission(){
	    try{
	     $this->form_validation->set_rules('admission_name', 'Full Name', 'trim|required|xss_clean');
         $this->form_validation->set_rules('admission_email', 'Email ID', 'trim|xss_clean|required|min_length[8]|valid_email');
         $this->form_validation->set_rules('admission_phone', 'Mobile', 'trim|required|xss_clean|min_length[10]|regex_match[/^[0-9]{10}$/]');
         $this->form_validation->set_rules('admission_dob', 'DOB', 'trim|xss_clean|required');
         $this->form_validation->set_rules('admission_gender', 'Gender', 'trim|required|xss_clean');
         $this->form_validation->set_rules('admission_course', 'Course Type', 'trim|required|xss_clean');
         $this->form_validation->set_rules('admission_qualification', 'Highest Qualification', 'trim|required|xss_clean');
         $this->form_validation->set_rules('admission_city', 'City', 'trim|required|xss_clean');
         $this->form_validation->set_rules('admission_pincode', 'Pincode', 'trim|xss_clean|min_length[6]|max_length[6]');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
             header('Content-type: application/json');
         echo json_encode(array("code"=>201,"status1"=>"error","message"=>$this->data['message_error']));
         return true;
         exit();
         }
         
         $customer_details = array(
         'name'   => $this->input->post('admission_name'),
         'email'=> $this->input->post('admission_email'),
         'mobile'   => $this->input->post('admission_phone'),
         'dob'=> $this->input->post('admission_dob'),
         'gender'   => $this->input->post('admission_gender'),
         'course_type'=> $this->input->post('admission_course'),
         'qualification'   => $this->input->post('admission_qualification'),
         'city'=> $this->input->post('admission_city'),
         'pincode'=> $this->input->post('admission_pincode'),
         'ip'   => $this->details->getClientIP()
      );
      
        $login_details = $this->login_form->InsertNewAdmission($customer_details);
        if ($login_details){
            header('Content-type: application/json');
            echo json_encode(array("code"=>200,"status1"=>"error","message"=>"Your New Admission Request submitted Successfully. We'll get back you soon!"));
            return true;
            exit();
        }else{
                header('Content-type: application/json');
                    echo json_encode(array("code"=>203,"status1"=>"error","message"=>'Server Error Occured. Please try after sometimes!'));
                    return true;
                    exit();
            }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>202,"status1"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
            
	}
	
	public function subscription_submission(){
	    try{
         $this->form_validation->set_rules('subscription_email', 'Email ID', 'trim|xss_clean|required|min_length[8]|valid_email');
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
             header('Content-type: application/json');
         echo json_encode(array("code"=>201,"status1"=>"error","message"=>$this->data['message_error']));
         return true;
         exit();
         }
         
         $customer_details = array(
         'email'=> $this->input->post('subscription_email'),
         'newsletter'=> "Yes",
         'ip'   => $this->details->getClientIP()
      );
      
        $login_details = $this->login_form->InsertNewSubscription($customer_details);
        if ($login_details){
            header('Content-type: application/json');
            echo json_encode(array("code"=>200,"status1"=>"error","message"=>"You have subscribed Successfully. Thank you!"));
            return true;
            exit();
        }else{
                header('Content-type: application/json');
                    echo json_encode(array("code"=>203,"status1"=>"error","message"=>'Server Error Occured. Please try after sometimes!'));
                    return true;
                    exit();
            }
	   }catch(Exception $ex){
	       header('Content-type: application/json');
	       echo json_encode(array("code"=>202,"status1"=>"error","message"=>$e->getMessage()));
            return true;
            exit();
	   }
            
	}
	
	
	public function logout(){
	    $this->session->unset_userdata('logged_in');
	    redirect(base_url()."login");
	}

}