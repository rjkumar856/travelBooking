<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
        $this->load->helper('security');
        $this->load->model('post_form');
        $this->load->model('Mailsend');
        $this->load->library('details');
	}
	
	public function outstation_round_trip(){
	    $data['activepage']="outstation_round_trip";
	    
	    $this->form_validation->set_rules('round_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('round_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('round_return_date', 'Return Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('round_return_time', 'Return Time', 'trim|xss_clean|required');
         
         $this->form_validation->set_rules('round_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('round_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('round_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('round_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('outstation_round_trip', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('round_pickup_location'),
         'drop_location'      => $this->input->post('round_drop_location'),
         'start_date'      => $this->input->post('round_start_date'),
         'pickup_time'  => $this->input->post('round_pickup_time'),
         'return_date'   => $this->input->post('round_return_date'),
         'return_time'  => $this->input->post('round_return_time'),
         'name'      => $this->input->post('round_name'),
         'mobile'  => $this->input->post('round_mobile'),
         'email'   => $this->input->post('round_email'),
         'car_type'  => $this->input->post('round_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_OutstationRound($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for Outstation Round Trip was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW OUTSTATION Round TRIP ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW OUTSTATION ROUND TRIP ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Drop Location</td><td>'.$customer_details['drop_location'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>Return Date</td><td>'.$customer_details['return_date'].'</td></tr><tr><td>Return Time</td><td>'.$customer_details['return_time'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."outstation_round_trip");
    }
		
	}
	
	public function outstation_one_way_trip(){
	    $data['activepage']="outstation_one_way_trip";
	    
	    $this->form_validation->set_rules('one_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('one_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('one_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         
         $this->form_validation->set_rules('one_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('one_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('one_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('one_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('outstation_one_way_trip', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('one_pickup_location'),
         'drop_location'      => $this->input->post('one_drop_location'),
         'start_date'      => $this->input->post('one_start_date'),
         'pickup_time'  => $this->input->post('one_pickup_time'),
         'name'      => $this->input->post('one_name'),
         'mobile'  => $this->input->post('one_mobile'),
         'email'   => $this->input->post('one_email'),
         'car_type'  => $this->input->post('one_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_OutstationOne($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for Outstation One Way Trip was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW OUTSTATION One Way TRIP ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW OUTSTATION ONE WAY TRIP ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Drop Location</td><td>'.$customer_details['drop_location'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."outstation_one_way_trip");
    }
	}
	
	public function rental_cars_local_taxi_four(){
	    $data['activepage']="local_taxi";
	    $this->form_validation->set_rules('four_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('four_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('four_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('four_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('four_package', 'Package', 'trim|required|xss_clean');
         
         $this->form_validation->set_rules('four_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('four_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('four_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('four_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('local_taxi', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('four_pickup_location'),
         'drop_location'      => $this->input->post('four_drop_location'),
         'start_date'      => $this->input->post('four_start_date'),
         'pickup_time'  => $this->input->post('four_pickup_time'),
         'package'  => $this->input->post('four_package'),
         'name'      => $this->input->post('four_name'),
         'mobile'  => $this->input->post('four_mobile'),
         'email'   => $this->input->post('four_email'),
         'car_type'  => $this->input->post('four_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_LocalTaxiFour($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for LOCAL TAXI Trip was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW LOCAL TAXI 4hours X 40KMS TRIP ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW LOCAL TAXI TRIP ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Drop Location</td><td>'.$customer_details['drop_location'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>Package</td><td>'.$customer_details['package'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."local_taxi");
    }
		
	}
	
	public function rental_cars_local_taxi_eight(){
	    $data['activepage']="local_taxi";
	    $this->form_validation->set_rules('eight_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('eight_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('eight_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('eight_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('eight_package', 'Package', 'trim|required|xss_clean');
         
         $this->form_validation->set_rules('eight_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('eight_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('eight_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('eight_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('local_taxi', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('eight_pickup_location'),
         'drop_location'      => $this->input->post('eight_drop_location'),
         'start_date'      => $this->input->post('eight_start_date'),
         'pickup_time'  => $this->input->post('eight_pickup_time'),
         'package'  => $this->input->post('eight_package'),
         'name'      => $this->input->post('eight_name'),
         'mobile'  => $this->input->post('eight_mobile'),
         'email'   => $this->input->post('eight_email'),
         'car_type'  => $this->input->post('eight_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_LocalTaxiEight($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for LOCAL TAXI Trip was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW LOCAL TAXI 8hours X 80KMS TRIP ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW LOCAL TAXI TRIP ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Drop Location</td><td>'.$customer_details['drop_location'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>Package</td><td>'.$customer_details['package'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."local_taxi");
    }
		
	}
	
	public function rental_cars_airport_taxi(){
	    $data['activepage']="airport_taxi";
	    
	    $this->form_validation->set_rules('airport_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('airport_drop_location', 'Drop Location', 'trim|xss_clean|required');
         $this->form_validation->set_rules('airport_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('airport_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         
         $this->form_validation->set_rules('airport_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('airport_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('airport_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('airport_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('airport_taxi', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('airport_pickup_location'),
         'drop_location'      => $this->input->post('airport_drop_location'),
         'start_date'      => $this->input->post('airport_start_date'),
         'pickup_time'  => $this->input->post('airport_pickup_time'),
         'name'      => $this->input->post('airport_name'),
         'mobile'  => $this->input->post('airport_mobile'),
         'email'   => $this->input->post('airport_email'),
         'car_type'  => $this->input->post('airport_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_AirportTaxi($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for Airport Taxi was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW Airport Taxi ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW Airport Taxi ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Drop Location</td><td>'.$customer_details['drop_location'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."airport_taxi");
    }	
	}
	
	public function local_tour_package(){
	    $data['activepage']="local_details";
	    $this->form_validation->set_rules('tour_pickup_location', 'Pickup Location', 'trim|required|min_length[3]|xss_clean');
         $this->form_validation->set_rules('tour_total_member', 'Total Member', 'trim|xss_clean|required');
         $this->form_validation->set_rules('tour_start_date', 'Start Date', 'trim|xss_clean|required');
         $this->form_validation->set_rules('tour_pickup_time', 'Pickup Time', 'trim|required|xss_clean');
         $this->form_validation->set_rules('tour_package', 'Package', 'trim|required|xss_clean');
         
         $this->form_validation->set_rules('tour_name', 'Name', 'trim|xss_clean|required|min_length[4]');
         $this->form_validation->set_rules('tour_mobile', 'Mobile Number', 'trim|xss_clean|required|numeric|exact_length[10]');
         $this->form_validation->set_rules('tour_email', 'Email ID', 'trim|required|xss_clean|valid_email');
         $this->form_validation->set_rules('tour_car', 'Select Car', 'trim|xss_clean|required');
         
         $data['message_error'] = ($this->form_validation->run() == False) ? validation_errors() : $this->session->flashdata('message');

         if ($this->form_validation->run() == FALSE) {
         $this->load->view('local_details', $data);
         return false;
         }
         
         $customer_details = array(
         'pickup_location'   => $this->input->post('tour_pickup_location'),
         'total_member'      => $this->input->post('tour_total_member'),
         'start_date'      => $this->input->post('tour_start_date'),
         'pickup_time'  => $this->input->post('tour_pickup_time'),
         'package'  => $this->input->post('tour_package'),
         'name'      => $this->input->post('tour_name'),
         'mobile'  => $this->input->post('tour_mobile'),
         'email'   => $this->input->post('tour_email'),
         'car_type'  => $this->input->post('tour_car'),
         'ip'=>$this->details->getClientIP()
      );
      
        $contact_details = $this->post_form->insert_TourPackage($customer_details);
        if ($contact_details){
           $this->session->set_flashdata('message', 'Your Inquiry for TOUR PACKAGE was submitted Successfully!');
           $this->data['message'] = $this->session->flashdata('message');
           
           $subject='NEW TOUR PACKAGE ENQUIRY Submitted';
           $message='<table cellpadding="5" border="1" style="border-collapse:collapse;width:100%;max-width:600px;margin:10px auto;"><tr><th colspan="2" style="background: #0093de;color: #fff;">NEW TOUR PACKAGE ENQUIRY</th></tr><tr><td>Name</td><td>'.$customer_details['name'].'</td></tr><tr><td>Email</td><td>'.$customer_details['email'].'</td></tr><tr><td>Mobile</td><td>'.$customer_details['mobile'].'</td></tr><tr><th colspan="2" style="background: #0093de;color: #fff;">TRIP DETAILS</th></tr><tr><td>Pickup Location</td><td>'.$customer_details['pickup_location'].'</td></tr><tr><td>Total Member</td><td>'.$customer_details['total_member'].'</td></tr><tr><td>Start Date</td><td>'.$customer_details['start_date'].'</td></tr><tr><td>Pickup Time</td><td>'.$customer_details['pickup_time'].'</td></tr><tr><td>Package</td><td>'.$customer_details['package'].'</td></tr><tr><td>IP</td><td>'.$customer_details['ip'].'</td></tr></table>';
           $this->Mailsend->send_mail('info@thirumalatravels.com','thirumalatours@gmail.com',$subject,$message);
           redirect(base_url()."local-details");
    }
		
	}
}
