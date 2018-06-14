<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_page extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function outstation_round_trip()
    {
        $sql= "SELECT * FROM outstation_round_trip ORDER BY view_order ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function outstation_one_way_trip(){
        $sql= "SELECT * FROM outstation_one_way_trip ORDER BY view_order ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function bangalore_area()
    {
        $sql= "SELECT * FROM bangalore_areas ORDER BY areasName ASC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function paymentSuccess($data){
        $this->db->insert('payment_sucess', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
 
}