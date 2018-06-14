<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {
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
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->model('Account_details');
        $this->load->library('Payment');
        $this->load->model('Mailsend');
        $this->load->library('details');
        $this->load->model('All_page');
	}
	public function index(){
	    $data['activepage']="account";
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    
		if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		$this->load->view('account_page', $data);
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function add_blog(){
	    $data['activepage']="account";
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();

		if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		$this->load->view('add_new_blog', $data);
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function add_blog_submit(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
		if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		
    		$this->form_validation->set_rules('blog_title', 'Title', 'trim|required|xss_clean');
                 $this->form_validation->set_rules('blog_description', 'Description', 'trim|xss_clean');
                 
                 $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');
        
                 if ($this->form_validation->run() == FALSE) {
                 $this->load->view('add_new_blog', $data);
                 return false;
                 }
                 
                 $customer_details = array(
                     'cust_id' => $session_user_data['id'],
                     'title' => $this->input->post('blog_title'),
                     'description' => $this->input->post('blog_description'),
                     'slug' => url_title($this->input->post('blog_title'), '-', true),
                     'ip' => $this->details->getClientIP(),
                     'status' => '2');
                 
                 $guest_blog_submission_details = $this->Account_details->guest_blog_submission($customer_details);
            
                 if ($guest_blog_submission_details){
                   $this->session->set_flashdata('message', 'Your Guest Blog has been Posted Successfully. Waiting for Admin confimation!');
                   $this->data['message'] = $this->session->flashdata('message');
                   redirect(base_url()."add-guest-blog");
                }else{
                       $this->session->set_flashdata('message', 'Some Error Occured. Try some other times!');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('add_new_blog', $data);
                        return false;
                }
    		
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function my_complaint(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
	    if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		$this->load->view('complaint_page', $data);
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function view_complaint(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
	    if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		$data['get_post_complaint']=$this->Account_details->get_post_complaint($session_user_data['id']);
    		
    		$this->load->view('view_complaints', $data);
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function complaint_submission(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
	    if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		
    		     $this->form_validation->set_rules('user_complaintNature', 'Nature Of Complaint', 'trim|required|xss_clean');
                 $this->form_validation->set_rules('user_technician', 'Technician', 'trim|xss_clean');
                 $this->form_validation->set_rules('user_description', 'Description', 'trim|xss_clean|required|min_length[6]');
                 
                 $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');
        
                 if ($this->form_validation->run() == FALSE) {
                 $this->load->view('complaint_page', $data);
                 return false;
                 }
                 
                 $customer_details = array('user_id'=>$session_user_data['id'],'name' => $data['Account_details'][0]['full_name'],'email' => $data['Account_details'][0]['email'],'phone' => $data['Account_details'][0]['phone'],'nature_of_complaint'=> $this->input->post('user_complaintNature'),
                 'technician'=> $this->input->post('user_technician'),'description'=> $this->input->post('user_description'),'complaint_status'=>'Pending','status'=>'1');
                 
                 $complaint_submission_details = $this->Account_details->post_complaint_submission($customer_details);
            
                 if ($complaint_submission_details){
                   $this->session->set_flashdata('message', 'Your Complaint has been Posted Successfully!');
                   $this->data['message'] = $this->session->flashdata('message');
                   redirect(base_url()."my-complaint");
                }else{
                       $this->session->set_flashdata('message', 'Some Error Occured. Try some other times!');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('complaint_page', $data);
                        return false;
             }
             
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function change_password(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
		if(isset($this->session->userdata['logged_in'])){
		    $session_user_data=$this->session->userdata['logged_in'];
    		$data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
    		$this->load->view('chage_password', $data);
        }else{
            redirect(base_url()."login");
        }
	}
	
	public function change_password_submission(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="account";
	    
	    if(isset($this->session->userdata['logged_in'])){
	        $this->load->model('login_form');
		    $session_user_data=$this->session->userdata['logged_in'];
		    $data['Account_details']=$this->Account_details->get_user_details($session_user_data['id']);
	    
	     $this->form_validation->set_rules('old_user_password', 'Old password', 'trim|required|xss_clean');
         $this->form_validation->set_rules('new_user_password', 'New password', 'trim|xss_clean|required|min_length[6]|matches[confirm_user_password]');
         $this->form_validation->set_rules('confirm_user_password', 'Confirm password', 'trim|xss_clean');
         
         $this->data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('chage_password', $data);
         return false;
         }
         
         $customer_details = array(
         'id'=>$session_user_data['id'],
         'userid' => $session_user_data['userid'],
         'user_password'=> $this->input->post('new_user_password'),
         'user_old_password'=> $this->input->post('old_user_password'),
      );
         
         $password_details = $this->login_form->check_login($session_user_data['userid']);
         if ($password_details && is_array($password_details)){
             
             if($password_details[0]['password'] === md5($customer_details['user_old_password'])){
                 
                 $change_password_details = $this->Account_details->change_user_password($customer_details);
                 if ($change_password_details){
                   $this->session->set_flashdata('message', 'Your password has been changed Successfully!');
                   $this->data['message'] = $this->session->flashdata('message');
                   redirect(base_url()."change-password");
                }else{
                       $this->session->set_flashdata('message', 'You have entered Wrong Old Password');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('chage_password', $data);
                        return false;
             }
                 
             }else{
                       $this->session->set_flashdata('message', 'You have entered Wrong Old Password');
                        $this->data['message'] = $this->session->flashdata('message');
                        $this->load->view('chage_password', $data);
                        return false;
                        }
         }
        
	    }else{
            redirect(base_url()."change-password");
        }
	}
}