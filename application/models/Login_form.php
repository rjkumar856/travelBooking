<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_form extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function check_login($data){
    $sql = "SELECT * FROM user WHERE userid='$data'";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function insert_OutstationRound($data){
    $this->db->insert('request_outstation_round',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function submit_signup($data){
    $this->db->insert('user',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function InsertNewEnquiry($data){
    $this->db->insert('request_enquiry',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function InsertNewAdmission($data){
    $this->db->insert('request_admission',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function InsertNewSubscription($data){
    $this->db->insert('request_subscription',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
}