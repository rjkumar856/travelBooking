<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
        $this->load->library('email');
        $this->load->library('details');
	}
	
	public function aboutus(){
	    $data['activepage']="aboutus";
		$this->load->view('aboutus',$data);
	}
	
	public function airport_taxi(){
	    $data['activepage']="airport_taxi";
		$this->load->view('airport_taxi',$data);
	}
	
	public function blogpost(){
	    $data['activepage']="blogpost";
		$this->load->view('blogpost',$data);
	}
	
	public function contactus(){
	    $data['activepage']="contactus";
		    $this->load->view('contactus',$data);
	}
	
	public function honeymoon_details(){
	    $data['activepage']="local-details";
		$this->load->view('honeymoon_details',$data);

	}
	
	public function local_taxi(){
	    $data['activepage']="local_taxi";
		$this->load->view('local_taxi',$data);
	}
	
	public function local_details(){
	    $data['activepage']="local-details";
		$this->load->view('local_details',$data);
	}
	public function north_details(){
	    $data['activepage']="local-details";
		$this->load->view('north_details',$data);
	}
	
	public function outstation_one_way_trip(){
	    $data['activepage']="outstation_round_trip";
		$this->load->view('outstation_one_way_trip', $data);
	}
	
	public function outstation_round_trip(){
	    $data['activepage']="outstation_round_trip";
	    $data['outstation_round_trip']=$this->All_page->outstation_round_trip();  
		$this->load->view('outstation_round_trip', $data);
	}
	
	public function outstation_round_trip_search(){
	    $data['activepage']="outstation_round_trip";
	     $this->form_validation->set_rules('round_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('round_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('round_return_date', 'Return Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_return_time', 'Return Time', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_total_distance', 'Drop Location', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == false) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('outstation_round_trip', $data);
         return false;
         }
	    
	    $data['outstation_round_trip']=$this->All_page->outstation_round_trip();  
		$this->load->view('outstation_round_trip_search', $data);
	}
	
	public function outstation_round_trip_booking(){
	    $data['activepage']="outstation_round_trip";
	     $this->form_validation->set_rules('round_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('round_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('round_return_date', 'Return Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_return_time', 'Return Time', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_total_distance', 'Drop Location', 'trim|xss_clean|required');
         
         $this->form_validation->set_rules('vehicle_id', 'Vehicle ID', 'trim|required|xss_clean');
         $this->form_validation->set_rules('vehicle_name', 'Vehicle Name', 'trim|xss_clean');
         $this->form_validation->set_rules('total_amount', 'Total Amount', 'trim|xss_clean|required');
         $this->form_validation->set_rules('amount_to_pay', 'Total Amount to pay', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_no_of_days', 'No. of Days', 'trim|xss_clean');
         
         $this->form_validation->set_rules('enquiry_cars', 'No. of Cars', 'trim|xss_clean|required');
         $this->form_validation->set_rules('enquiry_paying_type', 'Paying for', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == FALSE) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         redirect(base_url()."outstation_round_trip");
         return false;
         }
         
         $customer_details = array(
         'round_pickup_location'   => $this->input->post('round_pickup_location'),
         'round_drop_location'=> $this->input->post('round_drop_location'),
         'round_start_date'   => $this->input->post('round_start_date'),
         'round_pickup_time'=> $this->input->post('round_pickup_time'),
         'round_return_date'   => $this->input->post('round_return_date'),
         'round_return_time'=> $this->input->post('round_return_time'),
         'round_total_distance'   => $this->input->post('round_total_distance'),
         'vehicle_id'=> $this->input->post('vehicle_id'),
         'vehicle_name'   => $this->input->post('vehicle_name'),
         'total_amount'=> $this->input->post('total_amount'),
         'amount_to_pay'=> $this->input->post('amount_to_pay'),
         'round_total_distance'=> $this->input->post('round_total_distance'),
         'enquiry_cars'=> $this->input->post('enquiry_cars'),
         'enquiry_paying_type'=> $this->input->post('enquiry_paying_type'),
         'round_no_of_days'=> $this->input->post('round_no_of_days')
        );
	    
	    $this->session->set_userdata('booking', $customer_details);
	    
	    $data['outstation_round_trip']=$this->All_page->outstation_round_trip();
	    $data['bangalore_area']=$this->All_page->bangalore_area();
		$this->load->view('outstation/outstation_round_trip_booking', $data);
	}
	public function outstation_one_way_trip_booking(){
	    $data['activepage']="outstation_one_way_trip";
	     $this->form_validation->set_rules('one_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('one_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('one_total_distance', 'Drop Location', 'trim|xss_clean|required');
         
         $this->form_validation->set_rules('vehicle_id', 'Vehicle ID', 'trim|required|xss_clean');
         $this->form_validation->set_rules('vehicle_name', 'Vehicle Name', 'trim|xss_clean');
         $this->form_validation->set_rules('total_amount', 'Total Amount', 'trim|xss_clean|required');
         $this->form_validation->set_rules('amount_to_pay', 'Total Amount to pay', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_no_of_days', 'No. of Days', 'trim|xss_clean');
         
         $this->form_validation->set_rules('enquiry_cars', 'No. of Cars', 'trim|xss_clean|required');
         $this->form_validation->set_rules('enquiry_paying_type', 'Paying for', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == FALSE) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         redirect(base_url()."outstation_one_way_trip");
         return false;
         }
         
         $customer_details = array(
         'one_pickup_location'   => $this->input->post('one_pickup_location'),
         'one_drop_location'=> $this->input->post('one_drop_location'),
         'one_start_date'   => $this->input->post('one_start_date'),
         'one_pickup_time'=> $this->input->post('one_pickup_time'),
         'one_total_distance'   => $this->input->post('one_total_distance'),
         'vehicle_id'=> $this->input->post('vehicle_id'),
         'vehicle_name'   => $this->input->post('vehicle_name'),
         'total_amount'=> $this->input->post('total_amount'),
         'amount_to_pay'=> $this->input->post('amount_to_pay'),
         'round_total_distance'=> $this->input->post('one_total_distance'),
         'enquiry_cars'=> $this->input->post('enquiry_cars'),
         'enquiry_paying_type'=> $this->input->post('enquiry_paying_type'),
         'one_no_of_days'=> $this->input->post('one_no_of_days')
        );
	    
	    $this->session->set_userdata('one_booking', $customer_details);
	    
	    $data['outstation_one_way_trip']=$this->All_page->outstation_one_way_trip();
	    $data['bangalore_area']=$this->All_page->bangalore_area();
		$this->load->view('outstation/outstation_one_trip_booking', $data);
	}
	
	public function outstation_round_trip_payment(){
	    $data['activepage']="payment";
	    $this->form_validation->set_rules('payble_amount', 'payble_amount', 'trim|required|xss_clean');
         $this->form_validation->set_rules('product_info', 'product_info', 'trim|xss_clean|required');
         $this->form_validation->set_rules('customer_name', 'Name', 'trim|xss_clean|required');
         $this->form_validation->set_rules('customer_email', 'Email', 'trim|required|xss_clean');
         $this->form_validation->set_rules('mobile_number', 'mobile_number', 'trim|xss_clean|required');
         $this->form_validation->set_rules('customer_address', 'Address', 'trim|xss_clean');
         $this->form_validation->set_rules('last_name', 'last_name', 'trim|xss_clean');
         $this->form_validation->set_rules('areas', 'Bangalore area', 'trim|xss_clean');
         $this->form_validation->set_rules('vehicle_id', 'vehicle', 'trim|xss_clean');
         $this->form_validation->set_rules('payment_type', 'payment_type', 'trim|xss_clean');
         $this->form_validation->set_rules('total_amount', 'total_amount', 'trim|xss_clean');
         
         $data['message_error'] = ($this->form_validation->run() == FALSE) ? validation_errors() : $this->session->flashdata('message');
         if ($this->form_validation->run() == FALSE) {
         redirect(base_url()."outstation_round_trip");
         return false;
         }else{
	    
	    $amount =  $this->input->post('payble_amount');
	    $product_info = $this->input->post('product_info');
	    $customer_name = $this->input->post('customer_name');
	    $customer_emial = $this->input->post('customer_email');
	    $customer_mobile = $this->input->post('mobile_number');
	    $customer_address = $this->input->post('customer_address');
	    	//payumoney details
	        $MERCHANT_KEY = "JSO3cwSw"; //change  merchant with yours
	        $SALT = "UfDBUtyJqE";  //change salt with yours 

	        $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
	        //optional udf values 
	        $udf1 = $this->input->post('last_name');
	        $udf2 = $this->input->post('areas');
	        $udf3 = $this->input->post('vehicle_id');
	        $udf4 = $this->input->post('payment_type');
	        $udf5 = $this->input->post('total_amount');
	        
	        $hashstring = $MERCHANT_KEY . '|' . $txnid . '|' . $amount . '|' . $product_info . '|' . $customer_name . '|' . $customer_emial . '|' . $udf1 . '|' . $udf2 . '|' . $udf3 . '|' . $udf4 . '|' . $udf5 . '||||||' . $SALT;
	        $hash = strtolower(hash('sha512', $hashstring));
	         
	       $success = base_url() . 'payemt-sucess';  
	       $fail = base_url() . 'payemt-failure';
	       $cancel = base_url() . 'payemt-failure';
	       $data = array(
	            'mkey' => $MERCHANT_KEY,
	            'tid' => $txnid,
	            'hash' => $hash,
	            'amount' => $amount,           
	            'name' => $customer_name,
	            'productinfo' => $product_info,
	            'mailid' => $customer_emial,
	            'phoneno' => $customer_mobile,
	            'address' => $customer_address,
	            'action' => "https://secure.payu.in", //for live change action  https://secure.payu.in
	            'sucess' => $success,
	            'failure' => $fail,
	            'cancel' => $cancel,
	            'udf1'=>$udf1,
	            'udf2'=>$udf2,
	            'udf3'=>$udf3,
	            'udf4'=>$udf4,
	            'udf5'=>$udf5
	        );
	        $data['activepage']="payment";
	        $this->load->view('payment/confirmation', $data);
         }
	}
	
	
	public function outstation_one_way_trip_search(){
	     $data['activepage']="outstation_round_trip";
	     $this->form_validation->set_rules('one_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('one_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('one_total_distance', 'Drop Location', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == false) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('outstation_one_way_trip', $data);
         return false;
         }
	    
	    $data['outstation_one_way_trip']=$this->All_page->outstation_one_way_trip();  
		$this->load->view('outstation/outstation_one_way_trip_search', $data);
	    
	}
	
	public function payemt_sucess(){
	    if(empty($_POST)){
	        redirect(base_url());
	    }else{
	       $data['activepage']="payment";
	       $payment_request = json_encode($_POST);
	       $payment = array(
	            'mihpayid' => $_POST['mihpayid'],
	            'mode' => $_POST['mode'],
	            'status' => $_POST['status'],
	            'txnid' => $_POST['txnid'],           
	            'amount' => $_POST['amount'],
	            'addedon' => $_POST['addedon'],
	            'productinfo' => $_POST['productinfo'],
	            'firstname' => $_POST['firstname'],
	            'lastname' => $_POST['lastname'],
	            'address1' => $_POST['address1'],
	            'address2' => $_POST['address2'],
	            'email' => $_POST['email'],
	            'phone' => $_POST['phone'],
	            'udf1'=>$_POST['udf1'],
	            'udf2'=>$_POST['udf2'],
	            'udf3'=>$_POST['udf3'],
	            'udf4'=>$_POST['udf4'],
	            'udf5'=>$_POST['udf5'],
	            'hash'=>$_POST['hash'],
	            'PG_TYPE'=>$_POST['PG_TYPE'],
	            'bank_ref_num'=>$_POST['bank_ref_num'],
	            'bankcode'=>$_POST['bankcode'],
	            'payment_request'=>$payment_request,
	            'ip_address'=>$this->details->getClientIP()
	        );
	       $result = $this->All_page->paymentSuccess($payment); 
	       $this->load->view('payment/payment_success', $data);
	    }
	}
	
	public function payemt_failure(){
	    if(empty($_POST)){
	        redirect(base_url());
	    }else{
	       $data['activepage']="payment";
	       $payment_request = json_encode($_POST);
	       $payment = array(
	            'mihpayid' => $_POST['mihpayid'],
	            'mode' => $_POST['mode'],
	            'status' => $_POST['status'],
	            'txnid' => $_POST['txnid'],           
	            'amount' => $_POST['amount'],
	            'addedon' => $_POST['addedon'],
	            'productinfo' => $_POST['productinfo'],
	            'firstname' => $_POST['firstname'],
	            'lastname' => $_POST['lastname'],
	            'address1' => $_POST['address1'],
	            'address2' => $_POST['address2'],
	            'email' => $_POST['email'],
	            'phone' => $_POST['phone'],
	            'udf1'=>$_POST['udf1'],
	            'udf2'=>$_POST['udf2'],
	            'udf3'=>$_POST['udf3'],
	            'udf4'=>$_POST['udf4'],
	            'udf5'=>$_POST['udf5'],
	            'hash'=>$_POST['hash'],
	            'PG_TYPE'=>$_POST['PG_TYPE'],
	            'bank_ref_num'=>$_POST['bank_ref_num'],
	            'bankcode'=>$_POST['bankcode'],
	            'payment_request'=>$payment_request,
	            'ip_address'=>$this->details->getClientIP()
	        );
	       //$result = $this->All_page->paymentFailure($payment); 
	       $this->load->view('payment/payemt_failure', $data);
	    }
	}

	public function pilgrimage_details(){
	    $data['activepage']="local-details";
	    $this->load->view('pilgrimage_details', $data);
	}

	public function south_details(){
	    $data['activepage']="local-details";
		$this->load->view('south_details',$data);
	}

}