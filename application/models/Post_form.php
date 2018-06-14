<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_form extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_OutstationRound($data){
    $this->db->insert('request_outstation_round',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function insert_OutstationOne($data){
    $this->db->insert('request_outstation_oneway',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function insert_LocalTaxiFour($data){
    $this->db->insert('request_localtaxi_four',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function insert_LocalTaxiEight($data){
    $this->db->insert('request_localtaxi_eight',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function insert_AirportTaxi($data){
    $this->db->insert('request_airport_taxi',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function insert_TourPackage($data){
    $this->db->insert('request_tour_package',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
}