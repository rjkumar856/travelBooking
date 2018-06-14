<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resource extends CI_Controller {

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
        $this->load->model('All_page');
        $this->load->library('details');
	}
	
	public function online_test_prelims(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    
	    if(isset($this->session->userdata['logged_in']) && in_array("1", explode(",",$this->session->userdata['logged_in']['role']))){
		 $data['online_test_prelims_data']=$this->All_page->GetOnlineTestPrelims();
		$this->load->view('resource/online_test_prelims',$data);
        }else{
            $this->load->view('common/permission_denied',$data);
        }
	}
	
	public function start_online_test($arg){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    
	    if(isset($this->session->userdata['logged_in']) && in_array("1", explode(",",$this->session->userdata['logged_in']['role']))){
		 $data['online_test_prelims_data']=$this->All_page->GetOnlineTestPrelimsQues($arg);
		$this->load->view('resource/online_test_prelims_start',$data);
        }else{
            $this->load->view('common/permission_denied',$data);
        }
	}
	
	public function online_test_mains(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    
	    if(isset($this->session->userdata['logged_in']) && in_array("2", explode(",",$this->session->userdata['logged_in']['role']))){
		 $data['online_test_mains_data']=$this->All_page->GetOnlineTestMains();
		$this->load->view('resource/online_test_mains',$data);
        }else{
            $this->load->view('common/permission_denied',$data);
        }
	}
	
	public function online_test_mains_submit(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    if(isset($this->session->userdata['logged_in']) && in_array("2", explode(",",$this->session->userdata['logged_in']['role']))){
	    
               $config['upload_path']          = './assets/files/mains/';
               $config['allowed_types']        = 'pdf';
               $config['max_size']             = 999999;
               $config['remove_spaces']        = TRUE;
               $this->load->library('upload',$config);
               
                    $this->form_validation->set_rules('question_id', 'Question', 'trim|required|xss_clean');
            	    if (empty($_FILES['result_file']['name'])){
            	        $this->form_validation->set_rules('result_file', 'Result File', 'trim|required|xss_clean');
            	    }
               
               $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');
               if ($this->form_validation->run() == FALSE) {
                   $data['online_test_mains_data']=$this->All_page->GetOnlineTestMains();
                   $data['error'] = $this->upload->display_errors();
                    $this->load->view('resource/online_test_mains',$data);
                   return false;
                   }
               
                        if(!$this->upload->do_upload('result_file')){
                           $data['message_error'] = array('error' => $this->upload->display_errors());
                           $data['error'] = $this->upload->display_errors();
                           $data['online_test_mains_data']=$this->All_page->GetOnlineTestMains();
                           $this->load->view('resource/online_test_mains',$data);
                           return false;
                        }else{
                            $upload_data = $this->upload->data();
                            $upload_file = $upload_data['file_name'];
                            
                            $session_user_data=$this->session->userdata['logged_in'];
                            
                            $result_details = array(
                                'question_id' => $this->input->post('question_id'),
                                'user_id' => $session_user_data['id'],
                                'file_url' => $upload_file
                                );
                                
                            $submit_results = $this->All_page->InsertSubmitResultMains($result_details);
                            
                            $this->session->set_flashdata('message', 'Your Result submitted Successfully!');
                            $this->data['message'] = $this->session->flashdata('message');
                            redirect(base_url().'online-test-mains', 'refresh');
                            return true;
                        }
	    }else{
            $this->load->view('common/permission_denied',$data);
        }
      }
	
	public function online_test_optional(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    
	    if(isset($this->session->userdata['logged_in']) && in_array("3", explode(",",$this->session->userdata['logged_in']['role']))){
		$data['online_test_optional_data']=$this->All_page->GetOnlineTestOptional();
		$this->load->view('resource/online_test_optional',$data);
        }else{
            $this->load->view('common/permission_denied',$data);
        }
	}
	
	public function online_test_optional_submit(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="online-test";
	    if(isset($this->session->userdata['logged_in']) && in_array("3", explode(",",$this->session->userdata['logged_in']['role']))){
        
               $config['upload_path']          = './assets/files/optional/';
               $config['allowed_types']        = 'pdf';
               $config['max_size']             = 999999;
               $config['remove_spaces']        = TRUE;
               $this->load->library('upload',$config);
               
                    $this->form_validation->set_rules('question_id', 'Question', 'trim|required|xss_clean');
            	    if (empty($_FILES['result_file']['name'])){
            	        $this->form_validation->set_rules('result_file', 'Result File', 'trim|required|xss_clean');
            	    }
               
               $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');
               if ($this->form_validation->run() == FALSE) {
                   $data['error'] = $this->upload->display_errors();
                    $data['online_test_optional_data']=$this->All_page->GetOnlineTestOptional();
                    $this->load->view('resource/online_test_optional',$data);
                   return false;
                   }
                        if(!$this->upload->do_upload('result_file')){
                           $data['message_error'] = array('error' => $this->upload->display_errors());
                           $data['error'] = $this->upload->display_errors();
                           $data['online_test_optional_data']=$this->All_page->GetOnlineTestOptional();
                           $this->load->view('resource/online_test_optional',$data);
                           return false;
                        }else{
                            $upload_data = $this->upload->data();
                            $upload_file = $upload_data['file_name'];
                            
                            $session_user_data=$this->session->userdata['logged_in'];
                            
                            $result_details = array(
                                'question_id' => $this->input->post('question_id'),
                                'user_id' => $session_user_data['id'],
                                'file_url' => $upload_file
                                );
                                
                            $submit_results = $this->All_page->InsertSubmitResultOptional($result_details);
                            
                            $this->session->set_flashdata('message', 'Your Result submitted Successfully!');
                            $this->data['message'] = $this->session->flashdata('message');
                            redirect(base_url().'online-test-optional', 'refresh');
                            return true;
                        }
	    }else{
            $this->load->view('common/permission_denied',$data);
        }
      }
	
	public function study_resources(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="material";
	    $data['study_material_data']=$this->All_page->GetStudyMaterials();
		$this->load->view('resource/study_resources',$data);
	}
	
	public function upsc_box(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
		$data['activepage']="material";
		$data['upsc_material_data']=$this->All_page->GetUpscMaterials();
		$this->load->view('resource/upsc_box',$data);
	}
	
	public function weekly_currentaffair(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
		$data['activepage']="current-affair";
		$data['WeeklyCurrentAffair']=$this->All_page->GetWeeklyCurrentAffair();
		$this->load->view('resource/weekly_currentaffair',$data);
	}
	
	public function load_weekly_currentaffair(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    header('Content-type: application/json');
        ini_set('memory_limit', '-1');
        
	    if (!isset($_REQUEST['date']) || !$_REQUEST['date']) {
         echo json_encode(array("code"=>'201',"status1"=>"error","message"=>"Select the date"));
         return true;
         }
         
        $customer_details = array('date' => $_REQUEST['date']);
	    $quiz_details = $this->All_page->GetWeeklyCurrentAffairByDate($customer_details['date']);
	        if ($quiz_details && is_array($quiz_details)){
            echo json_encode(array("code"=>"200","status1"=>"succes","message"=>"Data Available!","items"=>$quiz_details));
            return true;
            }else{
                    echo json_encode(array("code"=>"202","status1"=>"error","message"=>'Data Not Available'));
                    return true;
            }
	}
	
	public function monthly_currentaffair(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
		$data['activepage']="current-affair";
		$data['MonthlyCurrentAffair']=$this->All_page->GetMonthlyCurrentAffair();
		$this->load->view('resource/monthly_currentaffair',$data);
	}
	
	public function load_monthly_currentaffair(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    header('Content-type: application/json');
        ini_set('memory_limit', '-1');
        
	    if(!isset($_REQUEST['month']) || !$_REQUEST['month'] || !isset($_REQUEST['year']) || !$_REQUEST['year']){
         echo json_encode(array("code"=>'201',"status1"=>"error","message"=>"Select the Month & Year!"));
         return true;
         }
         
        $customer_details = array('month'=>$_REQUEST['month'], 'year'=>$_REQUEST['year']);
	    $quiz_details = $this->All_page->GetMonthlyCurrentAffairByDate($customer_details);
	        if ($quiz_details && is_array($quiz_details)){
            echo json_encode(array("code"=>"200","status1"=>"succes","message"=>"Data Available!","items"=>$quiz_details));
            return true;
            }else{
                    echo json_encode(array("code"=>"202","status1"=>"error","message"=>'Data Not Available'));
                    return true;
            }
	}
	
	public function guest_blog(){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="blog";
	    $data['guest_blog_data']=$this->All_page->GetGuestBlog();
		$this->load->view('resource/guest_blog',$data);
	}
	
	public function view_guest_blog($str){
	    $data['notification_data']=$this->All_page->GetNotificationDetails();
	    $data['alert_notification_data']=$this->All_page->GetAlertNotification();
	    $data['activepage']="blog";
	    $data['guest_blog_data']=$this->All_page->ViewGuestBlog($str);
		$this->load->view('resource/view_guest_blog',$data);
	}
}